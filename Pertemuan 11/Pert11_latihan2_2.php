<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname="lat_dbase";
//$dbName = "test123";

//create connection
$con = mysqli_connect($serverName,$userName,$password);
$sql = "CREATE DATABASE $dbname";
mysqli_query($con,$sql);


if(!$con)

{
    die ("NOT CONNECTED!".mysqli_connect_errno());
}
if($sql){
    echo "Database $dbname berhasil dibuat";
    }

if(mysqli_connect_errno())
{
    echo " Failed to Connect!";
    exit();
}
else
{
    echo " Connection Success";
}

?>