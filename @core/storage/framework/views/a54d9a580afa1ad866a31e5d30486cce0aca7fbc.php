<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Site Identity')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__("Site Identity Settings")); ?></h4>
                        <form action="<?php echo e(route('admin.general.site.identity')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="img-wrapper" style="margin: 20px;">
                                <?php if(file_exists('assets/uploads/'.get_static_option('site_logo'))): ?>
                                    <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_logo'))); ?>" alt="site logo">
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="site_logo"><strong><?php echo e(__('Site Logo')); ?></strong></label>
                                <input type="file" name="site_logo"  class="form-control" id="site_logo">
                                <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png. max image size 2MB, Recommended image size 160x50')); ?></small>
                            </div>
                            <div class="img-wrapper" style="margin: 20px;">
                                <?php if(file_exists('assets/uploads/'.get_static_option('site_white_logo'))): ?>
                                    <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_white_logo'))); ?>" alt="site logo">
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="site_white_logo"><strong><?php echo e(__('White Site Logo')); ?></strong></label>
                                <input type="file" name="site_white_logo"  class="form-control" id="site_white_logo">
                                <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png. max image size 2MB, Recommended image size 160x50')); ?></small>
                            </div>
                            <div class="img-wrapper" style="margin: 20px;">
                                <?php if(file_exists('assets/uploads/'.get_static_option('site_favicon'))): ?>
                                    <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_favicon'))); ?>" alt="site logo">
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="site_favicon"><?php echo e(__('Favicon')); ?></label>
                                <input type="file" name="site_favicon" class="form-control" id="site_favicon">
                                <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png. max image size 2MB, Recommended image size 40x40')); ?></small>
                            </div>
                            <div class="img-wrapper" style="margin: 20px;">
                                <?php if(file_exists('assets/uploads/'.get_static_option('site_breadcrumb_bg'))): ?>
                                    <img  style="max-width: 300px;" src="<?php echo e(asset('assets/uploads/'.get_static_option('site_breadcrumb_bg'))); ?>" alt="breadcrumb image">
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="site_favicon"><?php echo e(__('Breadcrumb Image')); ?></label>
                                <input type="file" name="site_breadcrumb_bg" class="form-control" id="site_breadcrumb_bg">
                                <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png. max image size 2MB, Recommended image size 1920x600')); ?></small>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/general-settings/site-identity.blade.php ENDPATH**/ ?>