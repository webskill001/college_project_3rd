<?php
include "includes/header.php";
include "includes/navbar.php";
?>
  <!---Cart Page Main Section-->
  <main>
        <div class="container pt-1 cart_container">
            <div id="c_heading">
                <h3 class="p-5">Shopping Cart</h3>
            </div>  
            <div class="row cart_item_body">
                <div id="car_img">
                    <img src="images/products/img1.jpg" class="img-fluid" alt="">
                </div>
                <div id="cart_iteam">
                    <h3 id="cart_name">tomato</h3>
                    <h4 id="cart_price">&#8377; 32.00 <span>Per Kg</span></h4>
                    <div id="cart_reating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div id="quntity">
                    <button class="btn btn-light qtyminus" field='quantity'><i class="fa fa-minus" aria-hidden="true"></i></button>
                    <input type="text" name="quantity" value="0" class="qty">
                    <button class="btn btn-light qtyplus" field='quantity'><i class="fa fa-plus" aria-hidden="true"></i></button>
                </div>
                <div id="total_price">
                    <h4 id="cart_price">&#8377; 32.00</h4>
                </div>
                <div id="remove_cart">
                    <button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
            </div> 

            <div class="row cart_item_body">
                <div id="car_img">
                    <img src="images/products/img1.jpg" class="img-fluid" alt="">
                </div>
                <div id="cart_iteam">
                    <h3 id="cart_name">tomato</h3>
                    <h4 id="cart_price">&#8377; 32.00 <span>Per Kg</span></h4>
                    <div id="cart_reating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div id="quntity">
                    <button class="btn btn-light qtyminus" field='quantity'><i class="fa fa-minus" aria-hidden="true"></i></button>
                    <input type="text" name="quantity" value="0" class="qty">
                    <button class="btn btn-light qtyplus" field='quantity'><i class="fa fa-plus" aria-hidden="true"></i></button>
                </div>
                <div id="total_price">
                    <h4 id="cart_price">&#8377; 32.00</h4>
                </div>
                <div id="remove_cart">
                    <button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
            </div> 
            <div id="sub_total">
                    <h3><span>Sub Total:</span> &#8377;64.00</h3>
            </div>
            <div class="checkout">
                <a href="product.php"><button class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i> Continue Shopping</button></a>
                <button class="btn btn-success">Checkout <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
        </div>      
    </main>

<?php
include "includes/_live_chat.php";
include "includes/footer_bar.php";
include "includes/footer.php";
?>