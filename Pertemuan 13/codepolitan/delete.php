<?php

//include database connection file
include_once("config.php");

//get id from URL to delete that user
$id = $_GET['id'];

//delete user row
$result =  mysqli_query($mysqli,"DELETE FROM users WHERE id=$id");

//after delete redirect to home
header("Location:index.php")

?>