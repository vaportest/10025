<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('About Widget Settings')); ?>

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
                        <h4 class="header-title"><?php echo e(__('About Widget Settings')); ?></h4>
                        <form action="<?php echo e(route('admin.footer.about')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="nav-item nav-link <?php if($key == 0): ?> active <?php endif; ?>" data-toggle="tab" href="#nav-home-<?php echo e($lang->slug); ?>" role="tab"  aria-selected="true"><?php echo e($lang->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel" >
                                    <div class="form-group">
                                        <label for="about_widget_<?php echo e($lang->slug); ?>_description"><?php echo e(__('Widget Description')); ?></label>
                                        <textarea class="form-control"  id="about_widget_<?php echo e($lang->slug); ?>_description" name="about_widget_<?php echo e($lang->slug); ?>_description" ><?php echo e(get_static_option('about_widget_'.$lang->slug.'_description')); ?></textarea>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="img-wrapper" style="margin: 20px">
                                <?php if(file_exists('assets/uploads/'.get_static_option('about_widget_logo'))): ?>
                                    <img src="<?php echo e(asset('assets/uploads/'.get_static_option('about_widget_logo'))); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="about_widget_logo"><?php echo e(__('Widget Logo')); ?></label>
                                <input type="file" class="form-control"  id="about_widget_logo"  name="about_widget_logo" >
                                <small><?php echo e(__('Recommended image size 160x50 png image')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="about_widget_social_icon_one" class="d-block"><?php echo e(__('Icon')); ?></label>
                                <div class="btn-group about_widget_social_icon_one">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                            data-selected="fas fa-exclamation-triangle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control"  id="about_widget_social_icon_one" value="<?php echo e(get_static_option('about_widget_social_icon_one')); ?>" name="about_widget_social_icon_one">
                            </div>
                            <div class="form-group">
                                <label for="about_widget_social_icon_one_url"><?php echo e(__('Social Icon One Url')); ?></label>
                                <input type="text" class="form-control"  id="about_widget_social_icon_one_url" value="<?php echo e(get_static_option('about_widget_social_icon_one_url')); ?>" name="about_widget_social_icon_one_url" >
                            </div>
                            <div class="form-group">
                                <label for="about_widget_social_icon_two" class="d-block"><?php echo e(__('Icon')); ?></label>
                                <div class="btn-group about_widget_social_icon_two">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                            data-selected="fas fa-exclamation-triangle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control"  id="about_widget_social_icon_two" value="<?php echo e(get_static_option('about_widget_social_icon_two')); ?>" name="about_widget_social_icon_two">
                            </div>
                            <div class="form-group">
                                <label for="about_widget_social_icon_two_url"><?php echo e(__('Social Icon Two Url')); ?></label>
                                <input type="text" class="form-control"  id="about_widget_social_icon_two_url" value="<?php echo e(get_static_option('about_widget_social_icon_two_url')); ?>"  name="about_widget_social_icon_two_url" >
                            </div>
                            <div class="form-group">
                                <label for="about_widget_social_icon_three" class="d-block"><?php echo e(__('Icon')); ?></label>
                                <div class="btn-group about_widget_social_icon_three">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                            data-selected="fas fa-exclamation-triangle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control"  id="about_widget_social_icon_three" value="<?php echo e(get_static_option('about_widget_social_icon_three')); ?>" name="about_widget_social_icon_three">
                            </div>
                            <div class="form-group">
                                <label for="about_widget_social_icon_three_url"><?php echo e(__('Social Icon Three Url')); ?></label>
                                <input type="text" class="form-control"  id="about_widget_social_icon_three_url" value="<?php echo e(get_static_option('about_widget_social_icon_three_url')); ?>" name="about_widget_social_icon_three_url" >
                            </div>
                            <div class="form-group">
                                <label for="about_widget_social_icon_three" class="d-block"><?php echo e(__('Icon')); ?></label>
                                <div class="btn-group about_widget_social_icon_four">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                            data-selected="fas fa-exclamation-triangle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control"  id="about_widget_social_icon_four" value="<?php echo e(get_static_option('about_widget_social_icon_four')); ?>" name="about_widget_social_icon_four">
                            </div>
                            <div class="form-group">
                                <label for="about_widget_social_icon_four_url"><?php echo e(__('Social Icon Four Url')); ?></label>
                                <input type="text" class="form-control"  id="about_widget_social_icon_four_url" value="<?php echo e(get_static_option('about_widget_social_icon_four_url')); ?>" name="about_widget_social_icon_four_url" >
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

    <script>
        $(document).ready(function () {

            $('.about_widget_social_icon_one').find('.icp-dd').attr('data-selected',$('#about_widget_social_icon_one').val());
            $('.about_widget_social_icon_two').find('.icp-dd').attr('data-selected',$('#about_widget_social_icon_two').val());
            $('.about_widget_social_icon_three').find('.icp-dd').attr('data-selected',$('#about_widget_social_icon_three').val());
            $('.about_widget_social_icon_four').find('.icp-dd').attr('data-selected',$('#about_widget_social_icon_four').val());

            $('.icp-dd').iconpicker();
            $('.icp-dd').on('iconpickerSelected', function (e) {
                var selectedIcon = e.iconpickerValue;
                $(this).parent().parent().children('input').val(selectedIcon);
            });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/pages/footer/about.blade.php ENDPATH**/ ?>