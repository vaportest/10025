<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="<?php echo e(route('admin.home')); ?>">
                <?php if(file_exists('assets/uploads/'.get_static_option('site_logo'))): ?>
                    <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_logo'))); ?>" alt="<?php echo e(get_static_option('site_title')); ?>">
                <?php endif; ?>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="<?php echo e(active_menu('admin-home')); ?>">
                        <a href="<?php echo e(route('admin.home')); ?>"
                           aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span><?php echo app('translator')->get('dashboard'); ?></span>
                        </a>
                    </li>
                    <?php if('super_admin' == auth()->user()->role): ?>
                    <li
                        class="
                        <?php echo e(active_menu('admin-home/new-user')); ?>

                        <?php echo e(active_menu('admin-home/all-user')); ?>

                        "
                    >
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i> <span><?php echo e(__('Admin Role Manage')); ?></span></a>
                        <ul class="collapse">
                            <li class="<?php echo e(active_menu('admin-home/all-user')); ?>"><a href="<?php echo e(route('admin.all.user')); ?>"><?php echo e(__('All Admin')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/new-user')); ?>"><a href="<?php echo e(route('admin.new.user')); ?>"><?php echo e(__('Add New Admin')); ?></a></li>
                        </ul>
                    </li>
                        <li
                            class="
                            <?php echo e(active_menu('admin-home/newsletter')); ?>

                            <?php if(request()->is('admin-home/newsletter/*')): ?> active <?php endif; ?>
                            "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-email"></i> <span><?php echo e(__('Newsletter Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/newsletter')); ?>"><a href="<?php echo e(route('admin.newsletter')); ?>"><?php echo e(__('All Subscriber')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/newsletter/all')); ?>"><a href="<?php echo e(route('admin.newsletter.mail')); ?>"><?php echo e(__('Send Mail To All')); ?></a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                        <li class="<?php echo e(active_menu('admin-home/home-variant')); ?>">
                            <a href="<?php echo e(route('admin.home.variant')); ?>"
                               aria-expanded="true">
                                <i class="ti-file"></i>
                                <span><?php echo e(__('Home Variant')); ?></span>
                            </a>
                        </li>
                        
                        <li class="<?php echo e(active_menu('admin-home/navbar-settings')); ?>">
                            <a href="<?php echo e(route('admin.navbar.settings')); ?>"
                               aria-expanded="true">
                                <i class="ti-file"></i>
                                <span><?php echo e(__('Nabvar Settings')); ?></span>
                            </a>
                        </li>
                        <li class="<?php if(request()->is('admin-home/home-page-01/*')  ): ?> active <?php endif; ?>
                        <?php echo e(active_menu('admin-home/header')); ?>

                        <?php echo e(active_menu('admin-home/keyfeatures')); ?>

                                ">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-home"></i>
                                <span><?php echo e(__('Home Page Manage')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/header')); ?>">
                                    <a href="<?php echo e(route('admin.header')); ?>" >
                                        <?php echo e(__('Header Area')); ?>

                                    </a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/keyfeatures')); ?>">
                                    <a href="<?php echo e(route('admin.keyfeatures')); ?>"><?php echo e(__('Key Features')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/about-us')); ?>"><a href="<?php echo e(route('admin.homeone.about.us')); ?>"><?php echo e(__('About Us Area')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/service-area')); ?>"><a href="<?php echo e(route('admin.homeone.service.area')); ?>"><?php echo e(__('Service Area')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/cta-area')); ?>"><a href="<?php echo e(route('admin.homeone.cta.area')); ?>"><?php echo e(__('Call To Action Area')); ?></a></li>

                                <li class="<?php echo e(active_menu('admin-home/home-page-01/recent-work')); ?>"><a href="<?php echo e(route('admin.homeone.recent.work')); ?>"><?php echo e(__('Recent Work Area')); ?></a></li>
                                <?php if(get_static_option('home_page_variant') != '03'): ?>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/testimonial')); ?>"><a href="<?php echo e(route('admin.homeone.testimonial')); ?>"><?php echo e(__('Testimonial Area')); ?></a></li>
                                <?php endif; ?>
                                <?php if(get_static_option('home_page_variant') == '03'): ?>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/faq-area')); ?>"><a href="<?php echo e(route('admin.homeone.faq.area')); ?>"><?php echo e(__('FAQ Area')); ?></a></li>
                                <?php endif; ?>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/latest-news')); ?>"><a href="<?php echo e(route('admin.homeone.latest.news')); ?>"><?php echo e(__('Latest News Area')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/team-member')); ?>"> <a href="<?php echo e(route('admin.homeone.team.member')); ?>"><?php echo e(__('Tean Member Area')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/price-plan')); ?>"> <a href="<?php echo e(route('admin.homeone.price.plan')); ?>"><?php echo e(__('Price Plan Area')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/counterup')); ?>"><a href="<?php echo e(route('admin.homeone.counterup')); ?>"><?php echo e(__('Counterup Area')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/newsletter')); ?>"> <a href="<?php echo e(route('admin.homeone.newsletter')); ?>"><?php echo e(__('Newsletter Area')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/home-page-01/section-manage')); ?>"> <a href="<?php echo e(route('admin.homeone.section.manage')); ?>"><?php echo e(__('Section Manage')); ?></a></li>
                            </ul>
                        </li>

                        <li class="<?php if(request()->is('admin-home/about-page/*')  ): ?> active <?php endif; ?> ">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-home"></i>
                                <span><?php echo e(__('About Page Manage')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/about-page/about-us')); ?>"><a href="<?php echo e(route('admin.about.page.about')); ?>"><?php echo e(__('About Us Section')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/about-page/know-about')); ?>"><a href="<?php echo e(route('admin.about.know')); ?>"><?php echo e(__('Know Us Section')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/about-page/section-manage')); ?>"><a href="<?php echo e(route('admin.about.page.section.manage')); ?>"><?php echo e(__('Section Manage')); ?></a></li>
                            </ul>
                        </li>
                        <li class="<?php if(request()->is('admin-home/contact-page/*')  ): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-home"></i>
                                <span><?php echo e(__('Contact Page Manage')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/contact-page/contact-info')); ?>"><a href="<?php echo e(route('admin.contact.info')); ?>"><?php echo e(__('Contact Info')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/contact-page/form-area')); ?>"><a href="<?php echo e(route('admin.contact.page.form.area')); ?>"><?php echo e(__('Form Area')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/contact-page/map')); ?>"><a href="<?php echo e(route('admin.contact.page.map')); ?>"><?php echo e(__('Google Map Area')); ?></a></li>
                            </ul>
                        </li>
                        <li class="<?php echo e(active_menu('admin-home/quote-page')); ?>">
                            <a href="<?php echo e(route('admin.quote.page')); ?>"
                               aria-expanded="true">
                                <i class="ti-dashboard"></i>
                                <span><?php echo e(__('Quote Page Manage')); ?></span>
                            </a>
                        </li>
                        <li class="<?php echo e(active_menu('admin-home/order-page')); ?>">
                            <a href="<?php echo e(route('admin.order.page')); ?>"
                               aria-expanded="true">
                                <i class="ti-dashboard"></i>
                                <span><?php echo e(__('Order Page Manage')); ?></span>
                            </a>
                        </li>
                    <li class="<?php echo e(active_menu('admin-home/topbar')); ?>">
                        <a href="<?php echo e(route('admin.topbar')); ?>"
                           aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span><?php echo e(__('Top Bar Settings')); ?></span>
                        </a>
                    </li>

                    <li class="
                    <?php if(request()->is('admin-home/services/*')): ?> active <?php endif; ?>
                    <?php echo e(active_menu('admin-home/services')); ?>

                            ">
                        <a href="javascript:void(0)"
                           aria-expanded="true">
                            <i class="ti-layout"></i>
                            <span><?php echo e(__('Services')); ?></span>
                        </a>
                        <ul class="collapse">
                            <li class="<?php echo e(active_menu('admin-home/services')); ?>"><a href="<?php echo e(route('admin.services')); ?>"><?php echo e(__('New/All Services')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/services/category')); ?>"><a href="<?php echo e(route('admin.service.category')); ?>"><?php echo e(__('Category')); ?></a></li>
                        </ul>
                    </li>
                    <li class="
                    <?php if(request()->is('admin-home/works/*')): ?> active <?php endif; ?>
                    <?php echo e(active_menu('admin-home/works')); ?>

                            ">
                        <a href="javascript:void(0)"
                           aria-expanded="true">
                            <i class="ti-layout"></i>
                            <span><?php echo e(__('Works')); ?></span>
                        </a>
                        <ul class="collapse">
                            <li class="<?php echo e(active_menu('admin-home/works')); ?>"><a href="<?php echo e(route('admin.work')); ?>"><?php echo e(__('New/All Works')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/works/category')); ?>"><a href="<?php echo e(route('admin.work.category')); ?>"><?php echo e(__('Category')); ?></a></li>
                        </ul>
                    </li>
                    <li class="<?php echo e(active_menu('admin-home/faq')); ?>">
                        <a href="<?php echo e(route('admin.faq')); ?>" aria-expanded="true"><i class="ti-control-forward"></i> <span><?php echo e(__('Faq')); ?></span></a>
                    </li>
                    <li class="<?php echo e(active_menu('admin-home/brands')); ?>">
                        <a href="<?php echo e(route('admin.brands')); ?>" aria-expanded="true"><i class="ti-control-forward"></i> <span><?php echo e(__('Brand Logos')); ?></span></a>
                    </li>
                    <li class="<?php echo e(active_menu('admin-home/price-plan')); ?>">
                        <a href="<?php echo e(route('admin.price.plan')); ?>" aria-expanded="true"><i class="ti-control-forward"></i> <span><?php echo e(__('Price Plan')); ?></span></a>
                    </li>
                    <li class="<?php echo e(active_menu('admin-home/team-member')); ?>">
                        <a href="<?php echo e(route('admin.team.member')); ?>" aria-expanded="true"><i class="ti-control-forward"></i> <span><?php echo e(__('Team Members')); ?></span></a>
                    </li>
                    <li class="<?php echo e(active_menu('admin-home/testimonial')); ?>">
                        <a href="<?php echo e(route('admin.testimonial')); ?>" aria-expanded="true"><i class="ti-control-forward"></i> <span><?php echo e(__('Testimonial')); ?></span></a>
                    </li>
                    <li class="<?php echo e(active_menu('admin-home/blog-page')); ?>">
                        <a href="<?php echo e(route('admin.blog.page')); ?>"
                           aria-expanded="true">
                            <i class="ti-file"></i>
                            <span><?php echo e(__('Blog Page')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(active_menu('admin-home/counterup')); ?>">
                        <a href="<?php echo e(route('admin.counterup')); ?>" aria-expanded="true"><i class="ti-exchange-vertical"></i> <span><?php echo e(__('Counterup')); ?></span></a>
                    </li>

                    <?php if('super_admin' == auth()->user()->role || 'admin' == auth()->user()->role || 'editor' == auth()->user()->role): ?>
                        <li
                                class="
                        <?php echo e(active_menu('admin-home/blog')); ?>

                                <?php echo e(active_menu('admin-home/blog-category')); ?>

                                <?php echo e(active_menu('admin-home/new-blog')); ?>

                                <?php if(request()->is('admin-home/blog-edit/*')): ?> active <?php endif; ?>
                                        "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i> <span><?php echo e(__('Blogs')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/blog')); ?>"><a href="<?php echo e(route('admin.blog')); ?>"><?php echo e(__('All Blog')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/blog-category')); ?>"><a href="<?php echo e(route('admin.blog.category')); ?>"><?php echo e(__('Category')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/new-blog')); ?>"><a href="<?php echo e(route('admin.blog.new')); ?>"><?php echo e(__('Add New Post')); ?></a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if('super_admin' == auth()->user()->role || 'admin' == auth()->user()->role): ?>
                        <li class="<?php if(request()->is('admin-home/form-builder/*')): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-layout"></i>
                                <span><?php echo e(__('Form Builder')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/form-builder/quote-form')); ?>"><a href="<?php echo e(route('admin.form.builder.quote')); ?>"><?php echo e(__('Quote Form')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/form-builder/order-form')); ?>"><a href="<?php echo e(route('admin.form.builder.order')); ?>"><?php echo e(__('Order Form')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/form-builder/contact-form')); ?>"><a href="<?php echo e(route('admin.form.builder.contact')); ?>"><?php echo e(__('Contact Form')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/form-builder/call-back-form')); ?>"><a href="<?php echo e(route('admin.form.builder.call.back')); ?>"><?php echo e(__('Request Call Back Form')); ?></a></li>
                            </ul>
                        </li>
                        <li class="<?php if(request()->is('admin-home/footer/*')): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-layout"></i>
                                <span><?php echo e(__('Footer Area')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/footer/about')); ?>"><a href="<?php echo e(route('admin.footer.about')); ?>"><?php echo e(__('About Widget')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/footer/useful-links')); ?>"><a href="<?php echo e(route('admin.footer.useful.link')); ?>"><?php echo e(__('Useful Links Widget')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/footer/recent-post')); ?>"><a href="<?php echo e(route('admin.footer.recent.post')); ?>"><?php echo e(__('Recent Posts Widget')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/footer/important-links')); ?>"><a href="<?php echo e(route('admin.footer.important.link')); ?>"><?php echo e(__('Important Links Widget')); ?></a></li>
                            </ul>
                        </li>
                        <li
                        class="
                        <?php echo e(active_menu('admin-home/menu')); ?>

                        <?php if(request()->is('admin-home/menu-edit/*')): ?> active <?php endif; ?>
                        "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i> <span><?php echo e(__('Menus Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/menu')); ?>"><a href="<?php echo e(route('admin.menu')); ?>"><?php echo e(__('All Menus')); ?></a></li>
                            </ul>
                        </li>
                        <li
                        class="
                        <?php echo e(active_menu('admin-home/page')); ?>

                        <?php echo e(active_menu('admin-home/new-page')); ?>

                        <?php if(request()->is('admin-home/page-edit/*')): ?> active <?php endif; ?>
                        "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i> <span><?php echo e(__('Pages')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/page')); ?>"><a href="<?php echo e(route('admin.page')); ?>"><?php echo e(__('All Pages')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/new-page')); ?>"><a href="<?php echo e(route('admin.page.new')); ?>"><?php echo e(__('Add New Page')); ?></a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                     <?php if('super_admin' == auth()->user()->role ): ?>
                    <li class="<?php if(request()->is('admin-home/general-settings/*')): ?> active <?php endif; ?>">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-settings"></i> <span><?php echo e(__('General Settings')); ?></span></a>
                        <ul class="collapse ">
                            <li class="<?php echo e(active_menu('admin-home/general-settings/site-identity')); ?>"><a href="<?php echo e(route('admin.general.site.identity')); ?>"><?php echo e(__('Site Identity')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/basic-settings')); ?>"><a href="<?php echo e(route('admin.general.basic.settings')); ?>"><?php echo e(__('Basic Settings')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/typography-settings')); ?>"><a href="<?php echo e(route('admin.general.typography.settings')); ?>"><?php echo e(__('Typography Settings')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/seo-settings')); ?>"><a href="<?php echo e(route('admin.general.seo.settings')); ?>"><?php echo e(__('SEO Settings')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/scripts')); ?>"><a href="<?php echo e(route('admin.general.scripts.settings')); ?>"><?php echo e(__('Third Party Scripts')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/email-template')); ?>"><a href="<?php echo e(route('admin.general.email.template')); ?>"><?php echo e(__('Email Template')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/email-settings')); ?>"><a href="<?php echo e(route('admin.general.email.settings')); ?>"><?php echo e(__('Email Settings')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/page-settings')); ?>"><a href="<?php echo e(route('admin.general.page.settings')); ?>"><?php echo e(__('Page Settings')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/custom-css')); ?>"><a href="<?php echo e(route('admin.general.custom.css')); ?>"><?php echo e(__('Custom Css')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/cache-settings')); ?>"><a href="<?php echo e(route('admin.general.cache.settings')); ?>"><?php echo e(__('Cache Settings')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/backup-settings')); ?>"><a href="<?php echo e(route('admin.general.backup.settings')); ?>"><?php echo e(__('Backup Settings')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/general-settings/license-setting')); ?>"><a href="<?php echo e(route('admin.general.license.settings')); ?>"><?php echo e(__('Licence Settings')); ?></a></li>
                        </ul>
                    </li>
                        <li
                            class="<?php if(request()->is('admin-home/languages/*') || request()->is('admin-home/languages') ): ?> active <?php endif; ?>">
                            <a href="<?php echo e(route('admin.languages')); ?>" aria-expanded="true"><i class="ti-signal"></i> <span><?php echo e(__('Languages')); ?></span></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH /home/xgenxchi/public_html/laravel/dizzcox/rtl/@core/resources/views/backend/partials/sidebar.blade.php ENDPATH**/ ?>