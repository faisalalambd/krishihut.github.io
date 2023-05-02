<?php include 'header.php';
include 'config.php'; ?>
<?php
$quantity = ($_REQUEST['quantity']);
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
                    <form>


                        <fieldset>
                            <div class="row">
                                <div class="form-group form-check col-md-12 col-lg-12 col-xl-12">
                                    <label class="form-check-label padding-15px-left">
                                        <input type="checkbox" class="form-check-input" value=""><strong>Create an account ?</strong>
                                    </label>
                                </div>
                            </div>
                        </fieldset>


                    </form>

                    <div class="your-payment">
                        <h2 class="payment-title mb-3">payment method</h2>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion" class="payment-section">
                                    <div class="card mb-2">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne">Direct Bank Transfer </a>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="no-margin font-15">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="order-button-payment">
                                <button class="btn" value="Place order" type="submit">Place order</button>
                            </div>
                        </div>
                    </div>
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
                                        <th>Size</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">Spike Jacket</td>
                                        <td>$99</td>
                                        <td>S</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Argon Sweater</td>
                                        <td>$199</td>
                                        <td>M</td>
                                        <td>2</td>
                                        <td>$298</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Babydoll Bow Dress</td>
                                        <td>$299</td>
                                        <td>XL</td>
                                        <td>3</td>
                                        <td>$398</td>
                                    </tr>
                                </tbody>
                                <tfoot class="font-weight-600">
                                    <tr>
                                        <td colspan="4" class="text-right">Shipping </td>
                                        <td>$50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Total</td>
                                        <td>$845.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <hr />

                </div>
            </div>
        </div>
    </div>

</div>
<!--End Body Content-->

<?php include 'footer.php' ?>