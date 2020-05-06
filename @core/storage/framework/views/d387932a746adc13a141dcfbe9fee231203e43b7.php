<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Important Links Widget Settings')); ?>

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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Important Link Widget Settings')); ?></h4>
                        <form action="<?php echo e(route('admin.footer.important.link.widget')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="nav-item nav-link useful_link_widget_tab_item <?php if($key == 0): ?> active <?php endif; ?>"  data-lang="<?php echo e($lang->slug); ?>" data-toggle="tab" href="#nav-home-<?php echo e($lang->slug); ?>" role="tab" aria-selected="true"><?php echo e($lang->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel" >
                                        <div class="form-group">
                                            <label for="important_link_<?php echo e($lang->slug); ?>_widget_title"><?php echo e(__('Widget Title')); ?></label>
                                            <input type="text" class="form-control"  id="important_link_<?php echo e($lang->slug); ?>_widget_title" value="<?php echo e(get_static_option('important_link_'.$lang->slug.'_widget_title')); ?>" name="important_link_<?php echo e($lang->slug); ?>_widget_title" >
                                        </div>
                                        <div class="form-group">
                                            <label for="important_link_<?php echo e($lang->slug); ?>_widget_menu_id"><?php echo e(__('Select Menu')); ?></label>
                                            <select name="important_link_<?php echo e($lang->slug); ?>_widget_menu_id" data-value="<?php echo e(get_static_option('important_link_'.$lang->slug.'_widget_menu_id')); ?>" id="important_link_<?php echo e($lang->slug); ?>_widget_menu_id" class="form-control">
                                                <option value=""><?php echo e(__('Select Menu')); ?></option>
                                                <?php $__currentLoopData = $all_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->id); ?>" <?php if($data->id == get_static_option('important_link_'.$lang->slug.'_widget_menu_id')): ?> selected <?php endif; ?> ><?php echo e($data->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
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

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function ($) {
            $(document).on('click','.useful_link_widget_tab_item',function (e) {
                var lang = $(this).data('lang');
                $.ajax({
                    url: "<?php echo e(route('admin.footer.important.link.menu')); ?>",
                    type: "POST",
                    data: {
                        _token : "<?php echo e(csrf_token()); ?>",
                        lang : lang
                    },
                    success:function (data) {
                        var prevmenu = $('#important_link_'+lang+'_widget_menu_id').data('value');
                        $('#important_link_'+lang+'_widget_menu_id').html('');
                        $.each(data,function (index,value) {
                            var selected = prevmenu == value.id ? 'selected' : '';
                            $('#important_link_'+lang+'_widget_menu_id').append('<option '+selected+' value="'+value.id+'">'+value.title+'</option>');
                        });
                    }
                });
            })
        })
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/pages/footer/important-links.blade.php ENDPATH**/ ?>