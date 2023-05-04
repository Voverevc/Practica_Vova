<?php
    session_start();
    require_once 'conect.php';
    
    if (isset($_POST['login']) && isset($_POST['pass'])) {
        // $login=$_POST['login'];
        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        $name = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
        // $img=$_POST['img'];
        $pass=$_POST['pass'];
        $passmd5 = md5($pass);
        $query = "SELECT *FROM `user` WHERE `login`='{$login}' AND `password`='{$passmd5}' LIMIT 1";
        $sql = mysqli_query($link, $query) or die(mysqli_error());
        if (mysqli_num_rows($sql) == 1) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_per'] = $row['prava'];
            $_SESSION['user_name'] = $login;
            if ($_SESSION['user_per']=="admin"){
                echo "<script>window.location.href='admin.php'</script>";
                echo 'Привет '.$_POST['login'].', права admin';
            }
            if ($_SESSION['user_per']=="user") {
                echo "<script>window.location.href='user.php'</script> ";
                echo 'Привет '.$_POST['login'].', права user';
            }
        }else {
            die('Неверное имя пользователя или пароль');
        }
    }
        // header('Location: index.php');
?>