<div class="widget-area">
    <div class="widget widget_search">
        <form action="<?php echo e(route('frontend.blog.search')); ?>" method="get" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" name="search" placeholder="<?php echo e(__('Search')); ?>">
            </div>
            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="widget widget_nav_menu">
        <h2 class="widget-title"><?php echo e(get_static_option('blog_page_'.get_user_lang().'_category_widget_title')); ?></h2>
        <ul>
            <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route('frontend.blog.category',['id' => $data->id,'any'=> Str::slug($data->name,'-')])); ?>"><?php echo e(ucfirst($data->name)); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    <div class="widget widget_recent_posts">
        <h4 class="widget-title"><?php echo e(get_static_option('blog_page_'.get_user_lang().'_recent_post_widget_title')); ?></h4>
        <ul class="recent_post_item">
            <?php $__currentLoopData = $all_recent_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="single-recent-post-item">
                    <div class="thumb">
                        <?php if(file_exists('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)): ?>
                            <img src="<?php echo e(asset('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e($data->title); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="<?php echo e(route('frontend.blog.single',['id' => $data->id, 'any' => Str::slug($data->title,'-')])); ?>"><?php echo e($data->title); ?></a></h4>
                        <span class="time"><?php echo e(date_format($data->created_at,'d M y')); ?></span>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/frontend/partials/sidebar.blade.php ENDPATH**/ ?>