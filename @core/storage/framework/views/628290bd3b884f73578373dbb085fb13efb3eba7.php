<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('About Section')); ?>

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
                        <h4 class="header-title"><?php echo e(__('About Us Section Settings')); ?></h4>

                        <form action="<?php echo e(route('admin.about.page.about')); ?>" method="post" enctype="multipart/form-data">
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
                                            <label for="about_page_<?php echo e($lang); ?>_about_section_title"><?php echo e(__('Title')); ?></label>
                                            <input type="text" name="about_page_<?php echo e($lang->slug); ?>_about_section_title" value="<?php echo e(get_static_option('about_page_'.$lang->slug.'_about_section_title')); ?>" class="form-control" id="about_page_<?php echo e($lang->slug); ?>_about_section_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="about_page_<?php echo e($lang->slug); ?>_about_section_description"><?php echo e(__('Description')); ?></label>
                                            <textarea name="about_page_<?php echo e($lang->slug); ?>_about_section_description" id="about_page_<?php echo e($lang->slug); ?>_about_section_description" class="form-control max-height-150" cols="30" rows="10"><?php echo e(get_static_option('about_page_'.$lang->slug.'_about_section_description')); ?></textarea>
                                        </div>
                                        <div class="img-wrapper">
                                            <?php if(file_exists('assets/uploads/'.get_static_option('about_page_'.$lang->slug.'_about_section_right_image'))): ?>
                                                <img  style="max-width: 200px; margin-top:20px;margin-bottom: 20px" src="<?php echo e(asset('assets/uploads/'.get_static_option('about_page_'.$lang->slug.'_about_section_right_image'))); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="about_page_<?php echo e($lang->slug); ?>_about_section_right_image"><?php echo e(__('Right Image')); ?></label>
                                            <input type="file" class="form-control"  id="about_page_<?php echo e($lang->slug); ?>_about_section_right_image" name="about_page_<?php echo e($lang->slug); ?>_about_section_right_image">
                                            <small><?php echo e(__('recommended image size is 470x590 pixel')); ?></small>
                                        </div>
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


<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/pages/about/about-section.blade.php ENDPATH**/ ?>