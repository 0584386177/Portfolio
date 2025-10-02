<ul class="main-menu__list">
    <li class="">
        <a href="<?php echo e(route('portfolio')); ?>">TRANG CHỦ</a>
    </li>
    <li <?php if(request()->is(['thiet-ke-website'])): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('thiet-ke-website')); ?>">THIẾT KẾ WEBSITE</a>
    </li>
    
    
    
    
    <li>
        <a href="<?php echo e(route('blog')); ?>">BÀI VIẾT</a>
    </li>
</ul>
<?php /**PATH /home/khanhhoa/sites/techguru/resources/views/components/menuList.blade.php ENDPATH**/ ?>