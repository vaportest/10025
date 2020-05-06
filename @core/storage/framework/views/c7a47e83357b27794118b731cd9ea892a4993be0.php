<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Team Member Item')); ?>

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
                        <h4 class="header-title"><?php echo e(__('Team Member Items')); ?></h4>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php $a=0; ?>
                            <?php $__currentLoopData = $all_team_member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-$all_price_plan">
                                    <a class="nav-link <?php if($a == 0): ?> active <?php endif; ?>"  data-toggle="tab" href="#slider_tab_<?php echo e($key); ?>" role="tab" aria-controls="home" aria-selected="true"><?php echo e(get_language_by_slug($key)); ?></a>
                                </li>
                                <?php $a++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="tab-content margin-top-40" id="myTabContent">
                            <?php $b=0; ?>
                            <?php $__currentLoopData = $all_team_member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane fade <?php if($b == 0): ?> show active <?php endif; ?>" id="slider_tab_<?php echo e($key); ?>" role="tabpanel" >
                                    <table class="table table-default">
                                        <thead>
                                        <th><?php echo e(__('ID')); ?></th>
                                        <th><?php echo e(__('Image')); ?></th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Designation')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $img_url =''; ?>
                                            <tr>
                                                <td><?php echo e($data->id); ?></td>
                                                <td>
                                                    <?php if(file_exists('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)): ?>
                                                        <img style="max-width: 80px" src="<?php echo e(asset('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e(__($data->name)); ?>">
                                                        <?php $img_url = asset('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image) ?>
                                                    <?php else: ?>
                                                        <img style="max-width: 80px" src="<?php echo e(asset('assets/uploads/no-image.png')); ?>" alt="no image available">
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($data->name); ?></td>
                                                <td><?php echo e($data->designation); ?></td>
                                                <td>
                                                    <a tabindex="0" class="btn btn-lg btn-danger btn-sm mb-3 mr-1"
                                                       role="button"
                                                       data-toggle="popover"
                                                       data-trigger="focus"
                                                       data-html="true"
                                                       title=""
                                                       data-content="
                                               <h6>Are you sure to delete this team member item?</h6>
                                               <form method='post' action='<?php echo e(route('admin.team.member.delete',$data->id)); ?>'>
                                               <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
                                               <br>
                                                <input type='submit' class='btn btn-danger btn-sm' value='Yes,Delete'>
                                                </form>
                                                ">
                                                        <i class="ti-trash"></i>
                                                    </a>
                                                    <a href="#"
                                                       data-toggle="modal"
                                                       data-target="#team_member_item_edit_modal"
                                                       class="btn btn-lg btn-primary btn-sm mb-3 mr-1 team_member_edit_btn"
                                                       data-id="<?php echo e($data->id); ?>"
                                                       data-action="<?php echo e(route('admin.team.member.update')); ?>"
                                                       data-name="<?php echo e($data->name); ?>"
                                                       data-image="<?php echo e($img_url); ?>"
                                                       data-designation="<?php echo e($data->designation); ?>"
                                                       data-lang="<?php echo e($data->lang); ?>"
                                                       data-iconOne="<?php echo e($data->icon_one); ?>"
                                                       data-iconTwo="<?php echo e($data->icon_two); ?>"
                                                       data-iconThree="<?php echo e($data->icon_three); ?>"
                                                       data-iconOneUrl="<?php echo e($data->icon_one_url); ?>"
                                                       data-iconTwoUrl="<?php echo e($data->icon_two_url); ?>"
                                                       data-iconThreeUrl="<?php echo e($data->icon_three_url); ?>"
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
                        <h4 class="header-title"><?php echo e(__('New Team Member')); ?></h4>
                        <form action="<?php echo e(route('admin.team.member')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="languages"><?php echo e(__('Languages')); ?></label>
                                <select name="lang" class="form-control" id="languages">
                                    <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($lang->slug); ?>"><?php echo e($lang->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name"><?php echo e(__('Name')); ?></label>
                                <input type="text" class="form-control"  id="name"  name="name" placeholder="<?php echo e(__('Name')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="designation"><?php echo e(__('Designation')); ?></label>
                                <input type="text" class="form-control"  id="designation"  name="designation" placeholder="<?php echo e(__('Designation')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="icon_one" class="d-block"><?php echo e(__('Social Profile One')); ?></label>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="fab fa-instagram"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                            data-selected="fab fa-instagram" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control"  id="icon_one" value="fab fa-instagram" name="icon_one">
                            </div>
                            <div class="form-group">
                                <label for="icon_one_url"><?php echo e(__('Social Profile One URL')); ?></label>
                                <input type="text" class="form-control"  id="icon_one_url"  name="icon_one_url" placeholder="<?php echo e(__('Social Profile One URL')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="icon_two" class="d-block"><?php echo e(__('Social Profile Two')); ?></label>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                            data-selected="fab fa-twitter" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control"  id="icon_two" value="fab fa-twitter" name="icon_two">
                            </div>
                            <div class="form-group">
                                <label for="icon_two_url"><?php echo e(__('Social Profile Two URL')); ?></label>
                                <input type="text" class="form-control"  id="icon_two_url"  name="icon_two_url" placeholder="<?php echo e(__('Social Profile Two URL')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="icon_three" class="d-block"><?php echo e(__('Social Profile Three')); ?></label>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                            data-selected="fab fa-facebook-f" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control"  id="icon_three" value="fab fa-facebook-f" name="icon_three">
                            </div>
                            <div class="form-group">
                                <label for="icon_three_url"><?php echo e(__('Social Profile Three URL')); ?></label>
                                <input type="text" class="form-control"  id="icon_three_url"  name="icon_three_url" placeholder="<?php echo e(__('Social Profile Three URL')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="image"><?php echo e(__('Image')); ?></label>
                                <input type="file" class="form-control"  id="image"  name="image">
                                <small><?php echo e(__('Recommended image size 270x280')); ?></small>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Add  New Team Member')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="team_member_item_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Edit Team Member Item')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="#" id="team_member_edit_modal_form"  method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="team_member_id" value="">
                        <div class="form-group">
                            <label for="edit_languages"><?php echo e(__('Languages')); ?></label>
                            <select name="lang" class="form-control" id="edit_languages">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lang->slug); ?>"><?php echo e($lang->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_name"><?php echo e(__('Name')); ?></label>
                            <input type="text" class="form-control"  id="edit_name"  name="name" placeholder="<?php echo e(__('Name')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit_designation"><?php echo e(__('Designation')); ?></label>
                            <input type="text" class="form-control"  id="edit_designation"  name="designation" placeholder="<?php echo e(__('Designation')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit_icon_one" class="d-block"><?php echo e(__('Social Profile One')); ?></label>
                            <div class="btn-group edit_icon_one">
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
                            <input type="hidden" class="form-control"  id="edit_icon_one" value="fas fa-exclamation-triangle" name="icon_one">
                        </div>
                        <div class="form-group">
                            <label for="edit_icon_one_url"><?php echo e(__('Social Profile One URL')); ?></label>
                            <input type="text" class="form-control"  id="edit_icon_one_url"  name="icon_one_url" placeholder="<?php echo e(__('Social Profile One URL')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit_icon_two" class="d-block"><?php echo e(__('Social Profile Two')); ?></label>
                            <div class="btn-group edit_icon_two">
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
                            <input type="hidden" class="form-control"  id="edit_icon_two" value="fas fa-exclamation-triangle" name="icon_two">
                        </div>
                        <div class="form-group">
                            <label for="edit_icon_two_url"><?php echo e(__('Social Profile Two URL')); ?></label>
                            <input type="text" class="form-control"  id="edit_icon_two_url"  name="icon_two_url" placeholder="<?php echo e(__('Social Profile Two URL')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit_icon_three" class="d-block"><?php echo e(__('Social Profile Three')); ?></label>
                            <div class="btn-group edit_icon_three">
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
                            <input type="hidden" class="form-control"  id="edit_icon_three" value="fas fa-exclamation-triangle" name="icon_three">
                        </div>
                        <div class="form-group">
                            <label for="edit_icon_three_url"><?php echo e(__('Social Profile Three URL')); ?></label>
                            <input type="text" class="form-control"  id="edit_icon_three_url"  name="icon_three_url" placeholder="<?php echo e(__('Social Profile Three URL')); ?>">
                        </div>
                        <div class="img-wrapper">
                            <img src="" style="max-width: 100px" id="preview_image" alt="">
                        </div>
                        <div class="form-group">
                            <label for="image"><?php echo e(__('Image')); ?></label>
                            <input type="file" class="form-control"  id="edit_image"  name="image">
                            <small><?php echo e(__('Recommended image size 270x280')); ?></small>
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
            $(document).on('click','.team_member_edit_btn',function(){
                var el = $(this);
                var id = el.data('id');
                var name = el.data('name');
                var designation = el.data('designation');
                var action = el.data('action');
                var image = el.data('image');
                var form = $('#team_member_edit_modal_form');
                form.attr('action',action);
                form.find('#team_member_id').val(id);
                form.find('#edit_name').val(name);
                form.find('#edit_designation').val(designation);
                form.find('#edit_description').val(el.data('description'));
                form.find('#edit_icon_one').val(el.data('iconone'));
                form.find('#edit_icon_two').val(el.data('icontwo'));
                form.find('#edit_icon_three').val(el.data('iconthree'));
                form.find('#edit_icon_one_url').val(el.data('icononeurl'));
                form.find('#edit_icon_two_url').val(el.data('icontwourl'));
                form.find('#edit_icon_three_url').val(el.data('iconthreeurl'));
                form.find('#preview_image').attr('src',image);
                form.find('#edit_languages option[value="'+el.data('lang')+'"]').attr('selected',true);

                form.find('.edit_icon_three .icp-dd').attr('data-selected',el.data('iconthree'));
                form.find('.edit_icon_three .iconpicker-component i').attr('class',el.data('iconthree'));
                form.find('.edit_icon_two .icp-dd').attr('data-selected',el.data('icontwo'));
                form.find('.edit_icon_two .iconpicker-component i').attr('class',el.data('icontwo'));
                form.find('.edit_icon_one .icp-dd').attr('data-selected',el.data('iconone'));
                form.find('.edit_icon_one .iconpicker-component i').attr('class',el.data('iconone'));
            });

            $('.icp-dd').iconpicker();
            $('.icp-dd').on('iconpickerSelected', function (e) {
                var selectedIcon = e.iconpickerValue;
                $(this).parent().parent().children('input').val(selectedIcon);
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/pages/team-member.blade.php ENDPATH**/ ?>