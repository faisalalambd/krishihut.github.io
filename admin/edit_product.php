<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>

<?php
include '../config.php';
$id=$_GET['id'];
$sql = "SELECT * FROM products where id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $product_name=$row['product_name'];
                $product_price=$row['product_price'];
                $special_prices=$row['special_prices'];
                $product_image=$row['product_image'];
                 $description=$row['description'];
                
            }}
$sql = "SELECT * FROM vendor where username='$login_session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $vendor_name = $row['vendor_name'];
    }
}
$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];

    $folder = "../assets/images/products/" . $filename;



    // Add the image to the "image" folder"

    if (move_uploaded_file($tempname, $folder)) {

        echo $msg = "Image uploaded successfully";
    }
}

echo $image = $filename;
?>

<?php

$product_name = ($_REQUEST['product_name']);

$product_price = ($_REQUEST['product_price']);

$vendor_name = ($_REQUEST['vendor_name']);

$special_prices = ($_REQUEST['special_prices']);
if ($product_price > 0) {
    $sql = "INSERT INTO products (product_name,product_price,vendor_name,special_prices,product_image,vendor_phone) VALUES ('$product_name','$product_price','$vendor_name','$special_prices','$image','$login_session')";
    if (mysqli_query($conn, $sql)) {
        //echo "Product Uploaded Successfully";
        header("location: products.php"); // Redirecting To Profile Page
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
?>

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Upload Products</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="#" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                      <img src="../assets/images/products/<?php echo $product_image?>" alt="Girl in a jacket" width="150" height="120">
                                    <input type="file" class="default" value="" name="image" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong><?php echo $id?></strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="<?php echo $product_name?>" value="<?php echo $product_name?>" name="product_name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Product Price</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Product Price" value="<?php echo $product_price?>" name="product_price" required>
                                </div>
                            </div>

                            <!-- <div class="form-group row">-->
                            <!--    <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Vendor</strong></label>-->
                            <!--    <div class="col-sm-9">-->
                            <!--        <input type="text" class="form-control" id="inputEmail3" placeholder="Vendor" value="" name="vendor_name" required>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Special Price</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Special Price" value="<?php echo $special_prices?>" name="special_prices" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="uploadfile" class="btn btn-primary">Upload</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>