<?php
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telephone = $_POST['telephone'];
        $wa = $_POST['wa'];
        $fp = fopen('form.txt','a+');
        fputs($fp, "$nama|$alamat|$telephone|$wa\n");
        fclose($fp);
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>pemesanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

    <div id="kotak-besar">
        <div class="container">
            <header>
                <img class="icon" src="gambar/icon.png" width="150" height="150"><br>
                <p class="judul">RINJANI KOS</p>
            </header>
        </div>


        <nav class="navbar">
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="daftar.html">Daftar Kos</a></li>
                <li><a href="pemesanan.php">Form Pemesanan</a></li>
            </ul>
        </nav>
    </div>
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Alamat KTP</td>
            <td><input type="text" name="alamat" id="alamat"></td>
        </tr>
        <tr>
            <td>No.Tlpn</td>
            <td><input type="text" name="telphone" id="telephone"></td>
        </tr>
        <tr>
            <td> No whatsapp</td>
            <td><input type="text" name="wa" id="wa"></td>
        </tr>
        <tr>
        <td><label>Kosan Pilihan</label></td>
        <td>
            <select name="agama">
                <option value="islam">Kosan 01</option>
                <option value="kristen">Kosan 02</option>
                <option value="hindu">Kosan 03</option>
                <option value="budha">Kosan 04</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="kirim" id="kirim" name="kirim">
            </td>
        </tr>
    </table>
</body>
</html>