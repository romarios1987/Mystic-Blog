<?php
require_once "config/config.php";
require_once "classes/Database.php";
require_once "classes/Format.php";
$db = new Database();
$fm = new Format();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mystic Blog</title>
    <link rel="shortcut icon" type='image/x-icon' href="images/favicon/tomcat.ico">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="overlay">
    <div><img src="images/loading.gif" width="64px" height="64px"/></div>
</div>
<header class="header">
    <nav class="main-menu">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo"><img src="images/logo_white.svg" class="" alt="alt"><span>MysticBlog</span></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Главная</a></li>
                    <li class="active"><a href="about.php">О сайте</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="about.php">О сайте</a></li>
                    <li class="active"><a href="contact.php">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>