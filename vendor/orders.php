<!-- ############################## Header Section ############################## -->
<?php
include '../config.php';
include 'header.php';
$id = $_GET['id'];
$sql = "UPDATE orders SET status='Delived' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    //   echo "Record updated successfully";
} else {
    //   echo "Error updating record: " . $conn->error;
}
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Your Orders</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <!--<div class="text-right">-->
                            <!--    <a href="upload_products.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>-->
                            <!--</div>-->


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>


                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Customer Name</th>
                                        <th>Customer Phone</th>

                                        <th>Customer Address</th>
                                        <th>Order Quantity</th>

                                        <th>Total Bill</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <?php

                                    $sql = "SELECT * FROM orders where vendor_phone='$login_session' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                            <tr>

                                                <td><?php echo $row['product_name'] ?></td>
                                                <!--<td><img class="primary blur-up lazyload" data-src="../assets/images/products/<?php echo $row['product_image'] ?>" src="../assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="70px" height="50px"></td>-->
                                                <td><?php echo $row['product_price'] ?></td>
                                                <td><?php echo $row['customer_name'] ?></td>
                                                <td><?php echo $row['customer_phone'] ?></td>
                                                <td><?php echo $row['customer_address'] ?></td>
                                                <td><?php echo $row['quantity'] ?></td>
                                                <td><?php echo $row['total'] ?></td>


                                                <td style="display: inline-flex;">
                                                    <a href="orders.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-primary">Delivered</a>

                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>