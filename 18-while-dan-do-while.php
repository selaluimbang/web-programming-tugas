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

 //$nama = ['ANITA', 'JIN', 'LALA', 'OLIS'];

 // for($i=0; $i < count($nama) -1; $i++)
 // {
 	// echo "-----------------";
 	// echo $nama[$i];
 	// echo "----------------- <br>";
 // }
 	// foeeach($nama as $h){
 	// echo "-----------------";
 	// echo $h;
 	// echo "----------------- <br>";
 	// }

// $data = ['nama' => 'Siska',
//		'umur' => 21,
//		'sifat' => 'baik hati'];
// foreach($data as $key => $value){
//	echo $value . "<br>";
// }

//------------ while & do while ---------------
//while(syarat

$i = 5;

// while( $i < count($nama)){
// echo $nama[$i]. "<br>";
// $i++;
// }

do{
	echo '------';
	echo $nama[$1]. "<br>";
	$i++;
}while( $i < count($nama));
 ?>
 </body>
 </html>