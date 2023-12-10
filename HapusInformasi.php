<?php
include "koneksi.php";
$a = $_GET['id'];
$hapus="DELETE FROM informasi where id='$a'";
$query=mysqli_query($conn,$hapus) or die ("gagal".mysqli_error($conn));

echo "<script>window.alert('Data informasi sudah terhapus');
	window.location='tampilinformasi.php'</script>";	
?>