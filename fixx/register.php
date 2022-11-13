<?php
require 'conect.php';

if (isset($_POST['register'])) {
    $username = strtolower(stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

if ($password == $cpassword) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $cek_username = "SELECT username FROM masyarakat WHERE username = '$username'";
    $temp = mysqli_query($conn, $cek_username);
    $row = mysqli_fetch_assoc($temp);

        if ($row) {
            echo "<script>
            alert('!nama ini sudah digunakan!');
            document.location.href = 'register.php';
            </script>";
        } else {
            $insert_sql = "INSERT INTO masyarakat VALUES ('','$username','$password')";
            mysqli_query($conn, $insert_sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "<script>
                        alert('!registrasi berhasil!');
                        document.location.href = 'loginm.php';
                    </script>";
            } else {
                echo "<script>
                        alert('!Data gagal di rgister!');
                        document.location.href = 'register.php';
                    </script>";
            }
        }
    } else {
        echo "<script>
                    alert('!confirmasin password yang kamu ketik!');
                    document.location.href = 'register.php';
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
    <link rel="stylesheet" href="style2.css">
    <title>REGISTER</title>
</head>

<body class="c">
<center><h1>Registrasi Masyarakat</h1></center>
<div class="containerr">
    <form action="" method="post">
    <img src="img/samarinda.png" style="float:right; width:30%; margin:20px;"></img>
        <label for="username">NAMA</label><br>
        <input type="text" name="username" id="username" size="35" autocomplete="off" required><br><br>
        <label for="password">PASSWORD</label><br>
        <input type="password" name="password" maxlength="8" size="8" id="password" autocomplete="off" required><br><br>
        <label for="cpassword">CONFIRM PASSWORD</label><br>
        <input type="password" name="cpassword" maxlength="8" size="8" id="cpassword" autocomplete="off" required><br><br>
        <button type="submit" name="register" class="reg">Register</button>
    </form>
</div>
<a href="index.php"><button class="back">Kembali</button></a>

<footer><a>Copyright 2022. KELOMPOK 7. Hak cipta dilindungi Aslab.</a></footer>

</body>
</html>
