
<?php if(!empty(get_static_option('home_page_support_bar_section_status'))): ?>
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="topbar-inner">
                        <div class="left-contnet">
                            <ul class="social-icon">
                                <?php $__currentLoopData = $all_social_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($data->url); ?>"><i class="<?php echo e($data->icon); ?>"></i></a></li>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="right-contnet">
                            <?php if(!empty($top_menu->content)): ?>
                            <ul class="info-menu">
                                <?php $menu_content = json_decode($top_menu->content); ?>
                                <?php $__currentLoopData = $menu_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php $link = str_replace('[url]',url('/'),$data->menuUrl) ?>
                                    <a href="<?php echo e($link); ?>"><?php echo e(__($data->menuTitle)); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>
                            <select id="langchange">
                                <?php $__currentLoopData = $all_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if(session()->get('lang') == $lang->slug): ?> selected <?php endif; ?> value="<?php echo e($lang->slug); ?>"><?php echo e($lang->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="info-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-bar-inner">
                    <div class="logo-wrapper desktop-logo">
                        <a href="<?php echo e(url('/')); ?>" class="logo">
                            <?php if(file_exists('assets/uploads/'.get_static_option('site_logo'))): ?>
                                <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_logo'))); ?>" alt="site logo">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="right-content">
                        <ul class="info-items">
                            <?php $__currentLoopData = $all_support_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="single-info-item">
                                    <div class="icon">
                                        <i class="<?php echo e($data->icon); ?>"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><?php echo e($data->title); ?></h5>
                                        <span class="details"><?php echo e($data->details); ?></span>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="request-quote">
                            <a href="<?php echo e(route('frontend.request.quote')); ?>" class="rq-btn"><?php echo e(get_static_option('top_bar_'.get_user_lang().'_button_text')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-area navbar-expand-lg nav-style-01">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper mobile-logo">
                <a href="<?php echo e(url('/')); ?>" class="logo">
                    <?php if(file_exists('assets/uploads/'.get_static_option('site_logo'))): ?>
                        <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_logo'))); ?>" alt="site logo">
                    <?php endif; ?>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
            <ul class="navbar-nav">
                <?php if(!empty($primary_menu->content)): ?>
                    <?php
                        $cc = 0;
                        $parent_item_count = 0;
                       $menu_content = json_decode($primary_menu->content);
                       $static_page_list = ['About','Service','Faq','Team','Work']
                    ?>
                    <?php $__currentLoopData = $menu_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            if ($cc > 0 && $cc == $parent_item_count){ print '</ul>'; $cc = 0; }
                           if (!empty($data->parent_id) && $data->depth > 0){
                                if  ($cc == 0){
                                    print '<ul class="sub-menu">';
                                    $parent_item_count = get_child_menu_count($menu_content,$data->parent_id);
                                }else{  print '</li>'; }
                            }else{ print '</li>'; }
                        ?>
                        <li class="<?php if(request()->path() == substr($data->menuUrl,6)): ?> current-menu-item <?php endif; ?>">
                            <?php $link = (in_array($data->menuTitle,$static_page_list)) ? url('/').'/'.get_static_option(strtolower($data->menuTitle).'_page_'.get_user_lang().'_slug') :  str_replace('[url]',url('/'),$data->menuUrl) ?>
                            <a href="<?php echo e($link); ?>"><?php if(in_array($data->menuTitle,$static_page_list)): ?> <?php echo e(get_static_option(strtolower($data->menuTitle).'_page_'.get_user_lang().'_name')); ?> <?php else: ?> <?php echo e(__($data->menuTitle)); ?> <?php endif; ?></a>
                        <?php if (!empty($data->parent_id) && $data->depth > 0){ $cc++;} ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <li class="<?php if(request()->path() == '/'): ?> current-menu-item <?php endif; ?>">
                        <a  href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<header class="header-area-wrapper header-carousel-two bizzcox-rtl-slider">
    <?php $__currentLoopData = $all_header_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="header-area header-bg"
             <?php if(file_exists('assets/uploads/header-sliders/header-slider-image-'.$data->id.'.'.$data->image)): ?>
             style="background-image: url(<?php echo e(asset('assets/uploads/header-sliders/header-slider-image-'.$data->id.'.'.$data->image)); ?>)"
                <?php endif; ?>
        >
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-inner">
                            <h1 class="title"><?php echo e($data->title); ?></h1>
                            <p><?php echo e($data->description); ?></p>
                            <div class="btn-wrapper  desktop-left padding-top-20">
                                <?php if(!empty($data->btn_01_status)): ?>
                                    <a href="<?php echo e($data->btn_01_url); ?>" class="boxed-btn btn-rounded white"><?php echo e($data->btn_01_text); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</header>

<div class="header-bottom-area section-bg-1">
    <div class="container">
        <div class="row">
            <?php if(!empty(get_static_option('home_page_key_feature_section_status'))): ?>
            <div class="col-lg-6">
                <div class="left-content-area dark-bg">
                    <?php $__currentLoopData = $all_key_features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="icon-box-one margin-bottom-30 white">
                        <div class="icon">
                            <i class="<?php echo e($data->icon); ?>"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><?php echo e($data->title); ?></h4>
                            <p><?php echo e($data->description); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if(!empty(get_static_option('home_page_about_us_section_status'))): ?>
            <div class="col-lg-6">
                <div class="right-content-area"
                <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_background_image'))): ?>
                    style="background-image: url(<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_background_image'))); ?>)"
                <?php endif; ?>
                >
                    <h4 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_title')); ?></h4>
                    <p> <?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_description')); ?></p>
                    <div class="sign">
                        <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_signature_image'))): ?>
                            <img src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_signature_image'))); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <h4 class="name"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_signature_text')); ?></h4>
                    <?php if(get_static_option('home_page_01_'.get_user_lang().'_about_us_button_status')): ?>
                    <div class="btn-wrapper desktop-left">
                        <a href="<?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_button_url')); ?>" class="boxed-btn btn-rounded"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_button_title')); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if(!empty(get_static_option('home_page_service_section_status'))): ?>
    <section class="our-cover-area section-bg-1 padding-top-110 padding-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title desktop-center margin-bottom-55">
                        <h2 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_service_area_title')); ?></h2>
                        <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_service_area_description')); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $all_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-two margin-bottom-30">
                            <div class="icon">
                                <i class="<?php echo e($data->icon); ?>"></i>
                            </div>
                            <div class="content">
                                <a href="<?php echo e(route('frontend.services.single',['id' => $data->id,'any' => Str::slug($data->title)])); ?>"><h4 class="title"><?php echo e($data->title); ?></h4></a>
                                <p> <?php echo e($data->excerpt); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php endif; ?>
