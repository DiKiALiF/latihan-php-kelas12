    <link rel="stylesheet" href="style2.css">
    <!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
    
    <div class="container">
    <input type="checkbox" id="switch">
    <label for="switch">
      <b class="top"></b>
      <b class="bottom"></b>
    </label>
  <div class="login">
    <h1>Login</h1>
    <form method="post" action="cek_login.php">
      <p>
        <label for="user">Username</label>
        <input type="text" name="username" placeholder="Masukkan username">
      </p>
      <p>
        <label for="pass">Password</label>
        <input type="password" name="password" placeholder="Masukkan password">
      </p>
      <p>
        <input type="submit" value="LOGIN">
      </p>
    
    </form>
  </div>

</div>