<?php
include 'koneksi.php';

$id = $_GET["id"];
$query = "SELECT * FROM sejarah WHERE id = $id";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<?php include('header.php');?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sejarah</title>
<style>
/* Gaya Teks Header 2 (h2) */
h2 {
    color: #0066cc; /* Warna teks untuk h2 */
}

/* Gaya Opsional untuk Label dan Input */
label {
    font-weight: bold; /* Mengatur tebal font pada label */
    margin-left: 125px; /* Jarak kiri pada label */
    display: block; /* Menetapkan display block agar label berada di atas input */
    margin-bottom: 5px; /* Memberikan jarak antara label dan input */
}

/* Gaya Formulir */
form {
    overflow: hidden; /* Mengatasi float dengan memberikan overflow: hidden pada form */
}

/* Gaya Input Text dan Textarea */
input[type="text"],
textarea {
    font-family: "Baloo 2"; /* Mengatur jenis font pada input text dan textarea */
    margin-left: 125px; /* Jarak kiri pada input text dan textarea */
    border-radius: 10px; /* Sudut bulat pada input text dan textarea */
    width: 80%; /* Input dan textarea mengisi lebar container sebesar 80% */
    padding: 10px; /* Padding pada input dan textarea (ditingkatkan dari 8px) */
    margin-bottom: 15px; /* Jarak antara input dan textarea (ditingkatkan dari 10px) */
    box-sizing: border-box; /* Membuat lebar dan tinggi termasuk padding dan border */
    outline: none; /* Menghilangkan outline bawaan saat input di-focus */
    border: 2px solid #C7C7C7; /* Warna dan ketebalan border saat input di-focus */
}

/* Gaya Tombol Submit */
input[type="submit"] {
    background-color:  #0066cc; /* Warna latar belakang tombol submit */
    color: #fff; /* Warna teks tombol submit */
    padding: 12px 20px; /* Ruang di sekitar teks dalam tombol submit */
    border: none; /* Tidak ada border pada tombol submit */
    border-radius: 20px; /* Sudut bulat pada tombol submit */
    cursor: pointer; /* Tipe kursor saat diarahkan ke tombol submit */
    float: right; /* Menyusun tombol submit ke kanan */
    margin-right: 147px; /* Jarak kanan pada tombol submit */
    margin-bottom: 10px; /* Jarak bawah pada tombol submit */
}

/* Gaya Hover pada Tombol Submit */
input[type="submit"]:hover {
    background-color: #0080ff; /* Warna latar belakang saat kursor berada di atas tombol submit */
}

</style>
</head>
<body>
<center>
    <h2 class="h2-sejarah"><strong class="tebal">EDIT</strong> SEJARAH</h2>
</center>
    <form action="updatesejarah.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

        <label for="judul">Judul:</label>
        <input type="text" name="judul" value="<?php echo $row["judul"]; ?>" required><br>

        <label for="sejarah">Sejarah:</label>
        <textarea name="sejarah" rows="4" required><?php echo $row["sejarah"]; ?></textarea><br>

        <input type="submit" value="Update">
    </form>
</body>

<?php include('footer.php');?>

</html>

<?php
$conn->close();
?>
