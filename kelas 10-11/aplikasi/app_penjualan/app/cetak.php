<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" media="print" onload="this.media='all'">
</head>
<body data-rsssl=1>

	<center>

		<h2>Data Laporan</h2>
		

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
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

	<script>
		window.print();
	</script>

</body>
</html>