<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname="lat_dbase";

$mysqli = mysqli_connect($serverName,$userName,$password,$dbname);
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

$sql = "DELETE FROM tbl_mhs WHERE LastName='Budi'";


//mysqli_query($mysqli,$sql);
if ($mysqli->query($sql) === TRUE) {
    echo "New record updated successfully";
  } else {
    echo "Error: " . $input . "<br>" . $con->error;
  }
  
mysqli_close($mysqli);
?>