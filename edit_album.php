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
    <title>Halaman Edit Album</title>
</head>
<body>

    <?php require "header.php"; ?>
    <div class="container-xxl">

    <form action="update_album.php" method="post">
        <?php
            include "koneksi.php";
            $albumid=$_GET['albumid'];
            $sql=mysqli_query($conn,"select * from album where albumid='$albumid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
        <br>
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum" value="<?=$data['namaalbum']?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>

    <?= require "footer.php"; ?>
</body>
</html>