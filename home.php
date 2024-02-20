<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    
    <?php require "header.php"; ?>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>

    <?= require "footer.php"; ?>
</body>
</html>