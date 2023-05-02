<?php
include('login.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Profile Page
}
?>
<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!--Body Content-->
<div id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-5 offset-md-4">
                <div class="mb-4 mt-5 signIn_form">
                    <div class="text-center mb-4">
                        <h1 class="page-width">Log In Your Account</h1>
                    </div>
                    <form method="post" action="" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Your Email" class="CustomerLogin" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="password" value="" name="password" placeholder="Password" class="CustomerLogin" class="" style="background: white; height: 3rem;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="checkbox" value="" name="customer[checkbox]" placeholder="" class="CustomerLogin" class="">
                                    <label for="RememberMe">Remember me</label>
                                </div>
                            </div>
                            <input name="submit" type="submit" class="btn mb-3 sign_in_btn" value="Sign In">
                        </div>
                        <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">

                                <p class="mt-2">
                                    <a href="#" id="RecoverPassword">Forgot your password?</a>
                                </p>
                                <p>
                                    Don't Have an Account?
                                    <a href="signup.php" id="customer_register_link" class="sign_up_now">Sign up now</a>
                                </p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!--End Body Content-->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>