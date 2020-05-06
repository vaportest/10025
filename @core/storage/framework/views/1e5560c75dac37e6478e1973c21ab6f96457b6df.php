<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Contact')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Contact')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-content contact-page padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content-area">
                        <div class="section-title desktop-left margin-bottom-50">
                            <h2 class="title"><?php echo e(get_static_option('contact_page_'.get_user_lang().'_form_section_title')); ?></h2>
                            <p><?php echo e(get_static_option('contact_page_'.get_user_lang().'_form_section_description')); ?></p>
                        </div>
                        <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($message); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('frontend.contact.message')); ?>" method="post" enctype="multipart/form-data" id="contact_form_submit" class="contact-form">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="captcha_token" id="gcaptcha_token">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        $form_fields = json_decode(get_static_option('contact_page_form_fields'));
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
                                </div>
                                <div class="col-lg-12">
                                    <button class="submit-btn" type="submit"><?php echo e(__('Send Message')); ?></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content-area">
                        <ul class="contact-info-list">
                            <?php $__currentLoopData = $all_contact_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="single-contact-info">
                                    <div class="icon">
                                        <i class="<?php echo e($data->icon); ?>"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><?php echo e($data->title); ?></h4>
                                        <?php $desc = explode(';',$data->description) ?>
                                        <?php $__currentLoopData = $desc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="details"><?php echo e($item); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                        <div id="map" data-latitude="<?php echo e(get_static_option('contact_page_map_section_latitude')); ?>" data-longitude="<?php echo e(get_static_option('contact_page_map_section_longitude')); ?>" class="margin-top-40"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(get_static_option('site_google_map_api')); ?>&callback=initMap" async defer></script>
    <script src="<?php echo e(asset('assets/frontend/js/goolge-map-activate.js')); ?>"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>", {action: 'homepage'}).then(function(token) {
                document.getElementById('gcaptcha_token').value = token;
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/dizzcox/rtl/@core/resources/views/frontend/pages/contact-page.blade.php ENDPATH**/ ?>