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
    $nama_file = "counter.dat";
    if(file_exists($nama_file))
    {
        $berkas = fopen ($nama_file, 'r');
        $pencacah = (integer) trim (fgets($berkas,255));
        $pencacah++;
        fclose($berkas);
    }
    else
    {
        $pencacah = 1 ;
        //simpan pencacah
        $berkas = fopen($nama_file,'w');
        fputs($berkas,$pencacah);
        fclose($berkas);
        print("Anda Pengunjung ke-$pencacah <br>\n");

    }
    //tulis ke halaman web
    

    
    ?>
</body>
</html>