<?
include "koneksi.php";
$articleID = $_GET['articleID'];
// Query satu record artikel dari tabel sesuai nilai $articleID
$perintah="SELECT * FROM articles WHERE articleID =\"$articleID\"";
$hasil=mysql_db_query($dbname,$perintah);
$row=mysql_fetch_array($hasil);
$time=date("d M Y, H:i");
?>

<?
include "koneksi.php";
$time=date("d M Y, H:i");
//$lead = str_replace("\r\n","<br>",$lead);
//$content= str_replace("\r\n","<br>",$content);
$update="UPDATE articles SET judul='$title', penulis='$author',
lead='$abstraksi',
content='$content', waktu='$time' WHERE articleID ='$ID'";
$hasil=mysql_db_query($dbname,$update);
if ($hasil) {
echo "Artikel berhasil di update<br>";
echo "<a href=\"tampil_articles.php\">List</a>";
} else {
echo "Artikel gagal di update";
}
?>

<h1>Form Berita</h1>
<form name=article method=post action=update_article.php>
	<input type="hidden" name="ID" value="
		<? echo "$row[articleID]" ?>">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="18%">Judul</td>
				<td width="2%">:</td>
				<td width="80%">
					<input type="text" name="title" size="50" class="masukan"value="
						<? echo "$row[judul]" ?>">
					</td>
				</tr>
				<tr>
					<td>Penulis</td>
					<td>:</td>
					<td>
						<input type="text" name="author" size="50" class="masukan"value="
							<? echo "$row[penulis]" ?>">
						</td>
					</tr>
					<tr valign="top">
						<td>Lead</td>
						<td>:</td>
						<td>
							<textarea name="abstraksi" rows="4" cols="50">
								<? echo "$row[lead]" ?>
							</textarea>
						</td>
					</tr>
					<tr valign="top">
						<td>Content</td>
						<td>:</td>
						<td>
							<textarea name="content" rows="4" cols="50">
								<? echo "$row[content]" ?>
							</textarea>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<input type="submit" name="masuk" value="Update" class="tombol">
								<input type="reset" name="hapus" value="Cancel" class="tombol">
								</td>
							</tr>
						</table>
					</form>