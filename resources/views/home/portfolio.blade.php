@extends('layouts.layout2')
@section('title', 'KhanhHoa - Portfolio')


@section('content')
    <x-strickyHeader />
    <!-- /.stricky-header -->


    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                } 
            }'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="main-slider__shape-1 img-bounce">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-2"></div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-4">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-4.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-5">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <div class="main-slider__sub-title-box">
                                        <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider__sub-title">Freelancer Website Developer</p>
                                    </div>
                                    <h2 class="main-slider__title">My name's <br>
                                        <span>Huỳnh Khánh Hòa</span> <br>
                                        is Website Developer
                                    </h2>
                                    <p class="main-slider__text">Là một lập trình viên website, chuyên về Laravel,
                                        Wordpress, <br /> Shopify, VueJs,...</p>
                                    <div class="main-slider__btn-and-trustpilot-box">
                                        <div class="main-slider__btn-box">
                                            <a href="{{ route('thiet-ke-website') }}" class="thm-btn">Dịch vụ<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>

                                    </div>
                                    <div class="main-slider__img">
                                        <img style="border-radius:10px;" width="800" height="640"
                                            src="{{ asset('assets/images/resources/avatar.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <!-- If we need navigation buttons -->

        </div>
    </section>
    <!--Main Slider End-->


    <!--Services One Start -->
    <section class="servces-one pb-0 mb-0">
        <div class="servces-one__shape-2"></div>
        <div class="servces-one__shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/services-one-shape-3.png') }}" alt="">
        </div>

        <!-- Tech Stack Section -->
        <section class="tech-stack py-5 pt-5">
            <div class="container">
                <!-- Tiêu đề -->
                <div class="row mb-4">
                    <div class="col text-center">
                        <h1 class="section-title pb-0 mb-0 text-warning text-uppercase">Tech Stack</h1>
                        <p class="section-subtitle text-muted">Những công nghệ & công cụ tôi thường sử dụng</p>
                    </div>
                </div>

                <!-- Logo Grid -->
                <div class="row text-center">
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                            alt="HTML5" width="60" height="60">
                        <p class="mt-2">HTML5</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3"
                            width="60" height="60">
                        <p class="mt-2">CSS3</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                            alt="JavaScript" width="60" height="60">
                        <p class="mt-2">JavaScript</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP"
                            width="60" height="60">
                        <p class="mt-2">PHP</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img style="color:blue;"
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-plain.svg"
                            alt="WordPress" width="60" height="60">
                        <p class="mt-2">WordPress</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
                            alt="Laravel" width="60" height="60">
                        <p class="mt-2">Laravel</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg"
                            width="60" height="60" />

                        <p class="mt-2">VueJs</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg"
                            width="60" height="60" />

                        <p class="mt-2">ReactJs</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/codeigniter/codeigniter-plain.svg"
                            width="60" height="60" />

                        <p class="mt-2">Codeigniter</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cloudflare/cloudflare-original.svg"
                            width="60" height="60" />

                        <p class="mt-2">CloudFlare</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                            alt="MySQL" width="60" height="60">
                        <p class="mt-2">MySQL</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git"
                            width="60" height="60">
                        <p class="mt-2">Git</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Experience Start -->
        <section class="work-experience py-5">
            <div class="container">
                <!-- Tiêu đề -->
                <div class="row mb-4">
                    <div class="col text-center">
                        <h1 class="section-title pb-0 mb-0 text-warning text-uppercase">Kinh nghiệm làm việc</h1>
                        <p class="section-subtitle text-muted">Hành trình nghề nghiệp & những dự án tôi đã tham gia</p>
                    </div>
                </div>

                <!-- Timeline -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="timeline list-unstyled">
                            <!-- Item 1 -->
                            <!-- Item 1 -->
                            <li class="timeline-item mb-5">
                                <h5 class="fw-bold">Website Developer - Công ty TNHH Chính Nguyễn</h5>
                                <p class="text-muted small mb-2">02/2023 - 04/2024</p>
                                <ul>
                                    <li>Xây dựng website thương mại điện tử bằng Wordpress, thiết kế giao diện chuẩn UI/UX.
                                    </li>
                                    <li>Tích hợp các plugin quản lý sản phẩm, thanh toán trực tuyến và vận chuyển.</li>
                                    <li>Phát triển hệ thống quản lý kho (CMS) giúp quản lý sản phẩm, đơn hàng và khách hàng
                                        hiệu quả.</li>
                                    <li>Đảm bảo website hoạt động ổn định, tối ưu tốc độ tải trang và bảo mật.</li>
                                </ul>
                            </li>

                            <!-- Item 2 -->
                            <li class="timeline-item mb-5">
                                <h5 class="fw-bold">Website Developer - Công ty TNHH Tech Service</h5>
                                <p class="text-muted small mb-2">05/2024 - 07/2025</p>
                                <ul>
                                    <li>Xây dựng website thương mại điện tử bằng Wordpress cho khách hàng trong nhiều lĩnh
                                        vực.</li>
                                    <li>Tùy chỉnh theme và plugin để đáp ứng yêu cầu riêng biệt.</li>
                                    <li>Tối ưu SEO on-page, cải thiện tốc độ tải trang và trải nghiệm người dùng.</li>
                                    <li>Tham gia hỗ trợ khách hàng quản trị nội dung, xử lý sự cố kỹ thuật.</li>
                                </ul>
                            </li>

                            <!-- Item 3 -->
                            <li class="timeline-item mb-5">
                                <h5 class="fw-bold">Website Engineer - Công ty TNHH New Tech</h5>
                                <p class="text-muted small mb-2">07/2025 - Hiện tại</p>
                                <ul>
                                    <li>Thiết kế & triển khai giao diện website, tối ưu trải nghiệm người dùng.</li>
                                    <li>Phát triển và tích hợp API, xử lý dữ liệu và xây dựng hệ thống quản lý bằng
                                        Laravel/PHP.</li>
                                    <li>Tối ưu tốc độ tải trang, SEO, bảo mật và hiệu năng hệ thống.</li>
                                    <li>Quản lý server, cấu hình hosting/VPS, khắc phục sự cố và đảm bảo website hoạt động
                                        ổn định.</li>
                                    <li>Phối hợp với đội ngũ thiết kế và marketing để triển khai các chiến dịch trực tuyến.
                                    </li>
                                    <li>Hướng dẫn và hỗ trợ nhân viên mới trong việc sử dụng hệ thống CMS.</li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Experience End -->

    </section>
    <!--Services One End -->
    <!-- Projects Section -->
    <section class="projects py-5">
        <div class="container">
            <!-- Tiêu đề -->
            <div class="row mb-4">
                <div class="col text-center">
                    <h1 class="section-title text-warning pb-0 mb-0 text-uppercase">Dự án đã thực hiện</h1>
                    <p class="section-subtitle text-muted">
                        Một số sản phẩm & website tôi đã xây dựng
                    </p>
                </div>
            </div>

            <!-- Grid dự án -->
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img height="200" style="object-fit: contain;"
                            src="https://newtechshop.vn/wp-content/uploads/2023/07/2-newtech-tai-dinh-vi-thuong-hieu.jpg"
                            class="card-img-top rounded-top-3" alt="Website Thương Mại Điện Tử">
                        <div class="card-body bg-dark">
                            <h4 class="card-title">New Tech Shop</h4>
                            <p class="card-text small text-warning">
                                Phát triển website bán hàng bằng <strong>WordPress</strong>, tối ưu trải nghiệm người dùng,
                                tích hợp API thanh toán và
                                kết nối hệ thống <strong>n8n</strong> để tự động hoá xử lý đơn hàng, email thông báo & báo
                                cáo doanh thu.
                            </p>
                            <p class="small"><strong class="text-danger">Tech:</strong> WordPress, WooCommerce, n8n,
                                MySQL</p>
                        </div>
                        <div class="card-footer bg-dark border-0 d-flex justify-content-between">
                            <a href="https://newtechshop.vn" class="btn btn-sm btn-outline-warning">Xem demo</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img height="200" style="object-fit: contain;"
                            src="https://techservicelap.vn/wp-content/uploads/2025/04/logo-header-1024x313.png"
                            class="card-img-top rounded-top-3" alt="Website Dịch Vụ Sửa Chữa">
                        <div class="card-body bg-dark">
                            <h4 class="card-title">Tech Service</h4>
                            <p class="card-text small text-warning">
                                Xây dựng website dịch vụ sửa chữa laptop trên <strong>WordPress</strong>, hỗ trợ form đặt
                                lịch trực tuyến,
                                tích hợp API gửi thông báo SMS/Email và kết nối <strong>n8n</strong> để tự động hoá quy
                                trình chăm sóc khách hàng.
                            </p>
                            <p class="small"><strong class="text-danger">Tech:</strong> WordPress, Elementor, n8n, MySQL
                            </p>
                        </div>
                        <div class="card-footer bg-dark border-0 d-flex justify-content-between">
                            <a href="https://techservicelap.vn" class="btn btn-sm btn-outline-warning">Xem demo</a>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img height="200" style="object-fit: contain;"
                            src="https://beta.techservicelap.vn/wp-content/uploads/2025/07/logo-openit-v1.svg"
                            class="card-img-top rounded-top-3" alt="Website Open IT">
                        <div class="card-body bg-dark">
                            <h4 class="card-title">Open IT</h4>
                            <p class="card-text small text-warning">
                                Phát triển website chia sẻ kiến thức sửa chữa phần cứng bằng <strong>WordPress</strong>,
                                tích hợp giải pháp <strong>crawl dữ liệu từ iFixit</strong> để thử nghiệm quản lý & hiển thị
                                nội dung,
                                cùng tính năng tìm kiếm thông minh.
                            </p>

                            <p class="small"><strong class="text-danger">Tech:</strong> WordPress, Python , Selenium, N8N
                                MySQL</p>
                        </div>
                        <div class="card-footer bg-dark border-0 d-flex justify-content-between">
                            <a href="https://beta.techservicelap.vn" class="btn btn-sm btn-outline-warning">Xem demo</a>
                        </div>
                    </div>
                </div>



                <!-- Project 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img style="object-fit: contain; background-color:#ffde59;" height="200"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPye4unFUBLGZY88YIygfmoFuP4pfdwBlC6Q&s"
                            class="card-img-top rounded-top-3" alt="Hệ thống Quản lý Lớp học">
                        <div class="card-body bg-dark">
                            <h4 class="card-title">HH Language Center</h4>
                            <p class="card-text small text-warning">
                                Xây dựng CMS quản lý lớp học cho trung tâm đào tạo: quản lý học viên, lớp học, xem doanh thu
                                và học phí.
                            </p>
                            <p class="small"><strong class="text-danger">Tech:</strong> Laravel, MySQL</p>
                        </div>
                        <div class="card-footer bg-dark border-0 d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-outline-warning">Xem Demo</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>1
    </section>

    <!-- Sliding Text Start -->
    {{-- <section class="sliding-text">
        <div class="sliding-text__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Front end Development" class="sliding-text__title">Frontend Development</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="UI/UX Design" class="sliding-text__title">UI/UX Design</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="Product Design" class="sliding-text__title">Website Design</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="Digital Marketing" class="sliding-text__title">Digital Marketing</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="Website Design" class="sliding-text__title">Website Design</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="APP Development" class="sliding-text__title">APP Development</h2>
                    <span></span>
                </li>
            </ul>
        </div>
    </section> --}}
    <!-- Sliding Text End -->
    <section class="contact-one pt-5 pb-5">
        <div class="contact-one__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/contact-one-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left wow" data-wow-delay="100ms" data-wow-duration="2500ms">
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
    <!-- Newsletter One Start -->
    <section class="newsletter-one pt-5 pb-5">
        <div class="container">
            <div class="newsletter-one__inner">
                <div class="newsletter-one__shape-bg"
                    style="background-image: url({{ asset('assets/images/shapes/newsletter-one-shape-bg.png') }});">
                </div>
                <div class="newsletter-one__shape-1 float-bob-x">
                    <img src="{{ asset('assets/images/shapes/newsletter-one-shape-1.png') }}" alt="">
                </div>
                <h3 class="newsletter-one__title">Nhập email giảm giá <span
                        class="text-warning fw-bold">10%</span><br />khi sử dụng dịch vụ</h3>
                <form class="newsletter-one__contact-form">
                    <div class="newsletter-one__contact-input-box">
                        <input type="email" placeholder="Enter email address" name="email">
                        <button type="submit" class="thm-btn">Đăng ký ngay<span
                                class="icon-arrow-right"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Newsletter One End -->
    <!-- Blog One Start -->
    <section class="blog-page mt-5 pt-0">
        <div class="blog-page__shape-1"></div>
        <div class="blog-page__shape-2"></div>
        <div class="container">
            <div class="section-title text-center mb-3">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">News & Blog</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title mt-3 text-uppercase ">Tin tức <span>Công nghệ </span>
            </div>
            <div class="row">
                <!-- Blog One Single Start -->
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow ">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img height="200" style="object-fit:cover;"
                                    src="{{ asset('storage/' . $post->thumbnail) }}" alt="Ảnh bìa">
                                <div class="blog-one__tags category_id">
                                    <span>{{ $post->category->name }}</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-detail', $post->slug) }}"><span
                                                class="far fa-calendar-alt"></span>{{ date_format($post->created_at, 'd-m-Y') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-detail', $post->slug) }}"><span
                                                class="fal fa-user"></span>{{ $post->user->name }}</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a
                                        href="{{ route('blog-detail', $post->slug) }}">{{ $post->title }}</a>
                                </h3>
                                <p class="blog-one__text">{{ $post->short_description }}</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-detail', $post->slug) }}" class="thm-btn">Chi tiết<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Blog One Single Start -->

            </div>
        </div>
    </section>
    <!-- Blog One End -->
    <x-footer2 />
@endsection
