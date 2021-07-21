// Developed by Tochukwu Odeme ** https://github.com/teek-tech
jQuery(function() {
    let shoppingCart = JSON.parse(localStorage.getItem('Mandy22Shop'));
    const total = document.querySelector('#total');
    if (shoppingCart && shoppingCart.length > 0) {
        $('#item_count').text(shoppingCart.length);
    }else{
        $('#item_count').text(0);
    }
   

//update item from cart by id
$("#shopTable tbody").on('click', '.updateProduct', function(e){
    // console.log(this.id);
     let shoppingCart = JSON.parse(localStorage.getItem('Mandy22Shop'));    
        updateCart = shoppingCart.findIndex((product => product.productID == this.id));
        shoppingCart[updateCart].quantity = this.value > 0 ? this.value : 1
        if(updateCart){
            $('#successText').text('Quantity updated successfullly.');
            $('#successMsg').show();
        }
     localStorage.setItem('Mandy22Shop', JSON.stringify(shoppingCart));
     //getData();
    })

//update size from cart by id
$(".sc-item").on('click', '.updateProductSize', function(e){
    var productID = $(".sc-item").attr('data-id');
    // console.log(this.value);
    // console.log(productID);
    $("#sizedata").val(this.value);
     let shoppingCart = JSON.parse(localStorage.getItem('Mandy22Shop'));    
        updateCart = shoppingCart.findIndex((product => product.productID == productID));
        shoppingCart[updateCart].size = this.value == '' ? 'none' : this.value
        if(updateCart){
            $('#successText').text('Quantity updated successfullly.');
            $('#successMsg').show();
            // $('#sizedata').val(this.value)
        }
       
     localStorage.setItem('Mandy22Shop', JSON.stringify(shoppingCart));
     getData();
    })


    // var proQty = $('.pro-qty');
	//  proQty.prepend('<span class="dec qtybtn">-</span>');
	//  proQty.append('<span class="inc qtybtn">+</span>');
    $('.pro-qty').on('click', '.qtybtn', function () {
		 var $button = $(this);
		 var quantity = $button.parent().find('input').val();
         var product_id = $("#quant input").attr("id");

         let shoppingCart = JSON.parse(localStorage.getItem('Mandy22Shop'));    
        updateCart = shoppingCart.findIndex((product => product.productID == product_id));
        shoppingCart[updateCart].quantity = quantity > 0 ? quantity : 1
        if(updateCart){
            $('#successText').text('Quantity updated successfullly.');
            $('#successMsg').show();
        }
     localStorage.setItem('Mandy22Shop', JSON.stringify(shoppingCart));
     getData();
	 });
     
    //remove item from cart by id
    $("#shopTable tbody").on('click', '.removeProduct', function(){
        var productID = $(this).attr('data-id');
        console.log(productID)
        let shoppingCart = JSON.parse(localStorage.getItem('Mandy22Shop'));
        let filteredProducts = shoppingCart.filter(product => product.productID !== productID );
        localStorage.setItem('Mandy22Shop', JSON.stringify(filteredProducts));
        getData();
        })

        $(".empty-cart").on('click', function(){
            localStorage.clear();
            console.log(localStorage.getItem('Mandy22Shop'));
            getData();
         });

})




    $('.add-to-cart').on('click', function(e){
        var productID = $(this).attr('data-id');
        var product = $(this).attr('data-product');
        var quantity = $('#quant input').val(); // $(this).attr('data-quantity');
        var price =   $(this).attr('data-price');
        var size = $('#sizedata').val(); // $(this).attr('data-size');
        var img = $(this).attr('data-img');

        let shoppingCart = [];
        //get cart items if user have added items to cart before
       if (localStorage.getItem("Mandy22Shop")) {
        shoppingCart = JSON.parse(localStorage.getItem('Mandy22Shop'));
       }else{
           //create new storage for unknown user
        localStorage.setItem("Mandy22Shop", "[Empty Cart]");
       }

        //Find index of specific object using findIndex method.  
        var getProductID = shoppingCart.findIndex((product => product.productID == productID));

        if(shoppingCart[getProductID]){
            console.log("You have already added this item to cart! " + shoppingCart[getProductID].price)
            $('#errorText').text('You have already added this item to cart!');
            $('#errorMsg').show();
        }else{
            shoppingCart.push({
                'productID' : productID,
                'product' : product,
                'price' : price,
                'size' : size,
                'quantity' : quantity,
                'img' : img
                })
        }
        //Log object to Console.
        console.log("Before update: ", shoppingCart[getProductID])
        //retrieve updated cart items.
        localStorage.setItem("Mandy22Shop", JSON.stringify(shoppingCart));
        //console.log("se itmes: " + shoppingCart);
    });






  // paystack
  function payWithPaystack(){
    var amount = document.getElementById("amount").value;
    var charge = 0.15;
    if (amount > 2500) {
        charge = (amount + 100) * 0.15;
        total = charge + amount;
    }else{
        charge = amount * 0.15;
        total = charge + amount;
    }
    document.getElementById("amount").value = amount;
   // document.getElementById("fee").value = charge;
var handler = PaystackPop.setup({
key: 'pk_test_e683c68a6edfe02bba60e52d92ec930427339096',
email: document.getElementById("email").value,
amount: total * 100, //document.getElementById("votes").value * 30 + "00",
currency: "NGN",
ref: 'M22' + (Math.random().toString(36).substring(2, 16)).toUpperCase(),

callback: function(response){
    document.getElementById("refcode").value = response.reference; 
    $('#finish').hide();
    $('#checkout').submit();
    // $('#tallyVote').modal('hide');
    //location.reload();
},
onClose: function(){
    document.getElementById("refcode").value = 'FAILED TRANSACTION';
    $('#finish').hide();
    $('#checkout').submit();
    // $('#tallyVote').modal('hide'); 
    //alert('window closed');
}
});
handler.openIframe();

}

$('.site-btn').on('click', function(){
    $('#checkout').submit();
});

// $(document).ready(function () {
//     $('.site-btn').on('click', function(){
//         $('#checkout').validate({ // initialize the plugin
//             rules: {
//                 first_name: {
//                     required: true,
//                     minlength: 2,
//                     maxlength: 15
//                 },
//                 last_name: {
//                     required: true,
//                     minlength: 2,
//                     maxlength: 15
//                 },
//                 email: {
//                     required: true,
//                     email: true
//                 },
//                 phone: {
//                     required: true,
//                     minlength: 11,
//                     maxlength: 11
//                 },
//                 address: {
//                     required: true,
//                     minlength: 5
//                 },
//                 amount: {
//                     required: true,
//                 },
//                 product_details: {
//                     required: true
//                 },
//             }
//         });
//        // alert('Hello')
       
//     });
// });