<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Informasi</title>
<style>
/* Gaya Umum untuk Seluruh Halaman */
body {
    font-family: "Baloo 2"; /* Mengatur jenis font untuk seluruh halaman */
    margin: 0; /* Menghilangkan margin pada halaman */
    padding: 20px; /* Ruang di sekitar konten pada halaman */
    background-color: white; /* Warna latar belakang halaman */
}

/* Gaya Formulir */
form {
    width: 70%; /* Menentukan lebar formulir sebesar 70% dari lebar parent */
    margin: auto; /* Pusatkan formulir di halaman */
    text-align: left; /* Teks dalam formulir berada di sebelah kiri */
}

/* Gaya Tabel */
table {
    width: 100%; /* Menentukan lebar tabel sebesar 100% dari lebar parent */
    border-collapse: collapse; /* Menggabungkan border sel dalam tabel */
}

/* Gaya Header, Sel, dan Header Tabel */
table, td {
    border: 1px solid #FFF; /* Border setebal 1px dengan warna putih pada tabel dan sel */
}

/* Gaya Padding dan Teks dalam Sel Tabel */
td {
    padding: 12px; /* Ruang di sekitar isi sel dalam tabel */
    text-align: left; /* Teks selalu berada di sebelah kiri dalam sel tabel */
}

/* Gaya Input Text, Tanggal, dan Textarea */
input[type="text"],
input[type="date"],
textarea {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada input text, tanggal, dan textarea */
    width: 100%; /* Lebar penuh dari parent */
    padding: 8px; /* Ruang di sekitar isi input text, tanggal, dan textarea */
    border-radius: 10px; /* Sudut bulat pada input text, tanggal, dan textarea */
    box-sizing: border-box; /* Membuat lebar dan tinggi termasuk padding dan border */
    margin-bottom: 10px; /* Jarak antara input text, tanggal, dan textarea */
    outline: none; /* Menghilangkan outline bawaan saat input di-focus */
    border: 1px solid #C7C7C7; /* Warna dan ketebalan border saat input di-focus */
}

/* Gaya Tombol Submit */
input[type="submit"] {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada tombol submit */
    background-color: #0066cc; /* Warna latar belakang tombol submit */
    color: #fff; /* Warna teks tombol submit */
    padding: 10px 20px; /* Ruang di sekitar teks dalam tombol submit */
    border: none; /* Tidak ada border pada tombol submit */
    border-radius: 10px; /* Sudut bulat pada tombol submit */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol submit */
    margin-right: 10px; /* Jarak kanan pada tombol submit */
}

/* Gaya Tombol Reset */
input[type="reset"] {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada tombol reset */
    background-color: #F60000; /* Warna latar belakang tombol reset */
    color: #fff; /* Warna teks tombol reset */
    padding: 10px 20px; /* Ruang di sekitar teks dalam tombol reset */
    border: none; /* Tidak ada border pada tombol reset */
    border-radius: 10px; /* Sudut bulat pada tombol reset */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol reset */
    margin-right: 10px; /* Jarak kanan pada tombol reset */
}

/* Gaya Tautan */
a {
    text-decoration: none; /* Menghapus dekorasi tautan bawaan */
    color: #0066cc; /* Warna teks tautan */
}

.checkbox-group {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

</style>
<?php include('header.php');?>
</head>
<body>
<form id="informasi" name="informasi" method="post" action="simpaninformasi.php">

<h2 class="h2-sejarah"><strong class="tebal">TAMBAH</strong> INFORMASI</h2>
<table>
                <tr>
                    <td>Judul</td>
                    <td> :</td>
                    <td><input type="text" name="judul" placeholder="Masukkan Judul Informasi" id="judul_info"></td>
                </tr>
                <tr>
                    <td>Isi Informasi </td>
                    <td> :</td>
                    <td><textarea name="isi_informasi" id="isi_informasi" placeholder="Masukkan Informasi" cols="50" rows="5"></textarea></td>
                </tr>
				<tr>
                    <td>Tanggal Terbit</td>
                    <td> :</td>
                    <td><input type="date" name="tanggal_terbit" id="tanggal_terbit"></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td> :</td>
                    <td class="checkbox-group">
                        <input type="checkbox" name="kategori[]" value="Pendaftaran Siswa Baru" id="kategori1">
                        <label for="kategori1">Pendaftaran Siswa Baru</label>

                        <input type="checkbox" name="kategori[]" value="KBM" id="kategori2">
                        <label for="kategori2">KBM</label>

                        <input type="checkbox" name="kategori[]" value="UTS" id="kategori3">
                        <label for="kategori3">UTS</label>

                        <input type="checkbox" name="kategori[]" value="UAS" id="kategori4">
                        <label for="kategori4">UAS</label>

                        <input type="checkbox" name="kategori[]" value="Lulusan" id="kategori5">
                        <label for="kategori5">LULUSAN</label>

                        <input type="checkbox" name="kategori[]" value="Lainya" id="kategori6">
                        <label for="kategori6">Lainya</label>
                        <!-- Tambahkan checkbox lain sesuai kebutuhan -->
                    </td>
                </tr>

                <tr>
                    <td colspan="3">
                    <input type="submit" name="submit" value="Kirim">
                    <input type="reset" name="reset" value="Reset">
                    <a href="TampilInformasi.php" class="btn">[Tampilkan Informasi]</a>
                    </td>
                </tr>
            </table>
</form>	
<?php include('footer.php');?>
</body>
</html>

			