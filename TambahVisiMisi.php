<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku Tamu</title>
    <style>
body {
    font-family: "Tahoma", sans-serif; /* Mengatur jenis font pada body */
    margin: 0; /* Menghapus margin default pada body */
    padding: 0; /* Menghapus padding default pada body */
}

form {
    width: 50%; /* Lebar form */
    margin: auto; /* Membuat form menjadi tengah */
    text-align: left; /* Penyusunan teks pada form ke kiri */
}

table {
    width: 100%; /* Lebar tabel penuh dari parentnya */
    border-collapse: collapse; /* Menyatukan border pada sel tabel */
}

/* Gaya untuk sel tabel, th, dan td */
table, th, td {
    border: 1px solid #FFF; /* Warna dan ketebalan border pada sel tabel, th, dan td */
}

/* Gaya untuk th dan td */
th, td {
    padding: 12px; /* Ruang di sekitar isi th dan td */
    text-align: left; /* Penyusunan teks di th dan td ke kiri */
}

/* Gaya untuk input text dan textarea */
input[type="text"],
textarea {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada input text dan textarea */
    width: 100%; /* Lebar penuh dari parent */
    padding: 8px; /* Ruang di sekitar isi input text dan textarea */
    border-radius: 10px; /* Sudut bulat pada input text dan textarea */
    box-sizing: border-box; /* Membuat lebar dan tinggi termasuk padding dan border */
    margin-bottom: 10px; /* Jarak antara input text dan textarea */
    outline: none; /* Menghilangkan outline bawaan saat input di-focus */
    border: 1px solid #C7C7C7; /* Warna dan ketebalan border saat input di-focus */
}

/* Gaya untuk tombol submit */
input[type="submit"] {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada tombol submit */
    background-color: #0066cc; /* Warna latar belakang tombol submit */
    color: #fff; /* Warna teks tombol submit */
    padding: 10px 20px; /* Ruang di sekitar teks dalam tombol submit */
    border: none; /* Tidak ada border pada tombol submit */
    border-radius: 5px; /* Sudut bulat pada tombol submit */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol submit */
    margin-right: 10px; /* Jarak kanan pada tombol submit */
}

/* Efek Hover pada tombol submit */
input[type="submit"]:hover,
.btn:hover {
    background-color: #1a8cff; /* Warna latar belakang saat kursor berada di atas tombol submit */
    color: #fff; /* Warna teks saat kursor berada di atas tombol submit */
}

/* Gaya untuk tombol reset */
input[type="reset"] {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada tombol reset */
    background-color: #cc0000; /* Warna latar belakang tombol reset */
    color: #fff; /* Warna teks tombol reset */
    padding: 10px 20px; /* Ruang di sekitar teks dalam tombol reset */
    border: none; /* Tidak ada border pada tombol reset */
    border-radius: 5px; /* Sudut bulat pada tombol reset */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol reset */
    margin-right: 10px; /* Jarak kanan pada tombol reset */
}

/* Efek Hover pada tombol reset */
input[type="reset"]:hover {
    background-color: #F60000; /* Warna latar belakang saat kursor berada di atas tombol reset */
    color: #fff; /* Warna teks saat kursor berada di atas tombol reset */
}

/* Gaya untuk tautan */
a {
    text-decoration: none; /* Menghilangkan dekorasi tautan */
    color: #0066cc; /* Warna teks tautan */
}

    </style>
    <?php include('header.php');?>
</head>
<body>
    <center>
    <h2 class="h2-sejarah"><strong class="tebal">INPUT</strong> VISI MISI</h2>
        <?php
        if (!isset($_POST['Jenis1'])) {
            echo '<form action="" method="POST">
                <input type="radio" name="Jenis1" value="Misi"> Misi <input type="radio" name="Jenis1" value="Visi"> Visi <br><br>
                <input type="submit" name="Lanjut" value="Lanjut" formaction="'.$_SERVER["PHP_SELF"].'" formmethod="POST"> | 
                <a href="TampilVisiMisi.php">[ Lihat Visi Misi ]</a>
            </form>';
        }

        if (isset($_POST['Jenis1'])) {
        ?>
            <form action="SimpanVisiMisi.php" method="POST">
                <table>
                    <tr>
                        <td>Jenis</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="Jenis" value="<?php echo $_POST['Jenis1'] ?>" readonly>
                        </td>
                    </tr>
                    <?php if ($_POST['Jenis1'] == "Misi") {?>
                        <tr>
                            <td>Bidang</td>
                            <td>:</td>
                            <td>    
                                <input type="text" name="Bidang" placeholder="Masukkan Bidang Yang Diinginkan" required>
                            </td>
                        </tr>
                    <?php } else { ?>
                        <tr>
                            <td>Bidang</td>
                            <td>:</td>
                            <td>    
                                <input type="text" name="Bidang" value="-" readonly>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td>Teks</td>
                        <td>:</td>
                        <td>
                            <textarea name="Teks" cols="80" rows="5" placeholder="Masukkan Teks Visi / Misinya" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="submit" value="Simpan">
                            <input type="reset" value="Ulangi">
                            <a href="TampilVisiMisi.php">[ Lihat Visi Misi ]</a>
                        </td>
                    </tr>
                </table>
            </form>
        <?php } ?>
    </center>
</body>
<?php include('footer.php');?>
</html>
