<?php $__env->startSection('title', 'KhanhHoa - Dịch vụ thiết kế website'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/module-css/feature.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/module-css/faq.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/module-css/cta.css')); ?>">
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
    <!-- /.stricky-header -->


    <!--Banner One Start-->
    <section style="background-color: var(--techguru-black);" class="banner-one">

        <div class="banner-one__shape-bg float-bob-y"
            style="background-image: url(<?php echo e(asset('assets/images/shapes/banner-one-shape-bg.png')); ?>);"></div>

        <div class="container">
            <div class="banner-one__inner">
                <h2 class="banner-one__title">
                    Giải pháp thiết kế website <br> <span>chuyên nghiệp & tối ưu</span>
                </h2>
                <p class="banner-one__text text-white mt-3">
                    Chúng tôi mang đến những website hiện đại, chuẩn UI/UX, tối ưu tốc độ tải trang, thân thiện với thiết bị
                    di động và hỗ trợ SEO hiệu quả.
                </p>
                <div class="banner-one__btn-box">
                    <a href="<?php echo e(route('contact')); ?>" class="thm-btn mt-3">
                        Liên hệ ngay<spanclass="icon-right-arrow"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Banner One End-->



    <!--About Three Start -->
    <section class="about-three pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-three__img-box">
                            <div class="about-three__img">
                                <img style="border-radius:10px;" class="fade-mask"
                                    src="<?php echo e(asset('assets/images/resources/avatar.jpg')); ?>"
                                    alt="Freelancer thiết kế website">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Giới thiệu</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">
                                Tôi là <span class="text-warning fw-bold">freelancer</span> thiết kế & phát triển
                                website
                            </h2>
                        </div>
                        <p class="about-three__text">
                            - Với nhiều năm kinh nghiệm trong lĩnh vực thiết kế website bằng Laravel, Wordpress và các công
                            nghệ hiện đại,
                            tôi mang đến cho khách hàng những sản phẩm tối ưu, đẹp mắt và dễ dàng quản lý.
                            Website không chỉ là công cụ giới thiệu mà còn là kênh bán hàng hiệu quả giúp bạn phát triển
                            thương hiệu cá nhân và doanh nghiệp.
                        </p>
                        
                        <ul class="about-three__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="content">
                                    <h3>Làm việc trực tiếp, nhanh chóng & minh bạch</h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="content">
                                    <h3>Website tối ưu cho kinh doanh & thương hiệu cá nhân</h3>
                                </div>
                            </li>
                        </ul>
                        <div class="about-three__btn-and-call-box">
                            <div class="about-three__btn-box">
                                <a href="<?php echo e(route('contact')); ?>" class="thm-btn">
                                    Liên hệ<span class="icon-right-arrow"></span>
                                </a>
                            </div>
                            <div class="about-three__call-box">
                                <div class="icon">
                                    <span class="icon-customer-service-headset"></span>
                                </div>
                                <div class="content">
                                    <span>Liên hệ trực tiếp</span>
                                    <p><a href="tel:0584386177">+84 584 386 177</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Three End -->



    <!--Services Three Start -->
    <section class="services-three pt-5 pb-5">
        <div class="services-three__shape-1"></div>
        <div class="services-three__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Dịch vụ</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title">Trải nghiệm
                    <span class="text-warning ">dịch vụ</span>
                </h2>
            </div>
            <div class="row">

                <!-- Service 1: Hỗ trợ kỹ thuật -->
                <div class="col-md-4">
                    <div class="services-three__single">
                        <div class="services-three__icon-and-title">
                            <div class="services-three__icon">
                                <span class="icon-technical-support"></span>
                            </div>
                            <h3 class="services-three__title">
                                <a href="#">AI Automation - Tự động hóa đa nền tảng</a>
                            </h3>
                        </div>
                        <p class="services-three__text">
                            Giúp tự động hóa quy trình kinh doanh trên nhiều kênh (Facebook, Zalo, Email,
                            Website...) tiết kiệm thời gian và tăng hiệu quả vận hành.
                        </p>
                        <ul class="list-unstyled services-three__list">
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <div class="text">
                                    <p>Tích hợp chatbot & <span class="text-warning">trợ lý AI</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <div class="text">
                                    <p><span class="text-warning">Tự động</span> gửi email, tin nhắn marketing</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <div class="text">
                                    <p>Báo cáo & phân tích <span class="text-warning">thông minh</span></p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="services-three__btn">Liên Hệ <span class="icon-right-arrow-1"></span></a>
                    </div>
                </div>


                <!-- Service 2: Hỗ trợ kỹ thuật -->
                <div class="col-md-4">
                    <div class="services-three__single">
                        <div class="services-three__icon-and-title">
                            <div class="services-three__icon">
                                <span class="icon-technical-support"></span>
                            </div>
                            <h3 class="services-three__title">
                                <a href="#">Hỗ Trợ Kỹ Thuật Máy Tính</a>
                            </h3>
                        </div>
                        <p class="services-three__text">
                            Dịch vụ cài đặt, tối ưu, khắc phục lỗi phần mềm và hỗ trợ kỹ thuật cho cá nhân/doanh nghiệp nhỏ.
                        </p>
                        <ul class="list-unstyled services-three__list">
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <div class="text">
                                    <p>Cài đặt & <span class="text-warning">tối ưu</span> phần mềm</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <div class="text">
                                    <p>Khắc phục sự cố hệ thống</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <div class="text">
                                    <p>Hỗ trợ từ xa nhanh chóng</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="services-three__btn">Liên Hệ <span
                                class="icon-right-arrow-1"></span></a>
                    </div>
                </div>

                <!-- Service 3: Crawl dữ liệu -->
                <div class="col-md-4">
                    <div class="services-three__single">
                        <div class="services-three__icon-and-title">
                            <div class="services-three__icon">
                                <span class="icon-transparency"></span>
                            </div>
                            <h3 class="services-three__title">
                                <a href="#">Crawl & Phân Tích Dữ Liệu</a>
                            </h3>
                        </div>
                        <p class="services-three__text">
                            Thu thập dữ liệu từ website, xử lý và phân tích để hỗ trợ nghiên cứu thị trường và ra quyết
                            định.
                        </p>
                        <ul class="list-unstyled services-three__list">
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <div class="text">
                                    <p>Crawl dữ liệu sản phẩm/giá cả</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <div class="text">
                                    <p>Phân tích dữ liệu theo yêu cầu</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <div class="text">
                                    <p>Xuất dữ liệu ra Excel/CSV</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="services-three__btn">Liên Hệ <span
                                class="icon-right-arrow-1"></span></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Services Three End -->
    <section class="pricing-one pt-5">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Pricing &amp; Plan</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title text-warning" style="perspective: 400px;">
                    Bảng giá dịch vụ
                </h2>
            </div>
            <div class="row">

                <!-- Pricing 1: Thiết kế website -->
                <div class="col-xl-4 col-lg-6 wow" data-wow-delay="100ms">
                    <div class="pricing-one__single">
                        <div class="pricing-one__icon">
                            <img src="assets/images/icon/pricing-icon-1.png" alt="">
                        </div>
                        <span class="pricing-one__sub-title">Thiết Kế Website</span>
                        <span class="pricing-one__price fs-1">5.000.000đ</span>
                        <p class="pricing-one__text">Thiết kế website chuyên nghiệp cho cá nhân/doanh nghiệp nhỏ.</p>
                        <div class="pricing-one__bdr"></div>
                        <h5 class="pricing-one__points-title">Bao gồm</h5>
                        <ul class="pricing-one__points list-unstyled">
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Website chuẩn UX/UI</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Tích hợp CMS quản lý</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Tối ưu SEO & tốc độ tải</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Bảo mật & Hosting/VPS</p>
                            </li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="#contact" class="pricing-one__btn">Liên Hệ<span
                                    class="far fa-plus-circle"></span></a>
                        </div>
                    </div>
                </div>

                <!-- Pricing 2: AI Automation -->
                <div class="col-xl-4 col-lg-6 wow " data-wow-delay="200ms">
                    <div class="pricing-one__single active">
                        <div class="pricing-one__icon">
                            <img src="assets/images/icon/pricing-icon-1.png" alt="">
                        </div>
                        <span class="pricing-one__sub-title">AI Automation</span>
                        <span class="pricing-one__price fs-1">500.000đ</span>
                        <p class="pricing-one__text">Tự động hóa quy trình kinh doanh trên nhiều nền tảng.</p>
                        <div class="pricing-one__bdr"></div>
                        <h5 class="pricing-one__points-title">Bao gồm</h5>
                        <ul class="pricing-one__points list-unstyled">
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Tích hợp Chatbot & Trợ lý AI</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Tự động gửi Email/Zalo/Facebook</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Báo cáo & phân tích thông minh</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Tùy chỉnh theo nhu cầu</p>
                            </li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="#contact" class="pricing-one__btn">Liên Hệ<span
                                    class="far fa-plus-circle"></span></a>
                        </div>
                    </div>
                </div>

                <!-- Pricing 3: Hỗ trợ kỹ thuật -->
                <div class="col-xl-4 col-lg-6 wow " data-wow-delay="300ms">
                    <div class="pricing-one__single">
                        <div class="pricing-one__icon">
                            <img src="assets/images/icon/pricing-icon-1.png" alt="">
                        </div>
                        <span class="pricing-one__sub-title">Hỗ Trợ Kỹ Thuật</span>
                        <span class="pricing-one__price fs-1">100.000đ</span>
                        <p class="pricing-one__text">Dịch vụ cài đặt, sửa lỗi phần mềm và hỗ trợ từ xa.</p>
                        <div class="pricing-one__bdr"></div>
                        <h5 class="pricing-one__points-title">Bao gồm</h5>
                        <ul class="pricing-one__points list-unstyled">
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Cài đặt & tối ưu phần mềm</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Khắc phục sự cố hệ thống</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Hỗ trợ từ xa nhanh chóng</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-tick-inside-circle"></span></div>
                                <p>Bảo trì & tư vấn miễn phí</p>
                            </li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="#contact" class="pricing-one__btn">Liên Hệ<span
                                    class="far fa-plus-circle"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="testimonial-one pt-5 pb-5">
        <div class="testimonial-one__bg"
            style="background-image: url(assets/images/backgrounds/testimonial-one-bg-1.jpg);"></div>
        <div class="testimonial-one__shape-1"></div>
        <div class="testimonial-one__shape-2 float-bob-y">
            <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3"></div>
                <div class="col-xl-9">
                    <div class="testimonial-one__content-box">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Testimonial</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title  text-warning" style="perspective: 400px;">
                                Đánh giá khách hàng
                            </h2>
                        </div>
                        <div class="testimonial-one__carousel owl-theme owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">

                                    <div class="owl-item active" style="width: 960px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__img-box">
                                                    <div class="testimonial-one__img">
                                                        <img src="https://htmediagroup.vn/wp-content/uploads/2022/06/Anh-profile-cong-ty-3-min-585x878.jpg.webp"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__content">
                                                    <h4 class="testimonial-one__title">Thiết kế Website</h4>
                                                    <p class="testimonial-one__text">
                                                        “Website được thiết kế chuyên nghiệp, giao diện đẹp mắt và chuẩn
                                                        SEO.
                                                        Sau khi sử dụng dịch vụ, lượng khách hàng online tăng lên rõ rệt.”
                                                    </p>
                                                    <div class="testimonial-one__bottom">
                                                        <div class="testimonial-one__quote-and-client-info">
                                                            <div class="testimonial-one__quote">
                                                                <span class="icon-left"></span>
                                                            </div>
                                                            <div class="testimonial-one__client-info">
                                                                <p class="testimonial-one__client-sub-title">Chủ cửa hàng
                                                                    Tech Service
                                                                </p>
                                                                <h3 class="testimonial-one__client-name"><a
                                                                        href="#">Lê Anh Thông (Founder)</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-one__trustpilot-box">
                                                            <div class="testimonial-one__trustpilot-text-and-star">
                                                                <p class="testimonial-one__trustpilot-text">5.0 Xuất sắc
                                                                </p>
                                                                <ul
                                                                    class="list-unstyled testimonial-one__trustpilot-star-list d-flex">
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item" style="width: 960px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__img-box">
                                                    <div class="testimonial-one__img">
                                                        <img src="https://cdn.24h.com.vn/upload/4-2021/images/2021-12-17/Ceo-GiaTrang---nu-doanh-nhan-xinh-dep-da-tai-cua-Irmepha-Group-22-1639716279-351-width550height825.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__content">
                                                    <h4 class="testimonial-one__title">AI Automation</h4>
                                                    <p class="testimonial-one__text">
                                                        “Nhờ dịch vụ AI Automation, tôi tiết kiệm được hàng chục giờ mỗi
                                                        tuần.
                                                        Chatbot tự động trả lời khách hàng rất thông minh và hiệu quả.”
                                                    </p>
                                                    <div class="testimonial-one__bottom">
                                                        <div class="testimonial-one__quote-and-client-info">
                                                            <div class="testimonial-one__quote">
                                                                <span class="icon-left"></span>
                                                            </div>
                                                            <div class="testimonial-one__client-info">
                                                                <p class="testimonial-one__client-sub-title">Chủ cửa hàng
                                                                    thời trang</p>
                                                                <h3 class="testimonial-one__client-name"><a
                                                                        href="#">Lương Thị Hồng Vỹ</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-one__trustpilot-box">
                                                            <div class="testimonial-one__trustpilot-text-and-star">
                                                                <p class="testimonial-one__trustpilot-text">5.0 Xuất sắc
                                                                </p>
                                                                <ul
                                                                    class="list-unstyled testimonial-one__trustpilot-star-list d-flex">
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item" style="width: 960px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__img-box">
                                                    <div class="testimonial-one__img">
                                                        <img src="https://hthaostudio.com/wp-content/uploads/2020/07/Thanh-dat-xanh-1.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__content">
                                                    <h4 class="testimonial-one__title">Hỗ trợ kỹ thuật</h4>
                                                    <p class="testimonial-one__text">
                                                        “Mỗi lần máy tính bị lỗi phần mềm, tôi được hỗ trợ nhanh chóng và
                                                        nhiệt tình.
                                                        Dịch vụ rất uy tín và chi phí hợp lý.”
                                                    </p>
                                                    <div class="testimonial-one__bottom">
                                                        <div class="testimonial-one__quote-and-client-info">
                                                            <div class="testimonial-one__quote">
                                                                <span class="icon-left"></span>
                                                            </div>
                                                            <div class="testimonial-one__client-info">
                                                                <p class="testimonial-one__client-sub-title">Nhân viên văn
                                                                    phòng</p>
                                                                <h3 class="testimonial-one__client-name"><a
                                                                        href="#">Lê Văn Nghĩa</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-one__trustpilot-box">
                                                            <div class="testimonial-one__trustpilot-text-and-star">
                                                                <p class="testimonial-one__trustpilot-text">5.0 Xuất sắc
                                                                </p>
                                                                <ul
                                                                    class="list-unstyled testimonial-one__trustpilot-star-list d-flex">
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter One Start -->
    <section class="counter-one pt-5 pb-5">
        <div class="counter-one__wrap">
            <div class="counter-one__bg-shape float-bob-x"
                style="background-image: url(<?php echo e(asset('assets/images/shapes/counter-one-bg-shape.png')); ?>);"></div>
            <div class="counter-one__shape-1"></div>
            <div class="counter-one__shape-2"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">The Numbers Speak</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title">Hơn <span class="text-warning">500+</span> khách hàng
                        đã tin tưởng sử dụng dịch vụ</h2>
                </div>
                <div class="row">
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow " data-wow-delay="100ms">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-trophy"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box">
                                    <h3 class="odometer" data-count="100">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-one__text">Website</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow " data-wow-delay="200ms">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-user"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box">
                                    <h3 class="odometer" data-count="99">00</h3>
                                    <span>%</span>
                                </div>
                                <p class="counter-one__text">Satisfied</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow" data-wow-delay="200ms">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-chat"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box">
                                    <h3 class="odometer" data-count="300">00</h3>
                                    <span>M</span>
                                </div>
                                <p class="counter-one__text">AI Automation</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow " data-wow-delay="400ms">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-laughing"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box">
                                    <h3 class="odometer" data-count="211">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-one__text">Hổ trợ kĩ thuật</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!-- Counter One End -->

    <!--Faq One Start -->
    <section class="faq-one pt-5 pb-5">
        <div class="faq-one__shape-1"></div>
        <div class="faq-one__shape-2"></div>
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-xl-5 col-lg-5">
                    <div class="faq-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">FAQ</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title">
                                Giải đáp thắc mắc <br>
                                <span>Câu hỏi thường gặp</span>
                            </h2>
                            <p class="mt-3">
                                Chúng tôi tổng hợp những câu hỏi khách hàng hay thắc mắc nhất
                                về dịch vụ <strong>Thiết kế Website, AI Automation</strong> và
                                <strong>Hỗ trợ kỹ thuật</strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-xl-7 col-lg-7">
                    <div class="faq-one__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">

                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Chi phí thiết kế website là bao nhiêu?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Chúng tôi thiết kế website chuyên nghiệp chỉ từ
                                            <strong>5.000.000đ</strong>, tùy theo nhu cầu và tính năng của từng doanh
                                            nghiệp.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Dịch vụ AI Automation bao gồm những gì?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>AI Automation giúp doanh nghiệp tự động hóa công việc như
                                            quản lý khách hàng, chatbot, xử lý dữ liệu và báo cáo thông minh.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Bạn có hỗ trợ kỹ thuật phần mềm máy tính không?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Có hỗ trợ cài đặt, sửa lỗi và bảo trì phần mềm
                                            chỉ từ <strong>100.000đ</strong> cho mỗi lần xử lý.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Thời gian hoàn thành dự án website mất bao lâu?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Thông thường, một website cơ bản mất khoảng
                                            <strong>7 - 15 ngày</strong>. Dự án lớn hơn có thể lâu hơn tùy vào mức độ phức
                                            tạp.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Tôi có thể liên hệ hỗ trợ 24/7 không?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Tôi có đội ngũ kỹ thuật sẵn sàng hỗ trợ
                                            <strong>24/7</strong> qua hotline, email hoặc hệ thống ticket.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Faq One End -->
    <!-- Contact One Start -->
    <section class="contact-one pt-5 pb-5">
        <h1 class="section-title p-0 mt-1 text-center text-warning fw-bold">THÔNG TIN LIÊN HỆ</h1>
        <div class="contact-one__bg-shape"
            style="background-image: url(<?php echo e(asset('assets/images/shapes/contact-one-bg-shape.png')); ?>);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left wow " data-wow-delay="100ms" data-wow-duration="2500ms">
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
                                        <input type="text" name="name" placeholder="vd : Nguyễn Văn A"
                                            required="">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout3', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/khanhhoa/sites/techguru/resources/views/home/service-website.blade.php ENDPATH**/ ?>