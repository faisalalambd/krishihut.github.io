<?php 
include '../config.php';
echo $id=$_GET['id'];


$sql = "UPDATE slider SET status='complete' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('Location: slider.php');
} else {
  echo "Error updating record: " . $conn->error;
}
?>