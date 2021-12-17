<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mandies22 | No.1 Fashion Store in Port Harcourt</title>
    @include('layouts.head')
</head>

<body>

    @include('layouts.nav')


    <div class="page-top-info">
        <div class="container">
            <h4>About</h4>
            <div class="site-pagination">
                <a href="{{ route('home') }}">Home</a> /
                <a href="{{ route('about') }}">About</a>
            </div>
        </div>
    </div>


    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 about-section-img-area">
                    <img class="about-section-img" src="{{ asset('img/pattern.jpg') }}" alt="pattern image">
                </div>
                <div class="col-md-6 about-section-text-area">
                    <div>
                        {{-- <h4>Top Notch Fashion store</h4> --}}
                        <h4>Meet the C.E.O</h4>
                        <p>
                            Mandies22 is an indigenous Nigerian brand committed to unique urban and minimalistic fashion styles. <br>
                            We fuse the native and urban styles to create a blend that is most irresistible by our customers. Our collections range from corporate office wears to comfortable shift dresses for the urban woman. <br>
                            Our new and timeless collections are your best bet for turning heads and dazzling at events and workplaces. <br><br>

                            <a href="{{route('shop.adults')}}" class="site-btn">Shop Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>LATEST PRODUCTS</h2>
            </div>
            @include('layouts.partials.latest')
        </div>
    </section>


    @include('layouts.footer')
</body>

</html>
