<?php $img_url = '';?>
<?php if(file_exists('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image)): ?>
    <?php $img_url = asset('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image);?>
<?php endif; ?>
<?php $__env->startSection('og-meta'); ?>
    <meta property="og:url"  content="<?php echo e(route('frontend.work.single',['id' => $work_item->id,'any' => Str::slug($work_item->title)])); ?>" />
    <meta property="og:type"  content="article" />
    <meta property="og:title"  content="<?php echo e($work_item->title); ?>" />
    <meta property="og:image" content="<?php echo e($img_url); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e($work_item->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Work Single')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="work-details-content-area padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="portfolio-details-item">
                        <div class="thumb">
                            <?php $img_url = '';?>
                            <?php if(file_exists('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image)): ?>
                                <img  src="<?php echo e(asset('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image)); ?>" alt="<?php echo e($work_item->title); ?>">
                                <?php $img_url = asset('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image);?>
                            <?php endif; ?>
                        </div>
                        <h2 class="main-title"><?php echo e($work_item->title); ?></h2>
                        <div class="post-description">
                            <?php echo $work_item->description; ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-widget">
                        <div class="project-info-item">
                            <h4 class="title"><?php echo e(__('Project Details')); ?></h4>
                            <ul>
                                <li><?php echo e(__('Start Date:')); ?> <span class="right"><?php echo e($work_item->start_date); ?> </span></li>
                                <li><?php echo e(__('End Date:')); ?> <span class="right"> <?php echo e($work_item->end_date); ?></span></li>
                                <li><?php echo e(__('Clients:')); ?> <span class="right"><?php echo e($work_item->clients); ?> </span></li>
                                <li><?php echo e(__('Category:')); ?> <span class="right"><?php echo e(get_work_category_by_id($work_item->id,'string')); ?></span></li>
                            </ul>
                            <div class="share-area">
                                <h4 class="title"><?php echo e(__('Share')); ?></h4>
                                <ul class="share-icon">
                                    <?php echo single_post_share(route('frontend.work.single',['id' => $work_item->id,'any' => Str::slug($work_item->title)]),$work_item->title,$img_url); ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/frontend/pages/work-single.blade.php ENDPATH**/ ?>