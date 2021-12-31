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
            <h4>Shop</h4>
            <div class="site-pagination">
                <a href="#">shop</a> /
                <a href="#">Adults</a>
            </div>
        </div>
    </div>

    <section class="product-filter-section" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            
                            <a href="{{route('shop.product.detail', $product->uuid)}}"><img src="{{asset('product_images/'.$product->category. '/' .$product->firstImage->image_file)}}" alt=""></a>
                            <div class="pi-links">
                                <a href="{{route('shop.product.detail', $product->uuid)}}" class="add-card add-to-cart"
                                data-id="{{$product->id}}"
                                data-quantity="1"
                                data-price="{{$product->price}}"
                                data-size="none"
                                data-product="{{$product->title}}"
                                data-img="<img src='{{asset('product_images/'.$product->category. '/' .$product->firstImage->image_file)}}'>"
                                ><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div> 
                        <div class="pi-text">
                            <h6>₦{{number_format($product->price, 0, '.', ',')}}</h6>
                            <p>{{$product->title}}</p>
                        </div>
                    </div>
                </div> 
                @endforeach
              

                {{-- <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="tag-sale">ON SALE</div>
                            <img src="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Black and White Stripes Dress</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x7.jpg.pagespeed.ic.5I9GOq1aHl.jpg') }}" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x8.jpg.pagespeed.ic.QAETlyM_Qb.jpg') }}" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x9.jpg.pagespeed.ic.vF-6SYP7oV.jpg') }}" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x10.jpg.pagespeed.ic.LoJh9AYoxS.jpg') }}" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Black and White Stripes Dress</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x11.jpg.pagespeed.ic.Y-S5IYMLPR.jpg') }}" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('img/product/x12.jpg.pagespeed.ic.F_lcWuNcZu.jpg') }}" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="text-center pt-5">
                <button class="site-btn sb-line sb-dark">LOAD MORE</button>
            </div> --}}
        </div>
    </section>



    {{-- <section class="banner-section">
        <div class="container">
            <div class="banner set-bg" data-setbg="{{ asset('img/banner-bg.jpg') }}">
                <div class="tag-new">NEW</div>
                <span>New Arrivals</span>
                <h2>STRIPED SHIRTS</h2>
                <a href="#" class="site-btn">SHOP NOW</a>
            </div>
        </div>
    </section> --}}


    @include('layouts.footer');

</body>

</html>
