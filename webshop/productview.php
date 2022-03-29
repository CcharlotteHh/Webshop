<?php
include 'includes/db.inc.php'; ?>
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
            sitename phone and stuff
        </header>

        <nav class="navbar">
            <div class="logo">
                <a href="#"><img class='logo-img' src="assets/img/logo.png" alt="logo"></a>
            </div>
            <ul class="nav-list" id="navList">
                <li class="list-item">
                    <a href="#">About</a>
                </li>
                <li class="list-item">
                    <a href="#">Cats</a>
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
        <main class="product_view">
            <figure class="product_pictures">
          <div class="big_picture">
              big picture
          </div>
          <div class="small_picture">
              <img src="assets/img/detailcatbig.jpg" alt="cat">
              <img src="assets/img/detailcatsmall.jpg" alt="cat">
              <img src="assets/img/detailcatsmall2.jpg" alt="cat">
              <img src="assets/img/detailcatbig.jpg" alt="cat">
          </div>
            </figure>
            <article class="product_information">
                <h2>Cat name here</h2>
                <p>cat information here</p>
            </article>
        </section>
        </main>
        <footer>
            &copy;
        </footer>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>