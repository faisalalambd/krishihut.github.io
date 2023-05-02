<?php include 'header.php';
?>
<?php
$quantity = ($_REQUEST['quantity']);
$id = $_GET['id'];
?>

<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Checkout</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">


        <div class="row billing-fields">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                <div class="create-ac-content bg-light-gray padding-20px-all">
                    <form action="order.php?id=<?php echo $id ?>" method="post">
                        <fieldset>
                            <h2 class="login-title mb-3">Shipping Information</h2>
                            <div class="row">
                                <div class="form-group col-md-12 col-lg-12 col-xl-12 required">

                                    <input name="full_name" value="<?php echo $user_name ?>" id="input-firstname" Placeholder="Full Name" type="text">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-8 col-lg-8 col-xl-8 required">

                                    <input name="email" value="<?php echo $login_session ?>" id="input-email" placeholder="Email" type="email">
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-xl-4 required">

                                    <input name="phone" value="<?php echo $phone ?>" Placeholder="Phone" id="input-telephone" type="tel">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>




                            <div class="row">
                                <div class="form-group col-md-8 col-lg-8 col-xl-8 required">

                                    <input name="state" value="" id="input-email" placeholder="State" type="text">
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-xl-4 required">

                                    <input name="city" value="" Placeholder="City" id="input-telephone" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12 col-lg-12 col-xl-12 required">

                                    <input name="address" value="<?php echo $address ?>" id="input-email" placeholder="Address" type="text">
                                </div>

                            </div>

                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="form-group form-check col-md-12 col-lg-12 col-xl-12">
                                    <label class="form-check-label padding-15px-left">
                                        <input type="checkbox" class="form-check-input" value=""><strong>Create an account ?</strong>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="your-order-payment">
                    <div class="your-order">
                        <h2 class="order-title mb-4">Your Order</h2>

                        <div class="table-responsive-sm order-table">
                            <table class="bg-white table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-left">Product Name</th>
                                        <th>Price</th>

                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php

                                    $sql = "SELECT * FROM products  where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>

                                            <tr>
                                                <td class="text-left"><img src="assets/images/products/<?php echo $row['product_image'] ?>" alt="<?php echo $row['product_name'] ?>" width="120" height="100"><?php echo $row['product_name'] ?></td>
                                                <td><?php echo $row['product_price'] ?></td>

                                                <td style="width:40px;" class="text-center"><input name="quantity" value="<?php echo $quantity ?>" placeholder="quantity" type="text" readonly></td>
                                                <td>BDT <?php echo $subtotal = $row['product_price'] * $quantity ?>/-</td>
                                            </tr>
                                    <?php }
                                    } ?>

                                </tbody>
                                <tfoot class="font-weight-60">
                                    <tr>
                                        <td colspan="4" class="text-right">Shipping Charge </td>
                                        <td>BDT <?php echo $shipping = 50 ?>/-</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Total</td>
                                        <td>BDT <?php echo $total = $subtotal + $shipping; ?>/-</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="order-button-payment text-right">
                        <button class="btn" value="Place order" type="submit">Place order</button>
                    </div>
                    </form>
                    <hr />

                </div>
            </div>
        </div>
    </div>

</div>
<!--End Body Content-->

<?php include 'footer.php' ?>