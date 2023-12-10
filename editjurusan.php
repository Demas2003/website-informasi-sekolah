<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Program Studi atau Jurusan</title>
    <style>
        /* Gaya Umum untuk Seluruh Halaman */
body {
    font-family: "Baloo 2", sans-serif; /* Mengatur jenis font untuk seluruh halaman */
    margin: 0; /* Menghilangkan margin pada halaman */
    padding: 20px; /* Memberikan padding sebesar 20px pada halaman */
    background-color: white; /* Warna latar belakang halaman */
}

/* Gaya Formulir */
form {
    width: 50%; /* Menentukan lebar formulir sebesar 50% dari lebar parent */
    margin: auto; /* Pusatkan formulir di halaman */
    text-align: left; /* Teks dalam formulir berada di sebelah kiri */
}

/* Gaya Tabel */
table {
    width: 100%; /* Menentukan lebar tabel sebesar 100% dari lebar parent */
    border-collapse: collapse; /* Menggabungkan border sel dalam tabel */
}

/* Gaya Header dan Sel dalam Tabel */
th, td {
    padding: 10px; /* Ruang di sekitar isi header dan sel dalam tabel */
    text-align: left; /* Teks selalu berada di sebelah kiri dalam header dan sel */
}

/* Gaya Header 2 (h2) */
h2 {
    text-align: center; /* Teks berada di tengah halaman */
}

/* Gaya Input Text, Textarea, dan Select */
input[type="text"],
textarea,
select {
    border-radius: 10px; /* Sudut bulat pada input text, textarea, dan select */
    font-family: "Baloo 2"; /* Mengatur jenis font */
    width: 100%; /* Lebar penuh dari parent */
    padding: 8px; /* Ruang di sekitar isi input */
    margin: 5px 0 15px 0; /* Jarak dari atas, bawah, dan kiri input */
    display: inline-block; /* Membuat elemen inline block */
    border: 1px solid #ccc; /* Border setebal 1px dengan warna abu-abu */
    box-sizing: border-box; /* Box model: ukuran elemen termasuk padding dan border, tidak termasuk margin */
}

/* Gaya Tombol Submit dan Tombol Reset */
input[type="submit"],
input[type="reset"] {
    font-family: "Baloo 2"; /* Mengatur jenis font pada tombol submit dan tombol reset */
    background-color: #0066cc; /* Warna latar belakang tombol submit dan tombol reset */
    color: white; /* Warna teks tombol submit dan tombol reset */
    padding: 10px 15px; /* Ruang di sekitar teks dalam tombol */
    margin: 8px 0; /* Jarak dari atas dan bawah tombol */
    border: none; /* Tidak ada border pada tombol */
    border-radius: 10px; /* Sudut bulat pada tombol */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol */
}

/* Gaya Hover pada Tombol Submit dan Tombol Reset */
input[type="submit"]:hover,
input[type="reset"]:hover {
    background-color: #0080ff; /* Warna latar belakang saat kursor berada di atas tombol */
}

    </style>

    <?php include('header.php');?>
    
</head>
<body>
<?php
include "koneksi.php";
$Stampil = "SELECT * FROM jurusan WHERE id='" . $_GET['id'] . "'";
$query = mysqli_query($conn, $Stampil) or die("gagal" . mysqli_error($conn));
$row = mysqli_fetch_array($query);

$a = $row['ID'];
$b = $row['prodi'];
$c = $row['isi'];
?>

    <form id="form1" name="form1" method="post" action="updatejurusan.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td colspan="2">
                    <h2 class="h2-sejarah"><strong class="tebal">EDIT</strong> JURUSAN</h2>
                </td>
            </tr>
            <tr>
                <td> Id Jurusan atau Program Studi</td>
               <td>
                    <input type="text" name="nama" id="nama" value="<?php echo $a; ?>" readonly />
                    <input type="hidden" name="id" value="<?php echo $a; ?>" />
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><input type="text" name="prodi" id="prodi" value="<?php echo $b; ?>" /></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="isi" id="isi" cols="70" rows="5"><?php echo $c; ?></textarea></td>
            </tr>
            <tr>
                <td>&nbsp; </td>
                <td><input type="submit" name="update" id="update" value="UPDATE" /> <input type="reset" name="cancel" id="cancel" value="CANCEL" /></td>
            </tr>
        </table>
    </form>
    <?php include('footer.php');?>
</body>
</html>
