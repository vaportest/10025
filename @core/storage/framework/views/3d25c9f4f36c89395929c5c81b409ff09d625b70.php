<?php $__env->startSection('og-meta'); ?>
    <meta property="og:url"  content="<?php echo e(route('frontend.services.single',['id' => $service_item->id,'any' => Str::slug($service_item->title)])); ?>" />
    <meta property="og:type"  content="article" />
    <meta property="og:title"  content="<?php echo e($service_item->title); ?>" />
    <?php if(file_exists('assets/uploads/services/service-large-'.$service_item->id.'.'.$service_item->image)): ?>
        <meta property="og:image" content="<?php echo e(asset('assets/uploads/services/service-large-'.$service_item->id.'.'.$service_item->image)); ?>" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e($service_item->title); ?>

 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('page-title'); ?>
     <?php echo e(__('Service Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="page-content service-details padding-top-120 padding-bottom-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-item">
                        <div class="thumb">
                            <?php if(file_exists('assets/uploads/services/service-large-'.$service_item->id.'.'.$service_item->image)): ?>
                                <img src="<?php echo e(asset('assets/uploads/services/service-large-'.$service_item->id.'.'.$service_item->image)); ?>" alt="<?php echo e($service_item->title); ?>">
                            <?php endif; ?>
                        </div>
                        <h2 class="main-title"><?php echo e($service_item->title); ?></h2>
                       <div class="service-description">
                           <?php echo $service_item->description; ?>

                       </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-widget">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title"><?php echo e(__('Services')); ?></h3>
                            <ul>
                                <?php $__currentLoopData = $service_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li <?php if($data->id == $service_item->category->id ): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('frontend.services.category',['id' => $data->id, 'any' => Str::slug($data->name)])); ?>"><?php echo e($data->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/frontend/pages/service-single.blade.php ENDPATH**/ ?>