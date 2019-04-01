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
	
	<form action="input-aksi.php" method="post">
	<table>
		<tr>
		 <td>nip</td>
			<td><input type="text" name="nip" required></td>
		</tr>
		<tr>
		 <td>nama</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
		 <td>tanggal mulai</td>
			<td><input type="date" name="tanggalmulai" required></td>
		</tr>
		<tr>
		 <td>tanggal selesai</td>
			<td><input type="date" name="tanggalselesai" required></td>
		</tr>
		<tr>
			<td>jenis keterangan</td>
			<td>
				<select name="jenisketerangan" required>
					<option></option>
					<option>cuti</option>
					<option>dinas</option>
					<option>pendidikan</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>sub jenis keterangan</td>
			<td>
				<select name="subjenisketerangan" required>
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
				</select>
			</td>
		</tr>
		
		<tr>
			<td>nomor surat</td>
			<td><input type="text" name="nomorsurat" required></td>
		</tr>
		<tr>
			<td>keterangan</td>
			<td><input type="text" name="keterangan" required></td>
		</tr>
		
		<tr>
			<td>waktu sekarang</td>
			<td><input type="time" required> </td>
			
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="simpan"></td>
		</tr>
		
	</table>
	
	
	</form>
	
	
	
	
	
	
</body>
</html>
