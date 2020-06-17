<?php

    //koneksi db-nya
    $db = mysqli_connect('localhost','root','','spk');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kebersihan = $_POST['kebersihan'];
    $akses = $_POST['akses'];
    $fasilitas = $_POST['fasilitas'];
    
    //echo $id;

    //querynya
    $result = mysqli_query($db, "UPDATE alternatif SET 
        nama='$nama',
        kebersihan='$kebersihan',
        akses='$akses',
        fasilitas='$fasilitas'
        WHERE id=$id"
    );
    
    header("location:list.php");

?>