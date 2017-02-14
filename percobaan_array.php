<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
		<title> Belajar PHP </title>
	</head>
	<body>
		 <?php
				/*Belajar ARRAY
		 		 ARRAY sekumpulan beberapa data atau nilai dalam satu variable
				*/

		 		//Associative array
		 		 //Array yang key atau indeksnya dinamakan bebas

		 		$data_mahasiswa = array("npm"=>"1442204", "nama"=> "Hamdan Nuribad", "nilai"=> 85);

		 		print_r($data_mahasiswa);
		 		echo "<br>";
		 	//array Values
		 	//menampilkan hasil array values pada $data_mahasiswa
		 		print_r(array_values($data_mahasiswa));
		 		echo "<br>";
		 	//array key
		 	//Menampilkan hasil array_key pada $data_mahasiswa
		 		print_r(array_keys($data_mahasiswa));

		 	//Array Merger menggabungkan 2 isi array
		 		$data_mahasiswa_tambahan = array("alamat"=>"Antapani", "pekerjaan" => "pekerja swasta");
		 	//print hasil merger array pertama dan kedua
		 		echo "<br>";
		 		echo "<br>";
		 		print_r(array_merge($data_mahasiswa,$data_mahasiswa_tambahan));

		 ?>
	</body>
</html>