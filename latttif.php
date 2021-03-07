<?php
//cek apakah tombol sudah ditekan

if (isset($_POST["submit"])) {

	$nilai = $_POST["nilai"];

	// cek apakah inputan masih kosong
		if($nilai<=30){
			echo"Anda mendapat nilai huruf <b> E "; 
		}elseif($nilai<=50){
			 echo"Anda mendapat nilai huruf <b> D ";
		}elseif($nilai<=70){
			 echo"Anda mendapat nilai huruf <b> C "; 
		}elseif($nilai<=85){
			 echo"Anda mendapat nilai huruf <b> AB"; 
		}else { 
			echo"Anda mendapat nilai huruf <b> A "; 
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Statement IF</title>
</head>
<body>
<form method="post" action="">
	Masukkan Nilai :
		<input type="text" name="nilai">
		<button type="submit" name="submit">Kirim</button>
</form>
</body>
</html>