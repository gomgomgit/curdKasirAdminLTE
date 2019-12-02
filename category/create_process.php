<?php 
include '../connect.php';

$category	= $_POST['name'];

$sql		= "INSERT INTO category (name) VALUES ('$category')";
mysqli_query($connect, $sql);
header('location:index.php');

?>