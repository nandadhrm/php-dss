<?php  //DIESER CODE GEHORT ZU A6504.05697   VIELEN DANK    ?>

<!DOCTYPE html>
<html>
<head>
    <title>RANKED LIST</title>
    <link rel="stylesheet" type="text/css" href="patch.css">
</head>
<body>
<center>
    <div class="container3">
    <h3>Tabel Vektor</h3>
    </div>
    <div class="container2">
    <ul>
            <li><a href="home.php">Main Menu</a></li>
            <li><a href="form.php">Tambah Data</a></li>
            <li><a href="list.php">List Data</a></li>
    <ul>
    </div>
    <table border="1">
        <thead>
            <th>Nama</th>
            <th>Vektor S</th>
        </thead>  
    <?php
        //SQL BASIC
        $con = mysqli_connect('localhost','root','','spk');
        $sql = "SELECT * FROM alternatif";
        $result = mysqli_query($con,$sql);
        

        //VARIABLES
        $c1 = 0.3;
        $c2 = 0.4;
        $c3 = 0.3;
        $id = 1;
    ?>
             
    <?php
        while($r = mysqli_fetch_array($result,MYSQLI_NUM)){
        
        $s = ($r[2]**$c1)*($r[3]**$c2)*($r[4]**$c3);
        $add = "UPDATE alternatif SET vektorS = $s WHERE id = $id";
        mysqli_query($con,$add);
        $id++;
    ?>
        <tr>
            <td><?php echo $r[1];?></td>
            <td><?php echo $r[5];?></td>
        </tr>
    <?php
        }
    ?>
        <thead>
            <th>Nama</th>
            <th>Vektor V</th>
        </thead>
    <?php
        $sum = "SELECT SUM(vektorS) AS total FROM alternatif";
        $res = mysqli_query($con,$sum);
        $totals = mysqli_fetch_array($res);
        
        $id = 1;
        $con = mysqli_connect('localhost','root','','spk');
        $result2= mysqli_query($con,"SELECT * FROM alternatif");
        while($row = mysqli_fetch_array($result2)){    
            $v = $row[5]/$totals['total'];
            $add2 = "UPDATE alternatif SET vektorV = $v WHERE id = $id";
            mysqli_query($con,$add2);
            $id++;
    ?>
        <tr>
            <td><?php echo $row[1];?></td>
            <td><?php echo $row[6];?></td>
        </tr>
    <?php
        }
    ?>
    <br>
    <table border="1">
    <br>
    <div class="container3">
    <h3>Tabel Ranking</h3>
    </div>
    <br>
        <thead>
            <th>Ranking</th>
            <th>Nama</th>
            <th>Vektor V</th>
        </thead>
    <?php
        $rank = 1;
        $con = mysqli_connect('localhost','root','','spk');
        $srt = "SELECT * FROM alternatif ORDER BY vektorV DESC";
        $rslt = mysqli_query($con,$srt);
        while($rw=mysqli_fetch_array($rslt)){
    ?>

        <tr>
            <td align="center"><?php echo $rank;?></td>
            <td><?php echo $rw[1];?></td>
            <td><?php echo $rw[6];?></td>
        </tr>

    <?php
        $rank++;
        }
    ?>
    </div>
    </center>
</body>
</html>









<?php  //DIESER CODE GEHORT ZU A6504.05697   VIELEN DANK    ?>


