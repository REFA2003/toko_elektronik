<?php

require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="nav.css">
</head>
<body>
    <div class="navbar">
        <div class="nav-logo">
            <a href="index.php">Reshop</a>
        </div>
        <div class="nav-link">
        <ul>
            <li>
                <a href="index.php">Beranda</a>
            </li>

            <li>
                <a href="cart.php">Keranjang</a>
            </li>

            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
        
        <?php if(isset($_SESSION["username"])) : ?>
                <li>
                    <a href="#">
                        Halo, <?= $_SESSION["name"]; ?>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        Logout
                    </a>
                </li>
            
            <?php endif; ?>

            <?php if(!isset($_SESSION["username"])) : ?>
                
                <li>
                    <a href="login/index.php">Login</a>
                    <a href="register/index.php">Register</a>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>