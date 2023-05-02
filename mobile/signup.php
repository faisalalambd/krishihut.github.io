<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!--Body Content-->
<div id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-5 offset-md-4">
                <div class="mb-4 mt-5 signIn_form">
                    <div class="text-center mb-4">
                        <h1 class="page-width">Register an account</h1>
                    </div>
                    <form method="post" action="confirm_registration.php" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="full_name" placeholder="Your Name" class="CustomerRegistration">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" class="CustomerRegistration" autocorrect="off" autocapitalize="off">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="password" value="" name="password" class="CustomerRegistration" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="password" value="" name="c_password" class="CustomerRegistration" placeholder="Please type your Password Again">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone Number" class="CustomerRegistration">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="city" placeholder="City" class="CustomerRegistration">
                                </div>
                            </div>
                            <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="display: inline-flex;">
                                <div class="form-group col-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="text" name="phone" placeholder="Phone Number" class="CustomerRegistration" style="margin-left: -1rem; width: 120%;">
                                </div>
                                <div class="form-group col-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="text" name="city" placeholder="City" class="CustomerRegistration" style="margin-left: 1rem;">
                                </div>
                            </div> -->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="address" class="CustomerRegistration" placeholder="Address">
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="form-group">
                                        <label for="FirstName">Shop Name <span style="color: red;">*</span></label>
                                        <input type="text" name="shopname" placeholder="Shop Name" class="CustomerRegistration">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="radio" value="" name="status" placeholder="" class="CustomerRegistration" class="" checked>
                                    <label for="RememberMe"> I am a customer</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="radio" value="" name="status" placeholder="" class="CustomerRegistration" class="" data-toggle="collapse" href="#collapseFour">
                                    <label for="RememberMe">I am a vendor</label>
                                </div>
                            </div>



                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                <p>
                                    Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.
                                </p>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="checkbox" value="" name="customer[checkbox]" placeholder="" class="CustomerRegistration" class="">
                                    <label for="RememberMe">I agree to terms & Policy.</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3 sign_in_btn" value="Sign In">
                                <p>
                                    Already have an account?
                                    <a href="signin.php" id="customer_register_link" class="sign_up_now">Log in</a>
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