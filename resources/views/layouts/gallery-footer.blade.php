<section class="footer-section">
    <div class="container">
        <div class="footer-logo text-center">
            <a href="index-2.html"><img src="img/xlogo-light.png.pagespeed.ic._jFl0m9iP2.png" alt=""></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>About</h2>
                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus
                        urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                    <img src="img/xcards.png.pagespeed.ic.JYcvaPNjMW.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Questions</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Track Orders</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Bloggers</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Questions</h2>
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
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>Questions</h2>
                    <div class="con-info">
                        <span>C.</span>
                        <p>Your Company Ltd </p>
                    </div>
                    <div class="con-info">
                        <span>B.</span>
                        <p>1481 Creekside Lane Avila Beach, CA 93424, P.O. BOX 68 </p>
                    </div>
                    <div class="con-info">
                        <span>T.</span>
                        <p>+53 345 7953 32453</p>
                    </div>
                    <div class="con-info">
                        <span>E.</span>
                        <p><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="e58a83838c8680a59c8a90978088848c89cb868a88">[email&#160;protected]</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                <a href="#" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
                <a href="#" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="#" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                <a href="#" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
            </div>

            <p class="text-white text-center mt-5">Copyright &copy;<script></script> All rights reserved |
                This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                    href="https://colorlib.com/" target="_blank">Colorlib</a></p>

        </div>
    </div>
</section>

<!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!-- load JS files -->

<script src="{{ asset('gallery-assets/js/tether.min.js') }}"></script>
<!-- Tether (http://tether.io/)  -->
<script src="{{ asset('gallery-assets/js/bootstrap.min.js') }}"></script>
<!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
<script src="{{ asset('gallery-assers/js/hero-slider-main.js') }}"></script>
<!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
<script src="{{ asset('gallery-assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
<script>
    function adjustHeightOfPage(pageNo) {
        var pageContentHeight = 0;

        var pageType = $('div[data-page-no="' + pageNo + '"]').data(
            "page-type"
        );

        if (pageType != undefined && pageType == "gallery") {
            pageContentHeight = $(
                ".cd-hero-slider li:nth-of-type(" +
                pageNo +
                ") .tm-img-gallery-container"
            ).height();
        } else {
            pageContentHeight =
                $(
                    ".cd-hero-slider li:nth-of-type(" +
                    pageNo +
                    ") .js-tm-page-content"
                ).height() + 20;
        }

        // Get the page height
        var totalPageHeight =
            $(".cd-slider-nav").height() +
            pageContentHeight +
            $(".tm-footer").outerHeight();

        // Adjust layout based on page height and window height
        if (totalPageHeight > $(window).height()) {
            $(".cd-hero-slider").addClass("small-screen");
            $(".cd-hero-slider li:nth-of-type(" + pageNo + ")").css(
                "min-height",
                totalPageHeight + "px"
            );
        } else {
            $(".cd-hero-slider").removeClass("small-screen");
            $(".cd-hero-slider li:nth-of-type(" + pageNo + ")").css(
                "min-height",
                "100%"
            );
        }
    }

    /*
                Everything is loaded including images.
            */
    $(window).load(function() {
        adjustHeightOfPage(1); // Adjust page height

        /* Gallery One pop up
                -----------------------------------------*/
        $(".gallery-one").magnificPopup({
            delegate: "a", // child items selector, by clicking on it popup will open
            type: "image",
            gallery: {
                enabled: true
            },
        });

        /* Gallery Two pop up
                -----------------------------------------*/
        // $(".gallery-two").magnificPopup({
        //     delegate: "a",
        //     type: "image",
        //     gallery: {
        //         enabled: true
        //     },
        // });

        /* Gallery Three pop up
                -----------------------------------------*/
        // $(".gallery-three").magnificPopup({
        //     delegate: "a",
        //     type: "image",
        //     gallery: {
        //         enabled: true
        //     },
        // });

        /* Collapse menu after click 
                -----------------------------------------*/
        // $("#tmNavbar a").click(function() {
        //     $("#tmNavbar").collapse("hide");

        //     adjustHeightOfPage($(this).data("no"));
        // });

        /* Browser resized 
                -----------------------------------------*/
        $(window).resize(function() {
            var currentPageNo = $(
                ".cd-hero-slider li.selected .js-tm-page-content"
            ).data("page-no");

            // wait 3 seconds
            setTimeout(function() {
                adjustHeightOfPage(currentPageNo);
            }, 1000);
        });

        // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
        $("body").addClass("loaded");
    });
</script>
