<?php $__env->startSection('title', 'KhanhHoa - Tin tức công nghệ'); ?>
<?php $__env->startSection('content'); ?>
    <section class="software-page mt-5">
        <div class="software-page__shape-1"></div>
        <div class="software-page__shape-2"></div>
        <div class="container">
            <div class="section-title text-center mb-4">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline text-uppercase">Thư viện Phần mềm</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title">Các công cụ và phần mềm hữu ích</h2>
            </div>

            <div class="row">
                
                <?php if($softwares->count() == 0): ?>
                    <h1 class="text-center text-uppercase text-danger fw-bold pt-0">Đang cập nhật</h1>
                    <button class="btn btn-back">
                        <a href="<?php echo e(route('software')); ?>"><i class="fas fa-arrow-left"></i> Back</a></button>
                <?php else: ?>
                    <form action="<?php echo e(route('software')); ?>" method="GET"
                        class="software-filter-bar d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                        
                        <div class="filter-start d-flex align-items-center gap-2">
                            <select name="category" class="form-select nice-select form-select-sm">
                                <option value="" disabled selected hidden>Lọc danh mục</option>
                                <?php $__currentLoopData = $categories_parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <select name="sort" class="form-select form-select-sm">
                                <option disabled hidden selected>Lọc sản phẩm</option>
                                <option value="luot-tai-cao-nhat">Lượt tải cao nhất</option>
                                <option value="sap-xep-a-z">Sắp xếp từ A->Z</option>
                                <option value="sap-xep-z-a">Sắp xếp từ Z->A</option>
                                <option value="san-pham-moi-dang">Sản phẩm mới đăng</option>
                            </select>
                            <div class="d-flex gap-3 action">
                                <button type="submit"><i class="fas fa-filter"></i> Lọc</button>
                                <button type="submit" class="btn btn-reset"><a href="<?php echo e(route('software')); ?>"><i
                                            class="far fa-sync-alt"></i>
                                        Reset</a></button>
                            </div>
                        </div>

                        
                        <div class="filter-end">
                            <form method="GET" action="" class="position-relative" style="width: 240px;">
                                <i class="far fa-search search-icon"></i>
                                <input type="text" name="search" class="form-control form-control-sm search-input"
                                    placeholder="Tìm kiếm phần mềm...">
                            </form>
                        </div>

                    </form>
                    <?php $__currentLoopData = $softwares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $software): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="software-one__single">
                                <div class="software-one__img">
                                    <a href="">
                                        <img height="200" style=" width:100%; object-fit:contain;"
                                            src="<?php echo e(asset('storage/' . $software->thumbnail)); ?>" alt="Ảnh bìa">
                                    </a>
                                    <div class="software-one__tags version">
                                        <span>Phiên bản: <?php echo e($software->version ?? 'Mới nhất'); ?></span>
                                    </div>
                                </div>
                                <div class="software-one__content">
                                    <ul class="software-one__meta list-unstyled">
                                        
                                        <li>
                                            
                                            <a><span class="far fa-download"></span> <?php echo e($software->download_count); ?> lượt
                                                tải</a>
                                        </li>
                                        <li>
                                            
                                            <?php
                                                $bytes = $software->file_size ?? 0;
                                                if ($bytes >= 1073741824) {
                                                    $fileSize = number_format($bytes / 1073741824, 2) . ' GB';
                                                } elseif ($bytes >= 1048576) {
                                                    $fileSize = number_format($bytes / 1048576, 2) . ' MB';
                                                } elseif ($bytes >= 1024) {
                                                    $fileSize = number_format($bytes / 1024, 2) . ' KB';
                                                } else {
                                                    $fileSize = $bytes . ' bytes';
                                                }
                                            ?>
                                            <a><span class="far fa-file-archive"></span> <?php echo e($fileSize); ?></a>
                                        </li>
                                    </ul>
                                    <h3 class="software-one__title"><a href=""><?php echo e($software->name); ?></a>
                                    </h3>
                                    
                                    <div class="software-one__btn-box">
                                        <a href="<?php echo e(route('software.download', $software->slug)); ?>" class="software-btn">
                                            DOWNLOAD
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
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

<div class="software-page__pagination">
    <?php echo e($softwares->links()); ?>

</div>


<!-- Modal thông báo tải -->
<div class="modal" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-body">
                <p class="mb-3" id="modal-download-message">
                    Hãy giữ vững tinh thần và đừng tắt tab nhé<br> File của bạn đang bay về máy...
                </p>

                <div class="spinner-border text-primary mb-3" role="status" style="width: 3rem; height: 3rem;">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="text-dark small">Chờ chút xíu thôi... gần xong rồi đó</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal thông báo tải -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4 border-0 shadow-lg rounded-4">
            <div class="modal-body">
                <p class="mb-3 fw-semibold text-danger" id="modal-download-message">
                    File đang được tải về<br> Vui lòng đợi chút nhé...
                </p>
                <div class="spinner-border text-primary mb-3" role="status" style="width: 3rem; height: 3rem;">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.software-btn');
        const messageElement = document.getElementById('modal-download-message');

        buttons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();

                // Khởi tạo modal chỉ khi cần
                const modal = new bootstrap.Modal(document.getElementById('downloadModal'));

                if (messageElement) {
                    messageElement.innerHTML =
                        '<span class="text-danger">Hệ thống đang chuẩn bị file...</span><br> <span class="text-danger">Vui lòng không đóng cửa sổ!</span>';
                }

                modal.show();

                window.location.href = this.getAttribute('href');

                setTimeout(() => modal.hide(), 8000);
            });
        });
    });
</script>

<?php echo $__env->make('layouts.layout4', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/khanhhoa/sites/techguru/resources/views/pages/software.blade.php ENDPATH**/ ?>