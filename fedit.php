<!DOCTYPE html>
<html>
<head>
    <title>FORM EDIT DATA</title>
    <link rel="stylesheet" type="text/css" href="patch2.css">
</head>

<body>
    <?php
        $con = mysqli_connect('localhost','root','','spk');
        $id = $_GET['ID'];
        $sql = "SELECT * FROM alternatif WHERE id = $id";
        $query = mysqli_query($con,$sql);
        $r = mysqli_fetch_assoc($query);
    ?>

    <div class="header">
    FORM EDIT DATA
    </div>
    <div class="container">
    <ul>
            <li><a href="home.php">Main Menu</a></li>
            <li><a href="form.php">Tambah Data</a></li>
            <li><a href="ranking.php">Ranking</a></li>
    <ul>
    </div>
    <center>
    <form method="post" action ="edit.php"><br>
        <table cellpadding="10">
        <tr>
            <td><label for="id">ID</label></td>
            <td><input type="text" name ="id" id="id" value = "<?= $r['id']?>"></td>
        </tr>
        <tr>
		    <td><label for="nama">Nama</label></td>
            <td><input type="text" placeholder="Masukkan Nama Tempat..." name="nama" id="nama" value="<?= $r['nama']?>" maxlength="20"></td>
</tr>
        <tr>
            <td><label for="kebersihan">Kebersihan</label></td>
            <td><select value="<?= $r['kebersihan']?>" name = "kebersihan">
                <option value = "3">Baik</option>
                <option value = "2">Cukup</option>
                <option value = "1">Kurang</option></select></td>
</tr>
<tr>
        <td><label for="akses">Akses</label></td>
        <td><select value="<?= $r['akses']?>" name = "akses">
                <option value = "3">Mudah</option>
                <option value = "2">Cukup Mudah</option>
                <option value = "1">Sulit</option></select></td>
</tr>
<tr>
        <td><label for="fasilitas">Fasilitas</label></td>
        <td><select value="<?= $r['fasilitas']?>" name = "fasilitas">
                <option value = "3">Lengkap</option>
                <option value = "2">Cukup Lengkap</option>
                <option value = "1">Kurang Lengkap</option></select></td>
</tr>
<tr>         
        <td colspan="2" align="center"><input type="submit" onclick="return alert('Data berhasil diubah')" value ="Save"></td>
</tr>
        </table>
        </form>
</body>
</html>