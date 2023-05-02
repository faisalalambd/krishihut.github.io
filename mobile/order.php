<?php
include 'config.php';
echo $id = $_GET['id'];
echo $full_name = ($_REQUEST['full_name']);
echo $email = ($_REQUEST['email']);
echo $phone = ($_REQUEST['phone']);
echo $state = ($_REQUEST['state']);
echo $city = ($_REQUEST['city']);
echo $address = ($_REQUEST['address']);
echo $quantity = ($_REQUEST['quantity']);

$sql = "SELECT * FROM products  where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $product_name = $row['product_name'];
        $product_price = $row['product_price'];
    }
}
$total = $product_price * $quantity;
$status = "confirm";
$sql = "INSERT INTO orders (product_name,product_price,quantity,customer_name,customer_address,customer_city,customer_phone,total,status) VALUES ('$product_name','$product_price','$quantity','$full_name','$address','$city','$phone','$total',$status)";
if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
