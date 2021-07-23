<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mandies22 | No.1 Fashion Store in Port Harcourt</title>
    @include('layouts.head')
    <style>
        #cshop{
            display: none;
            background-color: #fc8835;
        }
        #successMsg, #successMsgSize {
            display: none;
        }
    </style>
</head>

<body>

    @include('layouts.nav')


    <div class="page-top-info">
        <div class="container">
            <h4>Shop</h4>
            <div class="site-pagination">
                <a href="#">shop</a> /
                <a href="#">adults</a>
            </div>
        </div>
    </div>


    <section class="product-section">
        <div class="container">
            <div class="back-link">
                <a href="{{ route('shop.adults') }}"> &lt;&lt; Back to Category</a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-pic-zoom">
                        <img class="product-big-img" src="{{asset('product_images/'.$product->category. '/' .$product->firstImage->image_file)}}" alt="">
                    </div>
                    <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                        <div class="product-thumbs-track">
                            @foreach ($product->images as $image)
                            <div class="pt" data-imgbigurl="{{asset('product_images/'.$product->category. '/' .$image->image_file)}}">
                                <img src="{{asset('product_images/'.$product->category. '/' .$image->image_file)}}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 product-details">
                    
                    <h2 class="p-title">{{$product->title}}</h2>
                    <h3 class="p-price">₦{{number_format($product->price, 0, '.', ',')}}</h3>
                    <h4 class="p-stock">Available: <span>{{$product->in_stock == TRUE ? 'In Stock' : 'Sold out' }}</span></h4>
                    <div class="p-rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        {{-- <i class="fa fa-star-o fa-fade"></i> --}}
                    </div>
                    {{-- <div class="p-review">
                        <a href="#">3 reviews</a>|<a href="#">Add your review</a>
                    </div> --}}
                    {{-- <form> --}}
                    <div class="">
                        <div class="fw-size-choose">
                            
                        <p>Size</p>
                        <div style="color: green" id="successMsgSize"></div>
                        @foreach(explode(',', $product->size) as $sizes)
                            <div class="sc-item" data-id="{{$product->id}}" id="siz">
                                <input type="radio" name="sc" id="{{$sizes}}-size" value="{{$sizes}}" class="updateProductSize">
                                <label for="{{$sizes}}-size">{{strtoupper($sizes)}}</label>
                            </div>
                        @endforeach
                        {{-- <input type="hidden" id="product_id" value="{{$product->id}}">
                        <input type="hidden" id="title" value="{{$product->title}}"> --}}
                        {{-- <div class="sc-item">
                            <input type="radio" name="sc" id="s-size">
                            <label for="s-size">34</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="m-size" checked>
                            <label for="m-size">36</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="l-size">
                            <label for="l-size">38</label>
                        </div>
                        <div class="sc-item disable">
                            <input type="radio" name="sc" id="xl-size" disabled>
                            <label for="xl-size">40</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="xxl-size">
                            <label for="xxl-size">42</label>
                        </div> --}}
                    </div>
                            <div class="quantity">
                                
                                <p>Quantity <span style="color: red" id="errorQant"></span> <br></p>
                                <div class="pro-qty" id="quant"><input type="text" id="{{$product->id}}" value="1" class="updateProductQty" maxlength="5"></div>
                            </div> 
                        </div><div style="color: green" id="successMsg"></div>
                        <input type="hidden" id="sizedata" value="0">
                        <input type="hidden" id="inStock" value="{{$product->stock}}">
                        
                <p style="color: red" id="errorText"></p>
                    <a class="site-btn add-to-cart" style="color: #fff"; 
                                data-id="{{$product->id}}"
                                {{-- data-quantity="1" --}}
                                data-price="{{$product->price}}"
                                data-stock="{{$product->stock}}"
                                data-url="{{route('welcome')}}?success=1&product={{$product->title}}"
                                data-product="{{$product->title}}"
                                data-img="<img src='{{asset('product_images/'.$product->category. '/' .$product->firstImage->image_file)}}'>"
                    >Add to Cart</a>  
                    <a href="{{route('shop.adults')}}" class="site-btn" id="cshop">Continue Shopping</a>

                    {{-- </form> --}}
                    <div id="accordion" class="accordion-area">
                        <div class="panel">
                            <div class="panel-header" id="headingOne">
                                <button class="panel-link active" data-toggle="collapse" data-target="#collapse1"
                                    aria-expanded="true" aria-controls="collapse1">information</button>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="panel-body">
                                    <p>
                                        {{$product->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingTwo">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse2"
                                    aria-expanded="false" aria-controls="collapse2">care details </button>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="panel-body">
                                    <img src="img/xcards.png.pagespeed.ic.JYcvaPNjMW.png" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so
                                        dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te
                                        mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingThree">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse3"
                                    aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="panel-body">
                                    <h4>7 Days Returns</h4>
                                    <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so
                                        dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te
                                        mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-sharing">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="related-product-section">
        <div class="container">
            <div class="section-title">
                <h2>RELATED PRODUCTS</h2>
            </div>
            <div class="product-slider owl-carousel">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{ asset('img/product/x1.jpg.pagespeed.ic._92Pc1JtDC.jpg') }}" alt="">
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
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="{{ asset('img/product/x2.jpg.pagespeed.ic.yx20XuH2nc.jpg') }}" alt="">
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
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{ asset('img/product/x3.jpg.pagespeed.ic.tRzgvLMuBN.jpg') }}" alt="">
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
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{ asset('img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg') }}" alt="">
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
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" alt="">
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
        </div>
    </section>


    @include('layouts.footer')
</body>

</html>