<?php if(!empty(get_static_option('home_page_call_to_action_section_status'))): ?>
<section class="cta-area-one cta-bg-one padding-top-95 padding-bottom-100"
<?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_cta_background_image'))): ?>
   style="background-image: url(<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_cta_background_image'))); ?>)"
<?php endif; ?>
>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="left-content-area">
                    <h3 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_cta_area_title')); ?></h3>
                    <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_cta_area_description')); ?></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-content-area">
                    <div class="btn-wrapper">
                        <a href="<?php echo e(get_static_option('home_page_01_'.get_user_lang().'_cta_area_button_url')); ?>" class="boxed-btn btn-rounded white"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_cta_area_button_title')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_recent_work_section_status'))): ?>
<section class="our-work-area padding-top-110 padding-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-55">
                    <h2 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_recent_work_title')); ?></h2>
                    <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_recent_work_description')); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="our-work-carousel">
                    <?php $__currentLoopData = $all_work; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-work-item">
                            <div class="thumb">
                                <?php if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)): ?>
                                    <img src="<?php echo e(asset('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e($data->title); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="<?php echo e(route('frontend.work.single',['id' => $data->id,'any' => Str::slug($data->title)])); ?>"> <?php echo e($data->title); ?></a></h4>
                                <div class="cats">
                                    <?php
                                        $all_cat_of_post = get_work_category_by_id($data->id);
                                    ?>
                                    <?php $__currentLoopData = $all_cat_of_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $work_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('frontend.works.category',['id' => $key,'any'=> Str::slug($work_cat)])); ?>"><?php echo e($work_cat); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_counterup_section_status'))): ?>
<div class="counterup-area counterup-bg padding-top-115 padding-bottom-115"
<?php if(file_exists('assets/uploads/'.get_static_option('home_01_counterup_bg_image'))): ?>
style="background-image: url(<?php echo e(asset('assets/uploads/'.get_static_option('home_01_counterup_bg_image'))); ?>);"
<?php endif; ?>

>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $all_counterup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6">
                <div class="singler-counterup-item-01 white">
                    <div class="icon">
                        <i class="<?php echo e($data->icon); ?>" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <div class="count-wrap"><span class="count-num"><?php echo e($data->number); ?></span><?php echo e($data->extra_text); ?></div>
                        <h4 class="title"><?php echo e($data->title); ?></h4>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_price_plan_section_status'))): ?>
