<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Price Plan')); ?>

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
                        <h4 class="header-title"><?php echo e(__('Price Plan Items')); ?></h4>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php $a=0; ?>
                            <?php $__currentLoopData = $all_price_plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-$all_price_plan">
                                    <a class="nav-link <?php if($a == 0): ?> active <?php endif; ?>"  data-toggle="tab" href="#slider_tab_<?php echo e($key); ?>" role="tab" aria-controls="home" aria-selected="true"><?php echo e(get_language_by_slug($key)); ?></a>
                                </li>
                                <?php $a++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="tab-content margin-top-40" id="myTabContent">
                            <?php $b=0; ?>
                            <?php $__currentLoopData = $all_price_plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane fade <?php if($b == 0): ?> show active <?php endif; ?>" id="slider_tab_<?php echo e($key); ?>" role="tabpanel" >
                                    <table class="table table-default">
                                        <thead>
                                        <th><?php echo e(__('ID')); ?></th>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <th><?php echo e(__('Price')); ?></th>
                                        <th><?php echo e(__('Icon')); ?></th>
                                        <th><?php echo e(__('Type')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $img_url =''; ?>
                                            <tr>
                                                <td><?php echo e($data->id); ?></td>
                                                <td>
                                                    <?php echo e($data->title); ?>

                                                </td>
                                                <td><?php echo e($data->price); ?></td>
                                                <td><i class="<?php echo e($data->icon); ?>" style="font-size: 30px"></i></td>
                                                <td><?php echo e($data->type); ?></td>
                                                <td>
                                                    <a tabindex="0" class="btn btn-lg btn-danger btn-sm mb-3 mr-1"
                                                       role="button"
                                                       data-toggle="popover"
                                                       data-trigger="focus"
                                                       data-html="true"
                                                       title=""
                                                       data-content="
                                               <h6>Are you sure to delete this price plan item?</h6>
                                               <form method='post' action='<?php echo e(route('admin.price.plan.delete',$data->id)); ?>'>
                                               <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
                                               <br>
                                                <input type='submit' class='btn btn-danger btn-sm' value='Yes,Delete'>
                                                </form>
                                                ">
                                                        <i class="ti-trash"></i>
                                                    </a>
                                                    <a href="#"
                                                       data-toggle="modal"
                                                       data-target="#price_plan_item_edit_modal"
                                                       class="btn btn-lg btn-primary btn-sm mb-3 mr-1 price_plan_edit_btn"
                                                       data-id="<?php echo e($data->id); ?>"
                                                       data-action="<?php echo e(route('admin.price.plan.update')); ?>"
                                                       data-title="<?php echo e($data->title); ?>"
                                                       data-icon="<?php echo e($data->icon); ?>"
                                                       data-type="<?php echo e($data->type); ?>"
                                                       data-price="<?php echo e($data->price); ?>"
                                                       data-lang="<?php echo e($data->lang); ?>"
                                                       data-features="<?php echo e($data->features); ?>"
                                                       data-btnText="<?php echo e($data->btn_text); ?>"
                                                       data-btnUrl="<?php echo e($data->btn_url); ?>"
                                                       data-urlStatus="<?php echo e($data->url_status); ?>"
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
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('New Price Plan')); ?></h4>
                        <form action="<?php echo e(route('admin.price.plan')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

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
                                <input type="text" class="form-control"  id="title"  name="title" placeholder="<?php echo e(__('Title')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="price"><?php echo e(__('Price')); ?></label>
                                <input type="text" class="form-control"  id="price"  name="price" placeholder="<?php echo e(__('Price')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="icon" class="d-block"><?php echo e(__('Icon')); ?></label>
                                <div class="btn-group">
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
                                <input type="hidden" class="form-control"  id="icon" value="fas fa-exclamation-triangle" name="icon">
                            </div>

                            <div class="form-group">
                                <label for="type"><?php echo e(__('Type')); ?></label>
                                <input type="text" class="form-control"  id="type"  name="type" placeholder="<?php echo e(__('Type')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="features"><?php echo e(__('Features')); ?></label>
                                <textarea class="form-control"  id="features"  name="features" placeholder="<?php echo e(__('Features')); ?>" cols="30" rows="10"></textarea>
                                <small class="info=text"><?php echo e(__('Separate feature by semicolon ( ; ).')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="btn_text"><?php echo e(__('Button Text')); ?></label>
                                <input type="text" class="form-control"  id="btn_text"  name="btn_text" placeholder="<?php echo e(__('Button Text')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="url_status"><strong><?php echo e(__('Plan Detail Page')); ?></strong></label>
                                <label class="switch">
                                    <input type="checkbox" name="url_status" id="url_status">
                                    <span class="slider onff"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="btn_url"><?php echo e(__('Button URL')); ?></label>
                                <input type="text" class="form-control"  id="btn_url"  name="btn_url" placeholder="<?php echo e(__('Button URL')); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Add New Price Plan')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="price_plan_item_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Edit Price Plan Item')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="#" id="price_plan_edit_modal_form"  method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="price_plan_id" value="">
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
                            <input type="text" class="form-control"  id="edit_title"  name="title" placeholder="<?php echo e(__('Title')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit_price"><?php echo e(__('Price')); ?></label>
                            <input type="text" class="form-control"  id="edit_price"  name="price" placeholder="<?php echo e(__('Price')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit_icon" class="d-block"><?php echo e(__('Icon')); ?></label>
                            <div class="btn-group ">
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
                            <input type="hidden" class="form-control"  id="edit_icon" value="fas fa-exclamation-triangle" name="icon">
                        </div>
                        <div class="form-group">
                            <label for="edit_type"><?php echo e(__('Type')); ?></label>
                            <input type="text" class="form-control"  id="edit_type"  name="type" placeholder="<?php echo e(__('Type')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit_features"><?php echo e(__('Features')); ?></label>
                            <textarea class="form-control"  id="edit_features"  name="features" placeholder="<?php echo e(__('Features')); ?>" cols="30" rows="10"></textarea>
                            <small class="info=text"><?php echo e(__('Separate feature by semicolon ( ; ).')); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="edit_btn_text"><?php echo e(__('Button Text')); ?></label>
                            <input type="text" class="form-control"  id="edit_btn_text"  name="btn_text" placeholder="<?php echo e(__('Button Text')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit_url_status"><strong><?php echo e(__('Plan Detail Page')); ?></strong></label>
                            <label class="switch">
                                <input type="checkbox" name="url_status" id="edit_url_status">
                                <span class="slider onff"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="edit_btn_url"><?php echo e(__('Button URL')); ?></label>
                            <input type="text" class="form-control"  id="edit_btn_url"  name="btn_url" placeholder="<?php echo e(__('Button URL')); ?>">
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
            $(document).on('click','.price_plan_edit_btn',function(){
                var el = $(this);
                var id = el.data('id');
                var title = el.data('title');
                var action = el.data('action');
                var form = $('#price_plan_edit_modal_form');
                form.attr('action',action);
                form.find('#price_plan_id').val(id);
                form.find('#edit_title').val(title);
                form.find('#edit_price').val(el.data('price'));
                form.find('#edit_icon').val(el.data('icon'));
                form.find('#edit_type').val(el.data('type'));
                form.find('#edit_btn_text').val(el.data('btntext'));
                form.find('#edit_btn_url').val(el.data('btnurl'));
                form.find('#edit_features').val(el.data('features'));
                form.find('.icp-dd').attr('data-selected',el.data('icon'));
                form.find('.iconpicker-component i').attr('class',el.data('icon'));
                form.find('#edit_language option[value='+el.data("lang")+']').attr('selected',true);
                if(el.data('urlstatus') != ''){
                    form.find('#edit_url_status').attr('checked',true);
                    form.find('#edit_url_status').parent().parent().next().hide();
                }
            });
            $('.icp-dd').iconpicker();
            $('.icp-dd').on('iconpickerSelected', function (e) {
                var selectedIcon = e.iconpickerValue;
                $(this).parent().parent().children('input').val(selectedIcon);
            });

            $(document).on('change','input[name="url_status"]',function (e) {
                e.preventDefault();
                if($('input[name="url_status"]').is(":checked")){
                    $(this).parent().parent().next().hide();
                }else{
                    $(this).parent().parent().next().show();
                }
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/pages/price-plan.blade.php ENDPATH**/ ?>