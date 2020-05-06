<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Language Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <!-- basic form start -->
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
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('All Languages')); ?></h4>
                        <table class="table table-default">
                            <thead>
                            <th><?php echo e(__('ID')); ?></th>
                            <th><?php echo e(__('Name')); ?></th>
                            <th><?php echo e(__('Direction')); ?></th>
                            <th><?php echo e(__('Slug')); ?></th>
                            <th><?php echo e(__('Status')); ?></th>
                            <th><?php echo e(__('Default')); ?></th>
                            <th><?php echo e(__('Action')); ?></th>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $all_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->id); ?></td>
                                    <td><?php echo e($data->name); ?></td>
                                    <td><?php echo e(strtoupper($data->direction)); ?></td>
                                    <td><?php echo e($data->slug); ?></td>
                                    <td><?php echo e($data->status); ?></td>
                                    <td>
                                        <?php if($data->default == 1): ?>
                                            <a href="javascript:void(0)" class="btn btn-lg btn-success btn-sm mb-3 mr-1"><?php echo e(__("Default")); ?></a>
                                        <?php else: ?>
                                            <a tabindex="0" class="btn btn-lg btn-warning btn-sm mb-3 mr-1"
                                               role="button"
                                               data-toggle="popover"
                                               data-trigger="focus"
                                               data-html="true"
                                               title=""
                                               data-content="
                                               <h6>Are you sure to make this language as a default language?</h6>
                                               <form method='post' action='<?php echo e(route('admin.languages.default',$data->id)); ?>'>
                                               <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
                                               <br>
                                                <input type='submit' class='btn btn-primary btn-sm' value='Yes,Delete'>
                                                </form>
                                                ">
                                                <?php echo e(__("Make Default")); ?>

                                            </a>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a tabindex="0" class="btn btn-lg btn-danger btn-sm mb-3 mr-1"
                                           role="button"
                                           data-toggle="popover"
                                           data-trigger="focus"
                                           data-html="true"
                                           title=""
                                           data-content="
                                               <h6>Are you sure to delete this language ?</h6>
                                               <form method='post' action='<?php echo e(route('admin.languages.delete',$data->id)); ?>'>
                                               <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
                                               <br>
                                                <input type='submit' class='btn btn-danger btn-sm' value='Yes,Delete'>
                                                </form>
                                                ">
                                            <i class="ti-trash"></i>
                                        </a>
                                        <a href="<?php echo e(route('admin.languages.words.edit',$data->slug)); ?>" class="btn btn-lg btn-info btn-sm mb-3 mr-1" style="color: #fff;">
                                            <i class="ti-pencil"></i> <?php echo e(__("Edit Words")); ?>

                                        </a>
                                        <a href="#"
                                           data-toggle="modal"
                                           data-target="#language_item_edit_modal"
                                           class="btn btn-lg btn-primary btn-sm mb-3 mr-1 lang_edit_btn"
                                           data-id="<?php echo e($data->id); ?>"
                                           data-name="<?php echo e($data->name); ?>"
                                           data-slug="<?php echo e($data->slug); ?>"
                                           data-status="<?php echo e($data->status); ?>"
                                           data-direction="<?php echo e($data->direction); ?>"
                                        >
                                            <i class="ti-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Add New Language')); ?></h4>
                        <form action="<?php echo e(route('admin.languages.new')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="name"><?php echo e(__('Name')); ?></label>
                                <input type="text" class="form-control"  id="name"  name="name" placeholder="<?php echo e(__('Name')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="direction"><?php echo e(__('Direction')); ?></label>
                                <select name="direction" id="direction" class="form-control">
                                    <option value="ltr"><?php echo e(__('LTR')); ?></option>
                                    <option value="rtl"><?php echo e(__("RTL")); ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status"><?php echo e(__('Status')); ?></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="publish"><?php echo e(__('Publish')); ?></option>
                                    <option value="draft"><?php echo e(__("Draft")); ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="slug"><?php echo e(__('Slug')); ?></label>
                                <input type="text" class="form-control"  id="slug"  name="slug" placeholder="<?php echo e(__('Example: en')); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Add New')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="language_item_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Edit Language')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="<?php echo e(route('admin.languages.update')); ?>" id="contact_info_edit_modal_form"  method="post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="lang_id" value="">
                        <div class="form-group">
                            <label for="edit_name"><?php echo e(__('Name')); ?></label>
                            <input type="text" class="form-control"  id="edit_name"  name="name" placeholder="<?php echo e(__('Name')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="direction"><?php echo e(__('Direction')); ?></label>
                            <select name="direction" id="edit_direction" class="form-control">
                                <option value="ltr"><?php echo e(__('LTR')); ?></option>
                                <option value="rtl"><?php echo e(__("RTL")); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_status"><?php echo e(__('Status')); ?></label>
                            <select name="status" id="edit_status" class="form-control">
                                <option value="publish"><?php echo e(__('Publish')); ?></option>
                                <option value="draft"><?php echo e(__("Draft")); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_slug"><?php echo e(__('Slug')); ?></label>
                            <input type="text" class="form-control"  id="edit_slug"  name="slug" placeholder="<?php echo e(__('Example: en')); ?>">
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
            $(document).on('click','.lang_edit_btn',function(){
                var el = $(this);
                var id = el.data('id');
                var name = el.data('name');
                var slug = el.data('slug');
                var form = $('#language_item_edit_modal');
                form.find('#lang_id').val(id);
                form.find('#edit_name').val(name);
                form.find('#edit_slug').val(slug);
                form.find('#edit_direction option[value="'+ el.data('direction')+'"]').prop('selected',true);
                form.find('#edit_status option[value="'+ el.data('status')+'"]').prop('selected',true);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/dizzcox/rtl/@core/resources/views/backend/languages/index.blade.php ENDPATH**/ ?>