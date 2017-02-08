<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
		<title> Belajar PHP </title>
	</head>
	<body>
		<h1> Array PHP </h1>
		 <?php
		 	$kotak = array('anjing','kurakura','koala','anjing');
		 	$nama = ['Hilman','Endy','Tiqa'];
		 	print_r($kotak);
		 	echo "<br>";
		 	echo $nama[2];
		 	echo "<br>";

		 	print_r(array_unique($kotak));
		 	echo "<br>";
		 	print_r(array_reverse($kotak));
		 	echo "<br>";
		 	shuffle($kotak);
		 	print_r($kotak);
		 	echo "<br>";
		 	print_r(count($kotak));
		 	echo "<br>";
		 	sort($kotak);
		 	print_r($kotak);
		 	echo "<br>";

		 	//<====== Associative Array ========>
		 	echo "<====== Associative Array ========><br>";
		 	$data = array(	"nama" => "Hilman",
		 					"umur" => 21,
		 					"kerja" => "pengacara");
		 	print_r($data);
		 	echo "<br>";
		 	echo "Namanya adalah ".$data['nama']."<br>";
		 	echo "Umurnya ".$data['umur']. " tahun <br>";
		 	echo "Pekerjaan ".$data['kerja']." <br>";

		 	$data['nama'] = "Hilman Ramadhan";
		 	echo "Namanya adalah ".$data['nama']."<br>";
		 ?>
	</body>


</html>
