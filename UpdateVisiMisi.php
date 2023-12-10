<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $jenis = $_POST['Jenis'];
    if ($jenis == "Misi") {
        $bidang = $_POST['Bidang'];
    } else if ($jenis == "Visi"){
        $bidang = "-";
    }
    $teks = $_POST['Teks'];

    $Ubah = mysqli_query($conn, "UPDATE visi_misi SET Jenis='$jenis', Bidang='$bidang', Teks='$teks' WHERE Id_VisiMisi='$id'");

    echo "<script>window.alert('Data Tamu Dengan Id ".$id." Sudah Berhasil Diedit'); window.location='TampilVisiMisi.php';</script>";

?>
