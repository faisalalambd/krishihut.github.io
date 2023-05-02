<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!--Body Content-->
<div id="page-content">

    <!--Breadcrumb-->
    <div class="bredcrumbWrap">
        <div class="container-fluid breadcrumbs">
            <a href="index.php" title="Back to the home page">Home</a><span aria-hidden="true">/</span><span>Contact</span>
        </div>
    </div>
    <!--End Breadcrumb-->


    <div class="map-section map">
        <iframe src="https://www.google.com/maps/embed?pb=" height="350" allowfullscreen></iframe>
    </div>


    <div class="section" style="margin-top: 5rem;">

        <div class="container">

            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h1 style="font-size: 2rem; font-weight: revert;">Contact Us For Any Questions</h1>
                </div>
            </div>


            <div class="row">

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center mt-4 mb-4">
                    <h3>Contact Directly</h3>
                    <p>
                        contact@martfury.com
                        <br>
                        (+004) 912-3548-07
                    </p>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center mt-4 mb-4">
                    <h3>Headquarters</h3>
                    <p>
                        17 Queen St, Southbank, Melbourne
                        <br>
                        10560, Australia
                    </p>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center mt-4 mb-4">
                    <h3>Work With Us</h3>
                    <p>
                        Send your CV to our email:
                        <br>
                        career@martfury.com
                    </p>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center mt-4 mb-4">
                    <h3>Customer Service</h3>
                    <p>
                        customercare@martfury.com
                        <br>
                        (800) 843-2446
                    </p>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center mt-4 mb-4">
                    <h3>Media Relations</h3>
                    <p>
                        media@martfury.com
                        <br>
                        (801) 947-3564
                    </p>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center mt-4 mb-4">
                    <h3>Vendor Support</h3>
                    <p>
                        vendorsupport@martfury.com
                        <br>
                        (801) 947-3100
                    </p>
                </div>

            </div>

        </div>

    </div>


    <div class="section" style="background: #f6f6f6; padding: 5rem 0;">

        <div class="container">

            <div class="row" style="margin-bottom: 5rem;">
                <div class="col-12 text-center">
                    <h1 style="font-size: 2rem; font-weight: revert;">Get In Touch</h1>
                </div>
            </div>


            <style>
                .form-group input,
                textarea {
                    background: white;
                    height: 3rem;
                    padding-left: 1rem;
                }

                .contact_btn {
                    background: #0e6b50;
                    color: white;
                    font-size: 1rem;
                }

                .contact_btn:hover {
                    background: #e9445d;
                    color: white;
                }
            </style>


            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">

                    <div class="formFeilds contact-form form-vertical">

                        <form action="http://annimexweb.com/items/belle/assets/php/mail.php" method="post" id="contact_form" class="contact-form">

                            <div class="row">

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="ContactFormName" name="name" placeholder="Name" value="" required="">
                                    </div>
                                </div>


                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" id="ContactFormEmail" name="email" placeholder="Email" value="" required="">
                                    </div>
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input required="" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number" value="">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea required="" rows="10" id="ContactFormMessage" name="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center mt-4">
                                    <input type="submit" class="btn contact_btn" value="Send Message">
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!--End Body Content-->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>