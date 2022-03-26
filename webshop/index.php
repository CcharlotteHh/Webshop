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
            sitename phone and stuff??
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
        <main class="homepage-main">
            <section class="article-container">
                <article class="article-card">
                    <figure class=card-image><img src="assets/img/detailcatsmall.jpg" alt=""></figure>
                    <h2>Title</h2>
                    <p>description Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, molestiae saepe natus, eius aut enim vitae praesentium quo veritatis harum incidunt quae provident deleniti! Aperiam facilis eos dicta pariatur eius?</p>
                    <p> price</p>
                    <a href="productview.php">Buy now</a>
                </article>
                <article class="article-card">
                    <figure class=card-image><img src="assets/img/detailcatsmall2.jpg" alt=""></figure>
                    <h2>Title</h2>
                    <p>description Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, molestiae saepe natus, eius aut enim vitae praesentium quo veritatis harum incidunt quae provident deleniti! Aperiam facilis eos dicta pariatur eius?</p>
                    <p> price</p>
                    <a href="#">Buy now</a>
                </article>
                <article class="article-card">
                    <figure class=card-image><img src="assets/img/detailcatsmall3.jpg" alt=""></figure>
                    <h2>Title</h2>
                    <p>description Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, molestiae saepe natus, eius aut enim vitae praesentium quo veritatis harum incidunt quae provident deleniti! Aperiam facilis eos dicta pariatur eius?</p>
                    <p> price</p>
                    <a href="#">Buy now</a>
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