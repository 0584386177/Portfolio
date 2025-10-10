<?php
    use App\Models\CategoryPost;
    use App\Models\CategorySoftware;
    $categories_post = CategoryPost::all();
    $categories_software = CategorySoftware::whereNull('parent_id')->with('children')->get();

?>
<ul class="main-menu__list">
    <li class="">
        <a href="<?php echo e(route('portfolio')); ?>">TRANG CHỦ</a>
    </li>
    <li <?php if(request()->is(['thiet-ke-website'])): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('thiet-ke-website')); ?>">THIẾT KẾ WEBSITE</a>
    </li>

    <li class="dropdown <?php if(request()->is('software/*')): ?> current <?php endif; ?>">
        <a href="<?php echo e(route('software')); ?>">PHẦN MỀM</a>
        <ul class="">
            <?php $__currentLoopData = $categories_software; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="<?php if($category->children->count()): ?> dropdown-submenu <?php endif; ?>">
                    <a href="<?php echo e(route('category.software.show', $category->slug)); ?>"
                        class="<?php if(request()->is('software/' . $category->slug)): ?> active <?php endif; ?>">
                        <?php echo e($category->name); ?>

                    </a>

                    
                    <?php if($category->children->count()): ?>
                        <ul class="submenu">
                            <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('category.software.show', $child->slug)); ?>"
                                        class="<?php if(request()->is('software/' . $child->slug)): ?> active <?php endif; ?>">
                                        <?php echo e($child->name); ?>

                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
    <li class="dropdown <?php if(request()->is('category/*')): ?> current <?php endif; ?>">
        <a href="<?php echo e(route('blog')); ?>">BÀI VIẾT</a>
        <ul class="">
            <?php $__currentLoopData = $categories_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(route('category.post.show', $category->slug)); ?>"
                        class="<?php if(request()->is('category/' . $category->slug)): ?> active <?php endif; ?>">
                        <?php echo e($category->name); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>



</ul>
<?php /**PATH /home/khanhhoa/sites/techguru/resources/views/components/menuList.blade.php ENDPATH**/ ?>