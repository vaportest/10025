<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Page Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__("Page Settings")); ?></h4>
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($error); ?></div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <form action="<?php echo e(route('admin.general.page.settings')); ?>" method="POST" enctype="multipart/form-data">
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
                                       <div class="accordion-wrapper">
                                           <div id="accordion-<?php echo e($lang->slug); ?>">
                                               <div class="card">
                                                   <div class="card-header" id="about_page_<?php echo e($lang->slug); ?>">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#about_page_content_<?php echo e($lang->slug); ?>" aria-expanded="true" >
                                                               <span class="page-title"><?php if(!empty(get_static_option('about_page_'.$lang->slug.'_name'))): ?> <?php echo e(get_static_option('about_page_'.$lang->slug.'_name')); ?> <?php else: ?> <?php echo e(__('About')); ?>  <?php endif; ?></span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="about_page_content_<?php echo e($lang->slug); ?>" class="collapse show"  data-parent="#accordion-<?php echo e($lang->slug); ?>">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="about_page_<?php echo e($lang->slug); ?>_name"><?php echo e(__('Name')); ?></label>
                                                               <input type="text" class="form-control page-name" id="about_page_<?php echo e($lang->slug); ?>_name" value="<?php echo e(get_static_option('about_page_'.$lang->slug.'_name')); ?>" name="about_page_<?php echo e($lang->slug); ?>_name" placeholder="<?php echo e(__('Name')); ?>" >
                                                           </div>
                                                            <div class="from-group">
                                                                <label for="about_page_<?php echo e($lang->slug); ?>_slug"><?php echo e(__('Slug')); ?></label>
                                                                <input type="text" class="form-control" name="about_page_<?php echo e($lang->slug); ?>_slug" id="about_page_<?php echo e($lang->slug); ?>_slug" value="<?php echo e(get_static_option('about_page_'.$lang->slug.'_slug')); ?>"  placeholder="<?php echo e(__('Slug')); ?>" >
                                                                <small><?php echo e(__('slug example: about-page')); ?></small>
                                                            </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="card">
                                                   <div class="card-header" id="service_page_<?php echo e($lang->slug); ?>">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#service_page_content_<?php echo e($lang->slug); ?>" aria-expanded="false" >
                                                               <span class="page-title"><?php if(!empty(get_static_option('service_page_'.$lang->slug.'_name'))): ?> <?php echo e(get_static_option('service_page_'.$lang->slug.'_name')); ?> <?php else: ?> <?php echo e(__('Service')); ?>  <?php endif; ?></span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="service_page_content_<?php echo e($lang->slug); ?>" class="collapse"  data-parent="#accordion-<?php echo e($lang->slug); ?>">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="service_page_<?php echo e($lang->slug); ?>_name"><?php echo e(__('Name')); ?></label>
                                                               <input type="text" class="form-control page-name" id="service_page_<?php echo e($lang->slug); ?>_name" value="<?php echo e(get_static_option('service_page_'.$lang->slug.'_name')); ?>" name="service_page_<?php echo e($lang->slug); ?>_name" placeholder="<?php echo e(__('Name')); ?>" >
                                                           </div>
                                                           <div class="from-group">
                                                               <label for="service_page_<?php echo e($lang->slug); ?>_slug"><?php echo e(__('Slug')); ?></label>
                                                               <input type="text" class="form-control" name="service_page_<?php echo e($lang->slug); ?>_slug" id="service_page_<?php echo e($lang->slug); ?>_slug" value="<?php echo e(get_static_option('service_page_'.$lang->slug.'_slug')); ?>"  placeholder="<?php echo e(__('Slug')); ?>" >
                                                               <small><?php echo e(__('slug example: service-page')); ?></small>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="card">
                                                   <div class="card-header" id="work_page_<?php echo e($lang->slug); ?>">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#work_page_content_<?php echo e($lang->slug); ?>" aria-expanded="false" >
                                                               <span class="page-title"><?php if(!empty(get_static_option('work_page_'.$lang->slug.'_name'))): ?> <?php echo e(get_static_option('work_page_'.$lang->slug.'_name')); ?> <?php else: ?> <?php echo e(__('Work')); ?>  <?php endif; ?></span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="work_page_content_<?php echo e($lang->slug); ?>" class="collapse"  data-parent="#accordion-<?php echo e($lang->slug); ?>">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="work_page_<?php echo e($lang->slug); ?>_name"><?php echo e(__('Name')); ?></label>
                                                               <input type="text" class="form-control page-name" id="work_page_<?php echo e($lang->slug); ?>_name" value="<?php echo e(get_static_option('work_page_'.$lang->slug.'_name')); ?>" name="work_page_<?php echo e($lang->slug); ?>_name" placeholder="<?php echo e(__('Name')); ?>" >
                                                           </div>
                                                           <div class="from-group">
                                                               <label for="work_page_<?php echo e($lang->slug); ?>_slug"><?php echo e(__('Slug')); ?></label>
                                                               <input type="text" class="form-control" name="work_page_<?php echo e($lang->slug); ?>_slug" id="work_page_<?php echo e($lang->slug); ?>_slug" value="<?php echo e(get_static_option('work_page_'.$lang->slug.'_slug')); ?>"  placeholder="<?php echo e(__('Slug')); ?>" >
                                                               <small><?php echo e(__('slug example: work-page')); ?></small>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="card">
                                                   <div class="card-header" id="team_page_<?php echo e($lang->slug); ?>">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#team_page_content_<?php echo e($lang->slug); ?>" aria-expanded="false" >
                                                               <span class="page-title"><?php if(!empty(get_static_option('team_page_'.$lang->slug.'_name'))): ?> <?php echo e(get_static_option('team_page_'.$lang->slug.'_name')); ?> <?php else: ?> <?php echo e(__('Team')); ?>  <?php endif; ?></span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="team_page_content_<?php echo e($lang->slug); ?>" class="collapse"  data-parent="#accordion-<?php echo e($lang->slug); ?>">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="team_page_<?php echo e($lang->slug); ?>_name"><?php echo e(__('Name')); ?></label>
                                                               <input type="text" class="form-control page-name" id="team_page_<?php echo e($lang->slug); ?>_name" value="<?php echo e(get_static_option('team_page_'.$lang->slug.'_name')); ?>" name="team_page_<?php echo e($lang->slug); ?>_name" placeholder="<?php echo e(__('Name')); ?>" >
                                                           </div>
                                                           <div class="from-group">
                                                               <label for="team_page_<?php echo e($lang->slug); ?>_slug"><?php echo e(__('Slug')); ?></label>
                                                               <input type="text" class="form-control" name="team_page_<?php echo e($lang->slug); ?>_slug" id="team_page_<?php echo e($lang->slug); ?>_slug" value="<?php echo e(get_static_option('team_page_'.$lang->slug.'_slug')); ?>"  placeholder="<?php echo e(__('Slug')); ?>" >
                                                               <small><?php echo e(__('slug example: team-page')); ?></small>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="card">
                                                   <div class="card-header" id="faq_page_<?php echo e($lang->slug); ?>">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_page_content_<?php echo e($lang->slug); ?>" aria-expanded="false" >
                                                               <span class="page-title"><?php if(!empty(get_static_option('faq_page_'.$lang->slug.'_name'))): ?> <?php echo e(get_static_option('faq_page_'.$lang->slug.'_name')); ?> <?php else: ?> <?php echo e(__('Faq')); ?>  <?php endif; ?></span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="faq_page_content_<?php echo e($lang->slug); ?>" class="collapse"  data-parent="#accordion-<?php echo e($lang->slug); ?>">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="faq_page_<?php echo e($lang->slug); ?>_name"><?php echo e(__('Name')); ?></label>
                                                               <input type="text" class="form-control page-name" id="faq_page_<?php echo e($lang->slug); ?>_name" value="<?php echo e(get_static_option('faq_page_'.$lang->slug.'_name')); ?>" name="faq_page_<?php echo e($lang->slug); ?>_name" placeholder="<?php echo e(__('Name')); ?>" >
                                                           </div>
                                                           <div class="from-group">
                                                               <label for="faq_page_<?php echo e($lang->slug); ?>_slug"><?php echo e(__('Slug')); ?></label>
                                                               <input type="text" class="form-control" name="faq_page_<?php echo e($lang->slug); ?>_slug" id="faq_page_<?php echo e($lang->slug); ?>_slug" value="<?php echo e(get_static_option('faq_page_'.$lang->slug.'_slug')); ?>"  placeholder="<?php echo e(__('Slug')); ?>" >
                                                               <small><?php echo e(__('slug example: faq-page')); ?></small>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function (e) {
            $('.page-name').bind('change paste keyup',function (e) {
                $(this).parent().parent().parent().prev().find('.page-title').text($(this).val());
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/general-settings/page-settings.blade.php ENDPATH**/ ?>