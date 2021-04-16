<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>fungsi split</title>
  </head>
  <body>
    <?php
      $tanggal = "17-05-2010";
      list($hari, $bulan, $tahun) = preg_split("/[\s-]+/", $tanggal);
      echo "Hari = $hari";
      echo "<br>";
      echo "Bulan = $bulan";
      echo "<br>";
      echo "Tahun = $tahun";

     ?>
  </body>
</html>
