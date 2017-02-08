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
		
		//---- String Method ----
		//strlen && str_word_count
		//str_replace(search, replace, subject)
		//str_repeat(input, multiplier)

		$text = "Hai Semuanya disini";
		echo strlen($text);
		echo "<br>";
		echo str_word_count($text);
		echo "<br>";
		echo str_replace("Hai", "Hello", $text);
		echo "<br>";
		echo str_repeat($text, 2);

		 ?>
	</body>


</html>
