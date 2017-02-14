<html>
		<head>
			<meta charset="utf-8">
			<tittle>Belajar PHP</title>
	</head>
	</body>

		<h1>Logika di PHP</h1>

	<?php
		//-------- tipe data boolean ---------
	//	$hasil = true;
	//	$hasil2 = false;

	//-------- if dan else ---------
	// operator logika == === > >= < <= !=
	
	//$uang_jajan = 4000000000;
	//$belanja = 2000000000;
	//$uang_gaji = 4000000000;

	//&& atau||

	//if($uang_jajan> $belanja
	//	&& $uang_gaji > $belanja){

	//	echo 'boleh belanja terus';
	//	}else{
	//	echo 'engga boleh belanja';
	//	}
	
	//if( $uang_jajan > $belanja){
	//	echo 'ngirit!';
	// }else if ( $uang_gaji > $belanja){
	//	echo 'Alhamdulillah!';
	
	//--if bercabang
	//if($uang_gaji >= $belanja * 2){
	//	echo 'Alhamdulillah pisan';
	//}
//}
//else{
//	echo 'engga cukup';
//}

//switch case
$nama ="HAMDAN NURIBAD";

switch ($nama){
	case 'MAIL';
	echo 'namanya MAIL';
	break;
	case 'GINA';
	echo 'namanya GINA';
	break;
	case 'DIWAN;
	echo 'namanya DIWAN';
	break;
	default:
	echo 'tidak ada yang benar';
}
	?>

	</body>
</html>