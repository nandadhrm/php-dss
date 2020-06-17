<?php
    $con = mysqli_connect("localhost","root","","spk");

    $nama = $_POST['nama'];
    $kebersihan = $_POST['kebersihan'];
    $akses = $_POST['akses'];
    $fasilitas = $_POST['fasilitas'];

    $query = "INSERT INTO alternatif VALUES('','$nama','$kebersihan','$akses','$fasilitas', '', '')";

    $sql = mysqli_query($con,$query);

    if($query){
        echo "<script>window.location.href = 'form.php'</script>";
    }
?>