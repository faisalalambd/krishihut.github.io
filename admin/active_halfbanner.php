<?php 
include '../config.php';
echo $id=$_GET['id'];


$sql = "UPDATE half_banner SET status='Active' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('Location: half_banner.php?key=1');
} else {
  echo "Error updating record: " . $conn->error;
}
?>