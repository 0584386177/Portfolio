<?php $__env->startSection('title', 'Team || techguru || IT Solutions & Technology Laravel Template'); ?>


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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-header','data' => ['title' => 'Team members','subtitle' => 'Team members']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Team members','subtitle' => 'Team members']); ?>
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

        <!--Team Page Start-->
        <section class="team-page">
            <div class="team-page__shape-1">
                <img src="<?php echo e(asset('assets/images/shapes/team-page-shape-1.png')); ?>" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="<?php echo e(asset('assets/images/team/team-1-1.jpg')); ?>" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>CEO & Founder</p>
                                    <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">James Carter</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="<?php echo e(asset('assets/images/team/team-1-2.jpg')); ?>" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Chief Technology Officer </p>
                                    <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Sophia Reynolds</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="<?php echo e(asset('assets/images/team/team-1-3.jpg')); ?>" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Lead Software Engineer</p>
                                    <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Michael Hayes</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="<?php echo e(asset('assets/images/team/team-1-4.jpg')); ?>" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>UI/UX Designer</p>
                                    <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Emma Brooks </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="500ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="<?php echo e(asset('assets/images/team/team-1-5.jpg')); ?>" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Marketing Manager</p>
                                    <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Sarah Johnson </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="600ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="<?php echo e(asset('assets/images/team/team-1-6.jpg')); ?>" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Product Designer</p>
                                    <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">David Matthews </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="<?php echo e(asset('assets/images/team/team-1-7.jpg')); ?>" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Sales Director</p>
                                    <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Olivia Grace</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="800ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="<?php echo e(asset('assets/images/team/team-1-8.jpg')); ?>" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Operations Lead</p>
                                    <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Mitchell Marsh </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
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
        </section>
        <!--Team Page End-->



        <!-- Newsletter One Start -->
        

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
<?php echo $__env->make('layouts.layout4', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/khanhhoa/sites/techguru/resources/views/pages/team.blade.php ENDPATH**/ ?>