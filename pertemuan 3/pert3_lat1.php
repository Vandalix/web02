<?php 
$ball='purple';

if($ball == 'red'){
    $redbox==$ball;
} elseif ($ball=='blue'){
    $bluebox == $ball;
} elseif ($ball == 'green'){
    $greenbox==$ball;
} elseif ($ball=='no-color'){
    $nocolorbox ==$ball;
}

echo "red box : $redbox <br>\n";
echo "blue box : $bluebox <br>\n";
echo "green box : $greenbox <br>\n";
echo "no-color box : $nocolorbox <br>\n";

?>