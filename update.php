<?php
include 'koneksi.php';
$id=$_POST['id'];
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$tanggalmulai=$_POST['tanggalmulai'];
$tanggalselesai=$_POST['tanggalselesai'];
$jenisketerangan=$_POST['jenisketerangan'];
$subjenisketerangan=$_POST['subjenisketerangan'];
$nomorsurat=$_POST['nomorsurat'];
$keterangan=$_POST['keterangan'];

mysql_query("UPDATE klien SET nip='$nip',nama='$nama',tanggalmulai='$tanggalmulai',tanggalselesai='$tanggalselesai',jenisketerangan='$jenisketerangan',subjenisketerangan='$subjenisketerangan',nomorsurat='$nomorsurat',keterangan='$keterangan' WHERE id='$id'");

header("location:index.php?pesan=update")
?>