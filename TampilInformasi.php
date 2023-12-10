<head>
    <style>
table {
    font-family: "Baloo 2"; /* Mengatur jenis font pada tabel */
    width: 80%; /* Lebar tabel 80% dari parentnya */
    margin: 20px auto; /* Posisi tengah tabel pada halaman */
    border-collapse: collapse; /* Menyatukan border pada sel tabel */
}

/* Gaya untuk sel tabel */
td {
    padding: 12px; /* Ruang di sekitar isi sel tabel */
    border: 1px solid #fff; /* Warna dan ketebalan border pada sel tabel */
    text-align: left; /* Penyusunan teks di sel tabel ke kiri */
}

/* Gaya untuk th (header tabel) */
th {
    background-color: #0066cc; /* Warna latar belakang th (header tabel) */
    color: #fff; /* Warna teks th (header tabel) */
    padding: 12px; /* Ruang di sekitar isi th (header tabel) */
    border: 1px solid #0066cc; /* Warna dan ketebalan border pada th (header tabel) */
}

/* Efek hover pada baris tabel */
tr:hover {
    background-color: #ddd; /* Warna latar belakang saat kursor berada di atas baris tabel */
}

/* Gaya untuk elemen dengan kelas "action" */
.action {
    text-align: center; /* Penyusunan teks ke tengah pada elemen dengan kelas "action" */
}

/* Gaya untuk elemen dengan kelas "edit" dan "delete" */
.edit, .delete {
    display: inline-block; /* Menetapkan elemen menjadi inline-block */
    padding: 5px 10px; /* Ruang di sekitar teks dalam elemen */
    margin: 5px; /* Jarak antara elemen */
    color: #fff; /* Warna teks dalam elemen */
    text-decoration: none; /* Menghilangkan dekorasi teks */
    cursor: pointer; /* Menetapkan kursor menjadi pointer saat diarahkan ke elemen */
}

/* Gaya untuk elemen dengan kelas "edit" */
.edit {
    background-color: #4caf50; /* Warna latar belakang elemen "edit" */
    border-radius: 20px; /* Sudut bulat pada elemen "edit" */
}

/* Gaya untuk elemen dengan kelas "delete" */
.delete {
    background-color: #cc0000; /* Warna latar belakang elemen "delete" */
    border-radius: 20px; /* Sudut bulat pada elemen "delete" */
}

/* Efek hover pada elemen dengan kelas "edit" */
.edit:hover {
    background-color: #71c174; /* Warna latar belakang saat kursor berada di atas elemen "edit" */
    color: #fff; /* Warna teks saat kursor berada di atas elemen "edit" */
}

/* Efek hover pada elemen dengan kelas "delete" */
.delete:hover {
    background-color: #ff3333; /* Warna latar belakang saat kursor berada di atas elemen "delete" */
    color: #fff; /* Warna teks saat kursor berada di atas elemen "delete" */
}

/* Gaya untuk tautan */
a {
    color: #0066cc; /* Warna teks tautan */
}

    </style>
</head>
<body>
<?php
include "header.php";
include "koneksi.php";
$tampil = "select * from informasi ORDER BY id";
$query = mysqli_query($conn, $tampil) or die("gagal" . mysqli_error($conn));
$jumlah = mysqli_num_rows($query);
?>
<h2 class="h2-sejarah"><strong class="tebal">TAMPIL</strong> INFORMASI</h2>
<table width="80%" border="1" style="border:#000" align="center">

<tr align="center" bgcolor="#999999">
    <th width="6%"><b>No</b></td>
    <th width="15%"><b>Judul</b></td>
    <th width="40%"><b>Informasi</b></td>
    <th width="10%"><b>Tanggal Terbit</b></td>
    <th width="10%"><b>Kategori</b></td>
    <th width="7.5%"><b>Action</b></td>
</tr>


    <?php
    $no = 0;
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id']; // Corrected line
        $a = $row['judul'];
        $b = $row['isi_informasi'];
        $c = $row['tanggal_terbit'];
        $d = $row['kategori'];
        $no++;
        ?>

<tr align="center">
    <td><?php echo $no; ?></td>
    <td><?php echo $a; ?></td>
    <td>
        <div class="isi-informasi">
            <?php echo nl2br($b); ?>
        </div>
    </td>
    <td><?php echo $c; ?></td>
    <td><?php echo $d; ?></td>
    <td>
        <a class="edit" href="editinformasi.php?id=<?= $id; ?>">EDIT</a>
        <br>
        <a class="delete" href="hapusinformasi.php?id=<?= $id; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini ??');">HAPUS</a>
    </td>
</tr>

    <?php } ?>
    <tr>
        <td colspan="6">Jumlah Record : <?php echo $jumlah; ?></td>
    </tr>
    <tr>
        <td colspan="8"><a href="TambahInformasi.php"><b>[Tambah Info]</b></a></td>
    </tr>
</table>
</body>
<?php include "footer.php"?>
