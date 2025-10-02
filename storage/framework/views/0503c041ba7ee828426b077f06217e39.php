<?php $__env->startSection('title', 'Gallery || techguru || IT Solutions & Technology Laravel Template'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/module-css/error.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/module-css/gallery.css')); ?>">
<?php $__env->stopPush(); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-header','data' => ['title' => 'Gallery','subtitle' => 'Gallery']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Gallery','subtitle' => 'Gallery']); ?>
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

    <!--Gallery Page Start-->
    <section class="gallery-page">
        <div class="container">
            <div class="row masonary-layout">
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="<?php echo e(asset('assets/images/gallery/gallery-page-1-1.jpg')); ?>" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="<?php echo e(asset('assets/images/gallery/gallery-page-1-1.jpg')); ?>"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="<?php echo e(asset('assets/images/gallery/gallery-page-1-2.jpg')); ?>" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="<?php echo e(asset('assets/images/gallery/gallery-page-1-2.jpg')); ?>"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="<?php echo e(asset('assets/images/gallery/gallery-page-1-3.jpg')); ?>" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="<?php echo e(asset('assets/images/gallery/gallery-page-1-3.jpg')); ?>"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="<?php echo e(asset('assets/images/gallery/gallery-page-1-4.jpg')); ?>" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="<?php echo e(asset('assets/images/gallery/gallery-page-1-4.jpg')); ?>"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="<?php echo e(asset('assets/images/gallery/gallery-page-1-5.jpg')); ?>" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="<?php echo e(asset('assets/images/gallery/gallery-page-1-5.jpg')); ?>"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="<?php echo e(asset('assets/images/gallery/gallery-page-1-6.jpg')); ?>" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="<?php echo e(asset('assets/images/gallery/gallery-page-1-6.jpg')); ?>"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="<?php echo e(asset('assets/images/gallery/gallery-page-1-7.jpg')); ?>" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="<?php echo e(asset('assets/images/gallery/gallery-page-1-7.jpg')); ?>"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="<?php echo e(asset('assets/images/gallery/gallery-page-1-8.jpg')); ?>" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="<?php echo e(asset('assets/images/gallery/gallery-page-1-8.jpg')); ?>"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="<?php echo e(asset('assets/images/gallery/gallery-page-1-9.jpg')); ?>" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="<?php echo e(asset('assets/images/gallery/gallery-page-1-9.jpg')); ?>"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
            </div>
        </div>
    </section>
    <!--Gallery Page End-->

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

<?php echo $__env->make('layouts.layout4', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/khanhhoa/sites/techguru/resources/views/pages/gallery.blade.php ENDPATH**/ ?>