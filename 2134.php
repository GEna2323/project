<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,regular,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header__container _container">
            <a href="index.php" class="header__logo">
                <img src="img/logo/01.svg" alt="logo" class="logo__img">
            </a>
            <nav class="header__menu menu">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="vivod.php" class="menu__href">Vivod.php</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__href">All Categories</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__href">Gifts & Bundles </a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__href">Our Brands</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__href">About Us </a>
                    </li>
                </ul>
            </nav>
            <div class="menu__i">
                <div class="eclips">
                    <div class="icon__im">
                        <img src="img/menu/04.svg" alt="">
                    </div>
                    <div class="icon__im">
                        <img src="img/menu/04.svg" alt="">
                    </div>
                    <div class="icon__im">
                        <img src="img/menu/04.svg" alt="">
                    </div>
                </div>
                <div class="icons">
                    <a href="" class="icon__img">
                        <img src="img/menu/01.svg" alt="loupe">
                    </a>
                    <?php
                    if (isset($_SESSION['user_login'], $_SESSION['user_email'], $_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_id'])){
                        ?>
                        <a href="profile.php"  class="icon__img">
                            <img src="img/menu/02.svg" alt="user">
                        </a>
                        <?php
                    }else{
                        ?>
                        <a href="logSign.php"  class="icon__img">
                            <img src="img/menu/02.svg" alt="user">
                        </a>
                        <?php
                    }
                    ?>
                    <a href=""  class="icon__img">
                        <img src="img/menu/03.svg" alt="shopping-cart">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="mail__page">
            <div class="page__container _container">
                <div class="page__body">
                    <h1 class="page__title">Support Your Local Artisans</h1>
                    <div class="page__text">Discover brands and theit stories</div>
                    <a href="">
                        <button class="page__button">Browse bands</button>
                    </a>
                </div>
            </div>
            <div class="page__logo _ibg">
                <img src="img/big logo/01.jpg" alt="cover">
            </div>
        </section>
    </main>
    <footer class="footer">

    </footer>
</div>

</body>

</html>