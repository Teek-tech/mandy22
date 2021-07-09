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
                            <a href="#">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>

                        <div class="panel-icon web-search-trigger">
                            <i class="fas fa-search"></i>
                        </div>

                        <div class="panel-icon">
                            <a href="#">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>

                        <div class="panel-icon">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="site-logo-area">
                    <a href="{{ route('home') }}" class="site-logo">
                        <img src="{{ asset('img/logo/logo1.png') }}" alt="mandy22 logo">
                        <h3>Mandies22</h3>
                    </a>
                </div>
                <div class="">
                    <div class="user-panel">
                        <div class="up-item">
                            <a href="{{ route('admin.register') }}">
                                <i class="flaticon-profile"></i>
                            </a>
                        </div>
                        <div class="up-item">
                            <a href="#">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="up-item">
                            <a href="{{ route('cart') }}">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                    <span>0</span>
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

    <nav class="main-navbar">
        <div class="container">

            <ul class="main-menu">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="#">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('shop.adults') }}">Adults</a></li>
                        <li><a href="{{ route('shop.children') }}">Children</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
<script src="">

</script>
