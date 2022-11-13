<?php
session_start();
require 'conect.php';

if (!isset($_SESSION['login'])) {
    header('Location: logina.php');
    exit;
}

$id = $_GET["id"];

$select_sql = "SELECT * FROM keluhann WHERE id = $id";
$result = mysqli_query($conn, $select_sql);

$komen = [];

while ($row = mysqli_fetch_assoc($result)) {
    $komen[] = $row;
}

$komen = $komen[0];

if (isset($_POST["UPDATE"])) {
    $komentar = htmlspecialchars($_POST["komentar"]);
    $update_sql = "UPDATE keluhann SET komentar = '$komentar' WHERE id = $id";
    $result = mysqli_query($conn, $update_sql);

    if ($result) {
        echo "<script>
            alert('!Comment telah di sampaikan!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('!Comment gagal tersampaikan!');
            document.location.href = 'komen.php';
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>KOMENTAR</title>
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
    <img src="img/LOG2.png" alt='a' style="float:right;width:50px;height:50px;padding:10;"></a>
    </div>
</div>


<div id="main">
<div class="containeraaa">
    <div class="containerk">
        <form action="" method="post">
            <div class="form-header">
                <h2>Comment Kami</h2>
            </div>

            <div class="form-content">
                <div class="form-area">
                    <div class="form-label">
                        <label for=""> < komentar > </label>
                    </div>
                    <div class="form-input">
                    <textarea rows="23" cols="50" name="komentar"></textarea><br/> </textarea>
                    </div>
                </div>


            <div class="form-button">
                <button type="submit" name="UPDATE">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
</div>

<a href="admin.php"><button class="back">Kembali</button></a>
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