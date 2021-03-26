<?php
$A=123;//variable global

function test(){
    $A="Test";//Variable Local
    echo ("Nilai A dalam Fungsi=$A \n");
}
test();
echo ("Nilai A dalam Fungsi=$A \n");

?>