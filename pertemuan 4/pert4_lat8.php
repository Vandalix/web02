<?php
for($i = 1 ;$i< 11 ;$i++) {
if ($i % 2 == 0 ) continue ;
else echo " ".$i ; //menghasilkan bilangan yang ganjil saja
}
echo "<br>";

for($j = 1; $j<11 ; ++$j)
{
    if($j %2 == 1) continue;
    {
        echo " ".$j; //bilangan genap
    }
} 
?>