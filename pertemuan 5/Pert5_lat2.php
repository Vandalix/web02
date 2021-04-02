<?php

//membaca seluruh baris file
$file = fopen("text.txt","r");

while (!feof($file))
{
    echo fgets($file)."<br/>";
}

fclose($file);

?>