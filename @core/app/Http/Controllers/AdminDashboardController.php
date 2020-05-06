<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Language;
use App\Services;
use App\Blog;
use App\ContactInfoItem;
use App\Counterup;
use App\KeyFeatures;
use App\PricePlan;
use App\TeamMember;
use App\Testimonial;
use App\Works;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Process\Process;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function adminIndex()
    {
        $default_lang = get_default_language();

        $all_blogs = Blog::where('lang',$default_lang)->count();
        $total_admin = Admin::count();
        $total_testimonial = Testimonial::where('lang',$default_lang)->count();
        $total_team_member = TeamMember::where('lang',$default_lang)->count();
        $total_counterup = Counterup::where('lang',$default_lang)->count();
        $total_price_plan = PricePlan::where('lang',$default_lang)->count();
        $total_services = Services::where('lang',$default_lang)->count();
        $total_key_features = KeyFeatures::where('lang',$default_lang)->count();
        $total_works = Works::where('lang',$default_lang)->count();

        return view('backend.admin-home')->with([
            'blog_count' => $all_blogs,
            'total_admin' => $total_admin,
            'total_testimonial' => $total_testimonial,
            'total_team_member' => $total_team_member,
            'total_counterup' => $total_counterup,
            'total_price_plan' => $total_price_plan,
            'total_works' => $total_works,
            'total_services' => $total_services,
            'total_key_features' => $total_key_features,
        ]);
    }

    public function site_identity()
    {
        return view('backend.general-settings.site-identity');
    }

    public function update_site_identity(Request $request)
    {
        $this->validate($request, [
            'site_logo' => 'mimes:jpg,jpeg,png|max:2064',
            'site_favicon' => 'mimes:jpg,jpeg,png|max:2064',
            'site_breadcrumb_bg' => 'mimes:jpg,jpeg,png|max:5064',
            'site_white_logo' => 'mimes:jpg,jpeg,png|max:2064'
        ]);
        if ($request->hasFile('site_logo')) {
            $image = $request->site_logo;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'site-logo-'.rand(999,999999) .'.'. $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/', $image_name);
                update_static_option('site_logo', $image_name);
            }
        }
        if ($request->hasFile('site_white_logo')) {
            $image = $request->site_white_logo;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'site-white-logo-' .rand(999,999999) .'.'. $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/', $image_name);
                update_static_option('site_white_logo', $image_name);
            }
        }
        if ($request->hasFile('site_favicon')) {
            $image = $request->site_favicon;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'site-favicon-' .rand(999,999999) .'.'. $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/', $image_name);
                update_static_option('site_favicon', $image_name);
            }
        }
        if ($request->hasFile('site_breadcrumb_bg')) {
            $image = $request->site_breadcrumb_bg;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'breadcrumb-bg-' .rand(999,999999) .'.'. $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/', $image_name);
                update_static_option('site_breadcrumb_bg', $image_name);
            }
        }
        return redirect()->back()->with([
            'msg' => 'Site Identity Has Been Updated..',
            'type' => 'success'
        ]);
    }

    public function admin_settings()
    {
        return view('auth.admin.settings');
    }

    public function admin_profile_update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'image' => 'mimes:jpg,jpeg,png|max:2064'
        ]);
        $image_ext = Auth::user()->image;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_extenstion = $request->image->getClientOriginalExtension();
            $image_ext = $image_extenstion;
            $image_name = 'admin-pic-' . Auth::user()->id . '.' . $image_extenstion;
            if (check_image_extension($request->image)) {
                $image->move('assets/uploads/admins', $image_name);
            }
        }
        Admin::find(Auth::user()->id)->update(['name' => $request->name, 'email' => $request->email, 'image' => $image_ext]);
        return redirect()->back()->with(['msg' => 'Profile Update Success', 'type' => 'success']);
    }

    public function admin_password_chagne(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = Admin::findOrFail(Auth::id());

        if (Hash::check($request->old_password, $user->password)) {

            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('admin.login')->with(['msg' => 'Password Changed Successfully', 'type' => 'success']);
        }

        return redirect()->back()->with(['msg' => 'Somethings Going Wrong! Please Try Again or Check Your Old Password', 'type' => 'danger']);
    }

    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with(['msg' => 'You Logged Out !!', 'type' => 'danger']);
    }

    public function admin_profile()
    {
        return view('auth.admin.edit-profile');
    }

    public function admin_password()
    {
        return view('auth.admin.change-password');
    }

    public function contact()
    {
        $all_contact_info_items = ContactInfoItem::all();
        return view('backend.pages.contact')->with([
            'all_contact_info_item' => $all_contact_info_items
        ]);
    }

    public function update_contact(Request $request)
    {
        $this->validate($request, [
            'page_title' => 'required|string|max:191',
            'get_title' => 'required|string|max:191',
            'get_description' => 'required|string',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        update_static_option('contact_page_title', $request->page_title);
        update_static_option('contact_page_get_title', $request->get_title);
        update_static_option('contact_page_get_description', $request->get_description);
        update_static_option('contact_page_latitude', $request->latitude);
        update_static_option('contact_page_longitude', $request->longitude);

        return redirect()->back()->with(['msg' => 'Contact Page Info Update Success', 'type' => 'success']);
    }


    public function blog_page()
    {
        $all_languages = Language::all();
        return view('backend.pages.blog')->with(['all_languages' => $all_languages]);
    }

    public function blog_page_update(Request $request)
    {
        $all_language = Language::all();
        foreach ($all_language as $lang){
            $this->validate($request, [
                'blog_page_'.$lang->slug.'_title' => 'nullable',
                'blog_page_'.$lang->slug.'_item' => 'nullable',
                'blog_page_'.$lang->slug.'_category_widget_title' => 'nullable',
                'blog_page_'.$lang->slug.'_recent_post_widget_title' => 'nullable',
                'blog_page_'.$lang->slug.'_recent_post_widget_item' => 'nullable',
            ]);
            $blog_page_title = 'blog_page_'.$lang->slug.'_title';
            $blog_page_item = 'blog_page_'.$lang->slug.'_item';
            $blog_page_category_widget_title = 'blog_page_'.$lang->slug.'_category_widget_title';
            $blog_page_recent_post_widget_title = 'blog_page_'.$lang->slug.'_recent_post_widget_title';
            $blog_page_recent_post_widget_item = 'blog_page_'.$lang->slug.'_recent_post_widget_item';

            update_static_option('blog_page_'.$lang->slug.'_title', $request->$blog_page_title);
            update_static_option('blog_page_'.$lang->slug.'_item', $request->$blog_page_item);
            update_static_option('blog_page_'.$lang->slug.'_category_widget_title', $request->$blog_page_category_widget_title);
            update_static_option('blog_page_'.$lang->slug.'_recent_post_widget_title', $request->$blog_page_recent_post_widget_title);
            update_static_option('blog_page_'.$lang->slug.'_recent_post_widget_item', $request->$blog_page_recent_post_widget_item);
        }


        return redirect()->back()->with(['msg' => 'Blog Settings Update Success', 'type' => 'success']);
    }

    public function basic_settings()
    {
        $all_languages = Language::all();
        return view('backend.general-settings.basic')->with(['all_languages' => $all_languages]);
    }

    public function update_basic_settings(Request $request)
    {
        $this->validate($request, [
            'site_color' => 'required|string',
            'site_main_color_two' => 'required|string',
            'site_rtl_enabled' => 'nullable|string',
            'site_admin_dark_mode' => 'nullable|string',
            'site_paragraph_color' => 'nullable|string',
            'site_heading_color' => 'nullable|string',
        ]);

        $all_language = Language::all();

        foreach ($all_language as $lang){
            $this->validate($request, [
                'site_'.$lang->slug.'_title' => 'nullable|string',
                'site_'.$lang->slug.'_tag_line' => 'nullable|string',
                'site_'.$lang->slug.'_footer_copyright' => 'nullable|string',
            ]);
            $_title = 'site_'.$lang->slug.'_title';
            $_tag_line = 'site_'.$lang->slug.'_tag_line';
            $_footer_copyright = 'site_'.$lang->slug.'_footer_copyright';

            update_static_option($_title, $request->$_title);
            update_static_option($_tag_line, $request->$_tag_line);
            update_static_option($_footer_copyright, $request->$_footer_copyright);
        }

        update_static_option('site_color', $request->site_color);
        update_static_option('site_main_color_two', $request->site_main_color_two);
        update_static_option('site_heading_color', $request->site_heading_color);
        update_static_option('site_paragraph_color', $request->site_paragraph_color);
        update_static_option('site_rtl_enabled', $request->site_rtl_enabled);
        update_static_option('site_admin_dark_mode', $request->site_admin_dark_mode);

        return redirect()->back()->with(['msg' => 'Basic Settings Update Success', 'type' => 'success']);
    }

    public function seo_settings()
    {
        return view('backend.general-settings.seo');
    }

    public function update_seo_settings(Request $request)
    {
        $this->validate($request, [
            'site_meta_tags' => 'required|string',
            'site_meta_description' => 'required|string'
        ]);

        update_static_option('site_meta_tags', $request->site_meta_tags);
        update_static_option('site_meta_description', $request->site_meta_description);

        return redirect()->back()->with(['msg' => 'SEO Settings Update Success', 'type' => 'success']);
    }

    public function scripts_settings()
    {
        return view('backend.general-settings.thid-party');
    }

    public function update_scripts_settings(Request $request)
    {

        $this->validate($request, [
            'site_disqus_key' => 'nullable|string',
            'tawk_api_key' => 'nullable|string',
            'site_google_map_api' => 'nullable|string',
            'site_google_analytics' => 'nullable|string',
            'site_google_captcha_v3_secret_key' => 'nullable|string',
            'site_google_captcha_v3_site_key' => 'nullable|string',
        ]);

        update_static_option('site_disqus_key', $request->site_disqus_key);
        update_static_option('site_google_analytics', $request->site_google_analytics);
        update_static_option('tawk_api_key', $request->tawk_api_key);
        update_static_option('site_google_map_api', $request->site_google_map_api);
        update_static_option('site_google_captcha_v3_site_key', $request->site_google_captcha_v3_site_key);
        update_static_option('site_google_captcha_v3_secret_key', $request->site_google_captcha_v3_secret_key);

        return redirect()->back()->with(['msg' => 'Third Party Scripts Settings Updated..', 'type' => 'success']);
    }

    public function email_template_settings()
    {
        return view('backend.general-settings.email-template');
    }

    public function update_email_template_settings(Request $request)
    {

        $this->validate($request, [
            'site_global_email' => 'required|string',
            'site_global_email_template' => 'required|string',
        ]);

        update_static_option('site_global_email', $request->site_global_email);
        update_static_option('site_global_email_template', $request->site_global_email_template);

        return redirect()->back()->with(['msg' => 'Email Settings Updated..', 'type' => 'success']);
    }

    public function home_variant()
    {
        return view('backend.pages.home.home-variant');
    }

    public function update_home_variant(Request $request)
    {
        $this->validate($request, [
            'home_page_variant' => 'required|string'
        ]);
        update_static_option('home_page_variant', $request->home_page_variant);
        return redirect()->back()->with(['msg' => 'Home Variant Settings Updated..', 'type' => 'success']);
    }

    public function navbar_settings()
    {
        return view('backend.pages.navbar-settings');
    }

    public function update_navbar_settings(Request $request)
    {

        $this->validate($request, [
            'navbar_button' => 'nullable|string'
        ]);

        update_static_option('navbar_button', $request->navbar_button);
        $all_lang  = Language::all();
        foreach ($all_lang as $lang){
            $filed_name = 'navbar_'.$lang->slug.'_button_text';
            update_static_option('navbar_'.$lang->slug.'_button_text', $request->$filed_name);
        }

        return redirect()->back()->with(['msg' => 'Navbar Settings Updated..', 'type' => 'success']);
    }

    public function cache_settings()
    {
        return view('backend.general-settings.cache-settings');
    }

    public function update_cache_settings(Request $request)
    {

        $this->validate($request, [
            'cache_type' => 'required|string'
        ]);

        Artisan::call($request->cache_type . ':clear');

        return redirect()->back()->with(['msg' => 'Cache Cleaned...', 'type' => 'success']);
    }

    public function backup_settings()
    {
        $all_backuped_db = glob('backup/*');
        return view('backend.general-settings.backup')->with(['all_backuped_db' => $all_backuped_db]);
    }

    public function update_backup_settings(Request $request)
    {

        $process = new Process(sprintf(
            'mysqldump -u%s -p%s %s > %s',
            config('database.connections.mysql.username'),
            config('database.connections.mysql.password'),
            config('database.connections.mysql.database'),
            'backup/' . config('database.connections.mysql.database') . '_' . date('j_F_Y_h:m:s') . '.sql'
        ));
        $process->mustRun();
        return redirect()->back()->with(['msg' => 'Database Backup Completed...', 'type' => 'success']);
    }

    public function delete_backup_settings(Request $request)
    {

        if (file_exists($request->db_name)) {
            unlink($request->db_name);
        }

        return redirect()->back()->with(['msg' => 'Database Deleted...', 'type' => 'danger']);
    }

    public function restore_backup_settings(Request $request)
    {
        $process = new Process(sprintf(
            'mysql -u%s -p%s %s < %s',
            config('database.connections.mysql.username'),
            config('database.connections.mysql.password'),
            config('database.connections.mysql.database'),
            'backup/' . $request->db_name
        ));
        $process->mustRun();
        return redirect()->back()->with(['msg' => 'Database Restore Completed...', 'type' => 'success']);
    }

    public function license_settings()
    {
        return view('backend.general-settings.license-settings');
    }

    public function update_license_settings(Request $request)
    {
        $this->validate($request, [
            'item_purchase_key' => 'required|string|max:191'
        ]);
        update_static_option('item_purchase_key', $request->item_purchase_key);

        $data = array(
            'action' => env('XGENIOUS_API_ACTION'),
            'purchase_code' => get_static_option('item_purchase_key'),
            'author' => env('XGENIOUS_API_AUTHOR'),
            'site_url' => url('/'),
            'item_unique_key' => env('XGENIOUS_API_KEY'),
        );
        //item_license_status
        $api_url = env('XGENIOUS_API_URL') . '?' . http_build_query($data);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $api_url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result);
        update_static_option('item_license_status', $result->license_status);
        $type = 'verified' == $result->license_status ? 'success' : 'danger';
        $license_info = [
            "item_license_status" => $result->license_status,
            "last_check" => time(),
            "purchase_code" => get_static_option('item_purchase_key'),
            "xgenious_app_key" => env('XGENIOUS_API_KEY'),
            "author" => env('XGENIOUS_API_AUTHOR'),
            "message" => $result->message
         ];
        file_put_contents('@core/license.json',json_encode($license_info));

        return redirect()->back()->with(['msg' => $result->message, 'type' => $type]);
    }

    public function custom_css_settings(){
        $custom_css = '/* Write Custom Css Here */';
        if (file_exists('assets/frontend/css/dynamic-style.css')){
            $custom_css = file_get_contents('assets/frontend/css/dynamic-style.css');
        }
        return view('backend.general-settings.custom-css')->with(['custom_css' => $custom_css]);
    }

    public function update_custom_css_settings(Request $request){
        file_put_contents('assets/frontend/css/dynamic-style.css',$request->custom_css_area);

        return redirect()->back()->with(['msg' => 'Custom Style Added Success...', 'type' => 'success']);
    }
    
      public function typography_settings(){
        $all_google_fonts = file_get_contents('assets/frontend/webfonts/google-fonts.json');
        return view('backend.general-settings.typograhpy')->with(['google_fonts' => json_decode($all_google_fonts)]);
    }
    public function update_typography_settings(Request $request){
        $this->validate($request,[
            'body_font_family' => 'required|string|max:191',
            'body_font_variant' => 'required',
            'heading_font' => 'nullable|string',
            'heading_font_family' => 'nullable|string|max:191',
            'heading_font_variant' => 'nullable',
        ]);

        $save_data = [
            'body_font_family',
            'heading_font_family',
        ];
        foreach ($save_data as $item){
            if (empty($request->$item)){continue;}
            update_static_option($item,$request->$item);
        }
        update_static_option('heading_font',$request->heading_font);
        update_static_option('body_font_variant',serialize($request->body_font_variant));
        update_static_option('heading_font_variant',serialize($request->heading_font_variant));

        return redirect()->back()->with(['msg'=>'Typography Settings Updated..','type'=> 'success']);
    }

    public function email_settings(){
        $all_languages = Language::all();
        return view('backend.general-settings.email-settings')->with(['all_languages' => $all_languages]);
    }

    public function update_email_settings(Request $request){
        $all_languages = Language::all();
        foreach ($all_languages as $lang){
            $this->validate($request,[
                'order_mail_'.$lang->slug.'_subject' => 'nullable|string',
                'quote_mail_'.$lang->slug.'_subject' => 'nullable|string',
                'contact_mail_'.$lang->slug.'_subject' => 'nullable|string',
                'request_call_back_mail_'.$lang->slug.'_subject' => 'nullable|string'
            ]);

            $order_mail = 'order_mail_'.$lang->slug.'_subject';
            $quote_mail = 'quote_mail_'.$lang->slug.'_subject';
            $contact_mail = 'contact_mail_'.$lang->slug.'_subject';
            $request_call_back_mail = 'request_call_back_mail_'.$lang->slug.'_subject';

            update_static_option($order_mail,$request->$order_mail);
            update_static_option($quote_mail,$request->$quote_mail);
            update_static_option($contact_mail,$request->$contact_mail);
            update_static_option($request_call_back_mail,$request->$request_call_back_mail);
        }
        return redirect()->back()->with(['msg' => 'Email Settings Updated..', 'type' => 'success']);
    }

    public function page_settings(){
        $all_languages = Language::all();
        return view('backend.general-settings.page-settings')->with(['all_languages' => $all_languages]);
    }

    public function update_page_settings(Request $request){
        $all_languages = Language::all();
        foreach ($all_languages as $lang){
            $this->validate($request,[
                'about_page_'.$lang->slug.'_name' => 'nullable|string',
                'about_page_'.$lang->slug.'_slug' => 'nullable|string',
                'service_page_'.$lang->slug.'_name' => 'nullable|string',
                'service_page_'.$lang->slug.'_slug' => 'nullable|string',
                'work_page_'.$lang->slug.'_name' => 'nullable|string',
                'work_page_'.$lang->slug.'_slug' => 'nullable|string',
                'team_page_'.$lang->slug.'_name' => 'nullable|string',
                'team_page_'.$lang->slug.'_slug' => 'nullable|string',
                'faq_page_'.$lang->slug.'_name' => 'nullable|string',
                'faq_page_'.$lang->slug.'_slug' => 'nullable|string',
            ]);

            $about_name = 'about_page_'.$lang->slug.'_name';
            $about_slug = 'about_page_'.$lang->slug.'_slug';
            $service_page = 'service_page_'.$lang->slug.'_name';
            $service_slug = 'service_page_'.$lang->slug.'_slug';
            $work_page = 'work_page_'.$lang->slug.'_name';
            $work_slug = 'work_page_'.$lang->slug.'_slug';
            $team_page = 'team_page_'.$lang->slug.'_name';
            $team_slug = 'team_page_'.$lang->slug.'_slug';
            $faq_page = 'faq_page_'.$lang->slug.'_name';
            $faq_slug = 'faq_page_'.$lang->slug.'_slug';

            update_static_option($about_name,$request->$about_name);
            update_static_option($about_slug,$request->$about_slug);
            update_static_option($service_page,$request->$service_page);
            update_static_option($service_slug,$request->$service_slug);
            update_static_option($work_page,$request->$work_page);
            update_static_option($work_slug,$request->$work_slug);
            update_static_option($team_page,$request->$team_page);
            update_static_option($team_slug,$request->$team_slug);
            update_static_option($faq_page,$request->$faq_page);
            update_static_option($faq_slug,$request->$faq_slug);

        }

        return redirect()->back()->with(['msg' => 'Page Settings Updated..', 'type' => 'success']);
    }

}
