<?php
$id=$_GET['id'];
include '../config.php';
// sql to delete a record
$sql = "DELETE FROM products WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header("location:products.php");
} else {
//   echo "Error deleting record: " . $conn->error;
}
