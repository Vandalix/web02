
<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname="lat_dbase";

$mysqli = mysqli_connect($serverName,$userName,$password,$dbname);

// mysql_select_db("lat_dbase");

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }





  

if(isset($_POST['submit']))
  {
    $sql="INSERT INTO tbl_mhs (FirstName,LastName,Age) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
        if(!mysqli_query($mysqli, $sql))
        {
            die ('Error:'.mysqli_error());
        }
        else
        {
            echo "RECORD ADDED";
        }

        mysqli_close($mysqli);

    }

