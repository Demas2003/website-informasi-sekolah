<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jurusan</title>
    <style>
/* Optional: Gaya untuk label dan input */

table {
    width: 50%; /* Menentukan lebar tabel sebesar 50% dari lebar parent */
    border-collapse: collapse; /* Menggabungkan border sel dalam tabel */
}

td {
    padding: 10px; /* Ruang di sekitar isi sel dalam tabel */
}

input[type="text"],
textarea {
    font-family: 'Baloo 2'; /* Mengatur jenis font pada input text dan textarea */
    border-radius: 10px; /* Sudut bulat pada input text dan textarea */
    width: 100%; /* Lebar penuh dari parent */
    padding: 10px; /* Ruang di sekitar isi input text dan textarea */
    margin-bottom: 15px; /* Jarak antara input text dan textarea */
    box-sizing: border-box; /* Membuat lebar dan tinggi termasuk padding dan border */
    outline: none; /* Menghilangkan outline bawaan saat input di-focus */
    border: 1px solid #C7C7C7; /* Warna dan ketebalan border saat input di-focus */
}

/* Gaya Tombol Submit dan Tombol Custom (btn) */
input[type="submit"],
.btn {
    margin-left: 5px; /* Jarak kiri pada tombol submit dan tombol custom */
    font-family: 'Baloo 2'; /* Mengatur jenis font pada tombol submit dan tombol custom */
    background-color: #0066cc; /* Warna latar belakang tombol submit dan tombol custom */
    color: #fff; /* Warna teks tombol submit dan tombol custom */
    padding: 12px 20px; /* Ruang di sekitar teks dalam tombol submit dan tombol custom */
    border: none; /* Tidak ada border pada tombol submit dan tombol custom */
    border-radius: 20px; /* Sudut bulat pada tombol submit dan tombol custom */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol submit dan tombol custom */
    margin-bottom: 10px; /* Jarak bawah pada tombol submit dan tombol custom */
}

/* Efek Hover pada Tombol Submit dan Tombol Custom (btn) */
input[type="submit"]:hover,
.btn:hover {
    background-color: #1a8cff; /* Warna latar belakang saat kursor berada di atas tombol submit dan tombol custom */
    color: #fff; /* Warna teks saat kursor berada di atas tombol submit dan tombol custom */
}

/* Gaya Tombol Reset */
input[type="reset"] {
    margin-left: 5px; /* Jarak kiri pada tombol reset */
    font-family: 'Baloo 2'; /* Mengatur jenis font pada tombol reset */
    background-color: #cc0000; /* Warna latar belakang tombol reset */
    color: #fff; /* Warna teks tombol reset */
    padding: 12px 20px; /* Ruang di sekitar teks dalam tombol reset */
    border: none; /* Tidak ada border pada tombol reset */
    border-radius: 20px; /* Sudut bulat pada tombol reset */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol reset */
    margin-bottom: 10px; /* Jarak bawah pada tombol reset */
}

/* Efek Hover pada Tombol Reset */
input[type="reset"]:hover {
    background-color: #F60000; /* Warna latar belakang saat kursor berada di atas tombol reset */
    color: #fff; /* Warna teks saat kursor berada di atas tombol reset */
}

/* Kontainer yang Tengah */
.center-container {
    display: flex; /* Menentukan tata letak fleksibel untuk kontainer tengah */
    justify-content: center; /* Mengatur konten agar berada di tengah */
}

    </style>
</head>
<body>
<?php include('header.php');?>
<center>
<h2 class="h2-sejarah"><strong class="tebal">INPUT</strong> JURUSAN</h2>
        <form id="form1" name="form1" method="post" action="simpanjurusan.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Program Keahlian </td>
                    <td> :</td>
                    <td><input type="text" name="prodi" placeholder="Masukkan Program Keahlian" id="prodi"></td>
                </tr>
                <tr>
                    <td>Deskripsi </td>
                    <td> :</td>
                    <td><textarea name="isi" id="isi" placeholder="Masukkan Deskripsi" cols="50" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td colspan="3">
                    <input type="submit" name="submit" value="Kirim">
                    <input type="reset" name="reset" value="Reset">
                    <a href="tampiljurusan.php" class="btn">Tampilkan Data Program Studi</a>
                    </td>
                </tr>
            </table>
        </form>
</center>
    
</body>
</html>
