<?php
//tabel perkalian

echo "<table border=1 width=90% height=50%>";
for($j=1;$j<=12;$j++)
{
    echo "<tr>";
    for($k=1;$k<=10;$k++)
    {
        echo "<td>";
        $total=$j*$k;
        echo "$j x $k = $total";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";


?>