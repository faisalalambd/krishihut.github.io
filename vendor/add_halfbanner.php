<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>

<?php
include '../config.php';

// $sql = "SELECT * FROM vendor where username='$login_session'";
//         $result = $conn->query($sql);
//         if ($result->num_rows > 0) {
//             // output data of each row
//             while ($row = $result->fetch_assoc()) {
//                 $vendor_name=$row['vendor_name'];
//             }}
$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];

    $folder = "../assets/images/half_banner/" . $filename;



    // Add the image to the "image" folder"

    if (move_uploaded_file($tempname, $folder)) {

        echo $msg = "Image uploaded successfully";
    }
}

echo $image = $filename;
?>

<?php

$status = "Not Activated";
$name = ($_REQUEST['names']);
if ($image != " ") {
    $sql = "INSERT INTO half_banner (image,status,name) VALUES ('$image','$status','$name')";
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
                        <h4>Add Half Banner</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="#" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="image" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Name Of the Campaign</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="" name="names" required>
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