<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Visi & Misi</title>
    <style>
body {
    background-color: #fff; /* Warna latar belakang body */
    color: #333; /* Warna teks utama */
    font-family: "Tahoma", sans-serif; /* Jenis font sesuai dengan tema */
    margin: 0;
    padding: 0;
}

h2 {
    color: #0066cc; /* Warna teks untuk h2 */
    margin-bottom: 20px; /* Jarak bawah dari elemen h2 */
}

table {
    width: 80%; /* Lebar tabel 80% dari lebar parent */
    margin: 20px auto; /* Auto-mencenternya */
    border-collapse: collapse; /* Menggabungkan border sel */
    background-color: #fff; /* Warna latar belakang tabel */
}

th{
    padding: 12px; /* Padding pada sel tabel */
    border: 1px solid #0066cc; /* Border 1px solid dengan warna abu-abu */
    text-align: left; /* Teks selalu berada di sebelah kiri */
}

td {
    padding: 12px; /* Padding pada sel tabel */
    border: 1px solid #fff; /* Border 1px solid dengan warna abu-abu */
    text-align: left; /* Teks selalu berada di sebelah kiri */
}

th {
    background-color: #0066cc; /* Warna latar belakang header tabel */
    color: #fff; /* Warna teks header tabel */
}

tr:nth-child(even) {
    background-color: #fff; /* Warna latar belakang baris genap */
}

tr:hover {
    background-color: #ddd; /* Warna latar belakang saat kursor berada di atas baris */
}

a.hps {
    display: inline-block; /* Tautan menjadi elemen blok */
    padding: 8px 16px; /* Ruang di sekitar teks dalam tautan */
    text-align: center; /* Teks selalu berada di tengah tautan */
    text-decoration: none; /* Menghapus dekorasi tautan bawaan */
    background-color: #0066cc; /* Warna latar belakang tautan */
    color: #fff; /* Warna teks tautan */
    border-radius: 20px; /* Sudut bulat pada tautan */
}

a.edt {
    display: inline-block; /* Tautan menjadi elemen blok */
    padding: 8px 16px; /* Ruang di sekitar teks dalam tautan */
    text-align: center; /* Teks selalu berada di tengah tautan */
    text-decoration: none; /* Menghapus dekorasi tautan bawaan */
    background-color: #0066cc; /* Warna latar belakang tautan */
    color: #fff; /* Warna teks tautan */
    border-radius: 20px; /* Sudut bulat pada tautan */
}

a.tbh {
    display: inline-block; /* Tautan menjadi elemen blok */
    padding: 8px 16px; /* Ruang di sekitar teks dalam tautan */
    text-align: center; /* Teks selalu berada di tengah tautan */
    text-decoration: none; /* Menghapus dekorasi tautan bawaan */
    background-color: #0066cc; /* Warna latar belakang tautan */
    color: #fff; /* Warna teks tautan */
    border-radius: 4px; /* Sudut bulat pada tautan */
}

a.hps:hover,
a.edt:hover,
a.tbh:hover {
    background-color: #0080ff;
    color: #fff;
}


    </style>
    <?php include('header.php');?>
</head>
<body>
    <?php 
        include "koneksi.php";

        $Tampil = mysqli_query($conn, "SELECT * FROM visi_misi ORDER BY Id_VisiMisi") or die("Gagal".mysqli_error($KoneksiDB));
        $Jumlah = mysqli_num_rows($Tampil);
    ?>

    <center>
         <h2 class="h2-sejarah"><strong class="tebal">VISI</strong> MISI</h2>
        
        <table border="1">
            <tr>
                <th width="6%">No.</th>
                <th width="30%">Jenis</th>
                <th width="30%">Bidang</th>
                <th width="30%">Teks</th>
                <th width="20%" colspan="2"><b>Action</b></th>
            </tr>

            <?php
                 $no = 0;
                 while ($row = mysqli_fetch_array($Tampil)) {
                     $id = $row['Id_VisiMisi'];
                     $jenis = $row['Jenis'];
                     $bidang = $row['Bidang'];
                     $teks = $row['Teks'];
                     $no++;
            ?>

            <tr>
                <td style="text-align:center;"><?php echo $id;?></td>
                <td><?php echo $jenis;?></td>
                <td><?php echo $bidang;?></td>
                <td><?php echo $teks;?></td>
                <td>
                    <a class="hps" href="HapusVisiMisi.php?id=<?=$id;?>" onclick="RETURN CONFIRM ('Anda Yakin Menghapus '+$jenis+' Ini ??');">HAPUS</a>
                </td>
                <td>
                    <a class="edt" href="EditVisiMisi.php?id=<?=$id;?>">EDIT</a>
                </td>
            </tr>

            <?php }?>

            <tr>
                <td colspan="3">Jumlah Record : <?php echo $Jumlah;?></td>
                <td colspan="3"><center><a class="tbh" href="TambahVisiMisi.php">Tambah Visi / Misi</a></center></td>
            </tr>
        </table>
    </center>
</body>
<?php include('footer.php');?>
</html>