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
                    <p>No. 4, Peter Odili Road Port-Harcourt,
                        P.O. BOX 68</p>
                    <p><a href="tel:+2348174703240">+234817 470 3240</a></p>
                    <p>
                         <a href="mailto:hello@mandies22.ng ">hello@mandies22.ng </a> 
                    </p>
                    <div class="contact-social">
                        <a href="https://instagram.com/mandies22.ng"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
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
            @include('layouts.partials.latest')
        </div>
    </section>


    @include('layouts.footer')
</body>

</html>
