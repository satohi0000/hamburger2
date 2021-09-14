<!DOCTYPE html>
<html lang="ja" dir="ltl">
<head>
    <link rel="stylesheet" href="/Scss/hamburger.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>Hamburger</title>
</head>
<body <?php body_class(); ?>>
 <header>
     <div class="l-header">
         <div class="l-header__left">
             <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
             <h1><?php bloginfo( 'name' ); ?></h1></a>
             <form class="l-header__form"　action="#" method="GET">
             <input class="l-header__form__box" type="search" placeholder="">
             <i class="fas fa-search" aria hidden="true"></i>
             <input class="l-header__form__botton" type="submit" value="検索"></form>
            </div>
            <div class="l-header__left__menu">
                <div class="l-header__left__menu__botton">Menu</div>
            </div>
        <div class="l-header__right"></div>
    </header>