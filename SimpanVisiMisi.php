<?php
    include "koneksi.php";

    $jenis = $_POST['Jenis'];
    if ($jenis == "Misi") {
        $bidang = $_POST['Bidang'];
    } else if ($jenis == "Visi"){
        $bidang = "-";
    }
    $teks = $_POST['Teks'];

    $insert = mysqli_query($conn, "INSERT INTO visi_misi (`Id_VisiMisi`, `Jenis`, `Bidang`, `Teks`) VALUES (NULL, '$jenis', '$bidang', '$teks')");

    echo "<script>window.alert('Data Tamu Sudah Berhasil Tersimpan'); window.location='TampilVisiMisi.php';</script>";

?>
