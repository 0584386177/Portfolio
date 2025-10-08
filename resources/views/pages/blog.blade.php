@extends('layouts.layout4')
@section('title', 'Tin tức công nghệ - Khanhhoa')


@section('content')
    <section class="blog-page mt-5">
        <div class="blog-page__shape-1"></div>
        <div class="blog-page__shape-2"></div>
        <div class="container">
            <div class="section-title text-center mb-2">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline text-uppercase">Tin tức công nghệ</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
            </div>
            <div class="row">

                {{-- CHECK TỒN TẠI BÀI VIẾT --}}
                @if ($posts->count() == 0)
                    <h1 class="text-center text-uppercase text-danger fw-bold">Đang cập nhật</h1>
                @endif
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-lg-6 col-md-6  ">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <a href="{{ route('blog-detail', $post->slug) }}">
                                    <img height="200" style="object-fit: contain;width: 100%;background: #fff;"
                                        src="{{ asset('storage/' . $post->thumbnail) }}" alt="Ảnh bìa">
                                </a>
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
