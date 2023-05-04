<?php
require_once 'conect.php';
session_start ();

if ($_POST["pass"] == $_POST["pass1"] && $_POST['approval'] == 'on') {
    //Вставляем данные, подставляя их в запрос
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass=$_POST['pass'];
    $passmd5 = md5($pass);
    if (mb_strlen($pass) >= 5) {
        $sql = mysqli_query($link, "INSERT INTO `user` ( `login`, `name`, `password`, `E-mail`, `tel`, `approval`, `country`, `city`) VALUES ('$login', '$name', '$passmd5', '".$_POST['E-mail']."', '".$_POST['tel']."', '".$_POST['approval']."', '".$_POST['country']."', '".$_POST['city']."')");
       
    }else{
        echo "<h3 style = 'color: red'>Недопустимая длина пароля, меньше 5 символов</h3>";   
    }
    
}else {
    echo "<h3 style = 'color: red'>Неверны введены данные</h3>";
}

?>
 