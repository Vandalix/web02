<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $program = array("HTML", "PHP", "CSS", "JavaScript");
    print_r($program);
    echo "<br>";
    $cari = "HTML";
    if (in_array($cari, $program)) {
    echo "Program Basis Web $cari ada di dalam array";
    } else {
    echo "Program Basis Web $cari tidak ada di dalam array";
    }
    
    ?>
</body>
</html>