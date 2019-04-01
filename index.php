<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DISKOMINFOTIK</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="judul">
		<h1>SELAMAT DATANG DI DINAS KONUNIKASI INFORMATIKA DAN STATISTIK</h1>
		<h2>HAVE A GOOD DAY</h2>
	<hr>
	</div>
	<br>
	<h3>DATA KARYAWAN</h3>
	<a href="input.php">+ tambah data</a>
	<table border="1" class="table">
		<tr>
			<th>NO</th>
			<th>NIP</th>
			<th>nama</th>
			<th>TANGGAL MULAI</th>
			<th>TANGGAL SELESAI</th>
			<th>JENIS KETERANGAN</th>
			<th>SUB JENIS KETERANGAN</th>
			<th>NOMOR SURAT</th>
			<th>KETERANGAN</th>
			<th>WAKTU SEKARANG</th>
			<th>OPSI</th>
		</tr>
		
		<?php
		include "koneksi.php";
		$query_mysql=mysql_query("SELECT * FROM klien") or die(mysql_error());
		$nomor=1;
		while($data=mysql_fetch_array($query_mysql)){
		?>
		
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nip']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tanggalmulai']; ?></td>
			<td><?php echo $data['tanggalselesai']; ?></td>
			<td><?php echo $data['jenisketerangan']; ?></td>
			<td><?php echo $data['subjenisketerangan']; ?></td>
			<td><?php echo $data['nomorsurat']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			<td><?php echo date('H:i:s a'); ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">|edit|</a>
				<a href="hapus.php?id=<?php echo $data['id']; ?>">|hapus|</a>
			
			</td>
		
		</tr>
	
		
		
		<?php
		}
		?>
	
	</table>
	
	
	
</body>
</html>
