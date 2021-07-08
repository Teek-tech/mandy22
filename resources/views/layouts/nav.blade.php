<div id="preloder">
    <div class="loader"></div>
</div>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row header-top-row">
                <div class="" style="display: flex;justify-content: center;align-items:center'">
                    <a href="{{ route('home') }}" class="site-logo">
                        <img src="{{ asset('img/logo/logo1.png') }}" alt="mandy22 logo">
                    </a>
                </div>
                <div class="">
                    <div class="user-panel">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="{{ route('admin.register') }}">Sign In</a>
                        </div>
                        <div class="up-item">
                            <a href="{{ route('cart') }}">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                    <span>0</span>
                                </div>
                                {{-- <p>cart</p> --}}
                            </a>
                        </div>
                    </div>
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
