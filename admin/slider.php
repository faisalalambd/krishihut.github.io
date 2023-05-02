<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
$key=$_GET['key'];
$statuss=$_GET['id']?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Slider Image</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="add_slider.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>Image</th>
                                        <th>Status</th>
                                        <th><?php echo $stauss?></th>

                                        <th>Action</th>

                                    </tr>

                                </thead>

<?php if($key=1){?>
                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM slider  where status='Active' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                            <tr>

                                                <td><img class="primary blur-up lazyload" data-src="../assets/images/slider/<?php echo $row['image'] ?>" src="../assets/images/slider/<?php echo $row['image'] ?>" alt="image" title="product" width="70px" height="50px"></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><?php echo $row['note'] ?></td>

                                                <td style="display: inline-flex;">
                                                    <a href="activate_slider.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-danger">Complete</a>

                                                    <!--<form action="delete_slider.php?id=<?php echo $row['id'] ?>" method="post">-->
                                                    <!--    <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>-->
                                                    <!--</form>-->
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>

                                </tbody>
                                
                                
                                
                                <?php } ?>
                                
                                <?php if($key=2){?>
                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM slider  where status='Not Activated' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                            <tr>

                                                <td><img class="primary blur-up lazyload" data-src="../assets/images/slider/<?php echo $row['image'] ?>" src="../assets/images/slider/<?php echo $row['image'] ?>" alt="image" title="product" width="70px" height="50px"></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><?php echo $row['note'] ?></td>

                                                <td style="display: inline-flex;">
                                                    <a href="complete_slider.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-success">Activate</a>

                                                    <!--<form action="delete_slider.php?id=<?php echo $row['id'] ?>" method="post">-->
                                                    <!--    <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>-->
                                                    <!--</form>-->
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>

                                </tbody>
                                
                                
                                
                                <?php } ?>
                                
                                 <?php if($key=3){?>
                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM slider  where status='Complete' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                            <tr>

                                                <td><img class="primary blur-up lazyload" data-src="../assets/images/slider/<?php echo $row['image'] ?>" src="../assets/images/slider/<?php echo $row['image'] ?>" alt="image" title="product" width="70px" height="50px"></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><?php echo $row['note'] ?></td>

                                                <td style="display: inline-flex;">
                                                    <a href="#" class="btn btn-icon btn-success">Complete</a>

                                                    <!--<form action="delete_slider.php?id=<?php echo $row['id'] ?>" method="post">-->
                                                    <!--    <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>-->
                                                    <!--</form>-->
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>

                                </tbody>
                                
                                
                                
                                <?php } ?>

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