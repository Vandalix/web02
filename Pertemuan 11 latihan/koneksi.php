
<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname="buku_tamu";

$con = mysqli_connect($serverName,$userName,$password,$dbname);

// mysql_select_db("lat_dbase");

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }


?>