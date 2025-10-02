<header class="main-header">
    <div class="main-menu__top">
        <div class="container">
            <div class="main-menu__top-inner d-flex justify-content-end">
                <ul class="list-unstyled main-menu__contact-list">
                    <li>
                        <div class="icon">
                            <i class="icon-search-mail"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailto:huynhkhanhhoa2010@gmail.com">huynhkhanhhoa2010@gmail.com</a>
                            </p>
                        </div>
                    </li>

                    <li>
                        <div class="icon">
                            <i class="icon-phone-call"></i>
                        </div>
                        <div class="text">
                            <p><a href="tel:0584386177">0584.386.177</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/hoa.huynhkhanh.90"><span class="icon-facebook"></span></a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="container">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="<?php echo e(route('portfolio')); ?>" class="fs-2 fw-bold"><span
                                    class="text-white">Khanh</span><span class="text-danger">Hoa</span></a>
                        </div>
                    </div>
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <?php if (isset($component)) { $__componentOriginal08d8a7e78212e5276ff67ebb414c512b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08d8a7e78212e5276ff67ebb414c512b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menuList','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menuList'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08d8a7e78212e5276ff67ebb414c512b)): ?>
<?php $attributes = $__attributesOriginal08d8a7e78212e5276ff67ebb414c512b; ?>
<?php unset($__attributesOriginal08d8a7e78212e5276ff67ebb414c512b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08d8a7e78212e5276ff67ebb414c512b)): ?>
<?php $component = $__componentOriginal08d8a7e78212e5276ff67ebb414c512b; ?>
<?php unset($__componentOriginal08d8a7e78212e5276ff67ebb414c512b); ?>
<?php endif; ?>
                    </div>
                    <div class="main-menu__right">
                        
                        <div class="main-menu__btn-box">
                            <a href="<?php echo e(route('contact')); ?>" class="thm-btn">Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /home/khanhhoa/sites/techguru/resources/views/components/header.blade.php ENDPATH**/ ?>