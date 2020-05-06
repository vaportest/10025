<?php if(!empty(get_static_option('home_page_support_bar_section_status'))): ?>
<div class="info-bar-area style-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-bar-inner">
                    <div class="left-content">
                        <ul class="info-items-two">
                            <?php $__currentLoopData = $all_support_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="single-info-item">
                                        <div class="icon">
                                            <i class="<?php echo e($data->icon); ?>"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><?php echo e($data->title); ?>: <span class="details"><?php echo e($data->details); ?></span></h5>

                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>
                    <div class="right-content">
                        <ul class="social-icon">

                            <li class="title"><?php echo e(__('Follow:')); ?></li>
                            <?php $__currentLoopData = $all_social_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($data->url); ?>"><i class="<?php echo e($data->icon); ?>"></i></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
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
<div class="header-top-style-03">
    <nav class="navbar navbar-area navbar-expand-lg nav-style-02">
        <div class="container nav-container">
            <div class="navbar-brand">
                <a href="<?php echo e(url('/')); ?>" class="logo">
                    <?php if(file_exists('assets/uploads/'.get_static_option('site_white_logo'))): ?>
                        <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_white_logo'))); ?>" alt="site logo">
                    <?php endif; ?>
                </a>
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
            <?php if(!empty(get_static_option('navbar_button'))): ?>
            <div class="nav-right-content">
                <a href="<?php echo e(route('frontend.request.quote')); ?>" class="get-quote"><?php echo e(get_static_option('navbar_'.get_user_lang().'_button_text')); ?></a>
            </div>
            <?php endif; ?>
        </div>
    </nav>
</div>

<header class="header-area-wrapper header-carousel-two">
    <?php $__currentLoopData = $all_header_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="header-area style-03 header-bg"
             <?php if(file_exists('assets/uploads/header-sliders/header-slider-image-'.$data->id.'.'.$data->image)): ?>
             style="background-image: url(<?php echo e(asset('assets/uploads/header-sliders/header-slider-image-'.$data->id.'.'.$data->image)); ?>)"
             <?php endif; ?>>
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
<?php if(!empty(get_static_option('home_page_key_feature_section_status'))): ?>
<div class="header-bottom-area-three section-bg-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="header-bottom-list">
                    <?php $__currentLoopData = $all_key_features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="single-header-bottom-list-item">
                                <span class="bg-icon"><i class="<?php echo e($data->icon); ?>"></i></span>
                                <div class="icon">
                                    <i class="<?php echo e($data->icon); ?>"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><?php echo e($data->title); ?></h4>
                                    <p><?php echo e($data->description); ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_about_us_section_status'))): ?>
<section class="aboutus-area padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="aboutus-content-block style-02">
                    <h3 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_title')); ?></h3>
                    <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_description')); ?></p>
                    <?php if(get_static_option('home_page_01_'.get_user_lang().'_about_us_button_status')): ?>
                        <div class="btn-wrapper desktop-left">
                            <a href="<?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_button_url')); ?>" class="boxed-btn btn-rounded"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_button_title')); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="img-block-width-counterup">
                    <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_experience_background_image'))): ?>
                        <img  src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_experience_background_image'))); ?>" alt="">
                    <?php endif; ?>
                    <div class="hover">
                        <div class="count-wrap"><span class="count-num"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_experience_year')); ?></span>+</div>
                        <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_experience_title')); ?></p>
                    </div>
                </div>
                <div class="content-block-with-sign margin-top-30">
                    <h4 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_quote_box_title')); ?></h4>
                    <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_quote_box_description')); ?></p>
                    <div class="sign">
                        <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_signature_image'))): ?>
                            <img src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_signature_image'))); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <span class="designation"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_about_us_signature_text')); ?></span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-block margin-left-20">
                    <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_right_image'))): ?>
                        <img src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_right_image'))); ?>" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(!empty(get_static_option('home_page_service_section_status'))): ?>
<section class="our-cover-area padding-top-110 padding-bottom-90 bg-image"
<?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_service_area_background_image'))): ?>
         style="background-image: url(<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_service_area_background_image'))); ?>)"
