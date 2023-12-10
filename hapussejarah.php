<?php
$server = "localhost";
$database = "website_informasi_sekolah";
$username = "root";
$password = '';

include "koneksi.php";

$id = $_GET["id"];
$query = "DELETE FROM sejarah WHERE id=$id";
$result = $conn->query($query);

if ($result){
    echo "<script>
    window.alert('Data Berhasil Dihapus');
    window.location='sejarah.php';
    </script>";
} else {
    echo "<script>
    window.alert('Data Gagal Dihapus');
    </script>";
}

$conn->close();
?>
