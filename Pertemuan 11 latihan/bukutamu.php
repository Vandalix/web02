<?php include "koneksi.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if (isset($_GET['sukses'])) {?>
<div style="width:100%; background:green; color:white;">
Data Berhasil Dimasukan
</div>
<?php }?>

<?php if (isset($_GET['error'])) {?>
<div style="width:100%; background:red; color:white;">
Data gagal Dimasukan
</div>
<?php }?>

<h1>Data Buku Tamu <small><a href="bukutamu.php">Tambah Buku Tamu</a></small></h1>
<table border="1"  width="100%">
<tr>
    <td>NO</td>
    <td>NAMA LENGKAP</td>
    <td>EMAIL</td>
    <td>ALAMAT</td>
    <td>PESAN</td>
    <td>Action</td>
</tr>

<?php
$sql_select = "SELECT * FROM bukutamu ORDER BY id_bukutamu ASC";
$qry_select = mysqli_query($con, $sql_select);
while ($data = mysqli_fetch_array($qry_select)) {
    ?>
<tr>
    <td><?php echo $data['id_bukutamu']; ?></td>
    <td><?php echo $data['nama_lengkap']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td><?php echo $data['pesan']; ?></td>
    <td><a href="bukutamu.php?edit=1&id_bukutamu=<?php echo $data['id_bukutamu']; ?>">EDIT | <a href="delete.php?id_bukutamu=<?php echo $data['id_bukutamu']; ?>">HAPUS</td>
</tr>
<?php }?>

</table>

<hr>

<?php
if (isset($_GET['edit'])) {
    $sql_edit = "SELECT * FROM bukutamu where id_bukutamu = '" . $_GET['id_bukutamu'] . "'";
    $qry_edit = mysqli_query($con, $sql_edit);
    $data_edit = mysqli_fetch_array($qry_edit);

    $action_form = 'edit.php';
} else {
    $action_form = 'insert.php';
}
?>

<form action="insert.php" method="post">
<h1>Form
<?php echo (@$_GET['edit'] == 1) ? 'Edit' : 'Input'; ?>
 Buku Tamu</h1>
<hr>
    <p>
        Nama Lengkap <br>
        <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo (@$_GET['edit'] == 1) ? $data_edit['nama_lengkap'] : ''; ?>">
        <input type="hidden" name="id_bukutamu" value="<?php echo @$_GET['id_bukutamu']; ?>">
    </p>

    <p>
         Email <br>
        <input type="text" name="email" id="email" value="<?php echo (@$_GET['edit'] == 1) ? $data_edit['email'] : ''; ?>">
    </p>

    <p>
         Alamat <br>
        <textarea name="alamat" id="alamat" cols="30" rows="5"><?php echo (@$_GET['edit'] == 1) ? $data_edit['alamat'] : ''; ?></textarea>
    </p>

    <p>
         Pesan <br>
        <textarea name="pesan" id="alamat" cols="30" rows="5"><?php echo (@$_GET['edit'] == 1) ? $data_edit['pesan'] : ''; ?></textarea>
    </p>
    <p>
    <button type="submit" id="submit" name="submit">Kirim</button>
    <button type="reset" id="reset" name="reset">Ulangi</button>
    </p>


</form>

</body>
</html>