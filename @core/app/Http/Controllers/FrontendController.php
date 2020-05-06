<?php

namespace App\Http\Controllers;

use App\Admin;
use App\ContactInfoItem;
use App\Faq;
use App\KnowAbout;
use App\Language;
use App\Mail\AdminResetEmail;
use App\Mail\CallBack;
use App\Mail\ContactMessage;
use App\Mail\PlaceOrder;
use App\Mail\RequestQuote;
use App\Menu;
use App\Newsletter;
use App\Page;
use App\ServiceCategory;
use App\Services;
use App\Blog;
use App\BlogCategory;
use App\Brand;
use App\HeaderSlider;
use App\KeyFeatures;
use App\PricePlan;
use App\TeamMember;
use App\User;
use App\Counterup;
use App\Testimonial;
use App\Works;
use App\WorksCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Symfony\Component\Process\Process;

class FrontendController extends Controller
{

    public function index()
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_header_slider = HeaderSlider::where('lang', $lang)->get();
        $all_counterup = Counterup::where('lang', $lang)->get();
        $all_key_features = KeyFeatures::where('lang', $lang)->get();
        $all_service = Services::where('lang', $lang)->orderBy('id', 'desc')->take(get_static_option('home_page_01_service_area_items'))->get();
        $all_testimonial = Testimonial::where('lang', $lang)->get();
        $all_price_plan = PricePlan::where(['lang' => $lang])->orderBy('id', 'desc')->take(get_static_option('home_page_01_price_plan_section_items'))->get();;
        $all_team_members = TeamMember::where('lang', $lang)->orderBy('id', 'desc')->take(get_static_option('home_page_01_team_member_section_items'))->get();;
        $all_brand_logo = Brand::all();
        $all_work = Works::where('lang', $lang)->get();
        $all_work_category = WorksCategory::where(['status' => 'publish', 'lang' => $lang])->get();
        $all_blog = Blog::where('lang', $lang)->orderBy('id', 'desc')->take(9)->get();
        $all_faq = Faq::where('lang', $lang)->orderBy('id', 'desc')->take(get_static_option('home_page_01_faq_area_items'))->get();

