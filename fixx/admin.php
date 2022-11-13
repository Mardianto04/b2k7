<?php
session_start();
require 'conect.php';

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}
require 'Conect.php';
$select_sql = "SELECT *FROM keluhann";
$result = mysqli_query($conn, $select_sql);

if (!$result) {
    echo mysqli_error($conn);
}
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $result = mysqli_query($conn, "SELECT * FROM keluhann WHERE nama LIKE '%$cari%'");
} elseif (isset($_GET['urut'])) {
    if ($_GET['urut'] == "asc") {
        $result = mysqli_query($conn, "SELECT * FROM keluhann ORDER BY nama ASC");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM keluhann ORDER BY nama DESC");
    }
} else {
    $result = mysqli_query($conn, "SELECT * FROM keluhann");
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
    <title>ADMIN</title>
</head>

<body class="a">
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="admin.php">Admin</a>
<a href="logout.php" class="float:bottom">Logout</a>
<center>
<img src="img/sup.png" style="width: 90%; float: bottom;">
</center>
</div>

<div class="topnav">
<span style="font-size:30px;cursor:pointer;color:white;padding:10px;" onclick="openNav()">&#9776; menu</span>
<div style="float: right;">
<form action="" method="GET">
        <input type="text" name="cari" placeholder="Search" style="padding-right: 70px;  margin-top: 12px; padding-top: 5px; padding-bottom: 5px; size: 50px;">
        <img src="img/LOG2.png" alt='a' style="float:right;width:50px;height:50px;padding:10;"></a>
        </form>
</div>
</div>

<div id="main">
<div class="containeraa">
    <section class="content">
        <table>
            <tr>
                <th>NO</th>
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
                    <td><img style="height:50px; width:50px;" src="img/<?=  $kel["gambar"]?>"></td>
                    <td><?= $kel["komentar"] ?></td>
                    <td><a href="komen.php?id=<?= $kel["id"]; ?>"><button class="comm">komentar</button></a>
                    <a href="deleate.php?id=<?= $kel["id"]; ?>"><button class="del">Hapus</button></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <form action="" method="GET">
        <button class="button"><a href="?urut=asc" >Urut Ascending</a></button>
        <button class="button"><a href="?urut=desc" >Urut Descending</a></button>
        </form>
        <a href="admin.php"><button class="buttona">Refresh</button></a>
        </section>
    </div>
</div>

<footer><a>Copyright 2021. KELOMPOK 7. Hak cipta dilindungi Aslab.</a></footer>

<script>
function openNav() {
document.getElementById("mySidenav").style.width = "250px";
document.getElementById("main").style.marginLeft = "250px";
document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginLeft= "0";
document.body.a.style.backgroundColor = "white";
}
</script>
</body>

</html>


