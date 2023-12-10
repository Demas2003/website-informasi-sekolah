<?php
include "koneksi.php";

// Assuming you get the ID from the URL or a form
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Construct the SQL query with proper syntax
$tampil = "SELECT * FROM informasi WHERE id = '$id'";

// Execute the query
$query = mysqli_query($conn, $tampil) or die("gagal" . mysqli_error($conn));

// Fetch the result
$row = mysqli_fetch_array($query);

$a = $row['judul'];
$b = $row['isi_informasi'];
$c = $row['tanggal_terbit'];
$d = $row['kategori'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Informasi</title>
        <style>
/* Gaya Umum untuk Seluruh Halaman */
body {
    font-family: "Baloo 2", sans-serif; /* Mengatur jenis font untuk seluruh halaman */
    margin: 0; /* Menghilangkan margin pada halaman */
    padding: 20px; /* Memberikan padding sebesar 20px pada halaman */
    background-color: white; /* Warna latar belakang halaman */
}

/* Gaya Tabel */
table {
    width: 50%; /* Menentukan lebar tabel sebesar 50% dari lebar parent */
    margin: auto; /* Pusatkan tabel di halaman */
    border-collapse: collapse; /* Menggabungkan border sel dalam tabel */
}

/* Gaya Sel dalam Tabel */
td {
    padding: 10px; /* Ruang di sekitar isi sel dalam tabel */
    text-align: left; /* Teks selalu berada di sebelah kiri dalam sel */
}

/* Gaya Header 2 (h2) */
h2 {
    text-align: center; /* Teks berada di tengah halaman */
}

/* Gaya Input Text, Input Date, dan Textarea */
input[type="text"],
input[type="date"],
textarea {
    border-radius: 10px; /* Sudut bulat pada input text, input date, dan textarea */
    font-family: "Baloo 2"; /* Mengatur jenis font */
    width: 100%; /* Lebar penuh dari parent */
    padding: 8px; /* Ruang di sekitar isi input */
    margin: 5px 0 15px 0; /* Jarak dari atas, bawah, dan kiri input */
    display: inline-block; /* Membuat elemen inline block */
    border: 1px solid #ccc; /* Border setebal 1px dengan warna abu-abu */
    box-sizing: border-box; /* Box model: ukuran elemen termasuk padding dan border, tidak termasuk margin */
}

/* Gaya Tombol Submit dan Tombol Abatal */
input[type="submit"],
.abatal {
    font-family: "Baloo 2"; /* Mengatur jenis font pada tombol submit dan tombol abatal */
    background-color: #0066cc; /* Warna latar belakang tombol submit */
    color: white; /* Warna teks tombol submit */
    padding: 10px 15px; /* Ruang di sekitar teks dalam tombol */
    margin: 8px 0; /* Jarak dari atas dan bawah tombol */
    border: none; /* Tidak ada border pada tombol */
    border-radius: 10px; /* Sudut bulat pada tombol */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol */
}

/* Gaya Hover pada Tombol Submit dan Tombol Abatal */
input[type="submit"]:hover,
.abatal:hover {
    background-color: #0080ff; /* Warna latar belakang saat kursor berada di atas tombol */
    color: #fff; /* Warna teks saat kursor berada di atas tombol */
}

.checkbox-group {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}


        </style>
    </head>
    <body>
    <?php include('header.php');?>
        <form id="form1" name="form1" method="post" action="updateinformasi.php">
            <h2 class="h2-sejarah"><strong class="tebal">EDIT</strong> JURUSAN</h2>
            <table width="64" border="0" align="center">
        		<tr>
                        <td> Id Jurusan atau Program Studi :</td>
                        <td>
                            <input type="text" name="nama" id="nama" value="<?php echo $id; ?>" disabled="disabled" />
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        </td>
                </tr>
                <tr>
                    <td>Judul Informasi :</td>
                    <td><input type="text" name="judul" value="<?php echo $a; ?>"/></td>
                </tr>
                <tr>
                    <td>Isi Informasi :</td>
                    <td> <textarea name="isi_informasi" id="nama" cols="70" rows="5"><?php echo $b; ?></textarea> </td>
                </tr>
                <tr>
                    <td>Tanggal Terbit :</td>
                    <td> <input type="date" name="tanggal_terbit" id="nama" value="<?php echo $c; ?>"/> </td>
                </tr>
                <tr>
                    <td>Kategori :</td>
                    <td class="checkbox-group">
                        <input type="checkbox" name="kategori[]" value="Pendaftaran Siswa Baru" id="kategori1" <?php if (in_array('Kategori1', explode(',', $d))) echo 'checked'; ?>>
                        <label for="kategori1">Pendaftaran Siswa Baru</label>

                        <input type="checkbox" name="kategori[]" value="KBM" id="kategori2" <?php if (in_array('Kategori2', explode(',', $d))) echo 'checked'; ?>>
                        <label for="kategori2">KBM</label>

                        <input type="checkbox" name="kategori[]" value="UTS" id="kategori3" <?php if (in_array('Kategori3', explode(',', $d))) echo 'checked'; ?>>
                        <label for="kategori3">UTS</label>

                        <input type="checkbox" name="kategori[]" value="UAS" id="kategori4" <?php if (in_array('Kategori4', explode(',', $d))) echo 'checked'; ?>>
                        <label for="kategori4">UAS</label>

                        <input type="checkbox" name="kategori[]" value="Lulusan" id="kategori5" <?php if (in_array('Kategori5', explode(',', $d))) echo 'checked'; ?>>
                        <label for="kategori5">LULUSAN</label>

                        <input type="checkbox" name="kategori[]" value="Lainya" id="kategori6" <?php if (in_array('Kategori6', explode(',', $d))) echo 'checked'; ?>>
                        <label for="kategori6">Lainya</label>
                        <!-- Tambahkan checkbox lain sesuai kebutuhan -->
                    </td>
                </tr>

                <tr>
                    <td>&nbsp; </td>
                    <td><input type="submit" name="update" id="update" value="UPDATE"/>
                    <a class="abatal" href="TampilInformasi.php">Cancel</a></td>
                </tr>
            </table>
        </form>
<?php include('footer.php');?>
</body>
</html>
