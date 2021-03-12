<?php
$A=123; //variable global

function test(){
    global $A; //membuat variable global kedalam local
    echo ("Nilai A dalam fungsi = $A \n");
}

test();
echo ("Nilai A luar fungsi = $A \n");

?>