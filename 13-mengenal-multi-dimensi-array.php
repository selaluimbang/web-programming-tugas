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

		 	//<======= Metode Associative Array =========>
		 	echo "<======= Metode Associative Array =========><br>";
		 	print_r(array_values($data));
		 	echo "<br>";
		 	print_r(array_keys($data));
		 	echo "<br>";
		 	$data2 = array(		"istri" => "belum ada",
		 						"laptop" => "Macintosh");
		 	print_r(array_merge($data,$data2));

		 	//<======= Multi Dimensi Array ======>
		 	echo "<======= Multi Dimensi Array =========><br>";
		 	$data_multiarray = array(	array("Programmer","21","lajang"),
		 								array("Desainer", "18", "Sudah Menikah"),
		 								array("Project Manager","35", "Jones"));
		 	print_r($data_multiarray);
		 	echo "<br>";

		 	/*
				00 01 02
				10 11 12
				20 21 22
		 	*/
			echo $data_multiarray[1][1] ."<br>";
			$data_multiarray[0][1] = "20";
			print_r($data_multiarray[0]);
		 ?>
	</body>


</html>
