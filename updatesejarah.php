<?php

$server = "localhost";
$database = "website_informasi_sekolah";
$username = "root";
$password = '';

// Koneksi database
$koneksidb = mysqli_connect($server, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $sejarah = $_POST["sejarah"];

    $query = "UPDATE sejarah SET judul='$judul', sejarah='$sejarah' WHERE id=$id";
    $result = mysqli_query($koneksidb, $query);

    if ($result){
    echo "<script>
    window.alert('Data Berhasil Diperbarui');
    window.location='sejarah.php';
    </script>";
} else {
    echo "<script>
    window.alert('Data Gagal Diperbarui');
    </script>";
}

}

$conn->close();
?>
