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

    $folder = "../assets/images/slider/" . $filename;



    // Add the image to the "image" folder"

    if (move_uploaded_file($tempname, $folder)) {

        echo $msg = "Image uploaded successfully";
    }
}

echo $image = $filename;
?>

<?php

$status = "Not Activated";
$note = ($_REQUEST['note']);
if ($image!="") {
    $sql = "INSERT INTO slider (image,status,note) VALUES ('$image','$status','$note')";
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
                        <h4>Slider</h4>
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
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="note"></textarea>
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