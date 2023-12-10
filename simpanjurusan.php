<?php
include "koneksi.php";

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$a = $_POST['prodi'];
$b = $_POST['isi'];

$perintah = "INSERT INTO jurusan (prodi, isi) VALUES ('$a', '$b')";
$simpan = mysqli_query($conn, $perintah);

if ($simpan) {
    echo "<script>
    window.alert('Data Buku Tamu Sudah tersimpan');
    window.location='tampiljurusan.php';
    </script>";
} else {
    echo "Gagal Tersimpan: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
