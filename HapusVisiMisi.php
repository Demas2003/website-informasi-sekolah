<?php
    include "koneksi.php";
    include "TampilVisiMisi.php";

    $hapus = mysqli_query($conn, "DELETE FROM visi_misi WHERE Id_VisiMisi = '$_GET[id]'") or die ("Gagal" .mysqli_error($KoneksiDB));

    echo "<script>window.alert('Data Dengan ID : ".$_GET['id']." Sudah Dihapus'); window.location='TampilVisiMisi.php';</script>";

?>