<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('404')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="error-page-content padding-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="error-area">
                       <h1 class="title"><?php echo e(__('404')); ?></h1>
                        <p><?php echo e(__('It looks like nothing was found at this location.')); ?></p>
                       <div class="btn-wrapper">
                           <a href="<?php echo e(url('/')); ?>" class="boxed-btn"><?php echo e(__('Back To Home')); ?></a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/dizzcox/rtl/@core/resources/views/frontend/pages/404.blade.php ENDPATH**/ ?>