<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $isi = $_POST["isi_informasi"];
    $tanggal = $_POST["tanggal_terbit"];
    $kategoriArray = isset($_POST['kategori']) ? $_POST['kategori'] : array();
    $kategori = implode(",", $kategoriArray);

    $query = "UPDATE informasi SET judul='$judul', isi_informasi='$isi', tanggal_terbit='$tanggal', kategori='$kategori' WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result){
        echo "<script>
        window.alert('Data Berhasil Diperbarui');
        window.location='TampilInformasi.php';
        </script>";
    } else {
        echo "<script>
        window.alert('Data Gagal Diperbarui');
        </script>";
    }
}

$conn->close();
?>
