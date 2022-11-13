<?php
require 'conect.php';
$select_sql = "SELECT *FROM tentangkami";
$result = mysqli_query($conn, $select_sql);

if (!$result) {
    echo mysqli_error($conn);
}

$tentangkami = [];

while ($row = mysqli_fetch_assoc($result)) {
    $tentangkami[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>TENTANG</title>
</head>

<body class="c">
<div class="medsos">
		<div class="containers">
			<marquee  style="font-family: impact; font-size:19px; color: "><img src="img/samarinda.png" style="width:20px;height:20px;">
            "Layanan Pengaduan Masyarakat Samarinda Siap Membantu Anda selalu"<img src="img/samarinda.png" style="width:20px;height:20px;"></marquee>
		</div>
</div>

<div class="topnav">
    <div class="active">
    <a href="register.php" style="border: 3px solid; border-radius: 20px;float:right;padding: 10px 10px;">Register</a>
    <a href="LOG.php" style="float:right;padding: 10px 10px;">Login</a>
    <img src="img/acc.png" style="float:right;width:50px;height:50px; padding:-1px 10px;">

    <img src="img/commen.png" alt="aa" style="float:left;width:70px;height:45px; padding:0px 20px;">
    <a href="index.php"  style="float:left;">Menu</a>
    <p style="float:left;padding: 10px 10px;">/</p>
    <a href="kontak.php"  style="float:left;">Kontak</a>
    <p style="float:left;padding: 10px 10px;">/</p>
    <a href="tentang.php"  style="float:left;">Tentang Kami</a>
    </div>
</div>

<div class="containert">
    <section class="content">
        <h1 class="title" style="font-size: 35px; padding-bottom: 20px;">[LPMS]</h1>
        <p style="text-indent: 50px;">Selamat datang Di Layanan pengaduan masyarakat Samarinda(LPMS), Web ini dirancang dengan
        tujuan untuk memudah kan pemerintah untuk melihat apa yang bermasalah di Kota Samarinda kita,
        dengan melihat keluhan - keluhan yang telah di kirim oleh masyarakat diseluruh daerah Samarinda. 
        PLMS Siap melayani Warga masyarakat 24 jam </p>

    <table>
        <tr>
            <th>VISI</th>
            <th rowspan="1">MOTTO</th>
        </tr>
            <?php foreach ($tentangkami as $kel) : ?>
                <tr>
                <td style="text-align: left;"><?= $kel["visi"] ?></td>
                <td rowspan="3"><?= $kel["motto"] ?></td>
                <tr><th>MISI</th></tr>
                <td style="text-align: left;"><?= $kel["misi"] ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
        <p style="padding-top: 40px;">Dengan ini, kami menyatakan sanggup menyelenggarakan pelayanan sesuai Standar Pelayanan yang telah ditetapkan:<p>
    <table class="a">
        <tr>
            <th>NO.</th>
            <th>Maklumat Pelayanan</th>
        </tr>
        <tr>
            <td>1.</td>
            <td style="text-align: left;">Tidak menerima uang, hadiah, atau dalam bentuk apapun dari Pengadu.</td>
        </tr>
        <tr>
            <td>2.</td>
            <td style="text-align: left;">Menjaga kerahasiaan indentitas Pengadu.</td>
        </tr>
        <tr>
            <td>3.</td>
            <td style="text-align: left;">Netral, akuntabel, dan tidak diskriminatif dalam penanganan surat pengaduan masyarakat.</td>
        </tr>
        <tr>
            <td>4.</td>
            <td style="text-align: left;">Bersikap, berperilaku, berpenampilan, dan bertutur kata secara sopan.</td>
        </tr>
        <img src="img/samarinda.png" alt="as" class="tent">
    </table>

    <img src="img/1.png" alt="as" class="F5">
    </section>
</div>
<footer><a>Copyright 2022. KELOMPOK 7. Hak cipta dilindungi Aslab.</a></footer>
</body>
</html>



