
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countact Us</title>
    <!--Boostrap-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js "></script>
<script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--slick-->
    <!--slick-->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css" />
   
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <!--nav bar-->
    <header>
        <div class="container-fluid fixed-top bg-dark" id="top">
          <div class="row">
            <!---Top nav bar --->
            <div class="col-xl-12 top_nav">
               <div id="logo"><a href="index.html"><h2>Tribal & Farmer</h2></a></div>
               <div id="language">
                  Hello,<br><span class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Language</span>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item" href="#">Englesh</a>
                    <a class="dropdown-item" href="#">Marathi</a>
                  </div>
               </div>
                <div id="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                   </div>
                </div>
                <div id="sing_in">
                   Hello,<br><span class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sing In</span>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
                <div id="Order"><a href="order.html">Orders</a></div>
                <div id="cart"><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span style="font-size: 15px">0</span></a></div>
            </div>
            <div class="col-xl-12">
              <!--Pages Nav Bar-->
              <nav class="navbar navbar-expand-lg bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact_us.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="product.html">Products</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
    </header>
<!--Countact Us Page-->
<main>
<div class="container contact_us">
  <h3>Countact Us</h3>
  <div class="row" id="contact_bg">
    <div class="col-xl-6" id="contact_divider">
    <img src="images/customer/contact_us/phone_person.png" class="img-fluid" alt="">
        <div class="contact_detailes">
          <div id="contact_location contact_space">
            <p><i class="fa fa-map-marker" aria-hidden="true"></i></p>
            <p>SSBT COET Bambhorio Jalgaon</p>
          </div>
          <div id="contact_mail contact_space">
            <p><i class="fa fa-envelope-o" aria-hidden="true"></i></p>
            <p>contact@farmer.com</p>
          </div>
          <div id="contact_number contact_space">
            <p><i class="fa fa-whatsapp" aria-hidden="true"></i></p>
            <p>+91 7722 1111 00</p>
          </div>
        </div>
    </div>
    <div class="col-xl-6 contact_form">
        <h4>Get In Touch</h4>
        <hr>
        <p>Countact Us for quote help to join our team !!</p>
         <form action="">
          <div class="form-group">
            <label>Name :</label>
            <input type="text" class="form-control" id="contact_name" placeholder="Enter your full name" required>
          </div>
          <div class="form-group">
            <label>Email :</label>
            <input type="email" class="form-control" id="contact_email" placeholder="Enter your email id">
          </div>
          <div class="form-group">
            <label>Contact Number :</label>
            <input type="number" class="form-control" id="contact_no" placeholder="Enter your contact number" required>
          </div>
          <div class="form-group">
            <label>Message :</label>
            <textarea class="form-control" id="contact_message" placeholder="Type Your Message Here..." required></textarea>
          </div>
          <div class="form-group mt-5">
            <button class="btn btn-success btn-block">Submit</button>
          </div>
         </form>
    </div>
  </div>
</div>
</main>
    <!--Footer-->
<footer>
    <div class="container-fluid footer mt-5">
      <div class="row">
        <div class="col-xl-3">
           <h4 class="text-light">Get To Know Us</h4>
           <p class="text-light">About Us</p>
           <p class="text-light">Products</p>
           <p class="text-light">Countact Us</p>
        </div>
        <div class="col-xl-3">
          <h4 class="text-light">Countact With Us</h4>
          <div class="link">
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="col-xl-3">
          <h4 class="text-light">Make Mony With Us</h4>
           <p class="text-light"><i class="fa fa-shopping-bag text-success" aria-hidden="true"></i> <span>Sell Your Product</span></p>
           <p class="text-light"><i class="fa fa-commenting-o text-success" aria-hidden="true"></i> <span>Join With Tribal & Farmer Comunity</span></p>
        </div>
        <div class="col-xl-3">
          <h4 class="text-light">Let Us Help You</h4>
          <p class="text-light">Any problem Selling With Us.</p>
          <p class="text-light">Information About Platform</p>
          <p class="text-light">Live Review</p>
        </div>
      </div>
      <div class="text-light text-center pt-2">
        &copy; 2021-Tribal & Farmer All Rights Reserved.
      </div>
      <div class="text-light pt-2" id="dev">Developer : Project Id &copy; 17</div>
    </div>
</footer>

<!---Chat Live Doute Solving-->
<!-- Button trigger modal -->

 <!-- Button trigger modal --> 
 <div class="d-flex justify-content-end fixed-bottom mr-4 mb-5">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
      <i class="fa fa-commenting-o" aria-hidden="true"></i>
    </button>
 </div>
<!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Let'us Chat with Tribal & Farmer Comunity !!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="height: 400px;">
           <p class="resiv_chat">Welcome to Farmer & Tribal Comunity!!</p>
           <p class="sender_chat ml-auto">Hi Please Tell me Login Website Details</p>
        </div>
        <div class="modal-footer">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Type Message..">
            <div class="input-group-prepend">
              <button type="button" class="btn btn-success">Send Message</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!--Script File Link Heare -->
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/zoomsl.js"></script>
     <!--External Script Style-->
     <script type="text/javascript" src="js/script.js"></script>
</body>
</html>