<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mandies22 | No.1 Fashionista in Port Harcourt</title>
    @include('layouts.head')
</head>

<body>

    @include('layouts.nav')


    <div class="page-top-info">
        <div class="container">
            <h4>Your cart</h4>
            <div class="site-pagination">
                <a href="#">Home</a> /
                <a href="#">Your cart</a>
            </div>
        </div>
    </div>


    <section class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <form class="checkout-form" id="checkout" action="{{route('user.checkout')}}" method="POST">
                        @csrf
                        <div class="cf-title">Billing Address</div>
                        <div class="row">
                            <div class="col-md-7">
                                <p>*Billing Information</p>
                            </div>
                            {{-- <div class="col-md-5">
                                <div class="cf-radio-btns address-rb">
                                    <div class="cfr-item">
                                        <input type="radio" name="pm" id="one">
                                        <label for="one">Use my regular address</label>
                                    </div>
                                    <div class="cfr-item">
                                        <input type="radio" name="pm" id="two">
                                        <label for="two">Use a different address</label>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row address-inputs">
                            <div class="col-md-6">
                                <input type="text" name="first_name" placeholder="First Name" value="{{auth()->user()->first_name}}">
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red;">{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="last_name" placeholder="Last Name" value="{{auth()->user()->last_name}}">
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red;">{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" name="email" readonly value="{{auth()->user()->email}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red;">{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone" name="phone" value="{{auth()->user()->phone}}" required>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red;">{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder=" Delivery Address" name="address">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red;">{{ $message }}</strong>
                                </span>
                            @enderror
                                <input type="hidden" readonly name="product_details" id="product_details" required>
                                <input type="hidden" readonly name="amount" id="amount" required>
                                <input type="hidden" readonly name="orderID" id="orderID" required value="sdfdd">
                            </div>
                            {{-- <div class="col-md-6">
                                <input type="text" placeholder="Zip code">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone no.">
                            </div> --}}
                        </div>
                        {{-- <div class="cf-title">Delievery Info</div>
                        <div class="row shipping-btns">
                            <div class="col-6">
                                <h4>Standard</h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-1">
                                        <label for="ship-1">Free</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4>Next day delievery </h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-2">
                                        <label for="ship-2">$3.45</label>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="cf-title">Payment</div>
                        <ul class="payment-list">
                            <li>Paypal<a href="#"><img src="img/xpaypal.png.pagespeed.ic.zQ_J36CLr7.png" alt=""></a>
                            </li>
                            <li>Credit / Debit card<a href="#"><img
                                        src="img/xmastercart.png.pagespeed.ic.ED5Ynfm8sT.png" alt=""></a></li>
                            <li>Pay when you get the package</li>
                        </ul>
                    </form>
                    <button class="site-btn submit-order-btn" onclick="payWithPaystack()">Place Order</button>
                   
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="checkout-cart">
                       <h3>Total Cost</h3>
                         {{-- <ul class="product-list">
                            <li>
                                <div class="pl-thumb"><img src="img/cart/x1.jpg.pagespeed.ic.AVpomRStqD.jpg" alt="">
                                </div>
                                <h6>Animal Print Dress</h6>
                                <p>$45.90</p>
                            </li>
                            <li>
                                <div class="pl-thumb"><img src="img/cart/x2.jpg.pagespeed.ic.Fv7nxaNQ--.jpg" alt="">
                                </div>
                                <h6>Animal Print Dress</h6>
                                <p>$45.90</p>
                            </li>
                        </ul> --}}
                        <ul class="price-list">
                            {{-- <li>Total (₦)<span id="total">0</span></li> --}}
                            {{-- <li>Shipping<span>free</span></li> --}}
                            <li class="total">Total(₦)  <span id="total">0</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer')
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
</body>
<script>
    function getData(){
const tr = document.querySelector('.shop');
let shoppingCart = JSON.parse(localStorage.getItem('Mandy22Shop'));
if (shoppingCart && shoppingCart.length > 0) {
    $('#item_count').text(shoppingCart.length);
    $('#product_details').val(localStorage.getItem('Mandy22Shop'));
}else{
    $('#item_count').text(0);
    $('.submit-order-btn').attr("disabled", true);
    $('.submit-order-btn').text('your cart is empty');
}
const total = document.querySelector('#total');
let html = ``;
let totalAmount = 0;
if(shoppingCart){
    shoppingCart.forEach((cart) => {
       html += `<tr>
       <td class="product-col">
            ${cart.img}
           
        </td>
        <td class="quy-col text-center">
        <h4> ${cart.quantity}</h4>
        </td>
        <td class="size-col text-center">
            <h4>${cart.size}</h4>
        </td>
        <td class="total-col text-center">
            <h4>₦${cart.quantity * cart.price}</h4>
        </td>
        <td class="action-th text-center"><i class='fa fa-trash removeProduct' style='color:red' data-id="${cart.productID}"></i></td>
       </tr>`
       totalAmount += parseInt(cart.quantity * cart.price)
    });
   // console.log(html);
  // console.log(totalAmount);
    //tr.innerHTML = html;
    total.innerHTML = totalAmount > 0 ? totalAmount : 0;
    $('#amount').val(totalAmount);
   
    
}else{
    // tr.innerHTML = "<td>No Data</td>";
    total.innerHTML = 0;
    $('#amount').val(parseInt(totalAmount));
}
}

//display Cart
getData();
</script>
</html>
