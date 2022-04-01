<?php
include 'includes/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="container">
        <header>
            sitename phone and stuff??
        </header>

        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><img class='logo-img' src="assets/images/logo.png" alt="logo"></a>
            </div>
            <ul class="nav-list" id="navList">
                <li class="list-item">
                    <a href="#">About</a>
                </li>
                <li class="list-item">
                    <a href="filterproduct.php">Cats</a>
                </li>
                <li class="list-item">
                    <a href="#">Contact</a>
                </li>
                <li class="list-item">
                    <a href="#">FAQ</a>
                </li>
            </ul>
            <div class="hamburger-menu" id="toggleBtn">
                <div class="menu-line"></div>
                <div class="menu-line"></div>
                <div class="menu-line"></div>
            </div>
        </nav>
        
        <footer>
            &copy;
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, iste?
        </footer>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>