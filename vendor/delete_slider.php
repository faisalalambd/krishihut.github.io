<?php
$id=$_GET['id'];
include '../config.php';
// sql to delete a record
$sql = "DELETE FROM slider WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header("location:slider.php");
} else {
//   echo "Error deleting record: " . $conn->error;
}
