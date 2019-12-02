<?php 
include '../connect.php';

$id 	= $_GET['id'];
$sql	= "DELETE FROM category WHERE id='$id'"; 

mysqli_query($connect, $sql);
header('location:index.php');
?>