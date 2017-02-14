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

 $nama = ['HAE', 'DENI', 'UMAR', 'JAEN'];

 for($i=0; $i < count($nama); $i++)
 {
 	echo "-----------------";
 	echo $nama[$i];
 	echo "----------------- <br>";
 }

 ?>
 </body>
 </html>