<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" media="print" onload="this.media='all'">
</head>
<body data-rsssl=1>

	<center>

		<h2>Data Laporan<br/></h2>


		<?php 
		include 'koneksi.php';
		?>

		<table border="1">
			<tr>
				<th>Tanggal</th>
				<th>Pengeluaran</th>
				<th>Pemasukan</th>
				<th>Laba</th>
			</tr>
			<?php 
			$sql = mysqli_query($koneksi,"select * from laporan");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['pengeluaran']; ?></td>
				<td><?php echo $data['pemasukan']; ?></td>
				<td><?php echo $data['laba']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>

		<br/>

		<a href="cetak.php" target="_blank">
		<button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg> CETAK</button>
		</a>
	</center>
</body>
</html>