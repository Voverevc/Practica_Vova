<?php
$host = 'localhost';  // Хост, у нас все локально
        $user = 'root';    // Имя созданного вами пользователя
        $pass = ''; // Установленный вами пароль пользователю
        $db_name = 'messad';   // Имя базы данных
        $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
        if (!$link) {
          echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
          exit;  }   // Ругаемся, если соединение установить не удалось
?>
<?php
 $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$tema= mysqli_real_escape_string($link, $_REQUEST['tema']);
$text= mysqli_real_escape_string($link, $_REQUEST['texti']);
 
// Попытка выполнения запроса вставки
$sql = "INSERT INTO net (first_name,  email, tema, texti) VALUES ('$first_name',  '$email', '$tema', '$text')";
if(mysqli_query($link, $sql)){
    echo "Записи успешно добавлены.";
} else{
    echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($link);
}
 
// Закрыть соединение
mysqli_close($link);
?>