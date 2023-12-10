<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            margin: 80px 0 0; /* Atur margin atas sesuai tinggi header */
            font-family: 'Baloo 2', sans-serif;
        }

        header.sticky {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #fff;
            padding: 10px 40px;
            z-index: 1000;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: top 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .smk {
            color: black;
            font-size: 26px;
            font-weight: bold;
        }

        .primary-navigation ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .primary-navigation li {
            border-left: 2px solid #3ca0e7;
            padding: 0 30px;
            position: relative;
            text-align: center;
        }

        .primary-navigation a {
            color: black;
            text-decoration: none;
        }

        .primary-navigation a:hover {
            color: #3ca0e7;
        }

        .primary-navigation li:hover {
            cursor: pointer;
        }

        .primary-navigation ul li ul {
            visibility: hidden;
            opacity: 0;
            position: absolute;
            display: none;
            left: 0;
            background: white;
        }

        .primary-navigation ul li:hover > ul,
        .primary-navigation ul li ul:hover {
            visibility: visible;
            opacity: 1;
            display: block;
            min-width: 250px;
            text-align: left;
            padding-top: 20px;
            box-shadow: 0px 3px 5px -1px #ccc;
        }

        .primary-navigation ul li ul li {
            clear: both;
            width: 100%;
            text-align: left;
            margin-bottom: 20px;
            border-style: none;
        }

        .primary-navigation ul li ul li a:hover {
            padding-left: 10px;
            border-left: 2px solid #3ca0e7;
            transition: all 0.3s ease;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: #3CA0E7;
        }

        .primary-navigation ul li ul li a {
            transition: all 0.5s ease;
        }
    </style>
</head>

<body>
    <header class="sticky">
        <h2 class="smk">
            SMK WAKANDA
        </h2>
        <nav role="navigation" class="primary-navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Sejarah Sekolah &dtrif;</a>
                    <ul>
                        <li><a href="tambahsejarah.php">Tambah Sejarah</a></li>
                        <li><a href="sejarah.php">Tampil Sejarah</a></li>
                    </ul>
                </li>
                <li><a href="#">Visi dan Misi &dtrif;</a>
                    <ul>
                        <li><a href="TambahVisiMisi.php">Tambah Visi Misi</a></li>
                        <li><a href="TampilVisiMisi.php">Tampil Visi Misi</a></li>
                    </ul>
                </li>
                <li><a href="#">Jurusan &dtrif;</a>
                    <ul>
                        <li><a href="tambahjurusan.php">Tambah Jurusan</a></li>
                        <li><a href="tampiljurusan.php">Tampil Jurusan</a></li>
                    </ul>
                </li>
                <li><a href="#">Info &dtrif;</a>
                <ul>
                    <li><a href="TambahInformasi.php">Tambah Info</a></li>
                    <li><a href="TampilInformasi.php">Tampil Info</a></li>
                </ul>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>
