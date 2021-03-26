<?php
$file = fopen("text.txt",'r');
echo fgets ($file);
fclose($file);

?>