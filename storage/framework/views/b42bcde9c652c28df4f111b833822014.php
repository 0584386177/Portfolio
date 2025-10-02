<?php $__env->startSection('title', 'Portfolio || techguru || IT Solutions & Technology Laravel Template'); ?>


<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal666135ff4889d72da89d7606601ff8e6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal666135ff4889d72da89d7606601ff8e6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.strickyHeader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('strickyHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal666135ff4889d72da89d7606601ff8e6)): ?>
<?php $attributes = $__attributesOriginal666135ff4889d72da89d7606601ff8e6; ?>
<?php unset($__attributesOriginal666135ff4889d72da89d7606601ff8e6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal666135ff4889d72da89d7606601ff8e6)): ?>
<?php $component = $__componentOriginal666135ff4889d72da89d7606601ff8e6; ?>
<?php unset($__componentOriginal666135ff4889d72da89d7606601ff8e6); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-header','data' => ['title' => 'Portfolio','subtitle' => 'Portfolio']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Portfolio','subtitle' => 'Portfolio']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e)): ?>
<?php $attributes = $__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e; ?>
<?php unset($__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e)): ?>
<?php $component = $__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e; ?>
<?php unset($__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e); ?>
<?php endif; ?>


        <!--Page Header End-->

        <!-- Portfolio Page Start -->
        <section class="portfolio-page">
            <h2 class="portfolio-one__big-text">portfolio</h2>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">See Our Works</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">How We've
                        <span>Empowered Businesses with</span> <br> <span>Innovative</span> Tech Solutions</h2>
                </div>
                <div class="portfolio-one__bottom">
                    <div class="container">
                        <div class="row">
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="<?php echo e(asset('assets/images/project/portfolio-1-1.jpg')); ?>" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>Web Development</span>
                                                <span>Branding</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a href="<?php echo e(route('portfolio-details')); ?>">Innovative
                                                    Digital
                                                    Solutions for a Smarter Future</a></h3>
                                            <p class="portfolio-one__text">Pioneering next-gen IT solutions that enhance
                                                efficiency and innovation.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="<?php echo e(asset('assets/images/project/portfolio-1-1.jpg')); ?>" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="<?php echo e(asset('assets/images/project/portfolio-1-2.jpg')); ?>" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>UI/UX Design</span>
                                                <span>Product Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a href="<?php echo e(route('portfolio-details')); ?>">Empowering
                                                    Businesses with Cutting-Edge Technology</a></h3>
                                            <p class="portfolio-one__text">Delivering smart, scalable, and future-proof
                                                tech
                                                solutions for growth.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="<?php echo e(asset('assets/images/project/portfolio-1-2.jpg')); ?>" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="<?php echo e(asset('assets/images/project/portfolio-1-3.jpg')); ?>" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>UI/UX Design</span>
                                                <span>Cyber Security</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a
                                                    href="<?php echo e(route('portfolio-details')); ?>">Transforming
                                                    Ideas
                                                    into Scalable IT Solutions</a></h3>
                                            <p class="portfolio-one__text">Turning complex challenges into streamlined,
                                                high-performance systems.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="<?php echo e(asset('assets/images/project/portfolio-1-3.jpg')); ?>" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="<?php echo e(asset('assets/images/project/portfolio-1-4.jpg')); ?>" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>Branding</span>
                                                <span>Product Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a href="<?php echo e(route('portfolio-details')); ?>">Driving
                                                    Digital
                                                    Excellence with Custom IT Services</a></h3>
                                            <p class="portfolio-one__text">Tailor-made IT solutions designed to optimize
                                                and
                                                elevate your business.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="<?php echo e(asset('assets/images/project/portfolio-1-4.jpg')); ?>" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="<?php echo e(asset('assets/images/project/portfolio-1-5.jpg')); ?>" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>UI/UX Design</span>
                                                <span>Product Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a href="<?php echo e(route('portfolio-details')); ?>">Seamless
                                                    Tech
                                                    Innovations for Business Growth</a></h3>
                                            <p class="portfolio-one__text">Bridging the gap between technology and
                                                success
                                                with
                                                seamless integration.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="<?php echo e(asset('assets/images/project/portfolio-1-5.jpg')); ?>" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="<?php echo e(asset('assets/images/project/portfolio-1-6.jpg')); ?>" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>UI/UX Design</span>
                                                <span>Product Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a
                                                    href="<?php echo e(route('portfolio-details')); ?>">Future-Ready
                                                    IT
                                                    Solutions for Every Industry</a></h3>
                                            <p class="portfolio-one__text">Adaptive and robust IT services built to
                                                thrive
                                                in a
                                                dynamic landscape.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="<?php echo e(asset('assets/images/project/portfolio-1-6.jpg')); ?>" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <div class="blog-page__pagination">
                                <ul class="pg-pagination list-unstyled">
                                    <li class="prev">
                                        <a href="#" aria-label="prev"><span class="icon-left-arrow-1"></span></a>
                                    </li>
                                    <li class="count active"><a href="#">01</a></li>
                                    <li class="count"><a href="#">02</a></li>
                                    <li class="count"><a href="#">...</a></li>
                                    <li class="count"><a href="#">10</a></li>
                                    <li class="next">
                                        <a href="#" aria-label="Next"><span class="icon-left-arrow-1"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Page End -->

        <!-- Newsletter Two Start -->
        

    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal20a8fd234fabfc5f0e64c45f7a5be70d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20a8fd234fabfc5f0e64c45f7a5be70d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.mobileMenu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('mobileMenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20a8fd234fabfc5f0e64c45f7a5be70d)): ?>
<?php $attributes = $__attributesOriginal20a8fd234fabfc5f0e64c45f7a5be70d; ?>
<?php unset($__attributesOriginal20a8fd234fabfc5f0e64c45f7a5be70d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20a8fd234fabfc5f0e64c45f7a5be70d)): ?>
<?php $component = $__componentOriginal20a8fd234fabfc5f0e64c45f7a5be70d; ?>
<?php unset($__componentOriginal20a8fd234fabfc5f0e64c45f7a5be70d); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5c70dfc01def73aae8627551511e0645 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c70dfc01def73aae8627551511e0645 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.searchPopup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('searchPopup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c70dfc01def73aae8627551511e0645)): ?>
<?php $attributes = $__attributesOriginal5c70dfc01def73aae8627551511e0645; ?>
<?php unset($__attributesOriginal5c70dfc01def73aae8627551511e0645); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c70dfc01def73aae8627551511e0645)): ?>
<?php $component = $__componentOriginal5c70dfc01def73aae8627551511e0645; ?>
<?php unset($__componentOriginal5c70dfc01def73aae8627551511e0645); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal8b7fbfc2318ed7fe3b034b3da93b1083 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b7fbfc2318ed7fe3b034b3da93b1083 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scroll-to-top','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('scroll-to-top'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b7fbfc2318ed7fe3b034b3da93b1083)): ?>
<?php $attributes = $__attributesOriginal8b7fbfc2318ed7fe3b034b3da93b1083; ?>
<?php unset($__attributesOriginal8b7fbfc2318ed7fe3b034b3da93b1083); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b7fbfc2318ed7fe3b034b3da93b1083)): ?>
<?php $component = $__componentOriginal8b7fbfc2318ed7fe3b034b3da93b1083; ?>
<?php unset($__componentOriginal8b7fbfc2318ed7fe3b034b3da93b1083); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout4', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/khanhhoa/sites/techguru/resources/views/pages/portfolio.blade.php ENDPATH**/ ?>