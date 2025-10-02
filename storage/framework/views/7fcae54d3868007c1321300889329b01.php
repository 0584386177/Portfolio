<header class="main-header-two">
    <div class="main-menu-two__top">
        <div class="main-menu-two__top-inner">
            <p class="main-menu-two__top-text"></p>
            <ul class="list-unstyled main-menu-two__contact-list">
                <li>
                    <div class="icon">
                        <i class="icon-pin"></i>
                    </div>
                    <div class="text">
                        <p>K112 Trần Cao Vân, P. Xuân Hà, TP.Đà Nẵng</p>
                    </div>
                </li>
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
            </ul>
        </div>
    </div>
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="main-menu-two__wrapper-inner">
                <div class="main-menu-two__left">
                    <div class="main-menu-two__logo">
                        <a href="<?php echo e(route('portfolio')); ?>"><img src="<?php echo e(asset('assets/images/resources/logo-1.png')); ?>"
                                alt=""></a>
                    </div>
                </div>
                <div class="main-menu-two__main-menu-box">
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
                <div class="main-menu-two__right">
                    <div class="main-menu-two__search-box">
                        <a href="#"
                            class="main-menu-two__search searcher-toggler-box icon-search-interface-symbol"></a>
                    </div>
                    <div class="main-menu-two__btn-box">
                        <a href="<?php echo e(route('contact')); ?>" class="thm-btn">Get in Touch<span
                                class="icon-right-arrow"></span></a>
                    </div>
                    <div class="main-menu-two__nav-sidebar-icon">
                        <a class="navSidebar-button" href="#">
                            <span class="icon-dots-menu-one"></span>
                            <span class="icon-dots-menu-two"></span>
                            <span class="icon-dots-menu-three"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /home/khanhhoa/sites/techguru/resources/views/components/headerPortfolio.blade.php ENDPATH**/ ?>