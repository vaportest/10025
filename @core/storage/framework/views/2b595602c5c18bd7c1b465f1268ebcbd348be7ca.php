<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('About Us Area')); ?>

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
                        <h4 class="header-title"><?php echo e(__('About Us Area Settings')); ?></h4>
                        <form action="<?php echo e(route('admin.homeone.about.us')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <?php $__currentLoopData = get_all_language(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($key == 0): ?> active <?php endif; ?>" data-toggle="tab" href="#tab_<?php echo e($key); ?>" role="tab"  aria-selected="true"><?php echo e($lang->name); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="tab-content margin-top-30" id="myTabContent">
                                <?php $__currentLoopData = get_all_language(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="tab_<?php echo e($key); ?>" role="tabpanel" >
                                    <div class="form-group">
                                        <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_title"><?php echo e(__('Title')); ?></label>
                                        <input type="text" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_title" class="form-control" value="<?php echo e(get_static_option('home_page_01_'.$lang->slug.'_about_us_title')); ?>" id="home_page_01_<?php echo e($lang->slug); ?>_about_us_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_description"><?php echo e(__('Description')); ?></label>
                                        <textarea name="home_page_01_<?php echo e($lang->slug); ?>_about_us_description" class="form-control" rows="10" id="home_page_01_<?php echo e($lang->slug); ?>_about_us_description"><?php echo e(get_static_option('home_page_01_'.$lang->slug.'_about_us_description')); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_button_status"><strong><?php echo e(__('Button Show/Hide')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_button_status"  <?php if(!empty(get_static_option('home_page_01_'.$lang->slug.'_about_us_button_status'))): ?> checked <?php endif; ?> id="home_page_01_<?php echo e($lang->slug); ?>_about_us_button_status">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_button_title"><?php echo e(__('Button Title')); ?></label>
                                        <input type="text" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_button_title" class="form-control" value="<?php echo e(get_static_option('home_page_01_'.$lang->slug.'_about_us_button_title')); ?>" id="home_page_01_<?php echo e($lang->slug); ?>_about_us_button_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_button_url"><?php echo e(__('Button URL')); ?></label>
                                        <input type="text" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_button_url" class="form-control" value="<?php echo e(get_static_option('home_page_01_'.$lang->slug.'_about_us_button_url')); ?>" id="home_page_01_<?php echo e($lang->slug); ?>_about_us_button_url">
                                    </div>

                                    <?php if(get_static_option('home_page_variant') == '01' || get_static_option('home_page_variant') == '03'): ?>
                                        <div class="form-group">
                                            <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_signature_text"><?php echo e(__('Signature Text')); ?></label>
                                            <input type="text" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_signature_text" class="form-control" value="<?php echo e(get_static_option('home_page_01_'.$lang->slug.'_about_us_signature_text')); ?>" id="home_page_01_<?php echo e($lang->slug); ?>_about_us_signature_text">
                                        </div>
                                        <div class="img-wrapper">
                                            <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.$lang->slug.'_about_us_signature_image'))): ?>
                                                <img  style="max-width: 200px; margin-top:20px;" src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.$lang->slug.'_about_us_signature_image'))); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_signature_image"><?php echo e(__('Signature Image')); ?></label>
                                            <input type="file" class="form-control"  id="home_page_01_<?php echo e($lang->slug); ?>_about_us_signature_image" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_signature_image">
                                            <small><?php echo e(__('recommended image size is 100x30 pixel')); ?></small>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(get_static_option('home_page_variant') == '01'): ?>
                                    <div class="img-wrapper">
                                        <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.$lang->slug.'_about_us_background_image'))): ?>
                                            <img  style="max-width: 200px; margin-top:20px;" src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.$lang->slug.'_about_us_background_image'))); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_background_image"><?php echo e(__('Background Image')); ?></label>
                                        <input type="file" class="form-control"  id="home_page_01_<?php echo e($lang->slug); ?>_about_us_background_image" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_background_image">
                                        <small><?php echo e(__('recommended image size is 572x470 pixel')); ?></small>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(get_static_option('home_page_variant') == '02' || get_static_option('home_page_variant') == '04'): ?>
                                        <div class="img-wrapper">
                                            <?php if(file_exists('assets/uploads/'.get_static_option('home_page_02_'.$lang->slug.'_about_us_background_image'))): ?>
                                                <img  style="max-width: 200px; margin-top:20px;" src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_02_'.$lang->slug.'_about_us_background_image'))); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="home_page_02_<?php echo e($lang->slug); ?>_about_us_background_image"><?php echo e(__('Background Image')); ?></label>
                                            <input type="file" class="form-control"  id="home_page_02_<?php echo e($lang->slug); ?>_about_us_background_image" name="home_page_02_<?php echo e($lang->slug); ?>_about_us_background_image">
                                            <small><?php echo e(__('recommended image size is 1920x575 pixel')); ?></small>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(get_static_option('home_page_variant') == '03'): ?>
                                        <div class="img-wrapper">
                                            <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.$lang->slug.'_about_us_right_image'))): ?>
                                                <img  style="max-width: 200px; margin-top:20px;" src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.$lang->slug.'_about_us_right_image'))); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_right_image"><?php echo e(__('Right Image')); ?></label>
                                            <input type="file" class="form-control"  id="home_page_01_<?php echo e($lang->slug); ?>_about_us_right_image" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_right_image">
                                            <small><?php echo e(__('recommended image size is 690x1190 pixel')); ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_quote_box_title"><?php echo e(__('Quote Box Title')); ?></label>
                                            <input type="text" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_quote_box_title" class="form-control" value="<?php echo e(get_static_option('home_page_01_'.$lang->slug.'_about_us_quote_box_title')); ?>" id="home_page_01_<?php echo e($lang->slug); ?>_about_us_quote_box_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_quote_box_description"><?php echo e(__('Quote Box Description')); ?></label>
                                            <textarea name="home_page_01_<?php echo e($lang->slug); ?>_about_us_quote_box_description" class="form-control" rows="10" id="home_page_01_<?php echo e($lang->slug); ?>_about_us_quote_box_description"><?php echo e(get_static_option('home_page_01_'.$lang->slug.'_about_us_quote_box_description')); ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_experience_title"><?php echo e(__('Experience Title')); ?></label>
                                            <input type="text" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_experience_title" class="form-control" value="<?php echo e(get_static_option('home_page_01_'.$lang->slug.'_about_us_experience_title')); ?>" id="home_page_01_<?php echo e($lang->slug); ?>_about_us_experience_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_experience_year"><?php echo e(__('Experience Year')); ?></label>
                                            <input type="text" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_experience_year" class="form-control" value="<?php echo e(get_static_option('home_page_01_'.$lang->slug.'_about_us_experience_year')); ?>" id="home_page_01_<?php echo e($lang->slug); ?>_about_us_experience_year">
                                        </div>
                                        <div class="img-wrapper">
                                            <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.$lang->slug.'_about_us_experience_background_image'))): ?>
                                                <img  style="max-width: 200px; margin-top:20px;" src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.$lang->slug.'_about_us_experience_background_image'))); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="home_page_01_<?php echo e($lang->slug); ?>_about_us_experience_background_image"><?php echo e(__('Experience Background Image')); ?></label>
                                            <input type="file" class="form-control"  id="home_page_01_<?php echo e($lang->slug); ?>_about_us_experience_background_image" name="home_page_01_<?php echo e($lang->slug); ?>_about_us_experience_background_image">
                                            <small><?php echo e(__('recommended image size is 270x310 pixel')); ?></small>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/pages/home/home-01/about-us.blade.php ENDPATH**/ ?>