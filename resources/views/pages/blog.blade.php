@extends('layouts.layout4')
@section('title', 'KhanhHoa - Tin tức công nghệ')


@section('content')
    <section class="blog-page mt-5">
        <div class="blog-page__shape-1"></div>
        <div class="blog-page__shape-2"></div>
        <div class="container">
            <div class="section-title text-center  ">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">News & Blog</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title  mt-5 ">Tin tức <span>Công nghệ </span>
            </div>
            <div class="row">
                <!-- Blog One Single Start -->
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-lg-6 col-md-6  ">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <a href="{{ route('blog-detail', $post->id) }}">
                                    <img height="200" style="object-fit:cover;"
                                        src="{{ asset('storage/' . $post->thumbnail) }}" alt="Ảnh bìa">
                                </a>
                                <div class="blog-one__tags category_id">
                                    <span>{{ $post->category->name }}</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-detail', $post->id) }}"><span
                                                class="far fa-calendar-alt"></span>{{ date_format($post->created_at, 'd-m-Y') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-detail', $post->id) }}"><span
                                                class="fal fa-user"></span>{{ $post->user->name }}</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a
                                        href="{{ route('blog-detail', $post->id) }}">{{ $post->title }}</a>
                                </h3>
                                <p class="blog-one__text">{{ $post->short_description }}</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-detail', $post->id) }}" class="thm-btn">Chi tiết<span
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
    <!--Blog Page End-->



    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
