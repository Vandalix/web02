<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pert2_lat3.php" method="get">
    
    <input type="text" name="num1" placeholder="nomer 1">
    <input type="text" name="num2" placeholder="nomer 2">
    
    
    <select name="operator">
        <option>Kosong</option>
        <option>Tambah</option>
        <option>Kurang</option>
        <option>Kali</option>
        <option>Bagi</option>
    </select>
    <button type="submit" name="submit">kalkulasi</button>
    </form>

    
    <br>
    <!-- <button type="submit" name="submit" value="submit">Kalkulasi</button> -->
    <p>Hasilnya:</p>
    <?php 
    

    //  echo $_GET["num1"] + $_GET["num2"];
    if(isset($_GET['submit']))
    {
        $result1=$_GET['num1'];
        $result2=$_GET['num2'];
        $operator=$_GET['operator'];

        switch($operator)
        {
            case "Kosong":
                echo "Kau harus memilih operator!";
            break;
            
            case "Tambah":
                echo $result1 + $result2;
            break;

            case "Kurang":
                echo $result1 - $result2;
            break;
            case "Kali":
                echo $result1 * $result2;
            break;
            case "Bagi":
                echo $result1 / $result2;
            break;
        }
    }
    ?>
</body>
</html>