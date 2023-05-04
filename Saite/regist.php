<?php
 require_once 'conect.php';
 $sql = mysqli_query($link, "SELECT * FROM `user`");
 $sql = mysqli_fetch_all($sql);
 session_start();
//  require_once 'pass.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/regist.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Регистрация</title>
</head>
<body  >
<header>
<div class="block">
            <nav>
                <img src="img/image 4 (3).png" alt="" class="image">
                <a href="index.php">Главная</a>
                <a href="obz.php">Обращение</a>
                <a href="tel.php">Контакты</a>
                <a href="Vak.php">Вакансии</a>
                <button class="bt-1" onclick="window.location.href = 'exit.php';">Вход</button>
                <button class="bt-2" onclick="window.location.href = 'regist.php';">Регистрация</button>
            </nav>
        </div>
</header>
    <form action="add.php" method="POST">
        <br> <br>
        <div class="flex">
            <div class="block">
                <input type="text" id="login" name="login" class="bt" placeholder="Придумайте логин"> <br> <br>
                <input type="text" id="name" name="name" class="bt" placeholder="Введите имя"> <br> <br>
                <input type="e-mail" id="e-mail" name="E-mail" class="bt" placeholder="Введите e-mail"> <br><br>
                <input type="text" id="phone" name="tel" class="bt" placeholder="Введите телефон"> <br> <br>
                <input type="password" id="pass" name="pass" class="bt" placeholder="Придумайте пароль"> <br><br>
                <input type="password" id="pass1" name="pass1" class="bt" placeholder="Повторите пароль"> <br><br>
                <p><input type="checkbox" id="approval" name="approval"> Я согласен на обработку данных</p><br>
                
                <legend>Выберите улицу</legend>
                <select name="country" id="country">
                    <option value=" "></option>
                    <option value="Ленино">Ленино</option>
                    <option value="Советское">Советское</option>
                    <option value="Новая">Новая</option>
                    <option value="30лет Победы">30лет Победы</option>
                </select> <br><br>

                <legend>У вас есть Асфальт</legend>
                <select name="city" id="city">
                    <option value=" "></option>
                    <option value="да">да</option>
                    <option value="нет">нет</option>
                    <option value="ожидается">ожидается</option>
                </select> <br><br>

                <button class="bt-3" onclick="window.location.href = 'exit.php'" type="submit">Зарегистрироваться</button><br>   
            </div>
            <div>
                <img src="img/OTP verification.png" alt="">
            </div>
        </div>
    </form>
    <footer>
    <div class="image-4">
            <img src="img/Line 1 (2).png" alt="" href="#">
        </div>
        <div class="block-6">
            <nav>
                <img src="img/image 4 (3).png" alt="" class="image">
                <a href="index.php">Главная</a>
                <a href="obz.php">Обращение</a>
                <a href="tel.php">Контакты</a>
                <a href="Vak.php">Вакансии</a>
            </nav>
        </div>
    </footer>
</body>
</html>