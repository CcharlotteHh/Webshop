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
        <main class="filter-main">
            <aside class="filter">
                <form action="" method="GET">

                    <button type="submit" class="custom_button">search</button>
                    <h4>Color</h4>
                    <?php
                    $filter_query = 'SELECT * FROM product';
                    $result = mysqli_query($conn, $filter_query);
                    if (mysqli_num_rows($result) > 0) {
                        foreach ($result as $resultlist) {
                            $checked = [];
                            if (isset($_GET['colorlist'])) {
                                $checked = $_GET['colorlist'];
                            }


                    ?>
                            <div>
                                <input type="checkbox" name="colorlist[]" value="<?php echo $resultlist['color'] ?>" <?php if (in_array($resultlist['color'], $checked)) {
                                                                                                                            echo 'checked';                                                                                                          } ?>>
                                <?php echo $resultlist['color']; ?>
                            </div>
                    <?php
                        }
                    } else {
                        echo "no products found";
                    }
                    ?>
            </aside>
            </form>
            <div class="filtered-products">
                <div class="articles">
                    <?php
                    $filter_query = 'SELECT * FROM product';
                    $result = mysqli_query($conn, $filter_query);
                    if (mysqli_num_rows($result) > 0) {
                        foreach ($result as $resultlist) {
                            $checked = [];
                            if (isset($_GET['productlist'])) {
                                $checked = $_GET['productlist'];
                            }


                    ?>
                            <article class="filteredproduct">
                                <?php echo $resultlist['name'];?>
                                <?php echo $resultlist['color'];?>
                            </article>
                    <?php
                        }
                    } else {
                        echo "no products found";
                    }
                    ?>
                </div>
            </div>
        </main>
        <footer>
            &copy;
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, iste?
        </footer>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>