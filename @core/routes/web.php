<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['middleware' => ['setlang','globalVariable']],function (){

    Route::get('/','FrontendController@index')->name('homepage');
    Route::get('/p/{id}/{any}','FrontendController@dynamic_single_page')->name('frontend.dynamic.page');

    Route::get('/plan-order/{id}','FrontendController@plan_order')->name('frontend.plan.order');
    Route::get('/request-quote','FrontendController@request_quote')->name('frontend.request.quote');
    Route::get('/blog/{id}/{any}','FrontendController@blog_single_page')->name('frontend.blog.single');
    Route::get('/blog/search/','FrontendController@blog_search_page')->name('frontend.blog.search');
    Route::get('/blog/category/{id}/{any}','FrontendController@category_wise_blog_page')->name('frontend.blog.category');
    Route::get('/blog','FrontendController@blog_page')->name('frontend.blog');
    Route::get('/contact','FrontendController@contact_page')->name('frontend.contact');


    //language change
    Route::get('/lang','FrontendController@lang_change')->name('frontend.langchange');
    Route::get('/home/{id}','FrontendController@home_page_change');
    Route::post('/contact-message','FrontendController@send_contact_message')->name('frontend.contact.message');
    Route::post('/subscribe-newsletter','FrontendController@subscribe_newsletter')->name('frontend.subscribe.newsletter');
    Route::post('/request-quote','FrontendController@send_quote_message')->name('frontend.quote.message');
    Route::post('/place-order','FrontendController@send_order_message')->name('frontend.order.message');
    Route::post('/request-call-back','FrontendController@send_call_back_message')->name('frontend.call.back.message');

    //static page
    $user_lang  = get_user_lang();
    $about_page_slug = !empty(get_static_option('about_page_'.$user_lang.'_slug')) ? get_static_option('about_page_'.$user_lang.'_slug') : 'about';
    $service_page_slug = !empty(get_static_option('service_page_'.$user_lang.'_slug')) ? get_static_option('service_page_'.$user_lang.'_slug') : 'service';
    $work_page_slug = !empty(get_static_option('work_page_'.$user_lang.'_slug')) ? get_static_option('work_page_'.$user_lang.'_slug') : 'work';
    $faq_page_slug = !empty(get_static_option('faq_page_'.$user_lang.'_slug')) ? get_static_option('faq_page_'.$user_lang.'_slug') : 'faq';
    $team_page_slug = !empty(get_static_option('team_page_'.$user_lang.'_slug')) ? get_static_option('team_page_'.$user_lang.'_slug') : 'team';

    Route::get('/'.$about_page_slug,'FrontendController@about_page')->name('frontend.about');
    Route::get('/'.$service_page_slug,'FrontendController@service_page')->name('frontend.service');
    Route::get('/'.$work_page_slug,'FrontendController@work_page')->name('frontend.work');
    Route::get('/'.$faq_page_slug,'FrontendController@faq_page')->name('frontend.faq');
    Route::get('/'.$service_page_slug.'/category/{id}/{any}','FrontendController@category_wise_services_page')->name('frontend.services.category');
    Route::get('/'.$work_page_slug.'/category/{id}/{any}','FrontendController@category_wise_works_page')->name('frontend.works.category');
    Route::get('/'.$service_page_slug.'/{id}/{any}','FrontendController@services_single_page')->name('frontend.services.single');
    Route::get('/'.$work_page_slug.'/{id}/{any}','FrontendController@work_single_page')->name('frontend.work.single');
    Route::get('/'.$team_page_slug,'FrontendController@team_page')->name('frontend.team');

});


