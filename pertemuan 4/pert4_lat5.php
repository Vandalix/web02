<?php 
$brush_price = 5;
$counter = 10;
$diskon =0.1;


echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th>";
echo "<th>potongan</th></tr>";
while ($counter <= 100){
    echo "<tr><td>";
    echo $counter;
    echo "</td><td>";
    echo $price = $brush_price * $counter;
    echo "</td>";
    echo "<td>";
    echo $price * $diskon;
    echo "</td></tr>";
    

$counter = $counter + 5;
$diskon = $diskon + 0.001;

}
echo "</table>";
?>
