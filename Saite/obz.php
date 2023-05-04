<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/obz.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
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
    <section class="sec-1">
        <div class="block-1">
            <img src="img/Group 3.png" alt="">
        </div>
        <div class="block-2">
            <h1>Адрес: Россия Воронежская область с. Елизаветовка</h1>
            <h1>Контакты: 8-920-435-34-45</h1>
        </div>
        <div class="line">
            <img src="img/Line 1 (2).png" alt="">
        </div>
    </section>
    <section>
        <div class="block-3">
            <h1>Форма обратной связи</h1>
        </div>
        <form action="cont.php" method="post">
            <p>
            <input type="text" name="first_name" id="firstName" class="nomer" placeholder="Имя">
            </p>
            <p>
            <input type="text" name="email" id="emailAddress" class="beer" placeholder="e-mail">
            </p>
            <p>
            <input type="text" name="tema" id="tema" class="beer" placeholder="тема">
            </p>
            <p>
                <input type="text" name="texti" id="texti" class="volde" placeholder="Сообщение">
            </p>
            <input type="submit" value="Отправить" class="click">
        </form>
    </section>
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
                <a href="Vak.ru">Вакансии</a>
            </nav>
        </div>
    </footer>
</body>
</html>