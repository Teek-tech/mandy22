// Developed by Tochukwu Odeme ** https://github.com/teek-tech
jQuery(function() {
  
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
     getData();
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

function getData(){
    const tr = document.querySelector('.shop');
    let shoppingCart = JSON.parse(localStorage.getItem('Mandy22Shop'));
    $('#item_count').text(shoppingCart.length);
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
        tr.innerHTML = html;
        total.innerHTML = totalAmount;
       
        
    }else{
        tr.innerHTML = "<td>No Data</td>";
        total.innerHTML = 0;
    }
}


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

//display Cart
getData();




