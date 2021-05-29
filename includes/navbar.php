<!--nav bar-->
<header>
        <div class="container-fluid fixed-top bg-dark" id="top">
          <div class="row">
            <!---Top nav bar --->
            <div class="col-xl-12 top_nav">
               <div id="logo"><a href="index.html"><h2><?php echo WEBSITE_NAME; ?></h2></a></div>
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
                    <a class="dropdown-item" href="<?php echo WEBSITE_PATH ?>register.php">Register</a>
                      <a class="dropdown-item" href="<?php echo WEBSITE_PATH ?>login.php">Login</a>
                      <a class="dropdown-item" href="<?php echo WEBSITE_PATH ?>account/myaccount.php">My account</a>
                      <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
                <div id="Order"><a href="<?php echo WEBSITE_PATH ?>account/myaccount.php">Orders</a></div>
                <div class="dropdown" id="cart">
                  <button class="btn dropdown-toggle" style="background-color: transparent;border-color: transparent;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i><span style="font-size: 15px" class="text-light mx-1">0</span>
                  </button>
                  <div class="dropdown-menu" style="width:350px;margin-top:10px;" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-dark" href="#">Another action</a>
                    <a class="dropdown-item text-dark" href="#">Something else here</a>
                  </div>
                </div>
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
                      <a class="nav-link" href="<?php echo WEBSITE_PATH ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo WEBSITE_PATH ?>about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo WEBSITE_PATH ?>contact-us.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo WEBSITE_PATH ?>product.php">Shop</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
    </header>