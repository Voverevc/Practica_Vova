<?php
    session_start();
    require_once 'conect.php';
    $sql = mysqli_query($link, "SELECT * FROM `user`");
    $sql = mysqli_fetch_all($sql);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/exit.css">    
    <title>Вход</title>
</head>
<body style="text-align: center" class="container">
<header>
    <div class="block">
            <nav>
                <img src="img/image 4 (3).png" alt="" class="image">
                <a href="index.php">Главная</a>
                <a href="obz.php">Обращение</a>
                <a href="tel.php">Контакты</a>
                <a href="Vak.ru">Вакансии</a>
                <button class="bt-1" onclick="window.location.href = 'exit.php';">Вход</button>
                <button class="bt-2" onclick="window.location.href = 'regist.php';">Регистрация</button>
            </nav>
        </div>
</header>
    <div class="rom">
        <form action="add_exit.php" method="POST"><br>
        <div class="rom-1">
            <input type="text" id="login" name="login" class="bt" placeholder="Введите логин"> <br> <br>
            <input type="password" id="pass" name="pass" class="bt" placeholder="Введите пароль"> <br><br>
        
        <a href="user.php"><button class="bt-3" type="submit">Вход</button><br> <br></a>
         <button class="btn w-25" style="background: #046666; color: white" onclick="window.location.href = 'index.php'" type="submit">Вернуться обратно</button><br>  
         </div> 
    </form>
    <div>
        <img src="img/Lock and password.png" alt="">
    </div>
</div>
<footer>
    <div class="image-4">
            <img src="img/Line 1 (2).png" alt="" href="#">
        </div>
        <div>
            <nav>
                <img src="img/image 4 (3).png" alt="" class="image">
                <a href="#">Обращение</a>
                <a href="#">Социальная сеть</a>
                <a href="#">Услуги</a>
                <a href="#">ЖКХ</a>
                <a href="#">Контанты</a>
            </nav>
        </div>
</footer>
</body>
</html>