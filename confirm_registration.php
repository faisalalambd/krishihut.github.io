<?php
include 'config.php';
echo $full_name = ($_REQUEST['full_name']);
echo $email = ($_REQUEST['email']);
echo $password = ($_REQUEST['password']);
echo $c_password = ($_REQUEST['c_password']);
echo $phone = ($_REQUEST['phone']);
echo $city = ($_REQUEST['city']);
echo $address = ($_REQUEST['address']);
echo $shopname = ($_REQUEST['shopname']);
echo $status = ($_REQUEST['status']);
$sql = "INSERT INTO register (full_name,username,password,c_password,status,phone,city,address,shopname) VALUES ('$full_name','$email','$password','$c_password','$status','$phone','$city','$address','$shopname')";
if (mysqli_query($conn, $sql)) {
    // echo "Records added successfully.";
    header("Location:signin.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
