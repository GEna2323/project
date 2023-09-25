<?php
/* Smarty version 4.3.2, created on 2023-09-25 11:06:19
  from 'C:\OSPanel\domains\project\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65113f7b06ae91_25004054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dab712abbbab6db0f5279e573f800f00ca9d5db' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\templates\\main.tpl',
      1 => 1695629177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65113f7b06ae91_25004054 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['metaTitle']->value;?>
</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,regular,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metaDiscription']->value;?>
">
    <meta name="keywords" content="=<?php echo $_smarty_tpl->tpl_vars['metaKeyWords']->value;?>
">
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
                    <?php
$__section_k_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_1_total = $__section_k_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_1_total !== 0) {
for ($__section_k_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_1_iteration <= $__section_k_1_total; $__section_k_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                        <li class="menu__item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['page'];?>
.php" class="menu__href"><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</a>
                        </li>
                    <?php
}
}
?>
                    <li class="menu__item">
                        <a href="admin/index.php" class="menu__href">Admin</a>
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
                    <a href="profile.php"  class="icon__img">
                        <img src="img/menu/02.svg" alt="user">
                    </a>
                    <a href=""  class="icon__img">
                        <img src="img/menu/03.svg" alt="shopping-cart">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <a id="button"></a>
        <!-- <section class="mail__page">
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
        </section> -->


        

        <div class="main__categories categories">
            <div class="categories__body">
                <div class="categories__tirle">Firms</div>
                <?php
$__section_k_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['firms']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_2_total = $__section_k_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_2_total !== 0) {
for ($__section_k_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_2_iteration <= $__section_k_2_total; $__section_k_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                <div class="categories__text">
                    <div class="categories__icon">
                        <img src="" alt="">
                    </div>
                    <a href="catalog.php?id_firm=<?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];
if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && !empty($_smarty_tpl->tpl_vars['sort']->value)) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}
if ((isset($_smarty_tpl->tpl_vars['max_price']->value) && isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>" class="">
                        <div class="categories__paragraf"><?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</div>
                    </a>
                </div>
                <?php
}
}
?>
                <div class="categories__text">
                    <div class="categories__icon">
                        <img src="" alt="">
                    </div>
                    <a href="catalog.php" class="">
                        <div class="categories__paragraf">No Filter</div>
                    </a>
                </div>
                <div class="categories__tirle">Filter</div>
                <div class="categories__text">
                    <form action="catalog.php" method="get">
                        Пошук:
                        <br><input type="text" name="search" <?php if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" <?php } else { ?> placeholder="Назва товару"<?php }?>><br>
                        Мін Ціна:
                        <br><input type="number" min="0" name="min_price" <?php if ((isset($_smarty_tpl->tpl_vars['min_price']->value)) && !empty($_smarty_tpl->tpl_vars['min_price']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
" <?php } else { ?>placeholder="Min Price"<?php }?>><br>
                        Макс. Ціна:
                        <br><input type="number" min="0" name="max_price" <?php if ((isset($_smarty_tpl->tpl_vars['max_price']->value)) && !empty($_smarty_tpl->tpl_vars['max_price']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
" <?php } else { ?>placeholder="Max Price"<?php }?>><br>
                        <?php if ((isset($_smarty_tpl->tpl_vars['id_firm']->value)) && !empty($_smarty_tpl->tpl_vars['id_firm']->value)) {?>
                            <input type="hidden" name="id_firm" value="<?php echo $_smarty_tpl->tpl_vars['id_firm']->value;?>
">
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && !empty($_smarty_tpl->tpl_vars['sort']->value)) {?>
                            <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
                        <?php }?>
                        <input type="submit" name="send" value="Прийняти">
                    </form>
                </div>

            </div>
        </div>

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
        <!-- <div class="main__companies companies">
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
        </div> -->
        <?php echo $_smarty_tpl->tpl_vars['fullContent']->value;?>

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
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/js.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
