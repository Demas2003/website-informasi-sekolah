<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Sejarah</title>
<style>
body {
    color: #333; /* Warna teks utama */
    margin: 0; /* Hapus margin default pada body */
    padding: 0; /* Hapus padding default pada body */
}

/* Gaya untuk tag h2 */
h2 {
    color: #0066cc; /* Warna teks untuk h2 */
}

/* Gaya untuk label dan input */
label {
    font-weight: bold; /* Mengatur ketebalan font pada label */
    margin-left: 125px; /* Jarak kiri pada label */
    display: block; /* Menetapkan display block agar label berada di atas input */
    margin-bottom: 5px; /* Memberikan jarak antara label dan input */
}

form {
  overflow: hidden; /* Mengatasi masalah float dengan mengatur overflow pada form */
}

/* Gaya untuk input text dan textarea */
input[type="text"],
textarea {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada input text dan textarea */
    margin-left: 125px; /* Jarak kiri pada input text dan textarea */
    border-radius: 10px; /* Sudut bulat pada input text dan textarea */
    width: 80%; /* Lebar penuh dari parent */
    padding: 10px; /* Ruang di sekitar isi input text dan textarea */
    margin-bottom: 15px; /* Jarak antara input text dan textarea */
    box-sizing: border-box; /* Membuat lebar dan tinggi termasuk padding dan border */
    outline: none; /* Menghilangkan outline bawaan saat input di-focus */
    border: 1px solid #C7C7C7; /* Warna dan ketebalan border saat input di-focus */
}

/* Gaya untuk tombol submit */
input[type="submit"] {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada tombol submit */
    background-color: #0066cc; /* Warna latar belakang tombol submit */
    color: #fff; /* Warna teks tombol submit */
    padding: 12px 20px; /* Ruang di sekitar teks dalam tombol submit */
    border: none; /* Tidak ada border pada tombol submit */
    border-radius: 20px; /* Sudut bulat pada tombol submit */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol submit */
    float: right; /* Menyusun tombol submit ke kanan */
    margin-right: 147px; /* Jarak kanan pada tombol submit */
    margin-bottom: 10px; /* Jarak bawah pada tombol submit */
}

/* Efek Hover pada tombol submit */
input[type="submit"]:hover {
    background-color: #1a8cff; /* Warna latar belakang saat kursor berada di atas tombol submit */
    color: #fff; /* Warna teks saat kursor berada di atas tombol submit */
}

/* Gaya untuk tombol reset */
input[type="reset"] {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada tombol reset */
    background-color: #cc0000; /* Warna latar belakang tombol reset */
    color: #fff; /* Warna teks tombol reset */
    padding: 12px 20px; /* Ruang di sekitar teks dalam tombol reset */
    border: none; /* Tidak ada border pada tombol reset */
    border-radius: 20px; /* Sudut bulat pada tombol reset */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol reset */
    float: right; /* Menyusun tombol reset ke kanan */
    margin-right: 5px; /* Jarak kanan pada tombol reset */
    margin-bottom: 10px; /* Jarak bawah pada tombol reset */
}

/* Efek Hover pada tombol reset */
input[type="reset"]:hover {
    background-color: #F60000; /* Warna latar belakang saat kursor berada di atas tombol reset */
    color: #fff; /* Warna teks saat kursor berada di atas tombol reset */
}

/* Gaya untuk tombol button */
input[type="button"] {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada tombol button */
    background-color: #0066cc; /* Warna latar belakang tombol button */
    color: #fff; /* Warna teks tombol button */
    padding: 12px 20px; /* Ruang di sekitar teks dalam tombol button */
    border: none; /* Tidak ada border pada tombol button */
    border-radius: 20px; /* Sudut bulat pada tombol button */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol button */
    float: right; /* Menyusun tombol button ke kanan */
    margin-right: 5px; /* Jarak kanan pada tombol button */
    margin-bottom: 10px; /* Jarak bawah pada tombol button */
}

/* Efek Hover pada tombol button */
input[type="button"]:hover {
    background-color: #1a8cff; /* Warna latar belakang saat kursor berada di atas tombol button */
    color: #fff; /* Warna teks saat kursor berada di atas tombol button */
}

</style>

<?php include('header.php');?>

</head>
<body>
    <section>
        <center>
            <h2 class="h2-sejarah"><strong class="tebal">INPUT</strong> SEJARAH</h2>
        </center>
    </section>
    <form action="simpansejarah.php" method="post">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" placeholder="Masukkan Judul Sejarah" required><br>

        <label for="sejarah">Sejarah:</label>
        <textarea name="sejarah" rows="4" placeholder="Masukkan Deskripsi Sejarah" required></textarea><br>

        <input type="submit" value="Simpan">
        <input type="reset" value="Reset">
        <!-- Tautan (link) untuk mengarahkan ke sejarah.php -->
        <a href="sejarah.php"><input type="button" value="Lihat Sejarah"></a>
    </form>

    <?php include('footer.php');?>
</body>
</html>