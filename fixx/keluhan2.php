<?php
session_start();
require 'conect.php';

if (!isset($_SESSION['login'])) {
    header('Location: loginm.php');
    exit;
}
$select_sql = "SELECT *FROM keluhann";
$result = mysqli_query($conn, $select_sql);

if (!$result) {
    echo mysqli_error($conn);
}

$keluhann = [];

while ($row = mysqli_fetch_assoc($result)) {
    $keluhann[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>KELUHAN M</title>
</head>

<body class="c"> 
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="keluhan2.php">Keluhan</a>
<a href="keluhan.php">Berikan Keluhan</a>
<a href="logout.php" class="float:bottom">Logout</a>
<center>
<img src="img/samarinda.png" style="width: 70%; float: bottom;">
</center>
</div>

<div class="topnav">
<span style="font-size:30px;cursor:pointer;color:white;padding:10px;" onclick="openNav()">&#9776; menu</span>
<img src="img/LOG1.png" alt='a' style="float:right;width:50px;height:50px;padding:10;"></a></div>
    </div>

<div id="main">
<div class="containerk1">
    <section class="content">
        <h1 class="title"> Keluhan : </h1>
        <table>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>nik</th>
                <th>gender</th>
                <th>tanggal</th>
                <th>waktu</th>
                <th>kecamatan </th>
                <th>keluhan </th>
                <th>gambar </th>
                <th>komentar </th>
                <th></th>
            </tr>

            <?php $i = 1 ?>
            <?php foreach ($keluhann as $kel) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $kel["nama"] ?></td>
                    <td><?= $kel["nik"] ?></td>
                    <td><?= $kel["gender"] ?></td>
                    <td><?= $kel["tanggal"] ?></td>
                    <td><?= $kel["waktu"] ?></td>
                    <td><?= $kel["kecamatan"] ?></td>
                    <td><?= $kel["keluhan"] ?></td>
                    <td><img style="height:50px; width:50px;" src="img/<?=$kel["gambar"]?>"></td>
                    <td><?= $kel["komentar"] ?></td>
                    

                    <td><a href="update.php?id=<?= $kel["id"]; ?>"><button class="del">Update</button></a></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <a href="keluhan.php"><button class="buttona">Tambah Keluhan</button></a>
    </section>
</div>
</div>


<footer><a>Copyright 2022. KELOMPOK 7. Hak cipta dilindungi Aslab.</a></footer>

    <script>
function openNav() {
document.getElementById("mySidenav").style.width = "250px";
document.getElementById("main").style.marginLeft = "250px";
document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginLeft= "0";
document.body.style.backgroundColor = "white";
}
</script>
</body>

</html>