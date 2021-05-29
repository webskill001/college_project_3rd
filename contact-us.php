<?php
include "includes/header.php";
include "includes/navbar.php";
?>

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
<?php
include "includes/_live_chat.php";
include "includes/footer_bar.php";
include "includes/footer.php";
?>