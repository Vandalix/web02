<?php
include "koneksi.php";

$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];


if(isset($_POST['submit']))
  {
    $sql = "INSERT INTO bukutamu(nama_lengkap,email,alamat,pesan) VALUES ('$nama_lengkap','$email','$alamat','$pesan')";
    if(!mysqli_query($con, $sql))
        {
            header("location:bukutamu.php?gagal");
        }
        else
        {
            header("location:bukutamu.php?sukses");
        }


    }


?>
