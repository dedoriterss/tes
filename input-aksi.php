<?php
include 'koneksi.php';
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$tanggalmulai=$_POST['tanggalmulai'];
$tanggalselesai=$_POST['tanggalselesai'];
$jenisketerangan=$_POST['jenisketerangan'];
$subjenisketerangan=$_POST['subjenisketerangan'];
$nomorsurat=$_POST['nomorsurat'];
$keterangan=$_POST['keterangan'];

mysql_query("INSERT INTO klien VALUES('','$nip','$nama','$tanggalmulai','$tanggalselesai','$jenisketerangan','$subjenisketerangan','$nomorsurat','$keterangan')");

header("location:index.php?pesan=input")
?>