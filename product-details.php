<?php
include "includes/header.php";
include "includes/navbar.php";
?>
<!--product-->
<main>
        <div class="container product_bg">
            <div class="row">
                <!--Big image-->
                <div class="col-xl-5 mb-3 d-flex justify-content-center">
                    <img src="images/products/img1.jpg" id="big_img" class="img-thumbnail display_zoom" alt="">
                </div>
                <!--All images-->
                <div class="col-xl-1 img">
                    <img src="images/products/img1.jpg" onmouseover="myfunction(this)" class="img-thumbnail" alt="">
                    <img src="images/products/img2.jpg" onmouseover="myfunction(this)" class="img-thumbnail" alt="">
                    <img src="images/products/img3.jpg" onmouseover="myfunction(this)" class="img-thumbnail" alt="">
                    <img src="images/products/img4.jpg" onmouseover="myfunction(this)" class="img-thumbnail" alt="">
                </div>
                <!--Product Details-->
                <div class="col-xl-6">
                   <div id="wishlist_icon">
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                   </div>
                   <h3 id="name">tomato</h3>
                   <p id="sub_name">organic and healthy vegitables</p>
                   <h4 id="price">&#8377; <span>32</span>.00 <span id="price_detiles">per kg</span></h4>
                   <div id="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                   </div>
                   <div id="button">
                       <div class="btn btn-success">Add To Cart</div>
                       <div class="btn btn-success">By Now</div>
                   </div>
                   <div id="services">
                        <h6>Services :</h6>
                        <ul>
                            <li>Home Delvery</li>
                            <li>24 Hours Service</li>
                            <li>Cash on Delvery</li>
                        </ul>
                   </div>
                   <h6>Home Delvery - &#8377; <span>10</span>.00</h6>
                </div>
            </div>
        </div>
        <!--Description-->
        <div class="container mt-3" id="description_section">
            <div class="row">
                <h4>Description</h4>
                <div class="col-xl-12">
                    <h5 id="name">tomato</h5>
                    <p id="discription">Despite belonging from the Fruits family, Tomatoes are widely perceived as a vegetable and are used in several veggie preparations. Tomatoes are a rich source of Potassium, Folate, Lycopene and Vitamin C. It is also considered beneficial for skin health. Increase tomato intake for impoved heart health, Cancer prevention and protection from Sun damage. Buy Tomato (Tamatar) 1 Kg online now.</p>
                </div>
            </div>
        </div>
        <!--related product-->
        <div class="container mt-3">
           <div class="row">
                <h4>Products related to this item</h4>
           </div>
            <div class="related_product mt-3">
                <div class="prtod_div">
                  <img src="images/products/img1.jpg" alt="" class="img-thumbnail">
                  <div class="caption_product">
                    <h5 id="name_related" class="text-center">tomato</h5>
                    <div class="text-center text-success">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-center" id="price_related">&#8377; <span>32</span>.00 <span id="price_detiles_related">per kg</span></h4>
                    <a href="#" class="btn btn-success btn-block">Add To Cart</a>
                  </div>
                </div>
                <div class="prtod_div">
                  <img src="images/products/img2.jpg" alt="" class="img-thumbnail">
                  <div class="caption_product">
                    <h5 id="name_related" class="text-center">tomato</h5>
                    <div class="text-center text-success">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-center" id="price_related">&#8377; <span>32</span>.00 <span id="price_detiles_related">per kg</span></h4>
                    <a href="#" class="btn btn-success btn-block">Add To Cart</a>
                  </div>
                </div>
                <div class="prtod_div">
                  <img src="images/products/img3.jpg" alt="" class="img-thumbnail">
                  <div class="caption_product">
                    <h5 id="name_related" class="text-center">tomato</h5>
                    <div class="text-center text-success">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-center" id="price_related">&#8377; <span>32</span>.00 <span id="price_detiles_related">per kg</span></h4>
                    <a href="#" class="btn btn-success btn-block">Add To Cart</a>
                  </div>
                </div>
                <div class="prtod_div">
                  <img src="images/products/img4.jpg" alt="" class="img-thumbnail">
                  <div class="caption_product">
                    <h5 id="name_related" class="text-center">tomato</h5>
                    <div class="text-center text-success">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-center" id="price_related">&#8377; <span>32</span>.00 <span id="price_detiles_related">per kg</span></h4>
                    <a href="#" class="btn btn-success btn-block">Add To Cart</a>
                  </div>
                </div>
                <div class="prtod_div">
                  <img src="images/products/img1.jpg" alt="" class="img-thumbnail">
                  <div class="caption_product">
                    <h5 id="name_related" class="text-center">tomato</h5>
                    <div class="text-center text-success">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-center" id="price_related">&#8377; <span>32</span>.00 <span id="price_detiles_related">per kg</span></h4>
                    <a href="#" class="btn btn-success btn-block">Add To Cart</a>
                  </div>
                </div>
                <div class="prtod_div">
                  <img src="images/products/img1.jpg" alt="" class="img-thumbnail">
                  <div class="caption_product">
                    <h5 id="name_related" class="text-center">tomato</h5>
                    <div class="text-center text-success">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-center" id="price_related">&#8377; <span>32</span>.00 <span id="price_detiles_related">per kg</span></h4>
                    <a href="#" class="btn btn-success btn-block">Add To Cart</a>
                  </div>
                </div>
                <div class="prtod_div">
                  <img src="images/products/img1.jpg" alt="" class="img-thumbnail">
                  <div class="caption_product">
                    <h5 id="name_related" class="text-center">tomato</h5>
                    <div class="text-center text-success">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-center" id="price_related">&#8377; <span>32</span>.00 <span id="price_detiles_related">per kg</span></h4>
                    <a href="#" class="btn btn-success btn-block">Add To Cart</a>
                  </div>
                </div>
                <div class="prtod_div">
                  <img src="images/products/img1.jpg" alt="" class="img-thumbnail">
                  <div class="caption_product">
                    <h5 id="name_related" class="text-center">tomato</h5>
                    <div class="text-center text-success">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="text-center" id="price_related">&#8377; <span>32</span>.00 <span id="price_detiles_related">per kg</span></h4>
                    <a href="#" class="btn btn-success btn-block">Add To Cart</a>
                  </div>
                </div>
            </div>
        </div>
    </main>
<?php
include "includes/footer_bar.php";
include "includes/footer.php";
?>