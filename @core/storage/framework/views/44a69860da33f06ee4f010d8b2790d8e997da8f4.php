<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Google Mp Section')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Google Map Section Settings')); ?></h4>
                        <p class="margin-bottom-30"><?php echo e(__('Don\'t forget to put your google map api key in general setting > Third Party Scripts')); ?></p>
                        <form action="<?php echo e(route('admin.contact.page.map')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="contact_page_map_section_latitude"><?php echo e(__('Latitude')); ?></label>
                                <input type="text" name="contact_page_map_section_latitude" value="<?php echo e(get_static_option('contact_page_map_section_latitude')); ?>" class="form-control" id="contact_page_map_section_latitude">
                            </div>
                            <div class="form-group">
                                <label for="contact_page_map_section_longitude"><?php echo e(__('Longitude')); ?></label>
                                <input type="text" name="contact_page_map_section_longitude" value="<?php echo e(get_static_option('contact_page_map_section_longitude')); ?>" class="form-control" id="contact_page_map_section_longitude">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/pages/contact-page/google-map-section.blade.php ENDPATH**/ ?>