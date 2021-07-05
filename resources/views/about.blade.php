<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mandy22 | No.1 Fashionista in Port Harcourt</title>
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
                    <img class="about-section-img" src="{{ asset('img/product/x1.jpg.pagespeed.ic._92Pc1JtDC.jpg') }}"
                        alt="">
                </div>
                <div class="col-md-6 about-section-text-area">
                    <div>
                        <h4>Top Notch Fashion store</h4>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur debitis perferendis
                            eius id! Illum cupiditate minima rem ea incidunt mollitia. Iusto itaque aliquam impedit
                            voluptatibus esse aut, repellat voluptates! Aliquid, distinctio optio laudantium, nobis quas
                            hic fugit omnis qui doloribus animi molestiae tenetur, dolores eveniet. Odio optio et quos
                            quis facilis incidunt adipisci quasi dolore voluptates animi. Rerum tempora dicta cum saepe
                            quis itaque eligendi sunt, doloribus distinctio veniam, aliquid sit iste quae deserunt
                            molestiae dolores debitis, architecto suscipit nemo sint repellendus dolore voluptatibus
                            quam. Sunt quasi quibusdam debitis architecto impedit excepturi aliquam nam odit, eius cum
                            reprehenderit tempora quod!
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
            <div class="product-slider owl-carousel">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="img/product/x1.jpg.pagespeed.ic._92Pc1JtDC.jpg" alt="">
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
                        <img src="img/product/x2.jpg.pagespeed.ic.yx20XuH2nc.jpg" alt="">
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
                        <img src="img/product/x3.jpg.pagespeed.ic.tRzgvLMuBN.jpg" alt="">
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
                        <img src="img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg" alt="">
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
                        <img src="img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg" alt="">
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
