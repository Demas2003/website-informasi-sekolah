<?php
include "koneksi.php";

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $prodi = $_POST['prodi'];
    $isi = $_POST['isi'];

    // Query update tanpa mengubah kolom Gambar
    $updateQuery = "UPDATE jurusan SET prodi='$prodi', isi='$isi' WHERE id='$id'";
    $result = mysqli_query($conn, $updateQuery);

    if($result){
        // Tampilkan pesan sukses menggunakan JavaScript alert
        echo "<script>alert('Data berhasil diperbarui');</script>";
        // Redirect ke tampiljurusan.php
        echo "<script>window.location.href='tampiljurusan.php';</script>";
        // Anda juga bisa menggunakan header("Location: tampiljurusan.php"); jika JavaScript tidak diinginkan
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
        // Tangani kegagalan, tampilkan pesan error, atau redirect ke halaman error
    }
}

mysqli_close($conn);
?>
