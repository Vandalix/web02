<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel Static</title>

</head>
<body>
    <h1>Variabel Static</h1>
    <?php 
    
    function test(){
        Static $a=0; //dengan static
        Echo "Nilai a :";
        echo $a;
        Echo "<br>";
        $a++;
    }
    test();
    test();
    test();
    test();
    test();
    test();
    ?>
</body>
</html>