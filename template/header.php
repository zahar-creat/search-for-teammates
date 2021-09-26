<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="<?= $keywords ?>" />
    <meta name="description" content="<?= $description ?>" />
    <title><?= $title ?></title>
    <meta name="yandex-verification" content="0f3f3f830029428e" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="fonts/roboto.css">
    <link type="image/x-icon" rel="shortcut icon" href="images/favicon.ico">
</head>

<body style="color: white;">
    <header class="mb-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg2">
                        <a class="navbar-brand" href="index.php"><img src="images/logo2.webp"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav w-100">
                                <li class="nav-item ">
                                    <a class="nav-link bg3 mr-3 text" href="index.php">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg3 mr-3 text" href="news.php">Новости</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg3 mr-3 text" href="search.php">Поиск игроков</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg3 mr-3 text" href="about.php">О нас</a>
                                </li>

                                <li class="nav-item dropdown ml-auto mr-5">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user-alt c1"></i></a>
                                    <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                                        <?php
                                        if (isset($_SESSION['user_id'])) {
                                            echo "<a class='dropdown-item text-center' href='include/logoutinc.php'>Выйти</a>";
                                            echo "<a class='dropdown-item text-center' href='profile.php'> Личный кабинет</a>";
                                        } else {
                                            echo "<a class='dropdown-item text-center' href='login.php'>Войти</a>";
                                            echo "<a class='dropdown-item text-center' href='signup.php'>Регистрация</a>";
                                        }
                                        ?>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>