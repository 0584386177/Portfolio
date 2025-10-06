@php
    use App\Models\CategoryPost;
    $categories = CategoryPost::all();
@endphp
<ul class="main-menu__list">
    <li class="">
        <a href="{{ route('portfolio') }}">TRANG CHỦ</a>
    </li>
    <li @if (request()->is(['thiet-ke-website'])) class="current" @endif>
        <a href="{{ route('thiet-ke-website') }}">THIẾT KẾ WEBSITE</a>
    </li>
    {{-- <li @if (request()->is(['about'])) class="current" @endif>
        <a href="{{ route('about') }}">Giới thiệu</a>
    </li> --}}
    {{-- <li class="dropdown @if (request()->is(['team', 'team-carousel', 'team-details', 'portfolio', 'portfolio-details', 'testimonials', 'testimonials-carousel', 'pricing', 'gallery', 'faq', '404', 'coming-soon'])) current @endif">
        <a href="#">Pages</a>
        <ul class="shadow-box">
            <li><a href="{{ route('team') }}">Team</a></li>
            <li><a href="{{ route('team-carousel') }}">Team Carousel</a></li>
            <li><a href="{{ route('team-details') }}">Team Details</a></li>
            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
            <li><a href="">Portfolio Details</a></li>
            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
            <li><a href="{{ route('testimonials-carousel') }}">Testimonial Carousel</a></li>
            <li><a href="{{ route('pricing') }}">Pricing</a></li>
            <li><a href="{{ route('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('faq') }}">FAQs</a></li>
            <li><a href="{{ route('404') }}">404 Error</a></li>
            <li><a href="{{ route('coming-soon') }}">Coming Soon</a></li>
        </ul>
    </li> --}}
    {{-- <li class="dropdown @if (request()->is(['services', 'services-carousel', 'threat-detection-prevention', 'endpoint-device-security', 'data-protection-privacy', 'backup-recovery', 'advanced-technology', 'cloud-managed-services'])) current @endif">
        <a href="#">Services</a>
        <ul class="shadow-box">
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('services-carousel') }}">Services Carousel</a></li>
            <li><a href="{{ route('threat-detection-prevention') }}">Threat Detection</a></li>
            <li><a href="{{ route('endpoint-device-security') }}">Device Security</a></li>
            <li><a href="{{ route('data-protection-privacy') }}">Data Protection</a></li>
            <li><a href="{{ route('backup-recovery') }}">Backup & Recovery</a></li>
            <li><a href="{{ route('advanced-technology') }}">Advanced Technology</a></li>
            <li><a href="{{ route('cloud-managed-services') }}">Cloud managed services</a></li>
        </ul>
    </li> --}}
    {{-- <li class="dropdown @if (request()->is(['products', 'product-details', 'cart', 'checkout', 'wishlist', 'sign-up', 'login'])) current @endif">
        <a href="#">Shop</a>
        <ul class="shadow-box">
            <li><a href="{{ route('products') }}">Products</a></li>
            <li><a href="{{ route('product-details') }}">Product Details</a></li>
            <li><a href="{{ route('cart') }}">Cart</a></li>
            <li><a href="{{ route('checkout') }}">Checkout</a></li>
            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
            <li><a href="{{ route('sign-up') }}">Sign Up</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </li> --}}
    <li @if (request()->is(['software'])) class="current" @endif>
        <a href="{{ route('software') }}">PHẦN MỀM</a>
    </li>

    <li class="dropdown @if (request()->is('category/*')) current @endif">
        <a href="{{ route('blog') }}">BÀI VIẾT</a>
        <ul class="">
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('category.show', $category->slug) }}"
                        class="@if (request()->is('category/' . $category->slug)) active @endif">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </li>



</ul>
