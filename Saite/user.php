<?php
    session_start();
    require_once 'conect.php';
    $sql = mysqli_query($link, "SELECT * FROM `user`");
    $sql = mysqli_fetch_all($sql);
    $uploaddir = 'img/';
    if($_POST['submit'] = 1 and isset($_FILES['userfile']['name'])) {
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir. $_FILES['userfile']['name'])) {
            $name = $_FILES['userfile']['name'];
            $query_ava = mysqli_query($link, "UPDATE `user` SET `ava` = '".$name."' WHERE `user`.`id` =".$_SESSION['user_id']);
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/user.css">
    <link href="add_exit.php">
    <title>Личный кабинет пользователя</title>
</head>
<header>
<div class="block">
            <nav>
                <img src="img/image 4 (3).png" alt="" class="image">
                <a href="index.php">Главная</a>
                <a href="obz.php">Обращение</a>
                <a href="tel.php">Социальная сеть</a>
                <a href="#">Услуги</a>
                <a href="#">ЖКХ</a>
            </nav>
        </div>
</header>
<table action="add_exit.php" class="sec1 container" style="margin-top: 100px; margin-bottom: 200px;">
        <h2 class="container" style="padding-top: 100px; text-align: center;">Пользователь</h2>
        <img class="container"style="width: 105px; height: 140px; margin-left: 870px; margin-top: 100px;" src="img/1.png" alt="">
        <tr style="background: green; color:white;">
            <th>login</th>
            <th style="background: #green; color:white;">name</th>
        </tr>
        <?php
            foreach($sql as $item){
                if($_SESSION['user_id'] == $item[0]){
                ?>
                    <tr style="background: #white ;">
                        <td style="background: #white;"> <?= $item[1] ?> </td>
                        <td> <?= $item[3] ?> </td>
                      
                    </tr>
                   
                <?php
                
                }
            }
        ?>
        </table>
       <div>    
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
                </div></footer>
</body>
</html>