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


    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3>Your Cart <a href="{{route('cart')}}" class="empty-cart"><i class='fa fa-trash' style='color:red; float: right;'></i></a></h3>  
                        <div class="cart-table-warp">
                            <table id="shopTable">
                                <thead>
                                    <tr>
                                        <th class="product-th">Product</th>
                                        <th class="quy-th">Quantity</th>
                                        <th class=" text-center">Color</th>
                                        <th class="size-th">Size</th>
                                        <th class="total-th">Price</th>
                                        <th class="action-th">Delete</th>
                                    </tr>
                                </thead>
                                <tbody class="shop"></tbody>
                                {{-- <tbody class="shopping">
                                    <tr>
                                        <td class="product-col">
                                            <img src="img/cart/x1.jpg.pagespeed.ic.AVpomRStqD.jpg" alt="">
                                            <div class="pc-title">
                                                <h4>Animal Print Dress</h4>
                                                <p>$45.90</p>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-col">
                                            <h4>Size M</h4>
                                        </td>
                                        <td class="total-col">
                                            <h4>$45.90</h4>
                                        </td>
                                    </tr>
                                   
                                </tbody> --}}
                            </table>
                        </div>
                        <div class="total-cost">
                            <h6>Total ₦<span id="total">0</span></h6>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card-right">
                    {{-- <form class="promo-code-form">
                        <input type="text" placeholder="Enter promo code">
                        <button>Submit</button>
                    </form> --}}
                    <button id="pto" class="site-btn">
                        <a href="{{ route('checkout') }}" style="color: #fff;">Proceed to checkout</a></button>
                    <a href="{{ route('shop.adults') }}" class="site-btn sb-dark">Continue shopping</a>
                </div>
            </div>
        </div>
    </section>


    <section class="related-product-section">
        <div class="container">
            <div class="section-title text-uppercase">
                <h2>Continue Shopping</h2>
            </div>
            @include('layouts.partials.latest')
        </div>
    </section>


@include('layouts.footer')

<script type="text/javascript">
    // function getData(){
        $(document).ready(function() {
    const tr = document.querySelector('.shop');
    let shoppingCart = JSON.parse(localStorage.getItem('Mandy22Shop'));
    if (shoppingCart && shoppingCart.length > 0) {
        $('#item_count').text(shoppingCart.length);
    }else{
        $('#item_count').text(0);
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
            <td class="quy-col text-center">
            <h5> ${cart.color}</h5>
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
        tr.innerHTML = html;
        total.innerHTML = totalAmount > 0 ? totalAmount : 0;
       
        
    }else{
        tr.innerHTML = "<td>Empty Cart</td>";
        total.innerHTML = 0;
    }

if (shoppingCart && shoppingCart.length < 0) {
//     $('#pto').attr("disabled", false);
// }else{
    $('#pto').attr("disabled", true);
    $('#pto').text('Your cart is empty');
}
        });
// }
//display Cart
// getData();


    </script>
</body>

</html>
