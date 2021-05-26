<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname="lat_dbase";
//$dbName = "test123";

//create connection
$con = mysqli_connect($serverName,$userName,$password,$dbname);

$sql = "CREATE TABLE `lat_dbase`.`tbl_mhs` ( `idmhs` INT(6) NOT NULL AUTO_INCREMENT , `FirstName` VARCHAR(15) NOT NULL , `LastName` VARCHAR(15) NOT NULL , `Age` INT(11) NOT NULL , PRIMARY KEY (`idmhs`));";
$input= "INSERT INTO tbl_mhs (FirstName,LastName,Age) VALUES ('Karina', 'Suwandi', '29'), ('Glenn', 'Gandari', '32');";

$result = mysqli_query($con,$sql);



if ($con->query($input) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $input . "<br>" . $con->error;
  }

