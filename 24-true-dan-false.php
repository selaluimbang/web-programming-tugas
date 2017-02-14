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
	
	$uang_jajan = 100000;
	$belanja = 1000000000;
	$uang_gaji = 5000000000;
	
	if( $uang_jajan > $belanja){
		echo 'ngirit!';
	}else if ( $uang_gaji > $belanja){
		echo 'Alhamdulillah!';
	
	//--if bercabang
	if($uang_gaji >= $belanja * 2){
		echo 'Alhamdulillah pisan';
	}
}
else{
	echo 'engga cukup';
}
	?>

	</body>
</html>