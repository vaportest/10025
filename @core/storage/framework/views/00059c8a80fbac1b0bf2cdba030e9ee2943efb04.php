<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Email Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__("Email Settings")); ?></h4>
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($error); ?></div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <form action="<?php echo e(route('admin.general.email.settings')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="nav-item nav-link <?php if($key == 0): ?> active <?php endif; ?>" id="nav-home-tab" data-toggle="tab" href="#nav-home-<?php echo e($lang->slug); ?>" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo e($lang->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="form-group">
                                            <label for="quote_mail_<?php echo e($lang->slug); ?>_subject"><?php echo e(__('Quote Mail Success Message')); ?></label>
                                            <input type="text" name="quote_mail_<?php echo e($lang->slug); ?>_subject"  class="form-control" value="<?php echo e(get_static_option('quote_mail_'.$lang->slug.'_subject')); ?>" id="quote_mail_<?php echo e($lang->slug); ?>_subject">
                                            <small class="form-text text-muted"><?php echo e(__('this message will show when any one contact your from quote form.')); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="order_mail_<?php echo e($lang->slug); ?>_subject"><?php echo e(__('Order Mail Success Message')); ?></label>
                                            <input type="text" name="order_mail_<?php echo e($lang->slug); ?>_subject"  class="form-control" value="<?php echo e(get_static_option('order_mail_'.$lang->slug.'_subject')); ?>" id="order_mail_<?php echo e($lang->slug); ?>_subject">
                                            <small class="form-text text-muted"><?php echo e(__('this message will show when any one place order.')); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="contact_mail_<?php echo e($lang->slug); ?>_subject"><?php echo e(__('Contact Mail Success Message')); ?></label>
                                            <input type="text" name="contact_mail_<?php echo e($lang->slug); ?>_subject"  class="form-control" value="<?php echo e(get_static_option('contact_mail_'.$lang->slug.'_subject')); ?>" id="contact_mail_<?php echo e($lang->slug); ?>_subject">
                                            <small class="form-text text-muted"><?php echo e(__('this message will show when any one contact you via contact page form.')); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="request_call_back_mail_<?php echo e($lang->slug); ?>_subject"><?php echo e(__('Request Call Back Success Message')); ?></label>
                                            <input type="text" name="request_call_back_mail_<?php echo e($lang->slug); ?>_subject"  class="form-control" value="<?php echo e(get_static_option('request_call_back_mail_'.$lang->slug.'_subject')); ?>" id="request_call_back_mail_<?php echo e($lang->slug); ?>_subject">
                                            <small class="form-text text-muted"><?php echo e(__('this message will show when any one contact you via request call back form.')); ?></small>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/general-settings/email-settings.blade.php ENDPATH**/ ?>