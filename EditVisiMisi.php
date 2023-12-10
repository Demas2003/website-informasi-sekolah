<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku Tamu</title>
    <style>
/* Gaya Umum untuk Seluruh Halaman */
body {
    font-family: "Tahoma", sans-serif; /* Mengatur jenis font untuk seluruh halaman */
    margin: 0; /* Menghilangkan margin pada halaman */
    padding: 0; /* Menghilangkan padding pada halaman */
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

/* Gaya Header, Sel, dan Header Tabel */
table, th, td {
    border: 1px solid #FFF; /* Border setebal 1px dengan warna putih pada tabel, header, dan sel */
}

/* Gaya Padding dan Teks dalam Sel Tabel */
th, td {
    padding: 12px; /* Ruang di sekitar isi header dan sel dalam tabel */
    text-align: left; /* Teks selalu berada di sebelah kiri dalam header dan sel */
}

/* Gaya Input Text dan Textarea */
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

/* Gaya Tombol Submit */
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

/* Gaya Hover pada Tombol Submit */
input[type="submit"]:hover {
    background-color: #0080ff; /* Warna latar belakang saat kursor berada di atas tombol submit */
}

/* Gaya Tautan */
a {
    text-decoration: none; /* Menghapus dekorasi tautan bawaan */
    color: #0066cc; /* Warna teks tautan */
}

    </style>
    <?php include('header.php');?>
</head>
<body>
        <center>
            <h2 class="h2-sejarah"><strong class="tebal">EDIT</strong> VISI MISI</h2>
        </center>
<center>
<?php 
        include "koneksi.php";

        $Edit = mysqli_query($conn, "SELECT * FROM visi_misi WHERE Id_VisiMisi = ' ".$_GET['id']." '") or die("Gagal".mysqli_error($KoneksiDB));
        $row = mysqli_fetch_array($Edit);

        $id = $row['Id_VisiMisi'];
        $jenis = $row['Jenis'];
        $bidang = $row['Bidang'];
        $teks = $row['Teks'];
    ?>
    <form method="POST">
        <table>
            <tr>
                <td>Id Buku Tamu</td>
                <td>:</td>
                <td><input type="text" name="Id" value="<?php echo $id;?>" disabled> <input type="hidden" name="id" value="<?php echo $id;?>"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>:</td>
                <td><input type="text" name="Jenis" value="<?php echo $jenis;?>" readonly></td>
            </tr>
            <?php
            if ($jenis == "Misi") {
            ?>
                <tr>
                    <td>Bidang</td>
                    <td>:</td>
                    <td><input type="text" name="Bidang" value="<?php echo $bidang;?>"></td>
                </tr>
            <?php
            } else if ($jenis == "Visi") {
            ?>
                <tr>
                    <td>Bidang</td>
                    <td>:</td>
                    <td><input type="text" name="Bidang" value="-" disabled></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td>Teks</td>
                <td>:</td>
                <td><textarea name="Teks" cols="80" rows="5"><?php echo $teks;?></textarea></td>
            </tr>
            <tr>
                <td></td><td></td>
                <td>
                    <input type="submit" name="Update" value="UPDATE"  formaction="UpdateVisiMisi.php" >
                    <input type="submit" name="Cancel" value="CANCEL" >
                    <?php
                        if(isset($_POST['Cancel'])){
                            echo "<script>window.alert('Data Tamu Dengan Id ".$id." Tidak Jadi Di Edit'); window.location='TampilVisiMisi.php';</script>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</center>
   
</body>
<?php include('footer.php');?>
</html>