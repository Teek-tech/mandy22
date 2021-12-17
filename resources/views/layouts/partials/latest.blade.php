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