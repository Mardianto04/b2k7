<?php
require 'conect.php';
$select_sql = "SELECT *FROM kontak";
$result = mysqli_query($conn, $select_sql);

if (!$result) {
    echo mysqli_error($conn);
}

$kontak = [];

while ($row = mysqli_fetch_assoc($result)) {
    $kontak[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>KONTAK</title>
</head>

<body class="b">
<div class="medsos">
		<div class="containers">
			<marquee  style="font-family: impact; font-size:19px; color: #;"><img src="img/samarinda.png" style="width:20px;height:20px;">
            "Layanan Pengaduan Masyarakat Samarinda, Siap Melayani 24 Jam"<img src="img/samarinda.png" style="width:20px;height:20px;"></marquee>
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

<div class="containerf">
    <section class="content">
        <h1 class="title" style="font-size: 30px;"> kontak</h1>
        <p></p>Apabila ada masalah atau Pertanyaan, Hubungilah kami dan kami siap membantu.
        <table>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>kontak</th>
            </tr>

            <?php $i = 1 ?>
            <?php foreach ($kontak as $kel) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $kel["nama"] ?></td>
                    <td><?= $kel["kontak"] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </section>
</div>
<footer><a>Copyright 2022. KELOMPOK 7. Hak cipta dilindungi Aslab.</a></footer>

</body>
</html>