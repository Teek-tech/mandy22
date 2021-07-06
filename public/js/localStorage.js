// Developed by Tochukwu Odeme ** https://github.com/teek-tech
jQuery(function() {
  
//update item from cart by id
$("#shopTable tbody").on('click', '.updateProduct', function(e){
    // console.log(this.id);
     let shoppingCart = JSON.parse(localStorage.getItem('KenShop'));    
        updateCart = shoppingCart.findIndex((product => product.productID == this.id));
        shoppingCart[updateCart].quantity = this.value > 0 ? this.value : 1
        if(updateCart){
            $('#successText').text('Quantity updated successfullly.');
            $('#successMsg').show();
        }
     localStorage.setItem('KenShop', JSON.stringify(shoppingCart));
     getData();
    })


    //remove item from cart by id
    $("#shopTable tbody").on('click', '.removeProduct', function(){
        var productID = $(this).attr('data-id');
        console.log(productID)
        let shoppingCart = JSON.parse(localStorage.getItem('KenShop'));
        let filteredProducts = shoppingCart.filter(product => product.productID !== productID );
        localStorage.setItem('KenShop', JSON.stringify(filteredProducts));
        getData();
        })

})

function getData(){
    const tr = document.querySelector('.shop');
    let shoppingCart = JSON.parse(localStorage.getItem('KenShop'));
    $('#item_count').text(shoppingCart.length);
    const total = document.querySelector('#total');
    let html = ``;
    let totalAmount = 0;
    if(shoppingCart){
        shoppingCart.forEach((cart) => {
           html += `<tr>
           <td>${cart.productID}</td>
           <td>${cart.product}</td>
           <td>${cart.price}</td>
           <td>
           <input type="number" id="${cart.productID}" value="${cart.quantity}"  style="width:50px;" class="updateProduct"/>
            </td>
           <td>${cart.quantity * cart.price}</td>
           <td><i class='fa fa-trash removeProduct' style='color:red' data-id="${cart.productID}"></i></td>
           </tr>`
           totalAmount += parseInt(cart.quantity * cart.price)
        });
       // console.log(html);
      // console.log(totalAmount);
        tr.innerHTML = html;
        total.innerHTML = totalAmount;
       
        
    }else{
        tr.innerHTML = "No Data";
        total.innerHTML = 0;
    }
}


    $('.add-to-cart').on('click', function(e){
        var productID = $(this).attr('data-id');
        var product = $(this).attr('data-product');
        var quantity = $(this).attr('data-quantity');
        var price = $(this).attr('data-price');

        let shoppingCart = [];
        //get cart items if user have added items to cart before
       if (localStorage.getItem("KenShop")) {
        shoppingCart = JSON.parse(localStorage.getItem('KenShop'));
       }else{
           //create new storage for unknown user
        localStorage.setItem("KenShop", "[Empty Cart]");
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
                'quantity' : quantity
                })
        }
        //Log object to Console.
        console.log("Before update: ", shoppingCart[getProductID])
        //retrieve updated cart items.
        localStorage.setItem("KenShop", JSON.stringify(shoppingCart));
        //console.log("se itmes: " + shoppingCart);
    });

//display Cart
getData();
