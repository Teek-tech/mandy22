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

        .strikeout {
        /* font-size: 4em; */
        line-height: 1em;
        position: relative;
        }
        .strikeout::after {
        border-bottom: 0.15em solid red;
        content: "";
        left: 0;
        margin-top: calc(0.125em / 2 * -1);
        position: absolute;
        right: 0;
        top: 40%;
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
                    <h3 class="p-price">₦{{number_format($product->price, 0, '.', ',')}} 
                    <sup class="strikeout">₦{{number_format($product->discounted, 0, '.', ',')}}</sup></h3>
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

                    <div class="fw-size-choose">
                            
                        <p>Color</p>
                        @foreach (explode(',', $product->color) as $color)
                        <div class="color-item" >
                            <input type="radio" name="color" id="{{ucfirst($color)}}" value="{{ucfirst($color)}}">
                            <label for="{{ucfirst($color)}}" style="background-color: {{$color}};">{{ucfirst(mb_substr($color, 0, 1))}}</label>
                        </div>
                        @endforeach
                       
                        {{-- <div class="color-item">
                            <input type="radio" name="color" id="black">
                            <label for="black" style="background-color: black;">B</label>
                        </div>
                        <div class="color-item">
                            <input type="radio" name="color" id="white">
                            <label for="white" style="background-color: rgb(255, 234, 234);">W</label>
                        </div>
                        <div class="color-item">
                            <input type="radio" name="color" id="blue">
                            <label for="blue" style="background-color: blue;">B</label>
                        </div>
                        <div class="color-item">
                            <input type="radio" name="color" id="yellow">
                            <label for="yellow" style="background-color: yellow;" value="yellow">Y</label>
                        </div>
                        <div class="color-item">
                            <input type="radio" name="color" id="brown">
                            <label for="brown" style="background-color: brown;">B</label>
                        </div>
                        <div class="color-item">
                            <input type="radio" name="color" id="pink">
                            <label for="pink" style="background-color: pink;">P</label>
                        </div>
                        <div class="color-item">
                            <input type="radio" name="color" id="orange">
                            <label for="orange" style="background-color: #FFA500;">O</label>
                        </div>
                        <div class="color-item">
                            <input type="radio" name="color" id="navy blue">
                            <label for="navy blue" style="background-color: #000080;">N</label>
                        </div> --}}
                        <div id="reagent_code">Kindly pick a color...</div>
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
                                        Can be worn as casual and office wear with the appropriate footwear.
                                        Our fabrics are made with good quality dyes that don't come off easily but launder with Ankara friendly detergents for more durability.
                                    </p>
                                    <table class="table table-bordered">
                                    <thead style="background-color:#fc8835; color:#fff;">
                                        <tr>
                                        <th scope="col">Size (Inches)</th>
                                        <th scope="col">8</th>
                                        <th scope="col">10</th>
                                        <th scope="col">12</th>
                                        <th scope="col">14</th>
                                        <th scope="col">16</th>
                                        <th scope="col">18</th>
                                        <th scope="col">20</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Bust</th>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                                <td>46</td>
                                                <td>48</td>
                                        </tr>
                                          <tr>
                                            <th scope="row">Waist</th>
                                                <td>32</td>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                        </tr>
                                          <tr>
                                            <th scope="row">Hip</th>
                                                <td>41-42</td>
                                                <td>43-44</td>
                                                <td>44-45</td>
                                                <td>45-46</td>
                                                <td>46-47</td>
                                                <td>47-48</td>
                                                <td>48-50</td>
                                        </tr>  
                                        <tr>
                                            <th scope="row">Dress length (S)</th>
                                                <td>38</td>
                                                <td>39</td>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>43</td>
                                                <td>43</td>
                                                <td>43</td>
                                        </tr>
                                         <tr>
                                            <th scope="row">Dress length (L)</th>
                                                <td>61</td>
                                                <td>61</td>
                                                <td>62</td>
                                                <td>63</td>
                                                <td>63</td>
                                                <td>64</td>
                                                <td>64</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Dress length (L)</th>
                                                <td>24</td>
                                                <td>24</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>26</td>
                                                <td>26</td>
                                                <td>27</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="panel">
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
                        </div> --}}
                        <div class="panel">
                            <div class="panel-header" id="headingThree">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse3"
                                    aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="panel-body">
                                    <p>
                                        In order to provide the best services and right fits for our customers, our production and delivery spans within 10-12 working days. <br>

                                        We have a no return policy as we work hard to serve our customers right from point of order to point of delivery.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-sharing">
                        <a href="https://instagram.com/mandies22.ng"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
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
            @include('layouts.partials.latest')
        </div>
    </section>


    @include('layouts.footer')
    <script>
        // $("[name=color]").on("click", function() {
        // console.log(this.id)
        // // $('#reagent_code').toggle(this.value == 1)
        // $('#reagent_code').text("Selected Color: " + this.id)
        // })
        // $("[name=color]:checked").click()
    </script>
</body>

</html>
