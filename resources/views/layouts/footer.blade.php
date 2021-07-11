<section class="footer-section">
    <div class="container">
        {{-- <div class="footer-logo text-center">
            <a href="index-2.html"><img src="img/xlogo-light.png.pagespeed.ic._jFl0m9iP2.png" alt="" /></a>
        </div> --}}
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>About</h2>
                    <p>
                        We all about ensuring that you look outstanding in all our mandies pieces. Each designs are created with precision and care to ensure that our customer is satisfied.
                    </p>
                    <img src="img/xcards.png.pagespeed.ic.JYcvaPNjMW.png" alt="" />
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Shop</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Track Orders</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Gallery</h2>
                    <div class="fw-latest-post-widget">
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
                            <div class="lp-content">
                                <h6>what shoes to wear</h6>
                                <span>Oct 21, 2018</span>
                                <a href="#" class="readmore">Read More</a>
                            </div>
                        </div>
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
                            <div class="lp-content">
                                <h6>trends this year</h6>
                                <span>Oct 21, 2018</span>
                                <a href="#" class="readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>Contact</h2>
                    <div class="con-info">
                        <span>C.</span>
                        <p>Mandies22 Ltd</p>
                    </div>
                    <div class="con-info">
                        <span>B.</span>
                        <p>
                            Peter Odili Road Port-Harcourt,
                            P.O. BOX 68
                        </p>
                    </div>
                    <div class="con-info">
                        <span>T.</span>
                        <p>+(234) 000 000 0000</p>
                    </div>
                    <div class="con-info">
                        <span>E.</span>
                        <p>
                            hello@mandies22.ng
                            {{-- <a href="#" class="__cf_email__">hello@mandies22.ng</a> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links text-center">
                <a href="#" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                {{-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a> --}}
                {{-- <a href="#" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a> --}}
                <a href="#" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                {{-- <a href="#" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a> --}}
                {{-- <a href="#" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a> --}}
            </div>

            <p class="text-white text-center mt-5">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                All rights reserved | created by
                <a href="https://mezitox" target="_blank">Mezitox</a>
            </p>
        </div>
    </div>
</section>


<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/localStorage.js') }}"></script>
<script>
    $(document).ready(function() {

        const shopDropDownBtn = $('.shop-mobile-menu');
        const shopDropDown = $('.shop-drop');

        console.log(shopDropDownBtn);

        // open web search
        $('.web-search-trigger').on('click', function() {
            $('.web-screen-search-section').fadeIn();
        });


        // close web search
        $('.close-search-trigger').on('click', function() {
            $('.web-screen-search-section').fadeOut();
        });


        // open mobile menu
        $('.mobile-menu-icon').on('click', function() {
            $('.mobile-screen-nav-section').fadeIn();
        });

        // close mobile menu
        $('.close-mobile-menu-tirgger').on('click', function() {
            $('.mobile-screen-nav-section').fadeOut();
        });

        // show and hide shop nav drop down
        $('.shop-mobile-menu').on('click', function() {
            $('.shop-drop').slideToggle();
        })
    });
</script>
