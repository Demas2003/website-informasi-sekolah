<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan</title>
    <style>
table {
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

/* Gaya untuk baris tabel dengan indeks genap */
tr:nth-child(even) {
    background-color: #fff; /* Warna latar belakang baris tabel dengan indeks genap */
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
    <?php include('header.php');?>
</head>
<body>
    <?php 
        include "koneksi.php";

        $query = "SELECT * FROM jurusan";
        $result = $conn->query($query);
        $jumlah = mysqli_num_rows($result);
    ?>

    <center>
         <h2 class="h2-sejarah"><strong class="tebal">JUR</strong>USAN</h2>
        
        <table border="1">
            <tr>
                <th width="30%">Program Keahlian</th>
                <th width="50%">Deskripsi</th>
                <th width="20%" colspan="2"><b>Action</b></th>
            </tr>

            <?php
            while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["prodi"] . "</td>";
            echo "<td>" . $row["isi"] . "</td>";
            echo "<td class='action'>";
            echo "<a class='edit' href='editjurusan.php?id=" . $row["ID"] . "'>Edit</a>";
            echo "<a class='delete' href='hapusjurusan.php?id=" . $row["ID"] . "'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
            <tr>
                <td colspan="6">Jumlah Record : <?php echo $jumlah; ?></td>
            </tr>
        </table>
        <a href="tambahjurusan.php"><b>[Tambah Jurusan]</b></a>
    </center>
</body>
<?php include('footer.php');?>
</html>