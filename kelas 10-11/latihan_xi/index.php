<!DOCTYPE html>
<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan PHP | www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	$username = $_POST["username"];
	$password = $_POST["password"]; 
	//memanggil lagi session untuk dimulai 
	
	//mengecek apakah user menginput captcha dengan benar
	//jika captcha salah, maka akan menjalankan yang pertama
	if ($_SESSION["code"] != $_POST["kodecaptcha"]) {
		echo "Username anda adalah <b>$username</b>"; echo "<br />";
		echo "Password anda adalah <b>$password</b>"; echo "<br />"; echo "<br/>";
		echo "Kode CAPTCHA anda salah";
	} else { // jika captcha benar, maka perintah yang bawah akan dijalankan
		echo "Username anda <b>$username</b>"; echo "<br/>";
		echo "Password anda <b>$password</b>"; echo "<br/>"; echo "<br/>";
		echo "Kode CAPTCHA anda benar";
	}
	?>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<a class="brand" href="https://www.malasngoding.com">www.malasngoding.com</a>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>	
		<a href="logout.php">LOGOUT</a>		
	</div>
</body>
</html>