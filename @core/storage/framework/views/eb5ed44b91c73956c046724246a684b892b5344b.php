<div class="newsletter-area padding-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-side-content">
                    <h2 class="title"><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_newsletter_area_title')); ?></h2>
                    <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_newsletter_area_description')); ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-side-content">
                    <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="text-danger"><?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <form action="<?php echo e(route('frontend.subscribe.newsletter')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="<?php echo e(__('Enter your email')); ?>" class="form-control">
                        </div>
                        <button type="submit" class="submit-btn"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/@core/resources/views/frontend/partials/newsletter.blade.php ENDPATH**/ ?>