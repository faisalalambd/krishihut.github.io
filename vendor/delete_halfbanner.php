<?php
$id=$_GET['id'];
include '../config.php';
// sql to delete a record
$sql = "DELETE FROM half_banner WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header("location:half_banner.php");
} else {
//   echo "Error deleting record: " . $conn->error;
}
