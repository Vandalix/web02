<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA COVID-19</title>
</head>
<body>
    <h1>MASUKAN DATA</h1>
    <form action="#" method="post">

    <p>
    <label for="wilayah">Pilih Wilayah:</label>
    <select name="wilayah">
        <option>DKI JAKARTA</option>
        <option>JAWA BARAT</option>
        <option>BANTEN</option>
        <option>JAWA TENGAH</option>
    </select>
    </p>

    <p>
    <label for="positif">Positif:</label>
    <input type="text" name="positif" placeholder="masukan jumlah positif">
    <label for="dirawat">Dirawat:</label>
    <input type="text" name="dirawat" placeholder="masukan jumlah dirawat">
    <label for="sembuh">Sembuh:</label>
    <input type="text" name="sembuh" placeholder = "masukan jumlah sembuh">

    </p>

    <p>
    <label for="meninggal">Meninggal</label>
    <input type="text" name="meninggal" placeholder="masukan jumlah meninggal">
    <label for="operator">Nama Operator</label>
    <input type="text" name="operator" placeholder="masukan jumlah operator">
    <label for="NIM">NIM Mahasiswa</label>
    <input type="text" name="NIM" placeholder="masukan nim">
    </p>


    <button type="submit" name="submit">INPUT</button>
    </form>
    <br>


    <p>Hasil:</p>
    <?php
    if(isset($_POST['submit']))
    {
        $wilayah = $_POST['wilayah'];
        $positif = $_POST['positif'];
        $dirawat = $_POST['dirawat'];
        $sembuh = $_POST['sembuh'];
        $meninggal = $_POST['meninggal'];
        $operator = $_POST['operator'];
        $NIM = $_POST['NIM'];


        $timestamp = date('Y-m-d G:i:s');
        

        $data = "       +--+--+--+--+--+--+-+--+--+--+--+--+--+--+--+--+--+--+--+--+
        | POSITIF | DIRAWAT | SEMBUH | MENINGGAL | OPERATOR | NIM |
        +--+--+--+--+--+--+-+--+--+--+--+--+--+--+--+--+--+--+--+--+
        |  $positif  |   $dirawat    |   $sembuh   |    $meninggal   | $operator | $NIM |
        +--+--+--+--+--+--+-+--+--+--+--+--+--+--+--+--+--+--+--+--+";//isinya variable diatas 
        
        $dbdate = "Data Pemantaun Covid19 Wilayah $wilayah per $timestamp $operator / $NIM" ;
        $dbspace= "===================================================================";

        $table = "<table border='1'>
        <tr>
            <td>
                POSITIF
            </td>
            <td>
                DIRAWAT
            </td>
            <td>
                SEMBUH
            </td>
            <td>
                MENINGGAL
            </td>
            <td>
                NAMA OPERATOR
            </td>
            <td>
                NIM
            </td>
        </tr>
        <tr>
            <td>$positif</td>
            <td>$dirawat</td>
            <td>$sembuh</td>
            <td>$meninggal</td>
            <td>$operator</td>
            <td>$NIM</td>
        </tr>
    </table>";
        
        //$file = fopen("db.html","w+") or die ("file not open");//create file
        $file_saya = file_put_contents("db.html",$dbdate.PHP_EOL.$dbspace.PHP_EOL.$data.PHP_EOL,FILE_APPEND);


        echo $dbdate."<BR>".$dbspace.$table;

        

        $html_file= "db_html_format.html"; //assign 
        $html_form = "<html><body><p>Data Pemantaun Covid19 Wilayah $wilayah per $timestamp $operator / $NIM</p>$table</body></html>";//bentuk html
        $file2 = fopen($html_file,"w+") or die ("file not open");//create file
        $file_saya2= file_put_contents ($html_file,$html_form);


    }
    

    ?>

</body>
</html>