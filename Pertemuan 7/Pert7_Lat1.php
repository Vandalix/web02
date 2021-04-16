<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Penggunaan Is Array</title>
  </head>
  <body>
    <?php
    $var = array(1,2,3,4,5 );
    $scan= is_array($var);
    if($scan == false){
      $status ="bukan";
    }else {
      $status="";
    }
    echo "\$var = array(1,2,3,4,5,6,7)";
    echo "<br>";
    echo "Variabel \$var $status merupakan array";;
    ?>
  </body>
</html>
