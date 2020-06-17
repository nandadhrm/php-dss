<?php
    mysqli_connect("localhost","root","","spk");
    if(mysqli_connect_errno()){
        echo "Koneksi Gagal".mysqli_connect_error();
    }
?>