<html>
<head>
<title>PenggunaanSwitch - Case</title>
</head>
<body>
Hari ini :
<?Php
$nama_hari = date("l");
Switch ($nama_hari)
{
Case "Sunday" ;
Print("Minggu");
print "Istirahat dari E LEARNING";
Break;
Case "Monday" ;
Print("Senin <br>");
print "Belajar";
Break;
Case "Tuesday" ;Print("Selasa <br>");
print "Belajar 2";
Break;
Case "Wednesday" ;
Print("Rabu <br>");
print ("Belajar 3");
Break;
Case "Thrusday" ;
Print("Kamis <br>");
print "E LEARNING";
Break;
Case "Friday" ;
Print("Jum’at <br>");
print "E LEARNING";
Break;
Default :
Print("Sabtu <br>");
print "E LEARNING";
}
?>
</body>
</html>