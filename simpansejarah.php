<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $sejarah = $_POST["sejarah"];

    // Periksa apakah judul sudah ada
    $checkQuery = "SELECT * FROM sejarah WHERE judul = '$judul'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows == 0) {
        // Data belum ada, lakukan INSERT
        $query = "INSERT INTO sejarah (judul, sejarah) VALUES ('$judul', '$sejarah')";
        
        $result = $conn->query($query);

    }if ($result) {
        echo "<script>
        window.alert('Data Buku Tamu Sudah tersimpan');
        window.location='sejarah.php';
        </script>" ;
        
    } else {
        echo "Data dengan judul yang sama sudah ada.";
    }
}

$conn->close();

?>