        return view('frontend.frontend-home')->with([
            'all_header_slider' => $all_header_slider,
            'all_counterup' => $all_counterup,
            'all_key_features' => $all_key_features,
            'all_service' => $all_service,
            'all_testimonial' => $all_testimonial,
            'all_blog' => $all_blog,
            'all_price_plan' => $all_price_plan,
            'all_team_members' => $all_team_members,
            'all_brand_logo' => $all_brand_logo,
            'all_work' => $all_work,
            'all_faq' => $all_faq,
            'all_work_category' => $all_work_category
        ]);
    }

    public function blog_page()
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_recent_blogs = Blog::where('lang', $lang)->orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_blogs = Blog::where('lang', $lang)->orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));
        $all_category = BlogCategory::where(['status' => 'publish', 'lang' => $lang])->orderBy('id', 'desc')->get();
        return view('frontend.pages.blog')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function category_wise_blog_page($id)
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_blogs = Blog::where(['blog_categories_id' => $id, 'lang' => $lang])->orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));
        $all_recent_blogs = Blog::where('lang', $lang)->orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_category = BlogCategory::where(['status' => 'publish', 'lang' => $lang])->orderBy('id', 'desc')->get();
        $category_name = BlogCategory::where(['id' => $id, 'status' => 'publish'])->first()->name;
        return view('frontend.pages.blog-category')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'category_name' => $category_name,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function blog_search_page(Request $request)
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_recent_blogs = Blog::where('lang', $lang)->orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_category = BlogCategory::where(['status' => 'publish', 'lang' => $lang])->orderBy('id', 'desc')->get();
        $all_blogs = Blog::where('lang', $lang)->Where('title', 'LIKE', '%' . $request->search . '%')
            ->orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));

        return view('frontend.pages.blog-search')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'search_term' => $request->search,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function blog_single_page($id, $any)
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $blog_post = Blog::where('id', $id)->first();

        $all_recent_blogs = Blog::where(['lang' => $lang])->orderBy('id', 'desc')->paginate(get_static_option('blog_page_recent_post_widget_item'));
        $all_category = BlogCategory::where(['status' => 'publish', 'lang' => $lang])->orderBy('id', 'desc')->get();
        return view('frontend.pages.blog-single')->with([
            'blog_post' => $blog_post,
            'all_categories' => $all_category,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function service_single_page($id, $any)
    {

        $service_post = Services::where('id', $id)->first();

        return view('frontend.pages.blog-single')->with([
            'service_post' => $service_post
        ]);
    }

    public function dynamic_single_page($id, $any)
    {
        $page_post = Page::where('id', $id)->first();
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        return view('frontend.pages.dynamic-single')->with([
            'page_post' => $page_post
        ]);
    }

    public function showAdminForgetPasswordForm()
    {
        return view('auth.admin.forget-password');
    }

    public function sendAdminForgetPasswordMail(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string:max:191'
        ]);
        $user_info = Admin::where('username', $request->username)->orWhere('email', $request->username)->first();
        if (!empty($user_info)){
            $token_id = Str::random(30);
            $existing_token = DB::table('password_resets')->where('email', $user_info->email)->delete();
            if (empty($existing_token)) {
                DB::table('password_resets')->insert(['email' => $user_info->email, 'token' => $token_id]);
            }
            $message = 'Here is you password reset link, If you did not request to reset your password just ignore this mail. <a class="btn" href="' . route('admin.reset.password', ['user' => $user_info->username, 'token' => $token_id]) . '">Click Reset Password</a>';
            $data = [
                'username' => $user_info->username,
                'message' => $message
            ];
            Mail::to($user_info->email)->send(new AdminResetEmail($data));

            return redirect()->back()->with([
                'msg' => 'Check Your Mail For Reset Password Link',
                'type' => 'success'
            ]);
        }
        return redirect()->back()->with([
            'msg' => 'Your Username or Email Is Wrong!!!',
            'type' => 'danger'
        ]);
    }

    public function showAdminResetPasswordForm($username, $token)
    {
        return view('auth.admin.reset-password')->with([
            'username' => $username,
            'token' => $token
        ]);
    }

    public function AdminResetPassword(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'username' => 'required',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user_info = Admin::where('username', $request->username)->first();
        $user = Admin::findOrFail($user_info->id);
        $token_iinfo = DB::table('password_resets')->where(['email' => $user_info->email, 'token' => $request->token])->first();
        if (!empty($token_iinfo)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('admin.login')->with(['msg' => 'Password Changed Successfully', 'type' => 'success']);
        }

        return redirect()->back()->with(['msg' => 'Somethings Going Wrong! Please Try Again or Check Your Old Password', 'type' => 'danger']);
    }

    public function lang_change(Request $request)
    {
        session()->put('lang', $request->lang);
        return redirect()->route('homepage');
    }

    public function home_page_change($id)
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_header_slider = HeaderSlider::where('lang', $lang)->get();
        $all_counterup = Counterup::where('lang', $lang)->get();
        $all_key_features = KeyFeatures::where('lang', $lang)->get();
        $all_service = Services::where('lang', $lang)->orderBy('id', 'desc')->take(get_static_option('home_page_01_service_area_items'))->get();
        $all_testimonial = Testimonial::where('lang', $lang)->get();
        $all_price_plan = PricePlan::where(['lang' => $lang])->orderBy('id', 'desc')->take(get_static_option('home_page_01_price_plan_section_items'))->get();;
        $all_team_members = TeamMember::where('lang', $lang)->orderBy('id', 'desc')->take(get_static_option('home_page_01_team_member_section_items'))->get();;
        $all_brand_logo = Brand::all();
        $all_work = Works::where('lang', $lang)->get();
        $all_work_category = WorksCategory::where(['status' => 'publish', 'lang' => $lang])->get();
        $all_blog = Blog::where('lang', $lang)->orderBy('id', 'desc')->take(9)->get();
        $all_faq = Faq::where('lang', $lang)->orderBy('id', 'desc')->take(get_static_option('home_page_01_faq_area_items'))->get();


        return view('frontend.frontend-home-demo')->with([
            'all_header_slider' => $all_header_slider,
            'all_counterup' => $all_counterup,
            'all_key_features' => $all_key_features,
            'all_service' => $all_service,
            'all_testimonial' => $all_testimonial,
            'all_blog' => $all_blog,
            'all_price_plan' => $all_price_plan,
            'all_team_members' => $all_team_members,
            'all_brand_logo' => $all_brand_logo,
            'all_work' => $all_work,
            'all_faq' => $all_faq,
            'all_work_category' => $all_work_category,
            'home_page' => $id,
        ]);
    }

    public function send_contact_message(Request $request)
    {

        $all_quote_form_fields =  json_decode(get_static_option('contact_page_form_fields'));
        $required_fields = [];
        $fileds_name = [];
        $attachment_list = [];
        foreach ($all_quote_form_fields->field_type as $key => $value){
            if (is_object($all_quote_form_fields->field_required) && !empty($all_quote_form_fields->field_required->$key) && $value != 'file'){

                $sanitize_rule = ($value == 'email') ? 'email' : 'string';
                $required_fields[$all_quote_form_fields->field_name[$key]] = 'required|'.$sanitize_rule;

            }elseif (is_object($all_quote_form_fields->field_required) && $value == 'file'){

                $file_required = isset($all_quote_form_fields->field_required->$key) ? 'required|' : '';
                $file_mimes_type = isset($all_quote_form_fields->mimes_type->$key) ? $all_quote_form_fields->mimes_type->$key : '' ;
                $required_fields[$all_quote_form_fields->field_name[$key]] = $file_required.$file_mimes_type.'|max:6054';

            }elseif (is_array($all_quote_form_fields->field_required) && $value == 'file'){

                $file_required = isset($all_quote_form_fields->field_required->$key) ? 'required|' : '';
                $file_mimes_type = isset($all_quote_form_fields->mimes_type->$key) ? $all_quote_form_fields->mimes_type->$key : '' ;
                $required_fields[$all_quote_form_fields->field_name[$key]] = $file_required.$file_mimes_type.'|max:6054';

            }else if (is_array($all_quote_form_fields->field_required) && !empty($all_quote_form_fields->field_required[$key]) && $value != 'file'){

                $sanitize_rule = ($value == 'email') ? 'email' : 'string';
                $required_fields[$all_quote_form_fields->field_name[$key]] = 'required|'.$sanitize_rule;

            }
        }
        $this->validate($request, $required_fields);

        foreach ($all_quote_form_fields->field_type as $key => $value){
            if ($value != 'file' ){
                $singule_field_name = $all_quote_form_fields->field_name[$key];
                $checkbox_value = ($value == 'checkbox' && !empty($request->$singule_field_name) )  ? 'Yes' : 'No';
                $fileds_name[$singule_field_name] = ($value != 'checkbox')  ? $request->$singule_field_name : $checkbox_value;

            }elseif ($value == 'file'){
                $singule_field_name = $all_quote_form_fields->field_name[$key];
                if ($request->hasFile($singule_field_name)){
                    $filed_instance =  $request->file($singule_field_name);
                    $file_extenstion = $filed_instance->getClientOriginalExtension();
                    $attachment_name = 'attachment-'.$singule_field_name.'.'.$file_extenstion;
                    $filed_instance->move('assets/uploads/attachment/', $attachment_name);
                    $attachment_list[$singule_field_name] = 'assets/uploads/attachment/'. $attachment_name;
                }
            }
        }

        $google_captcha_result = google_captcha_check($request->captcha_token);

        if ($google_captcha_result['success']) {

            $succ_msg = get_static_option('contact_mail_'.get_user_lang().'_subject');
            $success_message = !empty($succ_msg) ? $succ_msg : 'Thanks for your contact!!';
            Mail::to(get_static_option('site_global_email'))->send(new ContactMessage($fileds_name,$attachment_list));
            return redirect()->back()->with(['msg' => $success_message, 'type' => 'success']);

        } else {
            return redirect()->back()->with(['msg' => 'Something goes wrong, Please try again later !!', 'type' => 'danger']);
        }
    }

    public function services_single_page($id, $any)
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $service_item = Services::where('id', $id)->first();
        $service_category = ServiceCategory::where(['status' => 'publish', 'lang' => $lang])->get();
        return view('frontend.pages.service-single')->with(['service_item' => $service_item, 'service_category' => $service_category]);
    }

    public function category_wise_services_page($id, $any)
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $category_name = ServiceCategory::find($id)->name;
        $service_item = Services::where(['categories_id' => $id, 'lang' => $lang])->paginate(6);
        return view('frontend.pages.services')->with(['service_items' => $service_item, 'category_name' => $category_name]);
    }

    public function work_single_page($id, $any)
    {
        $work_item = Works::where('id', $id)->first();
        return view('frontend.pages.work-single')->with(['work_item' => $work_item]);
    }

    public function about_page()
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_counterup = Counterup::where('lang', $lang)->get();
        $all_brand_logo = Brand::all();
        $all_team_members = TeamMember::where('lang', $lang)->orderBy('id', 'desc')->take(4)->get();
        $all_blog = Blog::where('lang', $lang)->orderBy('id', 'desc')->take(9)->get();
        $all_testimonial = Testimonial::where('lang', $lang)->get();
        $all_know_about = KnowAbout::where('lang', $lang)->get();
        $all_service = Services::where('lang', $lang)->orderBy('id', 'desc')->take(4)->get();
        return view('frontend.pages.about')->with([
            'all_counterup' => $all_counterup,
            'all_brand_logo' => $all_brand_logo,
            'all_team_members' => $all_team_members,
            'all_blog' => $all_blog,
            'all_testimonial' => $all_testimonial,
            'all_service' => $all_service,
            'all_know_about' => $all_know_about,
        ]);
    }

    public function service_page()
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_services = Services::where('lang', $lang)->orderBy('id', 'desc')->paginate(12);
        $all_price_plan = PricePlan::where('lang', $lang)->get();
        return view('frontend.pages.service')->with(['all_services' => $all_services, 'all_price_plan' => $all_price_plan]);
    }

    public function work_page()
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_work = Works::where(['lang' => $lang])->orderBy('id', 'desc')->paginate(12);
        $all_work_category = WorksCategory::where(['status' => 'publish', 'lang' => $lang])->get();

        return view('frontend.pages.work')->with(['all_work' => $all_work, 'all_work_category' => $all_work_category]);
    }

    public function team_page()
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_team_members = TeamMember::where('lang', $lang)->orderBy('id', 'desc')->paginate(get_static_option('team_page_team_member_section_item'));

        return view('frontend.pages.team-page')->with(['all_team_members' => $all_team_members]);
    }

    public function faq_page()
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_faq = Faq::where('lang', $lang)->get();
        $all_brand_logo = Brand::all();
        $all_testimonial = Testimonial::where('lang', $lang)->get();
        return view('frontend.pages.faq-page')->with([
            'all_brand_logo' => $all_brand_logo,
            'all_testimonial' => $all_testimonial,
            'all_faqs' => $all_faq
        ]);
    }

    public function contact_page()
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $all_contact_info = ContactInfoItem::where('lang', $lang)->get();
        return view('frontend.pages.contact-page')->with([
            'all_contact_info' => $all_contact_info
        ]);
    }

    public function plan_order($id)
    {
        $order_details = PricePlan::find($id);
        return view('frontend.pages.order-page')->with([
            'order_details' => $order_details
        ]);
    }

    public function request_quote()
    {
        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $contact_info = ContactInfoItem::where('lang', $lang)->get();
        return view('frontend.pages.quote-page')->with(['all_contact_info' => $contact_info]);
    }

    public function send_quote_message(Request $request)
    {

        $all_quote_form_fields =  json_decode(get_static_option('quote_page_form_fields'));
        $required_fields = [];
        $fileds_name = [];
        $attachment_list = [];
        foreach ($all_quote_form_fields->field_type as $key => $value){
            if (is_object($all_quote_form_fields->field_required) && !empty($all_quote_form_fields->field_required->$key) && $value != 'file'){

                $sanitize_rule = ($value == 'email') ? 'email' : 'string';
                $required_fields[$all_quote_form_fields->field_name[$key]] = 'required|'.$sanitize_rule;

            }elseif (is_object($all_quote_form_fields->field_required) && $value == 'file'){

                $file_required = isset($all_quote_form_fields->field_required->$key) ? 'required|' : '';
                $file_mimes_type = isset($all_quote_form_fields->mimes_type->$key) ? $all_quote_form_fields->mimes_type->$key : '' ;
                $required_fields[$all_quote_form_fields->field_name[$key]] = $file_required.$file_mimes_type.'|max:6054';

            }elseif (is_array($all_quote_form_fields->field_required) && $value == 'file'){

                $file_required = isset($all_quote_form_fields->field_required->$key) ? 'required|' : '';
                $file_mimes_type = isset($all_quote_form_fields->mimes_type->$key) ? $all_quote_form_fields->mimes_type->$key : '' ;
                $required_fields[$all_quote_form_fields->field_name[$key]] = $file_required.$file_mimes_type.'|max:6054';

            }else if (is_array($all_quote_form_fields->field_required) && !empty($all_quote_form_fields->field_required[$key]) && $value != 'file'){

                $sanitize_rule = ($value == 'email') ? 'email' : 'string';
                $required_fields[$all_quote_form_fields->field_name[$key]] = 'required|'.$sanitize_rule;

            }
        }
        $this->validate($request, $required_fields);

        foreach ($all_quote_form_fields->field_type as $key => $value){
            if ($value != 'file' ){
                $singule_field_name = $all_quote_form_fields->field_name[$key];
                $checkbox_value = ($value == 'checkbox' && !empty($request->$singule_field_name) )  ? 'Yes' : 'No';
                $fileds_name[$singule_field_name] = ($value != 'checkbox')  ? $request->$singule_field_name : $checkbox_value;

            }elseif ($value == 'file'){
                $singule_field_name = $all_quote_form_fields->field_name[$key];
                if ($request->hasFile($singule_field_name)){
                    $filed_instance =  $request->file($singule_field_name);
                    $file_extenstion = $filed_instance->getClientOriginalExtension();
                    $attachment_name = 'attachment-'.$singule_field_name.'.'.$file_extenstion;
                    $filed_instance->move('assets/uploads/attachment/', $attachment_name);

                    $attachment_list[$singule_field_name] = 'assets/uploads/attachment/'. $attachment_name;
                }
            }
        }

        $google_captcha_result = google_captcha_check($request->captcha_token);


        if ($google_captcha_result['success']) {
            //have to check mail
            $succ_msg = get_static_option('quote_mail_'.get_user_lang().'_subject');
            $success_message = !empty($succ_msg) ? $succ_msg : 'Thanks for your quote. we will get back to you very soon.';

            Mail::to(get_static_option('quote_page_form_mail'))->send(new RequestQuote($fileds_name,$attachment_list));

            return redirect()->back()->with(['msg' => $success_message, 'type' => 'success']);

        }

        return redirect()->back()->with(['msg' => 'Something goes wrong, Please try again later !!', 'type' => 'danger']);

    }

    public function send_order_message(Request $request)
    {

        $all_quote_form_fields =  json_decode(get_static_option('order_page_form_fields'));
        $required_fields = [];
        $fileds_name = [];
        $attachment_list = [];
        foreach ($all_quote_form_fields->field_type as $key => $value){
            if (is_object($all_quote_form_fields->field_required) && !empty($all_quote_form_fields->field_required->$key) && $value != 'file'){

                $sanitize_rule = ($value == 'email') ? 'email' : 'string';
                $required_fields[$all_quote_form_fields->field_name[$key]] = 'required|'.$sanitize_rule;

            }elseif (is_object($all_quote_form_fields->field_required) && $value == 'file'){

                $file_required = isset($all_quote_form_fields->field_required->$key) ? 'required|' : '';
                $file_mimes_type = isset($all_quote_form_fields->mimes_type->$key) ? $all_quote_form_fields->mimes_type->$key : '' ;
                $required_fields[$all_quote_form_fields->field_name[$key]] = $file_required.$file_mimes_type.'|max:6054';

            }elseif (is_array($all_quote_form_fields->field_required) && $value == 'file'){

                $file_required = isset($all_quote_form_fields->field_required->$key) ? 'required|' : '';
                $file_mimes_type = isset($all_quote_form_fields->mimes_type->$key) ? $all_quote_form_fields->mimes_type->$key : '' ;
                $required_fields[$all_quote_form_fields->field_name[$key]] = $file_required.$file_mimes_type.'|max:6054';

            }else if (is_array($all_quote_form_fields->field_required) && !empty($all_quote_form_fields->field_required[$key]) && $value != 'file'){

                $sanitize_rule = ($value == 'email') ? 'email' : 'string';
                $required_fields[$all_quote_form_fields->field_name[$key]] = 'required|'.$sanitize_rule;

            }
        }
        $this->validate($request, $required_fields);

        foreach ($all_quote_form_fields->field_type as $key => $value){
            if ($value != 'file' ){
                $singule_field_name = $all_quote_form_fields->field_name[$key];
                $checkbox_value = ($value == 'checkbox' && !empty($request->$singule_field_name) )  ? 'Yes' : 'No';
                $fileds_name[$singule_field_name] = ($value != 'checkbox')  ? $request->$singule_field_name : $checkbox_value;

            }elseif ($value == 'file'){
                $singule_field_name = $all_quote_form_fields->field_name[$key];
                if ($request->hasFile($singule_field_name)){
                    $filed_instance =  $request->file($singule_field_name);
                    $file_extenstion = $filed_instance->getClientOriginalExtension();
                    $attachment_name = 'attachment-'.$singule_field_name.'.'.$file_extenstion;
                    $filed_instance->move('assets/uploads/attachment/', $attachment_name);

                    $attachment_list[$singule_field_name] = 'assets/uploads/attachment/'. $attachment_name;
                }
            }
        }

        $google_captcha_result = google_captcha_check($request->captcha_token);
        if ($google_captcha_result['success']) {

            $package_detials = PricePlan::find($request->package);

            $succ_msg = get_static_option('order_mail_'.get_user_lang().'_subject');
            $success_message = !empty($succ_msg) ? $succ_msg :'Thanks for your order. we will get back to you very soon.';

            Mail::to(get_static_option('order_page_form_mail'))->send(new PlaceOrder($fileds_name,$attachment_list,$package_detials));

            return redirect()->back()->with(['msg' => $success_message, 'type' => 'success']);

        } else {
            return redirect()->back()->with(['msg' => 'Something goes wrong, Please try again later !!', 'type' => 'danger']);
        }


    }

    public function subscribe_newsletter(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:191|unique:newsletters'
        ]);
        Newsletter::create($request->all());
        return redirect()->back()->with([
            'msg' => 'Thanks for Subscribe Our Newsletter',
            'type' => 'success'
        ]);
    }

    public function category_wise_works_page($id)
    {

        $lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
        $category = WorksCategory::find($id);
        $all_works = Works::where('lang', $lang)->where('categories_id', 'LIKE', '%' . $id . '%')->paginate(12);
        $category_name = $category->name;
        $all_category = WorksCategory::where('lang', $lang)->get();
        return view('frontend.pages.work-category')->with(['all_work' => $all_works, 'category_name' => $category_name, 'all_work_category' => $all_category]);

    }

    public function send_call_back_message(Request $request)
    {

        $all_quote_form_fields =  json_decode(get_static_option('call_back_page_form_fields'));
        $required_fields = [];
        $fileds_name = [];
        $attachment_list = [];
        foreach ($all_quote_form_fields->field_type as $key => $value){
            if (is_object($all_quote_form_fields->field_required) && !empty($all_quote_form_fields->field_required->$key) && $value != 'file'){

                $sanitize_rule = ($value == 'email') ? 'email' : 'string';
                $required_fields[$all_quote_form_fields->field_name[$key]] = 'required|'.$sanitize_rule;

            }elseif (is_object($all_quote_form_fields->field_required) && $value == 'file'){

                $file_required = isset($all_quote_form_fields->field_required->$key) ? 'required|' : '';
                $file_mimes_type = isset($all_quote_form_fields->mimes_type->$key) ? $all_quote_form_fields->mimes_type->$key : '' ;
                $required_fields[$all_quote_form_fields->field_name[$key]] = $file_required.$file_mimes_type.'|max:6054';

            }elseif (is_array($all_quote_form_fields->field_required) && $value == 'file'){

                $file_required = isset($all_quote_form_fields->field_required->$key) ? 'required|' : '';
                $file_mimes_type = isset($all_quote_form_fields->mimes_type->$key) ? $all_quote_form_fields->mimes_type->$key : '' ;
                $required_fields[$all_quote_form_fields->field_name[$key]] = $file_required.$file_mimes_type.'|max:6054';

            }else if (is_array($all_quote_form_fields->field_required) && !empty($all_quote_form_fields->field_required[$key]) && $value != 'file'){

                $sanitize_rule = ($value == 'email') ? 'email' : 'string';
                $required_fields[$all_quote_form_fields->field_name[$key]] = 'required|'.$sanitize_rule;

            }
        }
        $this->validate($request, $required_fields);

        foreach ($all_quote_form_fields->field_type as $key => $value){
            if ($value != 'file' ){
                $singule_field_name = $all_quote_form_fields->field_name[$key];
                $checkbox_value = ($value == 'checkbox' && !empty($request->$singule_field_name) )  ? 'Yes' : 'No';
                $fileds_name[$singule_field_name] = ($value != 'checkbox')  ? $request->$singule_field_name : $checkbox_value;

            }elseif ($value == 'file'){
                $singule_field_name = $all_quote_form_fields->field_name[$key];
                if ($request->hasFile($singule_field_name)){
                    $filed_instance =  $request->file($singule_field_name);
                    $file_extenstion = $filed_instance->getClientOriginalExtension();
                    $attachment_name = 'attachment-'.$singule_field_name.'.'.$file_extenstion;
                    $filed_instance->move('assets/uploads/attachment/', $attachment_name);
                    $attachment_list[$singule_field_name] = 'assets/uploads/attachment/'. $attachment_name;
                }
            }
        }


        $succ_msg = get_static_option('request_call_back_mail_'.get_user_lang().'_subject');
        $success_message = !empty($succ_msg) ? $succ_msg :  'Thanks for Your Contact!!! We Will Contact You Soon';

        Mail::to(get_static_option('home_page_01_faq_area_form_mail'))->send(new CallBack($fileds_name,$attachment_list));;

        return redirect()->back()->with([
            'msg' => $success_message,
            'type' => 'success'
        ]);
    }

}//end class
