<?php
$file = fopen("text.txt","r");

while (!feof($file))
{
    echo fgets($file)."<br/>";
}

fclose($file);

?>