        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url(<?php echo e(asset('assets/images/backgrounds/page-header-bg.jpg')); ?>);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2><?php echo e($title ?? 'Welcome'); ?></h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?php echo e(route('portfolio')); ?>"><i class="fas fa-home"></i>Home</a></li>
                            <li><span class="icon-right-arrow-1"></span></li>
                            <?php if(request()->is([
                                    'services-carousel',
                                    'threat-detection-prevention',
                                    'endpoint-device-security',
                                    'data-protection-privacy',
                                    'backup-recovery',
                                    'advanced-technology',
                                    'cloud-managed-services',
                                ])): ?>
                                <li><a href="<?php echo e(route('services')); ?>">Services</a></li>
                               <li><span class="icon-right-arrow-1"></span></li>
                            <?php endif; ?>
                            <?php if(request()->is(['blog-carousel', 'blog-list', 'blog-list-2', 'blog-details'])): ?>
                                <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                                <li><span class="icon-right-arrow-1"></span></li>
                            <?php endif; ?>

                            <li><?php echo e($subtitle ?? 'Go to home'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
<?php /**PATH /home/khanhhoa/sites/techguru/resources/views/components/page-header.blade.php ENDPATH**/ ?>