<?php endif; ?>
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-50">
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
                        <p><?php echo e($data->excerpt); ?></p>
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
<?php if(!empty(get_static_option('home_page_testimonial_section_status'))): ?>
<div class="testimonial-two-area bg-image padding-120"
     style="background-image: url(<?php echo e(asset('assets/frontend/img/bg/testimonial-bg-3.jpg')); ?>)"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel-two">
                    <?php $__currentLoopData = $all_testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-testimonial-item-02">
                            <div class="description">
                                <div class="icon">
                                    <i class="flaticon-left-quote"></i>
                                </div>
                                <div class="content">
                                    <p><?php echo e($data->description); ?> </p>
                                    <h4 class="name"><?php echo e($data->name); ?></h4>
                                    <span class="designation"><?php echo e($data->designation); ?></span>
                                </div>
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
</div>
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
<?php if(!empty(get_static_option('home_page_faq_section_status'))): ?>
<section class="faq-area bg-image padding-120"
<?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_faq_area_background_image'))): ?>
style="background-image: url(<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_faq_area_background_image'))); ?>)"
<?php endif; ?>

>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content-area">
                    <div class="section-title desktop-left tablet-center mobile-center margin-bottom-55">
                        <h2 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_faq_area_title')); ?></h2>
                        <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_faq_area_description')); ?></p>
                    </div>
                        <div class="accordion-wrapper">
                            <?php $rand_number = rand(9999,99999999); ?>
                            <div id="accordion_<?php echo e($rand_number); ?>">
                                <?php $__currentLoopData = $all_faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $aria_expanded = 'false';
                                        if($data->is_open == 'on'){ $aria_expanded = 'true'; }
                                    ?>
                                    <div class="card">
                                        <div class="card-header" id="headingOne_<?php echo e($key); ?>">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-target="#collapseOne_<?php echo e($key); ?>" role="button"
                                                   aria-expanded="<?php echo e($aria_expanded); ?>" aria-controls="collapseOne_<?php echo e($key); ?>">
                                                    <?php echo e($data->title); ?>

                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapseOne_<?php echo e($key); ?>" class="collapse <?php if($data->is_open == 'on'): ?> show <?php endif; ?> "
                                             aria-labelledby="headingOne_<?php echo e($key); ?>" data-parent="#accordion_<?php echo e($rand_number); ?>">
                                            <div class="card-body">
                                                <?php echo e($data->description); ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content-area">
                    <div class="request-call">
                        <h4 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_faq_area_form_title')); ?></h4>
                        <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_faq_area_form_description')); ?></p>
                        <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                        <form action="<?php echo e(route('frontend.call.back.message')); ?>" class="request-call-form margin-top-60" enctype="multipart/form-data" method="post">
                            <?php echo csrf_field(); ?>
                            <?php
                                $form_fields = json_decode(get_static_option('call_back_page_form_fields'));
                                $select_index = 0;
                                $options = [];
                            ?>
                            <?php $__currentLoopData = $form_fields->field_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!empty($value)): ?>
                                    <?php if($value == 'select'): ?> <?php $options = explode(';',$form_fields->select_options[$select_index]);?> <?php endif; ?>
                                    <?php $required = isset($form_fields->field_required->$key) ? $form_fields->field_required->$key : '' ?>
                                    <?php $mimes = isset($form_fields->mimes_type->$key) ? $form_fields->mimes_type->$key : '' ?>
                                    <?php echo get_field_by_type($value,$form_fields->field_name[$key],$form_fields->field_placeholder[$key],$options,$required,$mimes); ?>

                                    <?php if($value == 'select'): ?> <?php $select_index++?> <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <button type="submit" class="submit-btn white"><?php echo e(__('Submit')); ?></button>
                        </form>
                    </div>
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
                                    <li><div class="cats"><i class="fa fa-calendar"></i><a href="#"> Business</a></div></li>
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
<?php endif; ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/frontend/home-pages/home-03.blade.php ENDPATH**/ ?>