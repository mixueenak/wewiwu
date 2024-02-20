<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Landing</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href class="navbar-brand">Gallery Foto</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse'data-bs-target='#navbarSite'>
                <span class='navbar-toggler-icon'>
                </span>
            </button>
            <div class='collapse navbar-collapse' id="navbarSite">
                <div class="navbar-nav ms-auto">

                <?php
                    session_start();
                    if(!isset($_SESSION['userid'])){
                ?>
                <ul>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
                </ul>
                
                <?php
                    }else{
                ?>   
        
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="album.php" class="nav-link">Album</a></li>
                <li><a href="foto.php"  class="nav-link">Foto</a></li>
                <li><a href="logout.php" class="nav-link">Logout</a></li>
    
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </nav>