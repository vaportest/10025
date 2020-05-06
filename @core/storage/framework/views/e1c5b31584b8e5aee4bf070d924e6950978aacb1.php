<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Database Backup Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__("Database Backup Settings")); ?></h4>
                        <form action="<?php echo e(route('admin.general.backup.settings')); ?>" method="Post">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4 margin-bottom-40" id="db_backup_btn"><?php echo e(__('Create Database Backup')); ?></button>
                        </form>
                        <table class="table table-default">
                            <thead>
                            <th><?php echo e(__('Name')); ?></th>
                            <th><?php echo e(__('Date')); ?></th>
                            <th><?php echo e(__('Size')); ?></th>
                            <th><?php echo e(__('Action')); ?></th>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $all_backuped_db; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(basename($data)); ?></td>
                                    <td><?php echo e(date('j F Y - h:m:s',filectime($data))); ?></td>
                                    <td><?php if(trim(formatBytes(filesize($data))) === 'NAN'): ?> <?php echo e(__('0 Byte')); ?> <?php else: ?> <?php echo e(formatBytes(filesize($data))); ?> <?php endif; ?></td>
                                    <td>
                                        <a tabindex="0" class="btn btn-lg btn-danger btn-sm mb-3 mr-1"
                                           role="button"
                                           data-toggle="popover"
                                           data-trigger="focus"
                                           data-html="true"
                                           title=""
                                           data-content="
                                               <h6>Are you sure to delete this database ?</h6>
                                               <form method='post' action='<?php echo e(route("admin.general.backup.settings.delete")); ?>'>
                                               <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
                                               <input type='hidden' name='db_name' value='<?php echo e($data); ?>'>
                                               <br>
                                                <input type='submit' class='btn btn-danger btn-sm' value='Yes,Delete'>
                                                </form>
                                                ">
                                            <i class="ti-trash"></i>
                                        </a>
                                        <a href="#"
                                           role="button"
                                           data-toggle="popover"
                                           data-trigger="focus"
                                           data-html="true"
                                           class='btn btn-info btn-sm mb-3 mr-1'
                                           title=""
                                           data-content="
                                               <h6>Are you sure to restore this database ?</h6>
                                               <form method='post' action='<?php echo e(route("admin.general.backup.settings.restore")); ?>'>
                                               <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
                                               <input type='hidden' name='db_name' value='<?php echo e(basename($data)); ?>'>
                                               <br>
                                                <input type='submit' class='btn btn-warning btn-sm' value='Yes,Restore'>
                                                </form>
                                                ">
                                            <i class="fa fa-upload"></i> <?php echo e(__('Restore Backup')); ?>

                                        </a>
                                        <a href="<?php echo e(asset('backup')); ?>/<?php echo e(basename($data)); ?>" download class="btn btn-primary btn-sm mb-3 mr-1"> <i class="fa fa-download"></i> </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        (function($){
            "use strict";
            $(document).ready(function(){

            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/general-settings/backup.blade.php ENDPATH**/ ?>