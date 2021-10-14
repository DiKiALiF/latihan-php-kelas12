<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
     <!-- cek apakah sudah login -->
     <?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:../index.php?pesan=belum_login");
        }
    ?>
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <br/>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tentang Kami
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="beranda.php">Sejarah</a>
          <a class="dropdown-item" href="visimisi.php">Visi & Misi</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pengasuh/index.php">Data Pengasuh</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_anak/index.php">Data Anak</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Donasi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="caradonasi.php">Cara Donasi</a>
          <a class="dropdown-item" href="donasi/index.php">Donasi Sekarang</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

    <h2>Sejarah</h2>
    <h3>Pondok Yatim & Dhuafa</h3><br><br>
<p>Berawal dari sebuah ide sederhana beberapa sahabat yang yang memiliki keprihatinan serta kepedulian yang sama terhadap anak yatim, piatu, dhuafa & warga yang kurang beruntung dalam menopang kesejahteraan hidup terlebih tanggung jawab mereka dalam mensukseskan pendidikan anak-anaknya, ditambah situasi warga Jakarta khususnya dan masyarakat Indonesia pada umumnya pasca krisis moneter  1997 dan berbuntut kerusuhan Mei 1998, yang berdampak pada krisis moral serta krisis kepemimpinan yang masih sangat terasa  hingga era tahun 2000 an sehingga memunculkan sebuah ide berupa  kegiatan bhakti sosial dengan harapan dapat meminimalisir mata rantai kemiskinan dan kebodohan sebagai akibat dampak krisis di atas.</p> <br> <p>

Ide tersebut rupanya tidak cukup sampai di forum silaturrahmi yang  saat itu bertepatan dengan rencana persiapan menyongsong tahun baru Hijriyah yang sudah menjadi kebiasaan rutin warga merangkainya dengan kegiatan santunan untuk anak yatim dhu’afa pada tanggal 10 Muharrom setiap tahunnya. Akhirnya kami melakukan shearing dengan tokoh masyarakat, bapak RT 003, bapak RW 06, juga bapak Lurah Kedoya Utara dan salah seorang staf beliau yang pada saat itu bertempat tinggal di lingkungan Rw.06 Kedoya Utara Jakarta Barat. Alhasil setelah mendapat dukungan warga sekitar dan beberapa kawan dari tetangga kampung maupun beberapa kawan yang kami pandang SDM nya mumpuni alias punya kecakapan dan kecukupan untuk membuat sekaligus mengoperasikan sebuah  yayasan yang berbadan hukum di Negara Kesatuan Republik Indonesia.</p>

<br><p>Dari beberapa pertemuan silaturahmi yang dilakukan beberapa sahabat dan tokoh masyarakat yang ada disekitar RT 003 Rw 06 Kedoya Utara untuk membentuk yayasan yang mengacu pada amanat Undang-undang yayasan yang ditetapkan oleh pemerintah Republik Indonesia, Maka atas kehendak Alloh jua dan dukungan warga serta kawan-kawan, Alhamdulillah tepat pada tanggal 24 Agustus 2006 terbentuklah sebuah Yayasan yang memiliki legalitas Formal dengan nomer akte 125 Slamet Suryono Hadi S. SH sebagai lembaga non profit yang bergerak pada lingkup sosial keagamaan yang bertujuan untuk meningkatkan itensitas dakwah ke masyarakat pada umumnya dan secara khusus dapat membantu anggota masyarakat baik yang kurang mampu ataupun yang terkena musibah, maka yayasan ini diberi nama Yayasan Amal Sholeh Sejahtera dengan tiga departemen yaitu departemen keagamaan yang orientasinya untuk melakukan dakwah kepada masyarakat umum, dan depertemen sosial yang bertujuan untuk membantu masyarakat yang kurang mampu dan yang terkena musibah, kemudian departemen usaha yang berorientasi khusus mencari dana baik usaha riil maupun penggalangan dana ke masyarakat umum untuk memenuhi kebutuhan operasional Yayasan itu sendiri serta untuk  menyantuni anak anak yang kurang mampu  (Yatim & Dhu’afa).</p>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>