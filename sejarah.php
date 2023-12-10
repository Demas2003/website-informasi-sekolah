<style>
    table {
        width: 80%; /* Menentukan lebar tabel sebesar 80% dari lebar parent. */
        margin: 20px auto; /*  Memberikan jarak 20px pada bagian atas dan bawah serta otomatis memusatkan tabel di halaman. */
        border-collapse: collapse; /* Menggabungkan batas sel dalam tabel. */
    }

    td {
        padding: 12px; /** Memberikan ruang 12px di sekitar isi sel. */
        border: 1px solid #fff; /** Mengatur garis batas sel sebesar 1px dengan warna putih (#fff). */
        text-align: left; /** Menyusun teks dalam sel sebelah kiri. */
    }

    th {
        background-color: #0066cc;
        color: #fff;
        padding: 12px;
        border: 1px solid #0066cc;
    }

    tr:hover {
        background-color: #ddd;
    }

    .action {
        text-align: center;
    }

    .edit, .delete {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        color: #fff;
        text-decoration: none;
        cursor: pointer;
    }

    .edit {
        background-color: #4caf50; /* Green */
        border-radius: 20px;
    }

    .delete {
        background-color: #cc0000; /* Red */
        border-radius: 20px;
    }
    .edit:hover{
        background-color: #71c174;
        color: #fff;
    }

    .delete:hover{
        background-color: #ff3333;
        color: #fff;
    }
</style>

<?php include('header.php');?>

<?php
include 'koneksi.php';

$query = "SELECT * FROM sejarah";
$result = $conn->query($query);
$jumlah = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Sejarah</title>
</head>

<body>
    <center>
        <h2 class="h2-sejarah"><strong class="tebal">SEJARAH</strong> SMK WAKANDA</h2>
    </center>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Sejarah</th>
            <th>Aksi</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["judul"] . "</td>";
            echo "<td>" . $row["sejarah"] . "</td>";
            echo "<td class='action'>";
            echo "<a class='edit' href='editsejarah.php?id=" . $row["id"] . "'>Edit</a>";
            echo "<a class='delete' href='hapussejarah.php?id=" . $row["id"] . "'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
            <tr>
                <td colspan="6">Jumlah Record : <?php echo $jumlah; ?></td>
            </tr>
    </table>
    <?php include('footer.php');?>
</body>
</html>

<?php
$conn->close();
?>


