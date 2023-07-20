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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
                        <a href="vivod.php" class="menu__href">Occasions</a>
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
        <a id="button"></a>
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
                <img src="img/big logo/1.jpg" alt="cover">
            </div>
        </section>
        <div class="main__slider slider">
            <div class="slider__container _container">
                <h1 class="slider__text">New Phones</h1>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="img/slider/01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/slider/02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/slider/03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/slider/04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/slider/05.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="main__companies companies">
            <div class="companies__body">
                <a href="" class="company">
                    <img src="https://video.rozetka.com.ua/img_superportal/smartfony_tv_i_elektronika/brand/apple.jpg" alt="">
                </a>
                <a href="" class="company">
                    <img src="https://video.rozetka.com.ua/img_superportal/smartfony_tv_i_elektronika/brand/samsung.jpg" alt="">
                </a>
                <a href="" class="company">
                    <img _ngcontent-rz-client-c170="" loading="lazy" class="  ng-lazyloaded" src="https://video.rozetka.com.ua/img_superportal/smartfony_tv_i_elektronika/brand/xiaomi.jpg"></a>
                </a>
                <a href="" class="company">
                    <img src="https://video.rozetka.com.ua/img_superportal/smartfony_tv_i_elektronika/brand/sony.jpg" alt="">
                </a>
                <a href="" class="company">
                    <img src="https://video.rozetka.com.ua/img_superportal/smartfony_tv_i_elektronika/brand/nokia.jpg" alt="">
                </a>
                <a href="" class="company">
                    <img src="https://video.rozetka.com.ua/img_superportal/smartfony_tv_i_elektronika/brand/huawei.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="main__catalog catalog">
            <div class="catalog__container _container">
                <?php
                //include("list.php");
                require_once("admin/param.php");

                $queryCat = "select id, id_firms, model, price, count, photo from catalog";

                $resultCat = mysqli_query($dbc, $queryCat) or die("Query Error");

                $countCat = mysqli_num_rows($resultCat);

                while($row = mysqli_fetch_array($resultCat)){
                    ?>

                    <div class="catalog__block block">
                        <div class="catalog__body">
                            <a href="" class="block__img">
                                <img src="img/catalog/<?=$row['photo']?>" alt="phone">
                            </a>

                            <div class="block__body">
                                <h2 class="body__title">Мобільний телефон <?=$row['model']?></h2>
                                <div class="body__price">
                                    <div class="price__number"><?=$row['price']?>></div>
                                    <a href="">
                                        <button class="price__button">Придбати</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }

                ?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__top">
            <div class="footer__main _container">
                <div class="foter__row">
                    <div class="footer__column">
                        <div class="footer__label">Company Info</div>
                        <nav class="footer__menu menu-footer">
                            <ul class="footer__list">
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">About Us</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Carrier</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">We are hiring</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="footer__column">
                        <div class="footer__label">Help</div>
                        <nav class="footer__menu menu-footer">
                            <ul class="footer__list">
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Delivery and payment</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Credit</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Guarantee</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Return of goods</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="footer__column">
                        <div class="footer__label">Services</div>
                        <nav class="footer__menu menu-footer">
                            <ul class="footer__list">
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Bonus account</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Rosetka Premium</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Gift certificates</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Rozetka Exchange</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="footer__column">
                        <div class="footer__label">Partners</div>
                        <nav class="footer__menu menu-footer">
                            <ul class="menu-footer__list">
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Sell on G&V Shop</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Cooperation with us</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Franchising</a></li>
                                <li class="menu-footer__item"><a href="" class="menu-footer__link">Rent of premises</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__container _container">
                <div class="footer__copy">Made With Love By Figmaland All Right Reserved </div>
                <div class="footer__social social">
                    <a href="" class="social__item">
                        <img src="img/footer/social/01.svg" alt="social">
                    </a>
                    <a href="" class="social__item">
                        <img src="img/footer/social/02.svg" alt="social">
                    </a>
                    <a href="" class="social__item">
                        <img src="img/footer/social/03.svg" alt="social">
                    </a>
                    <a href="" class="social__item">
                        <img src="img/footer/social/04.svg" alt="social">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="js/js.js"></script>
<script>
    jQuery(document).ready(function () {
        var btn = jQuery('#button');
        jQuery(window).scroll(function () {
            if (jQuery(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });
        btn.on('click', function (e) {
            e.preventDefault();
            jQuery('html, body').animate({ scrollTop: 0 }, '300');
        });
    });
</script>
</body>

</html>