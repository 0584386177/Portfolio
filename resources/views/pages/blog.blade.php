@extends('layouts.layout4')
@section('title', 'KhanhHoa - Tin tức công nghệ')


@section('content')
    <section class="blog-page mt-5">
        <div class="blog-page__shape-1"></div>
        <div class="blog-page__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">News & Blog</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation mt-5 ">Tin tức <span>Công nghệ </span>
            </div>
            <div class="row">
                <!-- Blog One Single Start -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow " data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/resources/background-tin-tuc.webp') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/resources/background-tin-tuc.webp') }}"
                                        alt="">
                                </div>
                                <p class="blog-one__user-title">Alisa Olivia</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>April 5,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>80
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Top IT Trends Shaping the
                                    Future
                                    of Business in 2025</a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Xem thêm<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
                <!-- Blog One Single Start -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow " data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/resources/background-tin-tuc.webp') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/resources/background-tin-tuc.webp') }}"
                                        alt="">
                                </div>
                                <p class="blog-one__user-title">Alisa Olivia</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>April 5,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>80
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cybersecurity Best Practices
                                    Protecting Your Data </a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Xem thêm<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
                <!-- Blog One Single Start -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow " data-wow-delay="300ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/resources/background-tin-tuc.webp') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/resources/background-tin-tuc.webp') }}"
                                        alt="">
                                </div>
                                <p class="blog-one__user-title">Thomas Alison</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>March
                                        15,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>88
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cloud Computing vs.
                                    On-Premise
                                    Solutions Which is Right for You?</a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Xem thêm<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
                <!-- Blog One Single Start -->
                {{-- <div class="blog-page__pagination">
                    <ul class="pg-pagination list-unstyled">
                        <li class="prev">
                            <a href="#" aria-label="prev"><span class="icon-left-arrow-1"></span></a>
                        </li>
                        <li class="count active"><a href="#">01</a></li>
                        <li class="count"><a href="#">02</a></li>
                        <li class="count"><a href="#">...</a></li>
                        <li class="count"><a href="#">10</a></li>
                        <li class="next">
                            <a href="#" aria-label="Next"><span class="icon-left-arrow-1"></span></a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>
    <!--Blog Page End-->



    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
