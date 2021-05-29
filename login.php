<?php
include "includes/header.php";
include "includes/navbar.php";
?>
<div class="container">
    <div id="loginbox" style="margin-top:150px;" class=" mx-auto mainbox col-lg-6 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-2">
        <div class="panel panel-success rounded" style="border:2px solid #343a40 !important;">
            <div class="panel-heading bg-dark p-3">
                <div class="panel-title h4 text-light">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px" ><a href="#" class="h6 text-light">Forgot password?</a>
                </div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal px-4" role="form">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value=""
                            placeholder="username or email">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password"
                            placeholder="password">
                    </div>



                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                        </div>
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <a id="btn-login" href="#" class="btn btn-outline-dark">Login </a>
                            <a id="btn-fblogin" href="#" class="btn btn-outline-primary">Login with Facebook</a>

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                Don't have an account!
                                <a href="register.php" class="h6" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
    
</div>

<?php
include "includes/_live_chat.php";
include "includes/footer_bar.php";
include "includes/footer.php";
?>