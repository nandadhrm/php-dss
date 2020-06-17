<?php
        $IDhapus=$_GET['ID'];
        //membuat koneksi ke database mysql
        $con=mysqli_connect('localhost','root','','spk');
        //membuat querry
        mysqli_query($con,"delete from alternatif where id ='$IDhapus'");
        header("location:list.php");
?>