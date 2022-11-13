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

$kel = [];

while ($row = mysqli_fetch_assoc($result)) {
    $kel[] = $row;
}

$kel = $kel[0];

if (isset($_POST["UPDATE"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $nik = htmlspecialchars($_POST["nik"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $tanggal = htmlspecialchars($_POST["tanggal"]);
    $kecamatan = htmlspecialchars($_POST["kecamatan"]);
    $keluhan = htmlspecialchars($_POST["keluhan"]);
    $waktu = strtotime('now');
    $namafile = $_POST['nik'];
    $gambar = $_FILES['gambar']['name'];

    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $gambar_baru = "$namafile.$ekstensi";
    $temp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($temp, 'img/'.$gambar_baru)){
    $update_sql = "UPDATE keluhann SET nama ='$nama', nik = '$nik', gender='$gender', tanggal ='$tanggal', kecamatan ='$kecamatan', keluhan ='$keluhan', gambar = '$gambar_baru' WHERE id = '$id'";
    $result = mysqli_query($conn, $update_sql);

        if ($result) {
            echo "<script>
                alert('!Keluhan telah terupdated!');
                document.location.href = 'keluhan2.php';
            </script>";
        } else {
            echo "<script>
                alert('!Gagal mengupdate keluhan!');
                document.location.href = 'update.php';
            </script>";
        }
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
    <title>UPDATED</title>
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
<form action="" method="post" enctype="multipart/form-data">
<div class="containerK1">
    <div class="container">
            <div class="form-header">
                <h2 style="Color: white; text-align:center; font-size: 35px;">Update Keluhan</h2>
            </div>

            <div class="form-area">
                    <div class="form-input">
                        <input type="text" name="nama" value="<?= $kel["nama"]; ?> "autocomplete="off" placeholder="Nama" required>
                    </div>
                </div>

            <div class="form-area">
                    <div class="form-input">
                        <input type="int" name="nik" value="<?= $kel["nik"]; ?> "autocomplete="off" placeholder="NIK" required>
                    </div>
                </div>
            
            <div class="form-area">
                    <div class="form-input">
                        <input type="date" name="tanggal" value="<?= $kel["tanggal"]; ?> "autocomplete="off" placeholder="Tanggal" required>
                    </div>
                </div>

                <div class="form-area">
                    <div class="form-label">
                        <label for="" style="Color: white;">Gender    :</label></br>
                        <select id="gender" name="gender" autocomplete="off" required>
                        <option value="Laki-Laki"> Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-area">
                    <div class="form-label">
                        <label for="" style="Color: white;">Kecamatan :</label></br>
                        <select id="gender" name="kecamatan" value="<?= $kel["kecamatan"]; ?> "autocomplete="off" required>
                        <option value="Kec Samarinda Seberang">Kec Samarinda Seberang</option>
                        <option value="Kec Samarinda Utara">Kec Samarinda Utara</option>
                        <option value="Kec Samarinda Kota">Kec Samarinda Kota</option>
                        <option value="Kec Loa Janan Ilir">Kec Loa Janan Ilir</option>
                        <option value="Kec Samarinda Ilir">Kec Samarinda Ilir</option>
                        <option value="Kec Sungai Kunjang">Kec Sungai Kunjang</option>
                        <option value="Kec Sungai Pinang">Kec Sungai Pinang</option>
                        <option value="Kec Samarinda Ulu">Kec Samarinda Ulu</option>
                        <option value="Kec Sambutan">Kec Sambutan</option>
                        <option value="Kec Palaran">Kec Palaran</option>
                        </select>
                    </div>
                </div> 
            </div>
            
            <div class="containera">
                <div class="form-area">
                    <div class="form-label">
                    <label for="" style="Color: #33c056;">Keluhan :</label>
                    </div>
                    </div>
                    <div class="form-input">
                    <textarea rows="10" cols="83" name="keluhan" value="<?= $kel["keluhan"]; ?> "autocomplete="off" required></textarea>
                    </div>

                    
                <div class="form-area">
                    <div class="form-input">
                        <input type="file" name="gambar" style ="margin-top:5px;" autocomplete="off" required>
                    </div>
                </div>
                    
                <div class="submit">
                <button type="submit" name="UPDATE">UPDATE</button>
                </div>
                </div>

            </div>
        </form>
    </div>
</div>

<a href="keluhan2.php"><button class="backk">Kembali</button></a>

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
document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>