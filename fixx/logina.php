<?php
require 'conect.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek_username = "SELECT * FROM adminn WHERE username = '$username'";
    $result = mysqli_query($conn, $cek_username);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;

            echo "<script>
                alert('!Selamat Datang ADMIN!');
                document.location.href = 'admin.php';
            </script>";
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>LOGIN ADMIN</title>
</head>

<body class="b">
<div class="LOA"><a><img src="img/LOG2.png" alt='a' style="float:right;width:400px;height:400px;"></a></div>
    <div class="containera">
    <h1>LOGIN ADMIN</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-weight:600;">!Username/Password Salah!</p>
    <?php endif; ?><br>

    <form action="" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" maxlength="50" size="50"id="username" autocomplete="off" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" maxlength="8" size="8" id="password" autocomplete="off" required><br><br>
        <button type="submit" name="login" class="reg">Login</button>
    </form>
</div>

<a href="LOG.php"><button class="back">Kembali</button></a>

<footer><a>Copyright 2022. KELOMPOK 7. Hak cipta dilindungi Aslab.</a></footer>

</body>
</html>