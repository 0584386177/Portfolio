<?php $__env->startSection('title', 'Contact Us || techguru || IT Solutions & Technology Laravel Template'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/module-css/skill.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/module-css/faq.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/module-css/google-map.css')); ?>">
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
    <!--Page Header End-->

    <!-- Contact One Start -->
    <section class="contact-one mt-5 pb-5">
        <h1 class="section-title p-0 mt-1 text-center text-warning">THÔNG TIN LIÊN HỆ</h1>
        <div class="contact-one__bg-shape"
            style="background-image: url(<?php echo e(asset('assets/images/shapes/contact-one-bg-shape.png')); ?>);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="contact-one__left-shape-1"></div>
                        <div class="contact-one__left-shape-2"></div>
                        <h3 class="contact-one__from-title">Gởi yêu cầu hổ trợ </h3>
                        <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Họ và tên</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-user-1"></span>
                                        </div>
                                        <input type="text" name="name" placeholder="vd : Nguyễn Văn A" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Địa chỉ email</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <input type="email" name="email" placeholder="abcxyz@example.com"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Số điện thoại</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <input type="text" name="Phone" placeholder="0123456789" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Dịch vụ</h4>
                                    <div class="contact-one__input-box">
                                        <div class="select-box">
                                            <select class="selectmenu wide">
                                                <option selected>Choose
                                                </option>
                                                <option>Thiết kế website</option>
                                                <option>Lỗi hệ thống</option>
                                                <option>Lỗi giao diện</option>
                                                <option>Cào dữ liệu</option>
                                                <option>Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h4 class="contact-one__input-title">Mô tả chi tiết</h4>
                                <div class="contact-one__input-box text-message-box">
                                    <div class="contact-one__input-icon">
                                        <span class="icon-edit"></span>
                                    </div>
                                    <textarea name="message" placeholder="Write your message"></textarea>
                                </div>
                                <div class="contact-one__btn-box">
                                    <button type="submit" class="thm-btn"><span>Submit</span><i
                                            class="icon-right-arrow"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Thông tin liên hệ</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <ul class="contact-one__list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="content">
                                        <h4 class="text-warning">Địa chỉ</h4>
                                        <p>K112 Trần Cao Vân, P.Xuân Hà
                                            <br> Tp.Đà Nẵng, Việt Nam.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-mail"></span>
                                    </div>
                                    <div class="content">
                                        <h4 class="text-warning">Email</h4>
                                        <p><a href="mailto:huynhkhanhhoa2010@gmail.com">huynhkhanhhoa2010@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="content">
                                        <h4 class="text-warning">Contact</h4>
                                        <p>Tel: <a href="tel:0584386177">0584.386.177</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Contact One End -->

    <!--FAQ Two Start-->
    <section class="faq-two pt-5">
        <div class="faq-two__shape-1">
            <img src="<?php echo e(asset('assets/images/shapes/faq-two-shape-1.png')); ?>" alt="">
        </div>
        <div class="faq-two__shape-2">
            <img src="<?php echo e(asset('assets/images/shapes/faq-two-shape-2.png')); ?>" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="faq-two__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">FAQS</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Những <span>câu hỏi</span> thường gặp
                                
                            </h2>
                        </div>
                        <div class="faq-two__bdr"></div>
                        <div class="faq-two__contact">
                            <div class="icon">
                                <span class="icon-customer-service-headset"></span>
                            </div>
                            <div class="content">
                                <span>Get Support</span>
                                <p><a href="tel:9900567780">+84 584 386 177</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="faq-two__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <!-- Q1 -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Bạn thiết kế những loại website nào?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="accrodion-content__text-1">Chúng tôi thiết kế đa dạng loại website như
                                            website doanh nghiệp, thương mại điện tử, blog cá nhân, landing page và website
                                            giới thiệu dịch vụ.</p>
                                        <p class="accrodion-content__text-2">Mỗi website đều được tối ưu theo nhu cầu và
                                            mục tiêu riêng của khách hàng, đảm bảo hiệu quả về hình ảnh, trải nghiệm người
                                            dùng và chức năng.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Q2 -->
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Thiết kế website mất bao lâu?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="accrodion-content__text-1">Thời gian thiết kế phụ thuộc vào độ phức tạp
                                            của dự án. Trung bình, một website cơ bản mất từ 2 đến 4 tuần để hoàn thành.</p>
                                        <p class="accrodion-content__text-2">Các website lớn hơn, có nhiều tính năng như
                                            thương mại điện tử hoặc hệ thống quản lý riêng có thể kéo dài từ 1 đến 3 tháng.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Q3 -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Website có thân thiện với điện thoại không?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="accrodion-content__text-1">Tất cả website của chúng tôi đều được thiết kế
                                            chuẩn responsive, hiển thị tốt trên máy tính, tablet và điện thoại di động.</p>
                                        <p class="accrodion-content__text-2">Điều này giúp cải thiện trải nghiệm người dùng
                                            và hỗ trợ tốt hơn cho các chiến dịch marketing online.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Q4 -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Bạn có hỗ trợ seo cho website không?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="accrodion-content__text-1">Chúng tôi tối ưu seo on-page ngay trong quá
                                            trình thiết kế, bao gồm tốc độ tải trang, cấu trúc url, thẻ meta và nội dung
                                            thân thiện với công cụ tìm kiếm.</p>
                                        <p class="accrodion-content__text-2">Ngoài ra, khách hàng có thể yêu cầu dịch vụ
                                            seo nâng cao để tăng thứ hạng từ khóa và lượng truy cập tự nhiên.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Q5 -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Sau khi bàn giao tôi có thể tự quản lý website không?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="accrodion-content__text-1">Chúng tôi cung cấp hệ thống quản trị nội dung
                                            (cms) giúp khách hàng dễ dàng quản lý bài viết, hình ảnh và sản phẩm mà không
                                            cần biết lập trình.</p>
                                        <p class="accrodion-content__text-2">Ngoài ra, đội ngũ của chúng tôi luôn sẵn sàng
                                            hỗ trợ đào tạo và giải đáp thắc mắc trong quá trình sử dụng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ Two End-->
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

<?php echo $__env->make('layouts.layout4', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/khanhhoa/sites/techguru/resources/views/pages/contact.blade.php ENDPATH**/ ?>