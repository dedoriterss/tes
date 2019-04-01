<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ayo dedori</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="judul">
		<h1>SELAMAT DATANG DI DINAS KONUNIKASI INFORMATIKA DAN STATISTIK</h1>
		<h2>HAVE A GOOD DAY</h2>
	<hr>
	</div>
	<br>
	<a href="index.php">back</a>
	
	<?php
	include 'koneksi.php';
	$id=$_GET['id'];
	$query_mysql=mysql_query("SELECT * FROM klien WHERE id='$id'")or die(mysql_error());
	$nomor=1;
	while($data=mysql_fetch_array($query_mysql)){
	?>
	
	<form action="update.php" method="post">
	<table>
		<tr>
			<td>nip</td>
			<td><input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				<input type="text" name="nip" value="<?php echo $data['nip'] ?>">
			</td>
		</tr>
		<tr>
			<td>nama</td>
			<td>
				<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
			</td>
		</tr>
		
		<tr>
			<td>tanggal mulai</td>
			<td><input type="date" name="tanggalmulai" value="<?php echo $data['tanggalmulai'] ?>">
			</td>
		</tr>
		<tr>
			<td>tanggal selesai</td>
			<td><input type="date" name="tanggalselesai" value="<?php echo $data['tanggalselesai'] ?>">
			</td>
		</tr>
		<tr>
			<td>jenis keterangan</td>
			<td><select type="text" name="jenisketerangan" value="<?php echo $data['jenisketerangan'] ?>" required>
					<option></option>
					<option>cuti</option>
					<option>dinas</option>
					<option>pendidikan</option>
			</td>
		</tr>
		
		<tr>
			<td>sub jenis keterangan</td>
			<td><select type="text" name="subjenisketerangan" value="<?php echo $data['subjenisketerangan'] ?>" required>
					<option></option>
					<option>cuti tahunan</option>
					<option>cuti alasan penting</option>
					<option>cuti sakit</option>
					<option>cuti besar</option>
					<option>cuti bersalin</option>
					<option>cuti luar tanggungan negara</option>
					<option>dinas dalam daerah</option>
					<option>dinas luar daerah</option>
					<option>dinas  dalam kota</option>
					<option>diklat tekhnis</option>
					<option>diklat struktural</option>
					<option>diklat struktur</option>
					<option>tugas belajar</option>
			</td>
		</tr>
		<tr>
			<td>nomor surat</td>
			<td><input type="text" name="nomorsurat" value="<?php echo $data['nomorsurat'] ?>"></td>
		</tr>
		<tr>
			<td>keterangan</td>
			<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="simpan"></td>
		
		</tr>
		
	</table>
	
	
	</form>
	
	
	
	<?php
	}
	?>
	
	
</body>
</html>
