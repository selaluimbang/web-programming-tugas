<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
		<title> Belajar PHP </title>
	</head>
	<body>
		 <?php
		 /*
			Belajar Array dalam PHP
			Array adalah sekumpulan nilai atau data yang mengisi sebuah variable
		 */

		 /*
			Cara Inisialisasi Array 
			$_<nama_variable>  = #Fungsi Array(<value_array>,<value_array>,<value_array>);

			atau

			$_<nama_variable> = [value_array, value_array, value_array];

			Inisialisasi : Mengisi awalan pada variable
		 */

		 //Inisialisasi array

			//array bisa berupa value integer saja
			$data_nilai = array(10,20,30,40,60,20,80);
			$data_nilai = [10,20,30,40,60,20,80];
			print_r($data_nilai);
			echo "<br>";

			//array bisa berupa value string
			$data_nama = array("Hamdan", "Handi","Andi","Chandra","Agus");
			$data_nama = ["Hamdan", "Handi","Andi","Chandra","Agus"];
			print_r($data_nama);
			echo "<br>";

			//array bisa berupa campuran value integer dan String
			$data_campuran = array("Hamdan", 21, 10.05, '#');
			$data_campuran = ["Hamdan", 21, 10.05, '#'];
			print_r($data_campuran);
			echo "<br>";
		 ?>
	</body>
</html>