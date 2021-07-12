<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Mandies22 | No.1 Fashionista in Port Harcourt</title>
    @include('layouts.head')
</head>

<body>

    @include('layouts.nav')

    <div class="page-top-info">
        <div class="container">
            <h4>Contact</h4>
            <div class="site-pagination">
                <a href="#">Home</a> /
                <a href="#">Contact</a>
            </div>
        </div>
    </div>


    <section class="contact-section">
        <div class="container">
            <div class="row" style="display: flex;justify-content: center;">
                <div class="col-lg-7 contact-info">
                    <h2>Get in touch</h2>
                    <p>Main Str, no 23, New York</p>
                    <p>+546 990221 123</p>
                    <p><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="d8b0b7abacb1b6bf98bbb7b6acb9bbacf6bbb7b5">[email&#160;protected]</a></p>
                    <div class="contact-social">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                    @if(session()->has('success'))
                    <div class="alert alert-solid alert-success" role="alert" style="background-color: green; color:#fff;">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>Success!
                      {{ session()->get('success') }}
                    </div>
                  @endif
                    <form class="contact-form" action="{{route('contact-admin')}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Your name">
                        <input type="email" name="email" placeholder="Your e-mail">
                        <textarea placeholder="Message" name="message"></textarea>
                        <button type="submit" class="site-btn">SEND NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="related-product-section spad">
        <div class="container">
            <div class="section-title">
                <h2>Your Favorites</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/product/x5.jpg.pagespeed.ic.1gwhyxLPpw.jpg" alt="">
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
                            <img src="img/product/x9.jpg.pagespeed.ic.vF-6SYP7oV.jpg" alt="">
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
                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer')
</body>

</html>
