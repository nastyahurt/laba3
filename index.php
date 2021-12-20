<?php
require_once __DIR__ . "/database/pdo.php";
$dbh = DB::getConnection();
$data = $dbh->query("SELECT * FROM file");
$row = $data->fetch();
print_r($row);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>СтудОбмен</title>
</head>

<body>
    <header>
        <button class="header__button1">Архив</button>
        <button class="header__button2">FAQ</button>
        <h1 class="header__h1">СтудОбмен</h1>
        <button class="header__button3">Вход</button>
        <a class="header__button4" href="file:///Users/efimdolgov/Desktop/%D0%9E%D1%82%D1%80%D1%83%D0%B1%D1%8F%D0%BD%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%D0%B0/regisration/registrationPage.html">Регистрация</a>
    </header>
    <section class="title">
        <button class="title__button">Обменяться</button>
        <h2 class="title__h2">Этот сайт создан </br>сотружеством студентов </br>липецких университетов </br>для помощи друг другу</h2>
    </section>
    <section class="wrapper">
        <div class="wrapper__div">
            <div class="div__div">
                <h3 class="div__h3">Название статьи</h3>
                <p class="div__p">Описание статьи Описание статьи Описание статьи Описание статьи 
                   Описание статьи Описание статьи Описание статьи Описание статьи</br> Описание статьи Описание статьи 
                   Описание статьи Описание статьи Описание статьи Описание статьи Описание статьи Описание статьи</p>
            </div>
            <div class="div__div2">
                <p class="div2__p">01.09.2021</p>
                <button class="div2__button">Посмотреть</button>
            </div>
        </div>
        <div class="wrapper__div">
            <div class="div__div">
                <h3 class="div__h3">Название статьи</h3>
                <p class="div__p">Описание статьи Описание статьи Описание статьи Описание статьи 
                   Описание статьи Описание статьи Описание статьи Описание статьи </br> Описание статьи Описание статьи 
                   Описание статьи Описание статьи Описание статьи Описание статьи Описание статьи Описание статьи</p>
            </div>
            <div class="div__div2">
                <p class="div2__p">01.09.2021</p>
                <button class="div2__button">Посмотреть</button>
            </div>
        </div>
        <div class="wrapper__div">
            <div class="div__div">
                <h3 class="div__h3">Название статьи</h3>
                <p class="div__p">Описание статьи Описание статьи Описание статьи Описание статьи 
                   Описание статьи Описание статьи Описание статьи Описание статьи</br> Описание статьи Описание статьи 
                   Описание статьи Описание статьи Описание статьи Описание статьи Описание статьи Описание статьи</p>
            </div>
            <div class="div__div2">
                <p class="div2__p">01.09.2021</p>
                <button class="div2__button">Посмотреть</button>
            </div>
        </div>
        <div class="wrapper__div">
            <div class="div__div">
                <h3 class="div__h3">Название статьи</h3>
                <p class="div__p">Описание статьи Описание статьи Описание статьи Описание статьи 
                   Описание статьи Описание статьи Описание статьи Описание статьи</br> Описание статьи Описание статьи 
                   Описание статьи Описание статьи Описание статьи Описание статьи Описание статьи Описание статьи</p>
            </div>
            <div class="div__div2">
                <p class="div2__p">01.09.2021</p>
                <button class="div2__button">Посмотреть</button>
            </div>
        </div>
    </section>
    <footer>
        <button class="footer__button1">СтудОбмен</button>
        <div class="footer__div1">
            <button class="footer__button2">Архив</button>
            <button class="footer__button3">Вход</button>
        </div>
        <div class="footer__div2">
            <button class="footer__button2">FAQ</button>
            <button class="footer__button3">Регистрация</button>
        </div>
        <p class="footer__p">Этот сайт создан сотружеством студентов </br>липецких университетов для помощи друг другу</p>
    </footer>
</body>
</html>