<section class="price-plan-area  padding-top-110 padding-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-55">
                    <h2 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_price_plan_section_title')); ?></h2>
                    <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_price_plan_section_description')); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="price-carousel">
                    <?php $__currentLoopData = $all_price_plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="pricing-table-15">
                        <div class="price-header">
                            <div class="icon"><i class="<?php echo e($data->icon); ?>"></i></div>
                            <h3 class="title"><?php echo e($data->title); ?></h3>
                        </div>

                        <div class="price">
                            <span class="dollar"></span><?php echo e($data->price); ?><span class="month"><?php echo e($data->type); ?></span>
                        </div>
                        <div class="price-body">
                            <ul>
                                <?php
                                    $features = explode(';',$data->features);
                                ?>
                                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($item); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <?php if(!empty($data->url_status)): ?>
                            <a class="order-btn" href="<?php echo e(route('frontend.plan.order',$data->id)); ?>"><?php echo e($data->btn_text); ?></a>
                            <?php else: ?>
                            <a class="order-btn" href="<?php echo e($data->btn_url); ?>"><?php echo e($data->btn_text); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_team_member_section_status'))): ?>
<section class="meet-the-team-area section-bg-1 padding-top-110 padding-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-55">
                    <h2 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_team_member_section_title')); ?></h2>
                    <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_team_member_section_description')); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-carousel">
                    <?php $__currentLoopData = $all_team_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-team-member-one">
                        <div class="thumb">
                            <?php if(file_exists('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)): ?>
                                <img  src="<?php echo e(asset('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e(__($data->name)); ?>">
                            <?php endif; ?>
                            <div class="hover">
                                <?php
                                    $social_fields = array(
                                        'icon_one' => 'icon_one_url',
                                        'icon_two' => 'icon_two_url',
                                        'icon_three' => 'icon_three_url',
                                    );
                                ?>
                                <ul class="social-icon">
                                    <?php $__currentLoopData = $social_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($data->$value); ?>"><i class="<?php echo e($data->$key); ?>"></i></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="name"><?php echo e($data->name); ?></h4>
                            <span class="designation"><?php echo e($data->designation); ?></span>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_testimonial_section_status'))): ?>
<section class="testimonial-area testimonial-bg padding-top-110 padding-bottom-120"
<?php if(file_exists('assets/uploads/'.get_static_option('home_01_testimonial_bg'))): ?>
    style="background-image: url(<?php echo e(asset('assets/uploads/'.get_static_option('home_01_testimonial_bg'))); ?>)"
<?php endif; ?>
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="testimonial-carousel">
                    <?php $__currentLoopData = $all_testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-testimonial-item white">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <p><?php echo e($data->description); ?> </p>
                        <div class="author-meta">
                            <h4 class="name"><?php echo e($data->name); ?></h4>
                            <span class="designation"><?php echo e($data->designation); ?></span>
                        </div>
                        <div class="thumb">
                            <?php if(file_exists('assets/uploads/testimonial/testimonial-grid-'.$data->id.'.'.$data->image)): ?>
                                <img src="<?php echo e(asset('assets/uploads/testimonial/testimonial-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e(__($data->name)); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_latest_news_section_status'))): ?>
<section class="latest-news padding-top-110 padding-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-55">
                    <h2 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_latest_news_title')); ?></h2>
                    <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_latest_news_description')); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="latest-news-carousel">
                    <?php $__currentLoopData = $all_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-blog-grid-01">
                            <div class="thumb">
                                <?php if(file_exists('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)): ?>
                                    <img src="<?php echo e(asset('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e($data->title); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="<?php echo e(route('frontend.blog.single',['id' => $data->id,'any' => Str::slug($data->title)])); ?>"><?php echo e($data->title); ?></a></h4>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="fa fa-calendar"></i> <?php echo e(date_format($data->created_at,'d M y')); ?></a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo e($data->user->username); ?></a></li>
                                    <li><div class="cats"><i class="fa fa-calendar"></i><a href="<?php echo e(route('frontend.blog.category',['id' => $data->category->id,'any' => Str::slug($data->category->name)])); ?>"> <?php echo e($data->category->name); ?></a></div></li>
                                </ul>
                                <p><?php echo e($data->excerpt); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_brand_logo_section_status'))): ?>
    <div class="brand-logo-area section-bg-1 padding-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-carousel">
                        <?php $__currentLoopData = $all_brand_logo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-carousel">
                                <?php if(file_exists('assets/uploads/brands/brand-image-'.$data->id.'.'.$data->image)): ?>
                                    <img src="<?php echo e(asset('assets/uploads/brands/brand-image-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e($data->title); ?>">
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_newsletter_section_status'))): ?>
<?php echo $__env->make('frontend.partials.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/xgenxchi/public_html/laravel/dizzcox/rtl/@core/resources/views/frontend/home-pages/home-01.blade.php ENDPATH**/ ?>