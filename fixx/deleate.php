<?php
require 'conect.php';

$id = $_GET["id"];

$delete_sql = "DELETE FROM keluhann WHERE id = $id";
$result = mysqli_query($conn, $delete_sql);

if ($result) {
    echo "<script>
        alert('!Keluhan Terhapus!');
        document.location.href = 'admin.php';
    </script>";
} else {
    echo "<script>
        alert('!Keluhan Gagal Terhapus!');
        document.location.href = 'admin.php';
    </script>";
}
