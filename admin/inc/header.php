<?php
require_once '../classes/Session.php';
Session::checkSession();
ob_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Admin panel/Mystic Blog</title>
    <link rel="shortcut icon" type='image/x-icon' href="../images/favicon/tomcat.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../libs/materialize/css/materialize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s12">
            <h3 class='center-align admin-title'>Панель администратора</h3>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <nav class="admin-nav">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo"><img src="../images/tomcat.svg"
                                                                alt="alt"><span>MysticBlog</span></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <?php
                    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                        Session::destroy();
                    }
                    ?>
                    <div class="wrap-dropdown-head">
                        <a class="dropdown-button right" href="#!" data-activates="dropdown1"><i class="fa fa-user"></i>
                            Привет <span><?= Session::get('username'); ?></span> !<i class="material-icons right">arrow_drop_down</i></a>
                        <ul id="dropdown1" class="dropdown-content">
                            <li><a href="#!"><i class="fa fa-key"></i>Изменить пароль</a></li>
                            <li><a href="?action=logout"><i class="fa fa-sign-out"></i>Выход</a></li>
                        </ul>
                    </div><!-- /.wrap-dropdown-head -->
                    <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="index.php">Dashbord</a></li>
                        <li><a href="badges.html">Входящие(3)</a></li>
                        <li><a href="profile.php">Профиль пользователя</a></li>
                        <li><a href="http://blog-mystic.loc/" target="_blank">Перейти на сайт</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>