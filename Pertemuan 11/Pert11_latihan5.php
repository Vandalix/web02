<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname="lat_dbase";

$con = mysqli_connect($serverName,$userName,$password,$dbname);

// mysql_select_db("lat_dbase");

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

$sql = "SELECT * FROM tbl_mhs ORDER BY Lastname";

$hasil=mysqli_query($con, $sql);

if ($hasil = $con -> query($sql)) {
    while ($row = $hasil -> fetch_row()) {
        echo "$row[0] $row[1] $row[2] $row[3]<br>";
    }
    $hasil -> free_result();
  }
?>