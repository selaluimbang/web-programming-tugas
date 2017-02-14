<html>
<head>
	<meta charset="utf-8">
	<tittle>Belajar PHP</title>
</head>
<body>

<h1>Loop PHP</h1>

<?php
 //-------Pengulangan -----
 //for(variabelawal(mulai); batas(syarat); perubahan)

 $nama = ['UJANG', 'EMEN', 'COCO', 'CIMOT'];

 for($i=0; $i < count($nama) -1; $i++)
 {
 	echo "-----------------";
 	echo $nama[$i];
 	echo "----------------- <br>";
 }
 	foeeach($nama as $h){
 	echo "-----------------";
 	echo $h;
 	echo "----------------- <br>";
 	}

 ?>
 </body>
 </html>