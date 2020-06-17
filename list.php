<!DOCTYPE html>
<html>

<head>
    <title>List Alternatif</title>
    <link rel="stylesheet" type="text/css" href="patch.css">
</head>

<body>
    <div class="header">
        <h2>Tabel Alternatif</h2>
    </div>

    <div class="container2">
    <ul>
            <li><a href="home.php">Main Menu</a></li>
            <li><a href="form.php">Tambah Data</a></li>
            <li><a href="ranking.php">Ranking</a></li>
    <ul>
    </div>
    <br>


<center>
    <table rules = "all" width="100%">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Kebersihan</th>
            <th>Akses</th>
            <th>Fasilitas</th>
            <th colspan = "2">Action</th>
        </thead>

        <?php
            $con = mysqli_connect('localhost','root','','spk');
            $sql = "SELECT * FROM alternatif";
            $result = mysqli_query($con,$sql);
            while ($r = mysqli_fetch_array($result,MYSQLI_NUM)){
        ?>

        <tr>
            <td class="one"><?php echo $r[0]?></td>
            <td><?php echo $r[1]?></td>
            <td class="one"><?php echo $r[2]?></td>
            <td class="one"><?php echo $r[3]?></td>
            <td class="one"><?php echo $r[4]?></td>
            <td class="two">
                <a href="fedit.php?ID=<?= $r[0]?>">Edit</a> | <a href = "hapus.php?ID=<?= $r[0]?>" onclick="return confirm('YAKIN?')">Hapus</a>    
            </td>
        </tr>

        <?php
            }
        ?>
    </table>

    <br>
    
    <table rules="all">
        <div class="container3">
            <h3>Keterangan Kriteria</h3>
        </div>
    
    <br>

    <thead>
        <th>Bobot</th>
        <th>Kebersihan</th>
        <th>Akses</th>
        <th>Fasilitas</th>
    </thead>

    <tr>
            <td class="one">3</td>
            <td class="one">Baik</td>
            <td class="one">Mudah</td>
            <td class="one">Lengkap</td>
    </tr>

    <tr>
            <td class="one">2</td>
            <td class="one">Cukup</td>
            <td class="one">Cukup Mudah</td>
            <td class="one">Cukup Lengkap</td>
    </tr>
    <tr>
            <td class="one">1</td>
            <td class="one">Kurang</td>
            <td class="one">Sulit</td>
            <td class="one">Kurang Lengkap</td>
    </tr>
    </table>
    </center>
</body>
</html>


