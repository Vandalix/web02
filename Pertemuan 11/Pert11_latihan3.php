<?php
$con=mysqli_connect("localhost","root","");
$dbname="lat_dbase"; //koneksi

mysqli_select_db($con,$dbname); // mengaktifkan database
//membuat tabel
$sql = "CREATE TABLE tbl_mhs
(
    idmhs int NOT NULL AUTO_INCREMENT, PRIMARY KEY (idmhs),FirstName varchar(15),LastName varchar(15), Age int
)";

$input= "INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES ('Arvy','Syahputra',25)";

mysqli_query($sql,$input);

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
