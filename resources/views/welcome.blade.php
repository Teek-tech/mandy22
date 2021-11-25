<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Mandies22 | No.1 Fashion Store in Port Harcourt</title>
    @include('layouts.head')
<style>
    #message {
    position: fixed;
    top: 0px;
    right: 0;
    width: 40%;
    background-color: green;
}
#inner-message {
    margin: 0 auto;
    color: #fff;
}
</style>
</head>

<body>

    @include('layouts.nav')


    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/first.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white ">
                            <span>New Arrivals</span>
                            <h2>Tailored Perfection</h2>
                            <p>Our beautifully designed wears give you an aura of confidence and make you stand out. We don't dress your body alone, we dress your confidence! </p>
                            <a href="{{route('shop.adults')}}" class="site-btn sb-line">DISCOVER</a>
                            <a href="{{route('contact')}}" class="site-btn">Contact Us</a>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>from</span>
                        <h2>₦7999</h2>
                        <p>SHOP NOW</p>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/second.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>New Arrivals</span>
                            <h2>Casual Originality</h2>
                            <p>We bring our minimalist fashion taste to life in our Casual wears collection- classy, chic and comfortable wears for moments when you want to make statements without trying too much. </p>
                            <a href="{{route('shop.adults')}}" class="site-btn sb-line">Shop</a>
                            <a href="{{route('about')}}" class="site-btn">Learn More</a>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>from</span>
                        <h2>₦7999</h2>
                        <p>SHOP NOW</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    @if(request('success') == 1)
    <div id="message">
        {{-- <div style="padding: 5px;"> --}}
            <div id="inner-message" class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                You have successfully added {{ucfirst(request('product'))}}  to your cart.
            </div>
        {{-- </div> --}}
    </div>
    @endif
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/x1.png.pagespeed.ic.himsGyyicT.png" alt="#">
                        </div>
                        <h2>Fast Secure Payments</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/x2.png.pagespeed.ic.ltOUXUiBWM.png" alt="#">
                        </div>
                        <h2>Premium Products</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/x3.png.pagespeed.ic.2GgW50Yyxu.png" alt="#">
                        </div>
                        <h2>Quick Delivery</h2>
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
            <div class="product-slider owl-carousel">
                @if ($products->count() > 0)
                    @foreach ($products as $product)
                    <div class="product-item">
                        <div class="pi-pic">
                            <img data-href="{{route('shop.product.detail', $product->uuid)}}"
                            src="{{asset('product_images/'.$product->category. '/' .$product->firstImage->image_file)}}" alt="">
                            <div class="pi-links">
                                <a href="{{route('shop.product.detail', $product->uuid)}}" class="add-card add-to-cart"
                                data-id="{{$product->id}}"
                                data-quantity="1"
                                data-price="{{$product->price}}"
                                data-size="none"
                                data-product="{{$product->title}}"
                                data-img="<img src='{{asset('product_images/'.$product->category. '/' .$product->firstImage->image_file)}}'>"
                                ><i class="flaticon-bag"></i><span>ADD TO
                                        CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>₦{{number_format($product->price, 0, '.', ',')}}</h6>
                            <p>{{$product->title}}</p>
                        </div>
                    </div>
                    @endforeach
                @else
                <div class="product-item">
                    <div class="pi-pic">
                        <img data-href="/shop/adults/product/detail"
                            src="img/product/x1.jpg.pagespeed.ic._92Pc1JtDC.jpg" alt="">
                        <div class="pi-links">
                            <a href="{{ route('cart') }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO
                                    CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>₦35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img data-href="/shop/adults/product/detail"
                            src="img/product/x2.jpg.pagespeed.ic.yx20XuH2nc.jpg" alt="">
                        <div class="pi-links">
                            <a href="{{ route('cart') }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO
                                    CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>₦35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img data-href="/shop/adults/product/detail"
                            src="img/product/x3.jpg.pagespeed.ic.tRzgvLMuBN.jpg" alt="">
                        <div class="pi-links">
                            <a href="{{ route('cart') }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO
                                    CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>₦35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img data-href="/shop/adults/product/detail"
                            src="img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg" alt="">
                        <div class="pi-links">
                            <a href="{{ route('cart') }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO
                                    CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>₦35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img data-href="/shop/adults/product/detail"
                            src="img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg" alt="">
                        <div class="pi-links">
                            <a href="{{ route('cart') }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO
                                    CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>₦35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                @endif
               
            </div>
        </div>
    </section>


    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>BROWSE TOP SELLING PRODUCTS</h2>
            </div>
            <ul class="product-filter-menu">
                <li class="control-btn active" data-filter="adults">Adults</li>
                <li class="control-btn" data-filter="children">Children</li>
            </ul>
            <div class="row best-selling-products adults">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x5.jpg.pagespeed.ic.1gwhyxLPpw.jpg') }}" alt="" />
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>₦35,00</h6>
                            <p>Flamboyant Pink Top</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="tag-sale">ON SALE</div>
                            <img src="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" alt="" />
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>₦35,00</h6>
                            <p>Black and White Stripes Dress</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x7.jpg.pagespeed.ic.5I9GOq1aHl.jpg') }}" alt="" />
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>₦35,00</h6>
                            <p>Flamboyant Pink Top</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x8.jpg.pagespeed.ic.QAETlyM_Qb.jpg') }}" alt="" />
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>₦35,00</h6>
                            <p>Flamboyant Pink Top</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row best-selling-products children" style="display: none;">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x5.jpg.pagespeed.ic.1gwhyxLPpw.jpg') }}" alt="" />
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>₦35,00</h6>
                            <p>Flamboyant Pink Top</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="tag-sale">ON SALE</div>
                            <img src="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" alt="" />
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>₦35,00</h6>
                            <p>Black and White Stripes Dress</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x7.jpg.pagespeed.ic.5I9GOq1aHl.jpg') }}" alt="" />
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>₦35,00</h6>
                            <p>Flamboyant Pink Top</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x8.jpg.pagespeed.ic.QAETlyM_Qb.jpg') }}" alt="" />
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>₦35,00</h6>
                            <p>Flamboyant Pink Top</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="text-center pt-5">
                <button class="site-btn sb-line sb-dark">LOAD MORE</button>
            </div> --}}
        </div>
    </section>


    <section class="banner-section">
        <div class="container">
            <div class="banner set-bg" data-setbg="img/banner-bg1.png">
                <div class="tag-new">NEW</div>
                <span>New Arrivals</span>
                <h2>STRIPED SHIRTS</h2>
                <a href="#" class="site-btn">SHOP NOW</a>
            </div>
        </div>
    </section>


    @include('layouts.footer')

    <script>
        $(document).ready(function() {

            $('.control-btn').click(function() {

                $(this).addClass('active').siblings().removeClass('active');

                const filter = $(this).attr('data-filter');

                $('.best-selling-products').not('.' + filter).hide(200);
                $('.best-selling-products').filter('.' + filter).show(400);

                // if (filter == 'all') {
                //     $('.image').show(400);
                // } else {
                //     $('.image').not('.' + filter).hide(200);
                //     $('.image').filter('.' + filter).show(400);
                // }

            });

        });

        window.addEventListener('load', () => {
            // vars
            const productItems = document.querySelectorAll('.product-item img[data-href]');

            productItems.forEach(productItem => {
                productItem.addEventListener('click', () => {
                    window.location.href = productItem.dataset.href;
                });
            });
        });
    </script>
    <script>

    </script>

</body>

</html>
