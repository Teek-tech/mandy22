<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Mandies22 | No.1 Fashionista in Port Harcourt</title>
    @include('layouts.head')
    <!-- magnific-popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</head>

<body>

    @include('layouts.nav')

    <div class="page-top-info">
        <div class="container">
            <h4>Gallery</h4>
            <div class="site-pagination">
                <a href="#">Home</a> /
                <a href="#">Gallery</a>
            </div>
        </div>
    </div>

    <section class="gallery-area">
        <div class="container">
            <div class="gallery">
                {{-- <ul class="gallery-controls">
                    <li class="control-btn active" data-filter="all">All</li>
                    <li class="control-btn" data-filter="adults">Adults</li>
                    <li class="control-btn" data-filter="children">Children</li>
                </ul> --}}

                <div class="image-container">
                    @foreach ($gallery as $image)
                    <a href="{{asset('product_images/'.$image->category. '/' .$image->image_file)}}" class="image adults">
                        <img src="{{asset('product_images/'.$image->category. '/' .$image->image_file)}}" alt="">
                    </a>
                    @endforeach
                   
                {{-- 
                    <a href="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" class="image children">
                        <img src="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" alt="">
                    </a>

                    <a href="{{ asset('img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg') }}" class="image adults">
                        <img src="{{ asset('img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg') }}" alt="">
                    </a>

                    <a href="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" class="image children">
                        <img src="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" alt="">
                    </a>

                    <a href="{{ asset('img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg') }}" class="image adults">
                        <img src="{{ asset('img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg') }}" alt="">
                    </a>

                    <a href="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" class="image children">
                        <img src="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" alt="">
                    </a>

                    <a href="{{ asset('img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg') }}" class="image adults">
                        <img src="{{ asset('img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg') }}" alt="">
                    </a>

                    <a href="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" class="image children">
                        <img src="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" alt="">
                    </a>

                    <a href="{{ asset('img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg') }}" class="image adults">
                        <img src="{{ asset('img/product/x4.jpg.pagespeed.ic.r5-0RLqqms.jpg') }}" alt="">
                    </a>

                    <a href="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" class="image children">
                        <img src="{{ asset('img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg') }}" alt="">
                    </a> --}}
                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer')

    <!-- magnific popup js cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.control-btn').click(function() {

                $(this).addClass('active').siblings().removeClass('active');

                const filter = $(this).attr('data-filter')

                if (filter == 'all') {
                    $('.image').show(400);
                } else {
                    $('.image').not('.' + filter).hide(200);
                    $('.image').filter('.' + filter).show(400);
                }

            });

            $('.gallery').magnificPopup({

                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }

            });

        });
    </script>

</body>

</html>
