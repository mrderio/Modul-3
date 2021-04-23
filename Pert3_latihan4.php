
<!DOCTYPE html>
<html>
<head>
	<title>Penggunaan Switch - Case</title>
</head>
<body>
Hari ini :
<?php

// Nama : Muhammad Derio
// Kelas : 06TPLE012 

$nama_hari = date("l");
switch ($nama_hari) {
	case 'Sunday':
		print ("Minggu");
		print "Waktu untuk istirahat";
		break;
	case 'Monday':
		print("Senin");
		print "Meeting awal minggu jam 08.00";
		break;
	case "Tuesday":	
		Print("Selasa <br>");
		print "Pembukaan Workshop Diklat";
		break;
	case "Wednesday" ;
		Print("Rabu <br>");
		print ("Seminar Launchig Window Vista di JHCC");
		break;
	case "Thrusday" ;
		print("Kamis <br>");
		print "Pertemuan dengan Mahasiswa";
		break;
	case "Friday" ;
		print("Jum’at <br>");
		print "Jogging bersama";
		break;
	default :
		Print("Sabtu <br>");
		print "Survey harga ke Dusit, Mangga Dua";
}

?>
</body>
</html>