<!-- ############################## Header Section ############################## -->
<?php
include '../config.php';
include 'header.php' ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Product List</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="upload_products.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>


                                        <th>Product Name</th>
                                        <th>Product Image</th>
                                        <th>Product Price</th>
                                        <th>Product Description</th>
                                        <!--<th>Start date</th>-->
                                        <!--<th>Salary</th>-->
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <?php

                                    $sql = "SELECT * FROM products order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                            <tr>

                                                <td><?php echo $row['product_name'] ?></td>
                                                <td><img class="primary blur-up lazyload" data-src="../assets/images/products/<?php echo $row['product_image'] ?>" src="../assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="70px" height="50px"></td>
                                                <td><?php echo $row['product_price'] ?></td>
                                                <td><?php echo $row['description'] ?></td>

                                                <!--<td>2011/04/25</td>-->
                                                <!--<td>$320,800</td>-->
                                                <td style="display: inline-flex;">
                                                    <a href="edit_products.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-primary">Edit</a>
                                                    <form action="delete_products.php?id=<?php echo $row['id'] ?>" method="post">
                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                                    </form>
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