<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
$key=$_GET['key'];?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Half Banner Image</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="add_halfbanner.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
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

<?php if($key==1){?>
                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM half_banner where status='Active' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                            <tr>

                                                <td><img class="primary blur-up lazyload" data-src="../assets/images/half_banner/<?php echo $row['image'] ?>" src="../assets/images/half_banner/<?php echo $row['image'] ?>" alt="image" title="product" width="70px" height="50px"></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><?php echo $row['name'] ?></td>

                                                <td style="display: inline-flex;">
                                                    <a href="complete_halfbanner.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-danger">Complete</a>
                                                    
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>

                                </tbody>
                                <?php } ?>
                                <?php if($key==2){?>
                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM half_banner where status='Not Activated' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                            <tr>

                                                <td><img class="primary blur-up lazyload" data-src="../assets/images/half_banner/<?php echo $row['image'] ?>" src="../assets/images/half_banner/<?php echo $row['image'] ?>" alt="image" title="product" width="70px" height="50px"></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><?php echo $row['name'] ?></td>

                                                <td style="display: inline-flex;">
                                                    <a href="active_halfbanner.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-success">Active</a>
                                                    
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>

                                </tbody>
                                <?php } ?>
                                
                                <?php if($key==3){?>
                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM half_banner where status='complete' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                            <tr>

                                                <td><img class="primary blur-up lazyload" data-src="../assets/images/half_banner/<?php echo $row['image'] ?>" src="../assets/images/half_banner/<?php echo $row['image'] ?>" alt="image" title="product" width="70px" height="50px"></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><?php echo $row['name'] ?></td>

                                                <!--<td style="display: inline-flex;">-->
                                                <!--    <a href="#" class="btn btn-icon btn-success">Active</a>-->
                                                    
                                                <!--</td>-->

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