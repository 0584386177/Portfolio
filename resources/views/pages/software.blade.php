@extends('layouts.layout4')
@section('title', 'KhanhHoa - Tin tức công nghệ')
@section('content')
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
                {{-- CHECK TỒN TẠI BÀI VIẾT --}}
                @if ($softwares->count() == 0)
                    <h1 class="text-center text-uppercase text-danger fw-bold pt-0">Đang cập nhật</h1>
                    <button class="btn btn-back">
                        <a href="{{ route('software') }}"><i class="fas fa-arrow-left"></i> Back</a></button>
                @else
                    <form action="{{ route('software') }}" method="GET"
                        class="software-filter-bar d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                        {{-- Cột trái: Bộ lọc select --}}
                        <div class="filter-start d-flex align-items-center gap-2">
                            <select name="category" class="form-select nice-select form-select-sm">
                                <option value="" disabled selected hidden>Lọc danh mục</option>
                                @foreach ($categories_parent as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
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
                                <button type="submit" class="btn btn-reset"><a href="{{ route('software') }}"><i
                                            class="far fa-sync-alt"></i>
                                        Reset</a></button>
                            </div>
                        </div>

                        {{-- Cột phải: Ô search --}}
                        <div class="filter-end">
                            <form method="GET" action="" class="position-relative" style="width: 240px;">
                                <i class="far fa-search search-icon"></i>
                                <input type="text" name="search" class="form-control form-control-sm search-input"
                                    placeholder="Tìm kiếm phần mềm...">
                            </form>
                        </div>

                    </form>
                    @foreach ($softwares as $software)
                        <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="software-one__single">
                                <div class="software-one__img">
                                    <a href="">
                                        <img height="200" style=" width:100%; object-fit:contain;"
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
                @endif

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
