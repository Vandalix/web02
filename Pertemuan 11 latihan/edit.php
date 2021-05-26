<?php
include "koneksi.php";

$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];


if(isset($_POST['submit']))
  {
    $sql = "UPDATE bukutamu SET nama_lengkap = '$nama_lengkap', email='$email', alamat='$alamat', pesan='$pesan' WHERE id_bukutamu= '".$_POST['id_bukutamu']."'";
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
