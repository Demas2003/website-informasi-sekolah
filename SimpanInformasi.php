<?php
include "koneksi.php";

$a = $_POST['judul'];
$b = $_POST['isi_informasi'];
$c = $_POST['tanggal_terbit'];

// Mengambil nilai checkbox yang dipilih
$kategoriArray = isset($_POST['kategori']) ? $_POST['kategori'] : array();

// Menggabungkan nilai checkbox menjadi satu string, pisahkan dengan koma
$d = implode(",", $kategoriArray);

$perintah = "INSERT INTO informasi VALUES (NULL, '$a', '$b', '$c', '$d')";
$simpan = mysqli_query($conn, $perintah);

if ($simpan) {
    echo "<script>window.alert('Data informasi sudah tersimpan');
    window.location='tampilinformasi.php'</script>";
} else {
    echo "<script>window.alert('Gagal menyimpan data informasi');
    window.location='tampilinformasi.php'</script>";
}
?>
