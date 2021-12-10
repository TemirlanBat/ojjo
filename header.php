<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJJO</title>
    <?php wp_head(); ?>
</head>
<body>
    <section class="promo">
        <header class="header">
            <div class="container">
                <nav>
                    <ul class="header__menu menu">
                        <li class="menu__item"><a href="#" class="menu__link">Контрагентам</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Дизайнерам</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Вакансии</a></li>
                    </ul>
                </nav>
                <img src="<?php echo bloginfo('template_url') . '/assets/img/icons/logo.png' ?>" alt="logo" class="header__logo">
                <div class="header__wrapper">
                    <div class="header__item">
                        <a href="#"><img src="<?php echo bloginfo("template_url") . "/assets/img/icons/header/search.png" ?>" alt="search" class="header__img"></a>
                        <a href="#" class="header__title">Поиск</a>
                    </div>
                    <a href="#" class="header__item"><div class="header__title">Вход/Регистрация</div></a>
                    <div class="header__item">
                    <a href="#"><img src="<?php echo bloginfo("template_url") . "/assets/img/icons/header/user.png" ?>" alt="user" class="header__img"></a>
                    <a href="#"><img src="<?php echo bloginfo("template_url") . "/assets/img/icons/header/like.png" ?>" alt="like" class="header__img"></a>
                    </div>
                </div>
            </div>
        </header>
 