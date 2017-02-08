<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
		<title> Belajar PHP </title>
	</head>
	<body>
		 <?php
		 
		 /*
		 Ini komentar panjang kawan...
		 hehehe
		 cuma jadi komentar aja
		 
		 
		 */
		 //Ini kommentar se-line
		 //variable string pada PHP
		 
		 $nama = "Sekolah Koding";
		 $nama2 = 'Bermain Koding';
		 
		echo "Selamat Datang di \$nama <br>";
		echo "Selamat Datang di $nama<br>";
		
		//tipe data angka/number
		//1. integer 2.float
		//math method
		//round() and ran(min,max)
		
		$angka = 1000;
		$angka2 = 3;
		$angka3 = 2.64;
		
		echo round($angka3) ."<br>";
		echo "Angka hari ini adalah : ".rand(5,20) . "<br>";
		echo "Angka Max adalah : ".max($angka, $angka2, $angka3) ."<br>";
		echo "Angka Min adalah : ".min($angka, $angka2, $angka3) ."<br>";
		 ?>
	</body>


</html>