@extends('layouts.layout4')
@section('title', $post->title)


@section('content')
    <x-strickyHeader />
    <!--Blog Details Start-->
    <section class="blog-detail pt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="blog-detail">
                        <div class="blog-detail__img">
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="">
                        </div>
                        <div class="blog-detail__single-content">
                            <ul class="blog-detail__meta list-unstyled">
                                <li>
                                    <span class="far fa-calendar-alt text-warning"></span> Ngày tạo :
                                    {{ date_format($post->created_at, 'd-m-Y') }}
                                </li>
                                <li>
                                    <span class="fal fa-user text-warning"></span> {{ $post->user->name }}
                                </li>
                            </ul>
                            <h3 class="blog-detail__title title">{{ $post->title }}</h3>
                            <p class="blog-detail__text short_description">{{ $post->short_description }}</p>


                        </div>
                        <div class="blog-detail__content">
                            {!! $post->description !!}
                        </div>
                        <div class="comment-one">
                            <h3 class="comment-one__title">Total Comments</h3>
                            <div class="comment-one__single-inner">
                                <div class="comment-one__single">
                                    <div class="comment-one__author-inner">
                                        <div class="comment-one__image">
                                            <img src="{{ asset('assets/images/blog/comment-1-1.jpg') }}" alt="">
                                        </div>
                                        <h3>Mitchell Johnson</h3>
                                        <span> 04-10-2025</span>
                                    </div>
                                    <div class="comment-one__content">
                                        <p>Thank you very much</p>
                                        <div class="comment-one__btn-box">
                                            <a href="#" class="comment-one__btn"><span
                                                    class="fas fa-share"></span>Reply</a>
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
    <!--Blog Details End-->

    <!-- Newsletter One Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
