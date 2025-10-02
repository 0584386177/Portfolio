<header class="main-header">
    <div class="main-menu__top">
        <div class="container">
            <div class="main-menu__top-inner d-flex justify-content-end">
                <ul class="list-unstyled main-menu__contact-list">
                    <li>
                        <div class="icon">
                            <i class="icon-search-mail"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailto:huynhkhanhhoa2010@gmail.com">huynhkhanhhoa2010@gmail.com</a>
                            </p>
                        </div>
                    </li>

                    <li>
                        <div class="icon">
                            <i class="icon-phone-call"></i>
                        </div>
                        <div class="text">
                            <p><a href="tel:0584386177">0584.386.177</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/hoa.huynhkhanh.90"><span class="icon-facebook"></span></a>
                    </li>
                </ul>
                {{-- <ul class="list-unstyled main-menu__top-menu">
                            <li><a href="{{ route('about') }}">Help</a></li>
                            <li><a href="{{ route('contact') }}">Support</a></li>
                            <li><a href="{{ route('faq') }}">Faqs</a></li>
                        </ul> --}}
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="container">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="{{ route('portfolio') }}" class="fs-2 fw-bold"><span
                                    class="text-white">Khanh</span><span class="text-danger">Hoa</span></a>
                        </div>
                    </div>
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <x-menuList />
                    </div>
                    <div class="main-menu__right">
                        {{-- <div class="main-menu__search-box">
                            <a href="#"
                                class="main-menu__search searcher-toggler-box icon-search-interface-symbol"></a>
                        </div> --}}
                        <div class="main-menu__btn-box">
                            <a href="{{ route('contact') }}" class="thm-btn">Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
