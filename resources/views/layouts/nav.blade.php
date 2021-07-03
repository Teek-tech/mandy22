<div id="preloder">
    <div class="loader"></div>
</div>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">

                    <a href="{{route('home')}}" class="site-logo">
                        <img src="img/xlogo.png.pagespeed.ic.g8beR9VzMk.png" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                    <input type="text" placeholder="Search on divisima ....">
                    <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                    <div class="up-item">
                        <i class="flaticon-profile"></i>
                        <a href="#">Sign</a> In or <a href="#">Create Account</a>
                    </div>
                    <div class="up-item">
                        <div class="shopping-card">
                        <i class="flaticon-bag"></i>
                        <span>0</span>
                        </div>
                        <a href="{{route('cart')}}">Cart</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">

            <ul class="main-menu">
            <li><a href="{{route('welcome')}}">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="#">Shop</a>
                <ul class="sub-menu">
                    <li><a href="{{route('shop.men')}}">Men</a></li>
                    <li><a href="{{route('shop.women')}}">Women</a></li>
                </ul>
            </li>
            <li><a href="#">Gallery</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>