<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Small Banner Image</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="add_small_banner.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Name</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM small_banner order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                            <tr>

                                                <td><img class="primary blur-up lazyload" data-src="../assets/images/small_banner/<?php echo $row['image'] ?>" src="../assets/images/small_banner/<?php echo $row['image'] ?>" alt="image" title="product" width="70px" height="50px"></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><?php echo $row['name'] ?></td>

                                                <td style="display: inline-flex;">
                                                    <a href="edit_small_banner.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-primary">Edit</a>
                                                    <form action="delete_small_banner.php?id=<?php echo $row['id'] ?>" method="post">
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