//admin login
Route::get('/login/admin','Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::get('/login/admin/forget-password','FrontendController@showAdminForgetPasswordForm')->name('admin.forget.password');
Route::get('/login/admin/reset-password/{user}/{token}','FrontendController@showAdminResetPasswordForm')->name('admin.reset.password');
Route::post('/login/admin/reset-password','FrontendController@AdminResetPassword')->name('admin.reset.password.change');
Route::post('/login/admin/forget-password','FrontendController@sendAdminForgetPasswordMail');
Route::post('/logout/admin','AdminDashboardController@adminLogout')->name('admin.logout');
Route::post('/login/admin','Auth\LoginController@adminLogin');


//admin dashboard routes
Route::prefix('admin-home')->group(function (){

    Route::get('/', 'AdminDashboardController@adminIndex')->name('admin.home');
    //home page variant select
    Route::get('/home-variant',"AdminDashboardController@home_variant")->name('admin.home.variant');
    Route::post('/home-variant',"AdminDashboardController@update_home_variant");
    //navbar settings
    Route::get('/navbar-settings',"AdminDashboardController@navbar_settings")->name('admin.navbar.settings');
    Route::post('/navbar-settings',"AdminDashboardController@update_navbar_settings");

    Route::get('/blog-page','AdminDashboardController@blog_page')->name('admin.blog.page');
    Route::post('/blog-page','AdminDashboardController@blog_page_update');
    Route::get('/counterup','CounterUpController@index')->name('admin.counterup');
    Route::post('/counterup','CounterUpController@store');
    Route::post('/update-counterup','CounterUpController@update')->name('admin.counterup.update');
    Route::post('/delete-counterup/{id}','CounterUpController@delete')->name('admin.counterup.delete');
    Route::get('/testimonial','TestimonialController@index')->name('admin.testimonial');
    Route::post('/testimonial','TestimonialController@store');
    Route::post('/update-testimonial','TestimonialController@update')->name('admin.testimonial.update');
    Route::post('/delete-testimonial/{id}','TestimonialController@delete')->name('admin.testimonial.delete');

    //key features
    Route::get('/keyfeatures','KeyFeaturesController@index')->name('admin.keyfeatures');
    Route::post('/keyfeatures','KeyFeaturesController@store');
    Route::post('/home-page-01/keyfeatures','KeyFeaturesController@update_section_settings')->name('admin.keyfeature.section');
    Route::post('/update-keyfeatures','KeyFeaturesController@update')->name('admin.keyfeatures.update');
    Route::post('/delete-keyfeatures/{id}','KeyFeaturesController@delete')->name('admin.keyfeatures.delete');
    //contact info
    Route::get('/contact-page/contact-info','ContactInfoController@index')->name('admin.contact.info');
    Route::post('/contact-page/contact-info','ContactInfoController@store');
    Route::post('/contact-page/contact-info/title','ContactInfoController@contact_info_title')->name('admin.contact.info.title');
    Route::post('contact-page/contact-info/update','ContactInfoController@update')->name('admin.contact.info.update');
    Route::post('contact-page/contact-info/delete/{id}','ContactInfoController@delete')->name('admin.contact.info.delete');
    //services
    Route::get('/services','ServiceController@index')->name('admin.services');
    Route::post('/services','ServiceController@store');
    Route::post('/services-cat-by-slug','ServiceController@category_by_slug')->name('admin.service.category.by.slug');
    Route::post('/update-services','ServiceController@update')->name('admin.services.update');
    Route::post('/delete-services/{id}','ServiceController@delete')->name('admin.services.delete');
    Route::get('/services/category','ServiceController@category_index')->name('admin.service.category');
    Route::post('/services/category','ServiceController@category_store');
    Route::post('/update-services-category','ServiceController@category_update')->name('admin.service.category.update');
    Route::post('/delete-services-category/{id}','ServiceController@category_delete')->name('admin.service.category.delete');

    //works
    Route::get('/works','WorksController@index')->name('admin.work');
    Route::post('/works','WorksController@store');
    Route::post('/update-works','WorksController@update')->name('admin.work.update');
    Route::post('/delete-works/{id}','WorksController@delete')->name('admin.work.delete');
    Route::post('/works-cat-by-slug','WorksController@category_by_slug')->name('admin.work.category.by.slug');

    Route::get('/works/category','WorksController@category_index')->name('admin.work.category');
    Route::post('/works/category','WorksController@category_store');
    Route::post('/update-works-category','WorksController@category_update')->name('admin.work.category.update');
    Route::post('/delete-works-category/{id}','WorksController@category_delete')->name('admin.work.category.delete');

    //brand logos
    Route::get('/brands','BrandController@index')->name('admin.brands');
    Route::post('/brands','BrandController@store');
    Route::post('/update-brands','BrandController@update')->name('admin.brands.update');
    Route::post('/delete-brands/{id}','BrandController@delete')->name('admin.brands.delete');
    //faq
    Route::get('/faq','FaqController@index')->name('admin.faq');
    Route::post('/faq','FaqController@store');
    Route::post('/update-faq','FaqController@update')->name('admin.faq.update');
    Route::post('/delete-faq/{id}','FaqController@delete')->name('admin.faq.delete');

    //header slider
    Route::get('/header','HeaderSliderController@index')->name('admin.header');
    Route::post('/header','HeaderSliderController@store');
    Route::post('/update-header','HeaderSliderController@update')->name('admin.header.update');
    Route::post('/delete-header/{id}','HeaderSliderController@delete')->name('admin.header.delete');

    //price plan
    Route::get('/price-plan','PricePlanController@index')->name('admin.price.plan');
    Route::post('/price-plan','PricePlanController@store');
    Route::post('/update-price-plan','PricePlanController@update')->name('admin.price.plan.update');
    Route::post('/delete-price-plan/{id}','PricePlanController@delete')->name('admin.price.plan.delete');

    //team member
    Route::get('/team-member','TeamMemberController@index')->name('admin.team.member');
    Route::post('/team-member','TeamMemberController@store');
    Route::post('/update-team-member','TeamMemberController@update')->name('admin.team.member.update');
    Route::post('/delete-team-member/{id}','TeamMemberController@delete')->name('admin.team.member.delete');

    //home page one
    Route::get('/home-page-01/counterup','HomePageController@home_01_counterup')->name('admin.homeone.counterup');
    Route::post('/home-page-01/counterup','HomePageController@home_01_update_counterup');
    Route::get('/home-page-01/latest-news','HomePageController@home_01_latest_news')->name('admin.homeone.latest.news');
    Route::post('/home-page-01/latest-news','HomePageController@home_01_update_latest_news');
    Route::get('/home-page-01/testimonial','HomePageController@home_01_testimonial')->name('admin.homeone.testimonial');
    Route::post('/home-page-01/testimonial','HomePageController@home_01_update_testimonial');
    Route::get('/home-page-01/service-area','HomePageController@home_01_service_area')->name('admin.homeone.service.area');
    Route::post('/home-page-01/service-area','HomePageController@home_01_update_service_area');
    Route::get('/home-page-01/recent-work','HomePageController@home_01_recent_work')->name('admin.homeone.recent.work');
    Route::post('/home-page-01/recent-work','HomePageController@home_01_update_recent_work');
    //about us area
    Route::get('/home-page-01/about-us','HomePageController@home_01_about_us')->name('admin.homeone.about.us');
    Route::post('/home-page-01/about-us','HomePageController@home_01_update_about_us');

    Route::get('/home-page-01/newsletter','HomePageController@home_01_newsletter')->name('admin.homeone.newsletter');
    Route::post('/home-page-01/newsletter','HomePageController@home_01_update_newsletter');
    //call to action
    Route::get('/home-page-01/cta-area','HomePageController@home_01_cta_area')->name('admin.homeone.cta.area');
    Route::post('/home-page-01/cta-area','HomePageController@home_01_update_cta_area');
    
    //section manage
    Route::get('/home-page-01/section-manage','HomePageController@home_01_section_manage')->name('admin.homeone.section.manage');
    Route::post('/home-page-01/section-manage','HomePageController@home_01_update_section_manage');
    Route::get('/home-page-01/price-plan','HomePageController@home_01_price_plan')->name('admin.homeone.price.plan');
    Route::post('/home-page-01/price-plan','HomePageController@home_01_update_price_plan');

    Route::get('/home-page-01/team-member','HomePageController@home_01_team_member')->name('admin.homeone.team.member');
    Route::post('/home-page-01/team-member','HomePageController@home_01_update_team_member');

    Route::get('/home-page-01/faq-area','HomePageController@home_01_faq_area')->name('admin.homeone.faq.area');
    Route::post('/home-page-01/faq-area','HomePageController@home_01_update_faq_area');

    //about page
    Route::get('/about-page/about-us','AboutPageController@about_page_about_section')->name('admin.about.page.about');
    Route::post('/about-page/about-us','AboutPageController@about_page_update_about_section');
    Route::get('/about-page/know-about','AboutPageController@about_page_know_about_section')->name('admin.about.know');
    Route::post('/about-page/know-about','AboutPageController@about_page_update_know_about_section');
    Route::post('/about-page/know-about/store','KnowAboutController@store')->name('know.about.store');
    Route::post('/about-page/know-about/update','KnowAboutController@update')->name('know.about.update');
    Route::post('/about-page/know-about/delete/{id}','KnowAboutController@delete')->name('know.about.delete');

    Route::get('/about-page/section-manage','AboutPageController@about_page_section_manage')->name('admin.about.page.section.manage');
    Route::post('/about-page/section-manage','AboutPageController@about_page_update_section_manage');

    //team page
    Route::get('/contact-page/form-area','ContactPageController@contact_page_form_area')->name('admin.contact.page.form.area');
    Route::post('/contact-page/form-area','ContactPageController@contact_page_update_form_area');
    Route::get('/contact-page/map','ContactPageController@contact_page_map_area')->name('admin.contact.page.map');
    Route::post('/contact-page/map','ContactPageController@contact_page_update_map_area');

    //footer
    Route::get('/footer/about','FooterController@about_widget')->name('admin.footer.about');
    Route::post('/footer/about','FooterController@update_about_widget');
    Route::get('/footer/general','FooterController@general_widget')->name('admin.footer.general');
    Route::post('/footer/general','FooterController@update_general_widget');
    Route::get('/footer/useful-links','FooterController@useful_links_widget')->name('admin.footer.useful.link');
    Route::post('/footer/useful-links/widget','FooterController@update_widget_useful_links')->name('admin.footer.useful.link.widget');
    Route::post('/footer/useful-links','FooterController@new_useful_links_widget');
    Route::post('/footer/useful-links/update','FooterController@update_useful_links_widget')->name('admin.footer.useful.link.update');
    Route::post('/footer/useful-links/update/{delete}','FooterController@delete_useful_links_widget')->name('admin.footer.useful.link.delete');
    Route::post('/footer/useful-links/menu','FooterController@useful_links_widget_menu_by_slug')->name('admin.footer.useful.link.menus');
    Route::get('/footer/recent-post','FooterController@recent_post_widget')->name('admin.footer.recent.post');
    Route::post('/footer/recent-post','FooterController@update_recent_post_widget');

    Route::get('/footer/important-links','FooterController@important_links_widget')->name('admin.footer.important.link');
    Route::post('/footer/important-links/widget','FooterController@update_widget_important_links')->name('admin.footer.important.link.widget');
    Route::post('/footer/important-links','FooterController@new_important_links_widget');
    Route::post('/footer/important-links/update','FooterController@update_important_links_widget')->name('admin.footer.important.link.update');
    Route::post('/footer/important-links/slug','FooterController@important_links_widget_menu_by_slug')->name('admin.footer.important.link.menu');
    Route::post('/footer/important-links/update/{delete}','FooterController@delete_important_links_widget')->name('admin.footer.important.link.delete');

    //newsletter
    Route::get('/newsletter','NewsletterController@index')->name('admin.newsletter');
    Route::post('/newsletter/delete/{id}','NewsletterController@delete')->name('admin.newsletter.delete');
    Route::post('/newsletter/single','NewsletterController@send_mail')->name('admin.newsletter.single.mail');
    Route::get('/newsletter/all','NewsletterController@send_mail_all_index')->name('admin.newsletter.mail');
    Route::post('/newsletter/all','NewsletterController@send_mail_all');
    Route::post('/newsletter/new','NewsletterController@add_new_sub')->name('admin.newsletter.new.add');

    //quote
    Route::get('/quote-page','QuotePageController@index')->name('admin.quote.page');
    Route::post('/quote-page','QuotePageController@udpate');

    //order
    Route::get('/order-page','OrderPageController@index')->name('admin.order.page');
    Route::post('/order-page','OrderPageController@udpate');

    //topbar
    Route::get('/topbar','TopBarController@index')->name('admin.topbar');
    Route::post('/topbar/new-support-info','TopBarController@new_support_info')->name('admin.new.support.info');
    Route::post('/topbar/update-support-info','TopBarController@update_support_info')->name('admin.update.support.info');
    Route::post('/topbar/delete-support-info/{id}','TopBarController@delete_support_info')->name('admin.delete.support.info');
    Route::post('/topbar/new-social-item','TopBarController@new_social_item')->name('admin.new.social.item');
    Route::post('/topbar/update-social-item','TopBarController@update_social_item')->name('admin.update.social.item');
    Route::post('/topbar/delete-social-item/{id}','TopBarController@delete_social_item')->name('admin.delete.social.item');
    Route::post('/topbar/top-menu','TopBarController@update_top_menu')->name('admin.top.right.menu');
    Route::post('/topbar/top-button','TopBarController@update_top_button')->name('admin.top.button');

    //menu manage
    Route::get('/menu','MenuController@index')->name('admin.menu');
    Route::post('/new-menu','MenuController@store_new_menu')->name('admin.menu.new');
    Route::get('/menu-edit/{id}','MenuController@edit_menu')->name('admin.menu.edit');
    Route::post('/menu-update/{id}','MenuController@update_menu')->name('admin.menu.update');
    Route::post('/menu-delete/{id}','MenuController@delete_menu')->name('admin.menu.delete');
    Route::post('/menu-default/{id}','MenuController@set_default_menu')->name('admin.menu.default');

    //pages
    Route::get('/page','PagesController@index')->name('admin.page');
    Route::get('/new-page','PagesController@new_page')->name('admin.page.new');
    Route::post('/new-page','PagesController@store_new_page');
    Route::get('/page-edit/{id}','PagesController@edit_page')->name('admin.page.edit');
    Route::post('/page-update/{id}','PagesController@update_page')->name('admin.page.update');
    Route::post('/page-delete/{id}','PagesController@delete_page')->name('admin.page.delete');

    //blog
    Route::get('/blog','BlogController@index')->name('admin.blog');
    Route::get('/new-blog','BlogController@new_blog')->name('admin.blog.new');
    Route::post('/new-blog','BlogController@store_new_blog');
    Route::get('/blog-edit/{id}','BlogController@edit_blog')->name('admin.blog.edit');
    Route::post('/blog-update/{id}','BlogController@update_blog')->name('admin.blog.update');
    Route::post('/blog-delete/{id}','BlogController@delete_blog')->name('admin.blog.delete');
    Route::get('/blog-category','BlogController@category')->name('admin.blog.category');
    Route::post('/blog-category','BlogController@new_category');
    Route::post('/delete-blog-category/{id}','BlogController@delete_category')->name('admin.blog.category.delete');
    Route::post('/update-blog-category','BlogController@update_category')->name('admin.blog.category.update');
    Route::post('/blog-lang-by-cat','BlogController@Language_by_slug')->name('admin.blog.lang.cat');

    //user role management
    Route::get('/new-user','UserRoleManageController@new_user')->name('admin.new.user');
    Route::post('/new-user','UserRoleManageController@new_user_add');
    Route::post('/user-update','UserRoleManageController@user_update')->name('admin.user.update');
    Route::post('/user-password-chnage','UserRoleManageController@user_password_change')->name('admin.user.password.change');
    Route::post('/delete-user/{id}','UserRoleManageController@new_user_delete')->name('admin.delete.user');
    Route::get('/all-user','UserRoleManageController@all_user')->name('admin.all.user');

    //admin settings
    Route::get('/settings','AdminDashboardController@admin_settings')->name('admin.profile.settings');
    Route::get('/profile-update','AdminDashboardController@admin_profile')->name('admin.profile.update');
    Route::post('/profile-update','AdminDashboardController@admin_profile_update');
    Route::get('/password-change','AdminDashboardController@admin_password')->name('admin.password.change');
    Route::post('/password-change','AdminDashboardController@admin_password_chagne');

    //form builder routes
    Route::get('/form-builder/quote-form','FormBuilderController@quote_form_index')->name('admin.form.builder.quote');
    Route::post('/form-builder/quote-form','FormBuilderController@update_quote_form');
    Route::get('/form-builder/order-form','FormBuilderController@order_form_index')->name('admin.form.builder.order');
    Route::post('/form-builder/order-form','FormBuilderController@update_order_form');
    Route::get('/form-builder/contact-form','FormBuilderController@contact_form_index')->name('admin.form.builder.contact');
    Route::post('/form-builder/contact-form','FormBuilderController@update_contact_form');
    Route::get('/form-builder/call-back-form','FormBuilderController@call_back_form_index')->name('admin.form.builder.call.back');
    Route::post('/form-builder/call-back-form','FormBuilderController@update_call_back_form');


    //general settings
    Route::get('/general-settings/site-identity','AdminDashboardController@site_identity')->name('admin.general.site.identity');
    Route::post('/general-settings/site-identity','AdminDashboardController@update_site_identity');
    Route::get('/general-settings/basic-settings','AdminDashboardController@basic_settings')->name('admin.general.basic.settings');
    Route::post('/general-settings/basic-settings','AdminDashboardController@update_basic_settings');
    Route::get('/general-settings/seo-settings','AdminDashboardController@seo_settings')->name('admin.general.seo.settings');
    Route::post('/general-settings/seo-settings','AdminDashboardController@update_seo_settings');
    Route::get('/general-settings/scripts','AdminDashboardController@scripts_settings')->name('admin.general.scripts.settings');
    Route::post('/general-settings/scripts','AdminDashboardController@update_scripts_settings');
    Route::get('/general-settings/email-template','AdminDashboardController@email_template_settings')->name('admin.general.email.template');
    Route::post('/general-settings/email-template','AdminDashboardController@update_email_template_settings');

    Route::get('/general-settings/email-settings','AdminDashboardController@email_settings')->name('admin.general.email.settings');
    Route::post('/general-settings/email-settings','AdminDashboardController@update_email_settings');

    Route::get('/general-settings/typography-settings','AdminDashboardController@typography_settings')->name('admin.general.typography.settings');
    Route::post('/general-settings/typography-settings','AdminDashboardController@update_typography_settings');

    //new settings
    Route::get('/general-settings/cache-settings','AdminDashboardController@cache_settings')->name('admin.general.cache.settings');
    Route::post('/general-settings/cache-settings','AdminDashboardController@update_cache_settings');
    Route::get('/general-settings/page-settings','AdminDashboardController@page_settings')->name('admin.general.page.settings');
    Route::post('/general-settings/page-settings','AdminDashboardController@update_page_settings');
    
    Route::get('/general-settings/backup-settings','AdminDashboardController@backup_settings')->name('admin.general.backup.settings');
    Route::post('/general-settings/backup-settings','AdminDashboardController@update_backup_settings');
    Route::post('/general-settings/backup-settings/delete','AdminDashboardController@delete_backup_settings')->name('admin.general.backup.settings.delete');
    Route::post('/general-settings/backup-settings/restore','AdminDashboardController@restore_backup_settings')->name('admin.general.backup.settings.restore');

    Route::get('/general-settings/update-system','AdminDashboardController@update_system')->name('admin.general.update.system');
    Route::post('/general-settings/update-system','AdminDashboardController@update_system_version');
    Route::get('/general-settings/license-setting','AdminDashboardController@license_settings')->name('admin.general.license.settings');
    Route::post('/general-settings/license-setting','AdminDashboardController@update_license_settings');
    Route::get('/general-settings/custom-css','AdminDashboardController@custom_css_settings')->name('admin.general.custom.css');
    Route::post('/general-settings/custom-css','AdminDashboardController@update_custom_css_settings');

    //language
    Route::get('/languages','LanguageController@index')->name('admin.languages');
    Route::get('/languages/words/edit/{id}','LanguageController@edit_words')->name('admin.languages.words.edit');
    Route::post('/languages/words/update/{id}','LanguageController@update_words')->name('admin.languages.words.update');
    Route::post('/languages/new','LanguageController@store')->name('admin.languages.new');
    Route::post('/languages/update','LanguageController@update')->name('admin.languages.update');
    Route::post('/languages/delete/{id}','LanguageController@delete')->name('admin.languages.delete');
    Route::post('/languages/default/{id}','LanguageController@make_default')->name('admin.languages.default');

});
