<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Know About Section')); ?>

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
            <div class="col-lg-6 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Know About Items')); ?></h4>
                        <a href="#" class="btn btn-primary margin-bottom-30 btn-xs" data-toggle="modal" data-target="#know_about_us_item_add_new_modal"><?php echo e(__('Add New Item')); ?></a>

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <?php $a=0; ?>
                                    <?php $__currentLoopData = $all_know_about_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a class="nav-item nav-link <?php if($a == 0): ?> active <?php endif; ?>"  data-toggle="tab" href="#known_about_tab_<?php echo e($key); ?>" role="tab"  aria-selected="true"><?php echo e(get_language_by_slug($key)); ?></a>
                                        <?php $a++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $b=0; ?>
                                <?php $__currentLoopData = $all_know_about_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($b == 0): ?> show active <?php endif; ?>" id="known_about_tab_<?php echo e($key); ?>" role="tabpanel" >
                                        <table class="table table-default">
                                            <thead>
                                            <th><?php echo e(__('ID')); ?></th>
                                            <th><?php echo e(__('Title')); ?></th>
                                            <th><?php echo e(__('Image')); ?></th>
                                            <th><?php echo e(__('Description')); ?></th>
                                            <th><?php echo e(__('Action')); ?></th>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $img_url =''; ?>
                                                <tr>
                                                    <td><?php echo e($data->id); ?></td>
                                                    <td><?php echo e($data->title); ?></td>
                                                    <td>
                                                        <?php if(file_exists('assets/uploads/know-about/know-about-pic-'.$data->id.'.'.$data->image)): ?>
                                                            <img style="max-width: 80px" src="<?php echo e(asset('assets/uploads/know-about/know-about-pic-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e(__($data->name)); ?>">
                                                            <?php $img_url = asset('assets/uploads/know-about/know-about-pic-'.$data->id.'.'.$data->image) ?>
                                                        <?php else: ?>
                                                            <img style="max-width: 80px" src="<?php echo e(asset('assets/uploads/no-image.png')); ?>" alt="no image available">
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($data->description); ?></td>
                                                    <td>
                                                        <a tabindex="0" class="btn btn-lg btn-danger btn-sm mb-3 mr-1"
                                                           role="button"
                                                           data-toggle="popover"
                                                           data-trigger="focus"
                                                           data-html="true"
                                                           title=""
                                                           data-content="
                                                           <h6>Are you sure to delete this know about item ?</h6>
                                                           <form method='post' action='<?php echo e(route('know.about.delete',$data->id)); ?>'>
                                                           <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
                                                           <br>
                                                            <input type='submit' class='btn btn-danger btn-sm' value='Yes,Delete'>
                                                            </form>
                                                            ">
                                                            <i class="ti-trash"></i>
                                                        </a>
                                                        <a href="#"
                                                           data-toggle="modal"
                                                           data-target="#know_about_us_item_edit_modal"
                                                           class="btn btn-lg btn-primary btn-sm mb-3 mr-1 known_about_edit_btn"
                                                           data-id="<?php echo e($data->id); ?>"
                                                           data-image="<?php echo e($img_url); ?>"
                                                           data-title="<?php echo e($data->title); ?>"
                                                           data-link="<?php echo e($data->link); ?>"
                                                           data-lang="<?php echo e($data->lang); ?>"
                                                           data-description="<?php echo e($data->description); ?>"
                                                        >
                                                            <i class="ti-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php $b++; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Know About Section Settings')); ?></h4>
                        <form action="<?php echo e(route('admin.about.know')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <nav>
                                <div class="nav nav-tabs" role="tablist">
                                    <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="nav-item nav-link <?php if($key == 0): ?> active <?php endif; ?>" data-toggle="tab" href="#nav-home-know-about-<?php echo e($lang->slug); ?>" role="tab" aria-selected="true"><?php echo e($lang->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30">
                                <?php $__currentLoopData = $all_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="nav-home-know-about-<?php echo e($lang->slug); ?>" role="tabpanel">
                                        <div class="form-group">
                                            <label for="about_page_<?php echo e($lang->slug); ?>_know_about_section_title"><?php echo e(__('Title')); ?></label>
                                            <input type="text" name="about_page_<?php echo e($lang->slug); ?>_know_about_section_title" value="<?php echo e(get_static_option('about_page_'.$lang->slug.'_know_about_section_title')); ?>" class="form-control" id="about_page_<?php echo e($lang->slug); ?>_know_about_section_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="about_page_<?php echo e($lang->slug); ?>_know_about_section_description"><?php echo e(__('Description')); ?></label>
                                            <textarea name="about_page_<?php echo e($lang->slug); ?>_know_about_section_description" class="form-control min-height-120" id="about_page_<?php echo e($lang->slug); ?>_know_about_section_description"><?php echo e(get_static_option('about_page_'.$lang->slug.'_know_about_section_description')); ?></textarea>
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
    <div class="modal fade" id="know_about_us_item_add_new_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Add New Know About Us Item')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="<?php echo e(route('know.about.store')); ?>" id="add_new_know_about_modal_form"  method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="contact_info_id" value="">
                        <div class="form-group">
                            <label for="language"><?php echo e(__('Languages')); ?></label>
                            <select name="lang" id="language" class="form-control">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lang->slug); ?>"><?php echo e($lang->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title"><?php echo e(__('Title')); ?></label>
                            <input type="text" class="form-control"  id="title" name="title" placeholder="<?php echo e(__('Title')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="description"><?php echo e(__('Description')); ?></label>
                            <textarea  id="description"  name="description" class="form-control max-height-120" cols="30" rows="10" placeholder="<?php echo e(__('Description')); ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="link"><?php echo e(__('Link')); ?></label>
                            <input type="text" class="form-control"  id="link" name="link" placeholder="<?php echo e(__('Link')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="image"><?php echo e(__('Image')); ?></label>
                            <input type="file" class="form-control"  id="image" name="image">
                            <small><?php echo e(__('recommended image size is 370x250 pixel')); ?></small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Add New')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="know_about_us_item_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Edit Know About Us Item')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="<?php echo e(route('know.about.update')); ?>" id="edit_know_about_modal_form"  method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="know_about_id" value="">
                        <div class="form-group">
                            <label for="edit_language"><?php echo e(__('Languages')); ?></label>
                            <select name="lang" id="edit_language" class="form-control">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lang->slug); ?>"><?php echo e($lang->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_title"><?php echo e(__('Title')); ?></label>
                            <input type="text" class="form-control"  id="edit_title" name="title" placeholder="<?php echo e(__('Title')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit_description"><?php echo e(__('Description')); ?></label>
                            <textarea  id="edit_description"  name="description" class="form-control max-height-120" cols="30" rows="10" placeholder="<?php echo e(__('Description')); ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_link"><?php echo e(__('Link')); ?></label>
                            <input type="text" class="form-control"  id="edit_link" name="link" placeholder="<?php echo e(__('Link')); ?>">
                        </div>
                        <div class="image-preview">
                            <img src="" style="width: 200px" id="edit_image_preview" alt="">
                        </div>
                        <div class="form-group">
                            <label for="edit_image"><?php echo e(__('Image')); ?></label>
                            <input type="file" class="form-control"  id="edit_image" name="image">
                            <small><?php echo e(__('recommended image size is 370x250 pixel')); ?></small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Save Changes')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function () {
            $(document).on('click','.known_about_edit_btn',function(){
                var el = $(this);
                var id = el.data('id');
                var title = el.data('title');
                var link = el.data('link');
                var description = el.data('description');
                var form = $('#edit_know_about_modal_form');
                var image = el.data('image');

                form.find('#know_about_id').val(id);
                form.find('#edit_title').val(title);
                form.find('#edit_link').val(link);
                form.find('#edit_description').val(description);
                form.find('#edit_language option[value="'+el.data('lang')+'"]').attr('selected',true);
                form.find('#edit_image_preview').attr('src',image);
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/pages/about/know-section.blade.php ENDPATH**/ ?>