<?php
include "koneksi.php";
$a = $_GET['id'];
$hapus = "DELETE FROM jurusan WHERE id='$a'";
$query = mysqli_query($conn, $hapus) or die ("gagal" . mysqli_error($conn));

echo "<script>window.alert('Data Sudah Dihapus'); window.location='tampiljurusan.php'</script>";
?>
