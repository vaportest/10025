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
<?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/frontend/partials/navbar.blade.php ENDPATH**/ ?>