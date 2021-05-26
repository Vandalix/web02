<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname="lat_dbase";
//$dbName = "test123";

//create connection
$con = mysqli_connect($serverName,$userName,$password,$dbname);

$sql = "CREATE TABLE `lat_dbase`.`tbl_mhs` ( `idmhs` INT(6) NOT NULL AUTO_INCREMENT , `FirstName` VARCHAR(15) NOT NULL , `LastName` VARCHAR(15) NOT NULL , `Age` INT(11) NOT NULL , PRIMARY KEY (`idmhs`));";
$input= "INSERT INTO tbl_mhs (FirstName,LastName,Age) VALUES ('Arvy', 'Syah', '24');";

$result = mysqli_query($con,$sql);


if ($con->query($input) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $input . "<br>" . $con->error;
  }




// mysqli_query($con,$sql);


// if(!$con)

// {
//     die ("NOT CONNECTED!".mysqli_connect_errno());
// }
// if($sql){
//     echo "Database $dbname berhasil dibuat";
//     }

// if(mysqli_connect_errno())
// {
//     echo " Failed to Connect!";
//     exit();
// }
// else
// {
//     echo " Connection Success";
// }

?>