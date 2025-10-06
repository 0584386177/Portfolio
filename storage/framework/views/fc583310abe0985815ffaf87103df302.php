<?php
    use App\Models\CategoryPost;
    $categories = CategoryPost::all();
?>
<ul class="main-menu__list">
    <li class="">
        <a href="<?php echo e(route('portfolio')); ?>">TRANG CHỦ</a>
    </li>
    <li <?php if(request()->is(['thiet-ke-website'])): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('thiet-ke-website')); ?>">THIẾT KẾ WEBSITE</a>
    </li>
    
    
    
    
    <li <?php if(request()->is(['software'])): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('software')); ?>">PHẦN MỀM</a>
    </li>

    <li class="dropdown <?php if(request()->is('category/*')): ?> current <?php endif; ?>">
        <a href="<?php echo e(route('blog')); ?>">BÀI VIẾT</a>
        <ul class="">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(route('category.show', $category->slug)); ?>"
                        class="<?php if(request()->is('category/' . $category->slug)): ?> active <?php endif; ?>">
                        <?php echo e($category->name); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>



</ul>
<?php /**PATH /home/khanhhoa/sites/techguru/resources/views/components/menuList.blade.php ENDPATH**/ ?>