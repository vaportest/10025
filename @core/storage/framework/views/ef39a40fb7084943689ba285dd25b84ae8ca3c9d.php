<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Order For')); ?> <?php echo e(' : '.$order_details->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="order-service-page-content-area padding-100">
        <div class="container">
            <div class="row reorder-xs justify-content-between ">
                <div class="col-lg-6">
                    <div class="order-content-area padding-top-70">
                        <h3 class="order-title"><?php echo e(get_static_option('order_page_'.get_user_lang().'_form_title')); ?></h3>
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
                        <?php if(env('APP_ENV') == 'development' ): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                You can build this form using admin panel <strong>Drag & Drop Form Builder</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('frontend.order.message')); ?>" method="post" enctype="multipart/form-data" class="contact-form order-form">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="package" value="<?php echo e($order_details->id); ?>">
                            <input type="hidden" name="captcha_token" id="gcaptcha_token">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        $form_fields = json_decode(get_static_option('order_page_form_fields'));
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
                                    <button class="submit-btn" type="submit"><?php echo e(__('Order Package')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content-area">
                        <div class="pricing-table-15">
                            <div class="price-header">
                                <div class="icon"><i class="<?php echo e($order_details->icon); ?>"></i></div>
                                <h3 class="title"><?php echo e($order_details->title); ?></h3>
                            </div>

                            <div class="price">
                                <span class="dollar"></span><?php echo e($order_details->price); ?><span class="month"><?php echo e($order_details->type); ?></span>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <?php
                                        $features = explode(';',$order_details->features);
                                    ?>
                                    <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($item); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <?php if(!empty($order_details->url_status)): ?>
                                    <a class="order-btn" href="<?php echo e(route('frontend.plan.order',$order_details->id)); ?>"><?php echo e($order_details->btn_text); ?></a>
                                <?php else: ?>
                                    <a class="order-btn" href="<?php echo e($order_details->btn_url); ?>"><?php echo e($order_details->btn_text); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>", {action: 'homepage'}).then(function(token) {
                document.getElementById('gcaptcha_token').value = token;
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/frontend/pages/order-page.blade.php ENDPATH**/ ?>