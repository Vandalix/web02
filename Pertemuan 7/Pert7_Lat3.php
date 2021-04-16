<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $program = array('Bobo', 'Doraemon', 'Spiderman');
      list($Majalah, , $Film) = $program;
      echo "Jenis Buku & Hiburan :";
      echo "<br />";
      echo "Cerpen : $Majalah";
      echo "<br />";
      echo "Bioskop : $Film";
     ?>
  </body>
</html>
