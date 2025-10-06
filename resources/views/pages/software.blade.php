@extends('layouts.layout4')
@section('title', 'KhanhHoa - Tin tức công nghệ')
@section('content')
    <section class="software-page mt-5">
        <div class="software-page__shape-1"></div>
        <div class="software-page__shape-2"></div>
        <div class="container">
            <div class="section-title text-center mb-5">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline text-uppercase">Thư viện Phần mềm</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title">Các công cụ và phần mềm hữu ích</h2>
            </div>
            <div class="row">
                {{-- CHECK TỒN TẠI BÀI VIẾT --}}
                @if ($softwares->count() == 0)
                    <h1 class="text-center text-uppercase text-danger fw-bold">Đang cập nhật</h1>
                @endif
                @foreach ($softwares as $software)
                    <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="software-one__single">
                            <div class="software-one__img">
                                <a href="">
                                    <img height="200" style=" width:100%; object-fit:cover;"
                                        src="{{ asset('storage/' . $software->thumbnail) }}" alt="Ảnh bìa">
                                </a>
                                <div class="software-one__tags version">
                                    <span>Phiên bản: {{ $software->version ?? 'Mới nhất' }}</span>
                                </div>
                            </div>
                            <div class="software-one__content">
                                <ul class="software-one__meta list-unstyled">
                                    {{-- <li>
                                        <a href=""><span class="fal fa-user"></span>{{ $post->user->name }}</a>
                                    </li> --}}
                                    <li>
                                        {{-- Dùng icon download --}}
                                        <a><span class="far fa-download"></span> {{ $software->download_count }} lượt
                                            tải</a>
                                    </li>
                                    <li>
                                        {{-- Logic chuyển đổi kích thước file từ Byte sang MB/GB --}}
                                        @php
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
                                        @endphp
                                        <a><span class="far fa-file-archive"></span> {{ $fileSize }}</a>
                                    </li>
                                </ul>
                                <h3 class="software-one__title"><a href="">{{ $software->name }}</a>
                                </h3>
                                {{-- <p class="software-one__text">{!! $software->description !!}</p> --}}
                                <div class="software-one__btn-box">
                                    <a href="{{ route('software.download', $software->slug) }}" class="software-btn">
                                        DOWNLOAD
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
{{-- HIỂN THỊ PHÂN TRANG --}}
<div class="software-page__pagination">
    {{ $softwares->links() }}
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.software-btn');
        // Lấy Modal object từ Bootstrap
        const modal = new bootstrap.Modal(document.getElementById('downloadModal'));

        // Lấy phần tử text cần thay đổi bằng ID
        const messageElement = document.getElementById('modal-download-message');

        buttons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                // 1. CẬP NHẬT TEXT TẠI ĐÂY
                // Thay đổi nội dung hiển thị ngay khi click
                if (messageElement) {
                    messageElement.innerHTML =
                        '<span class="text-danger">Hệ thống đang chuẩn bị file...</span><br> <span class="text-danger">Vui lòng không đóng cửa sổ!</span>';
                }

                // Hiện popup "Đang tải..."
                modal.show();

                // Cho trình duyệt tự tải file thật (không fetch)
                window.location.href = this.getAttribute('href');

                // Tuỳ bạn muốn: ẩn modal sau vài giây
                setTimeout(() => modal.hide(), 8000);
            });
        });
    });
</script>
