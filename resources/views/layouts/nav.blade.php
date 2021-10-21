<div id="preloder">
    <div class="loader"></div>
</div>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row header-top-row">

                <div class="">
                    <div class="right-side-panel">
                        <div class="panel-icon mobile-menu-icon">
                            <i class="fas fa-bars"></i>
                        </div>

                        {{-- <div class="panel-icon web-search-trigger">
                            <i class="fas fa-search"></i>
                        </div> --}}

                        <div class="panel-icon">
                            <a href="#">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>

                        <div class="panel-icon">
                            <a href="https://instagram.com/mandies22.ng">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="site-logo-area">
                    <a href="{{ route('welcome') }}" class="site-logo">
                        <img src="{{ asset('img/logo/logon.png') }}" alt="mandy22 logo">

                    </a>
                </div>
                <div class="">
                    <div class="user-panel">
                        <div class="up-item">
                            <a href="{{ route('register') }}">
                                <i class="flaticon-profile"></i>
                            </a>
                        </div>
                        {{-- <div class="up-item">
                            <a href="#">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div> --}}
                        <div class="up-item">
                            <a href="{{ route('cart') }}">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                    <span id="item_count">0</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="web-screen-search-section">
        <div class="web-screen-search-area">
            <div class="web-screen-search">
                <div class="close-btn-area">
                    <span class="close-search-trigger">
                        <i class="fa fa-close"></i>
                    </span>
                </div>
                <div class="search-area">
                    <input type="text" placeholder="search">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-screen-nav-section">
        <div class="mobile-screen-nav-area">
            <div class="nav-left-panel">
                <div class="close-btn-area">
                    <span class="close-mobile-menu-tirgger">
                        <i class="fa fa-close"></i>
                    </span>
                </div>
                <div class="left-panel-items">
                    <div class="panel-item">
                        <a href="{{ route('register') }}">
                            <i class="flaticon-profile"></i>
                        </a>
                    </div>
                    <div class="panel-item">
                        <a href="#">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="panel-item">
                        <a href="{{ route('cart') }}">
                            <i class="flaticon-bag"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="nav-right-panel">
                {{-- <div class="right-panel-search-area">
                    <input type="text" placeholder="search">
                    <button><i class="fas fa-search"></i></button>
                </div> --}}
                <div class="nav-other-items">
                    <div class="nav-right-panel-menu-items">
                        <ul>
                            <li class="panel-menu-item"><a href="{{ route('welcome') }}">Home</a></li>
                            <li class="panel-menu-item"><a href="{{ route('about') }}">About</a></li>
                            <li class="panel-menu-item shop-mobile-menu">Shop</li>
                            <div class="shop-drop">
                                <ul>
                                    <li class="shop-drop-item"><a href="{{ route('shop.adults') }}">Adults</a></li>
                                    <li class="shop-drop-item"><a href="{{ route('shop.children') }}">Children</a>
                                    </li>
                                </ul>
                            </div>
                            <li class="panel-menu-item"><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li class="panel-menu-item"><a href="{{ route('contact') }}">Contact</a></li>

                        </ul>
                    </div>
                    <div class="nav-right-panel-social-icons">
                        <span class="panel-social-icon">
                            <a href="">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </span>
                        <span class="panel-social-icon">
                            <a href="https://instagram.com/mandies22.ng">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="main-navbar">
        <div class="container">

            <ul class="main-menu">
                <li class="{{request()->is('/') ? 'active' : ''}}"><a href="{{ route('welcome') }}">Home</a></li>
                <li class="{{request()->is('about') ? 'active' : ''}}"><a href="{{ route('about') }}">About</a></li>
                <li><a href="#">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('shop.adults') }}">Adults</a></li>
                        <li><a href="{{ route('shop.children') }}">Children</a></li>
                    </ul>
                </li>
                <li class="{{request()->is('gallery') ? 'active' : ''}}"><a href="{{ route('gallery') }}">Gallery</a></li>
                <li class="{{request()->is('contact') ? 'active' : ''}}"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
