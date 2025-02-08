<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
</head>
<html>
<body>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- Header -->

<nav id="navbar" class="navbar">
    <ul class="page-header">            
            <li>
            <a class="logo" href="home.php"><img src="images/logo.png"></a>
            </li>
        <li class="navigation">
            <div class="nav-toggle">
                <ul>
                    <li <?php if ($currentPage == 'home.php') echo 'class="current"'; ?>>
                    <a href="home.php">HOME</a>
                    </li>
                    <li <?php if ($currentPage == 'cats.php') echo 'class="current"'; ?>>
                    <a href="cats.php">CATS</a>
                    </li>
                    <li <?php if ($currentPage == 'shop.php') echo 'class="current"'; ?>>
                    <a href="shop.php">SHOP</a>
                    </li>
                    <li <?php if ($currentPage == 'about.php') echo 'class="current"'; ?>>
                    <a href="about.php">ABOUT</a>
                    </li>
                    <li <?php if ($currentPage == 'contact.php') echo 'class="current"'; ?>>
                    <a href="contact.php">CONTACT</a>
                    </li>
                    <li <?php if ($currentPage == 'login.php') echo 'class="current"'; ?>>
                    <a href="login.php">LOG IN</a>
                    </li>
                    <div class="search-icon"><li><a href="shopping-cart.php"><img src="images/shopping-cart.png"></a></li></div>
                </ul>
            </div>
        </li>
    </ul>

    <button id="hamburger-toggle" class="hamburger">
                <div class="hamburger-close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                    </svg>
                </div>

                <div class="hamburger-open">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                    </svg>
                </div>
    </button>
</nav>
<script src="app.js"></script>
