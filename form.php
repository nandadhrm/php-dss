<!DOCTYPE html>
</html>
<head>
    <title>Form Input Data</title>
    <link rel="stylesheet" type="text/css" href="patch2.css">
<?php
    include "koneksi.php";
?>
</head>

<body>
    <div class = "header">
        FORM INPUT DATA
    </div>
    </div>
    <div class="container">
    <ul>
            <li><a href="home.php">Main Menu</a></li>
            <li><a href="form.php">Tambah Data</a></li>
            <li><a href="ranking.php">Ranking</a></li>
    <ul>
    </div>
    <br>

    <form method = "POST" action = "simpan.php">
    <center>
    <table>
        <tr>
        <td>Nama</td>
            <td><input type = "text" name = "nama" size = "30" placeholder = "Masukkan Nama Tempat...." required></td>
        </tr>

        <tr>
        <td>Kebersihan</td>
            <td><select name = "kebersihan">
                <option value = "3">Baik</option>
                <option value = "2">Cukup</option>
                <option value = "1">Kurang</option>
                </select>
            </td>
        </tr>

        <tr>
        <td>Akses</td>
        <td><select name = "akses">
                <option value = "3">Mudah</option>
                <option value = "2">Cukup Mudah</option>
                <option value = "1">Sulit</option>
            </select>
            </td>
        </tr>

        <tr>
        <td>Fasilitas</td>
        <td><select name = "fasilitas">
                <option value = "3">Lengkap</option>
                <option value = "2">Cukup Lengkap</option>
                <option value = "1">Kurang Lengkap</option>
            </select>
            </td>
        </tr>
    </table>
    </center>
<center>
    <br><br><input type = "submit" value = "Save" action = "simpan.php">
</form> 
</center>

</body> 
</html>