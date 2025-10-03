<?php $__env->startSection('title', 'KhanhHoa - Tin tức công nghệ'); ?>


<?php $__env->startSection('content'); ?>
    <section class="blog-page mt-5">
        <div class="blog-page__shape-1"></div>
        <div class="blog-page__shape-2"></div>
        <div class="container">
            <div class="section-title text-center  ">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">News & Blog</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title  mt-5 ">Tin tức <span>Công nghệ </span>
            </div>
            <div class="row">
                <!-- Blog One Single Start -->
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6  ">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                               <a href="<?php echo e(route('blog-detail',$post->id)); ?>">
                                 <img height="200" style="object-fit:cover;"
                                    src="<?php echo e(asset('storage/' . $post->thumbnail)); ?>" alt="Ảnh bìa">
                               </a>
                                <div class="blog-one__tags category_id">
                                    <span><?php echo e($post->category->name); ?></span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="<?php echo e(route('blog-detail', $post->id)); ?>"><span
                                                class="far fa-calendar-alt"></span><?php echo e(date_format($post->created_at, 'd-m-Y')); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('blog-detail', $post->id)); ?>"><span
                                                class="fal fa-user"></span><?php echo e($post->user->name); ?></a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a
                                        href="<?php echo e(route('blog-detail', $post->id)); ?>"><?php echo e($post->title); ?></a>
                                </h3>
                                <p class="blog-one__text"><?php echo e($post->short_description); ?></p>
                                <div class="blog-one__btn-box">
                                    <a href="<?php echo e(route('blog-detail', $post->id)); ?>" class="thm-btn">Chi tiết<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Blog One Single Start -->

            </div>
        </div>
    </section>
    <!--Blog Page End-->



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

<?php echo $__env->make('layouts.layout4', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/khanhhoa/sites/techguru/resources/views/pages/blog.blade.php ENDPATH**/ ?>