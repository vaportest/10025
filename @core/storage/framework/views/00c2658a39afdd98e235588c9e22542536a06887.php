<?php $post_img = null; ?>
<?php if(file_exists('assets/uploads/blog/blog-large-'.$blog_post->id.'.'.$blog_post->image)): ?>
    <?php $post_img = asset('assets/uploads/blog/blog-large-'.$blog_post->id.'.'.$blog_post->image); ?>
<?php endif; ?>
<?php $__env->startSection('og-meta'); ?>
    <meta property="og:url"  content="<?php echo e(route('frontend.blog.single',['id' => $blog_post->id,'any' => Str::slug($blog_post->title)])); ?>" />
    <meta property="og:type"  content="article" />
    <meta property="og:title"  content="<?php echo e($blog_post->title); ?>" />
    <meta property="og:image" content="<?php echo e($post_img); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e($blog_post->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e($blog_post->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="blog-details-content-area padding-100 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-item">
                        <div class="thumb">

                            <?php if(file_exists('assets/uploads/blog/blog-large-'.$blog_post->id.'.'.$blog_post->image)): ?>
                                <img src="<?php echo e(asset('assets/uploads/blog/blog-large-'.$blog_post->id.'.'.$blog_post->image)); ?>" alt="<?php echo e($blog_post->title); ?>">
                                <?php $post_img = asset('assets/uploads/blog/blog-large-'.$blog_post->id.'.'.$blog_post->image); ?>
                            <?php endif; ?>
                        </div>
                        <div class="entry-content">
                            <ul class="post-meta">
                                <li><i class="fa fa-calendar"></i> <?php echo e(date_format($blog_post->created_at,'d M Y')); ?></li>
                                <li><i class="fa fa-user"></i> <?php echo e($blog_post->user->name); ?></li>
                                <li>
                                    <div class="cats">
                                        <i class="fa fa-calendar"></i>
                                        <a href="<?php echo e(route('frontend.blog.category',['id' => $blog_post->category->id,'any'=> Str::slug($blog_post->category->name,'-')])); ?>"> <?php echo e($blog_post->category->name); ?></a>
                                    </div>
                                </li>
                            </ul>
                           <div class="content-area">
                               <?php echo $blog_post->content; ?>

                           </div>
                        </div>
                        <div class="blog-details-footer"><!-- entry footer -->
                            <div class="left">
                                <ul class="tags">
                                    <li class="title"><?php echo e(__('Tags:')); ?></li>
                                    <?php
                                        $all_tags = explode(',',$blog_post->tags);
                                    ?>
                                    <?php $__currentLoopData = $all_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($tag); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="right">
                                <ul class="social-share">
                                    <li class="title"><?php echo e(__('Share:')); ?></li>
                                    <?php echo single_post_share(route('frontend.blog.single',['id' => $blog_post->id, 'any' => Str::slug($blog_post->title,'-')]),$blog_post->title,$post_img); ?>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="disqus-comment-area">
                        <div id="disqus_thread"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                   <?php echo $__env->make('frontend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        var disqus_config = function () {
        this.page.url = "<?php echo e(route('frontend.blog.single',['id' => $blog_post->id, 'any' => Str::slug($blog_post->title,'-')])); ?>";
        this.page.identifier = "<?php echo e($blog_post->id); ?>";
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = "https://<?php echo e(get_static_option('site_disqus_key')); ?>.disqus.com/embed.js";
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/frontend/pages/blog-single.blade.php ENDPATH**/ ?>