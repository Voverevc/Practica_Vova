<?php
    require_once 'conect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.css">
    <link href="add_exit.php">
    <title>Панель администратора</title>
</head>
<body style="text-align: center" class="container">
    <form action="add_exit.php" method="POST"><br>
    <h2>Привет <?php
            echo $_SESSION['user_name'];
        ?>, права admin</h2>
    </form>
    <button class="btn btn-primary w-25" type="submit" onclick="window.location.href = 'index.php'">Выход</button><br>
    
</body>
</html>
<?php
require_once 'conect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="admin.php" method = "post">
<input type="text" name="id" required placeholder="введите id товара"><br>
<select name="zamena">
<option value="id">id товара</option>
<option value="name">название</option>
<option value="opisanie">описание</option>
<option value="parametri">параметры</option>
<option value="izgotovitel">изготовитель</option>
<option value="garantiya">гарантия</option>
</select>
<input type="text" name="value_update">
<a href="admin.php"><input type="submit" value="применить" class="btn btn-primary"> <br></a>
</form>
<?php
if(isset($_POST['zamena']))
{
$id=$_POST['id'];
$field=$_POST['zamena'];
$value_update=$_POST['value_update'];
mysqli_query($link, "UPDATE `tovar` SET `".$field."`= '".$value_update."' WHERE `id_t` = '".$id."'");
echo "Товар обновлен";
}
?>
</body>
</html>


<?php
require_once "conect.php";
$sql = mysqli_query($link, "SELECT * FROM `tovar`");
$sql = mysqli_fetch_all($sql);
error_reporting(-1);
?>
<form action="admin.php" method = "POST">
<input type="text" id="name" name="name" class="input" placeholder="введите Название товара"><br> <br>
<input type="text" id="opisan" name="opisan" class="input" placeholder="введите Описание товара"><br> <br>
<input type="text" id="parametr" name="parametr" class="input" placeholder="введите Параметры товара"><br> <br>
<input type="text" id="izotavlenie" name="izotavlenie" class="input" placeholder="пведите изготовитель товара"><br> <br>
<input type="text" id="id_cat" name="id_cat" class="input" placeholder="иведите id категории товара"><br> <br>
<input type="text" id="Srok" name="Srok" class="input" placeholder="введите Срок товара"><br> <br>
<input type="text" id="Buy" name="Buy" class="input" placeholder="введите цену товара"><br> <br>
<input type="submit" id="name" name="submit" value="Добавить" class="btn btn-warning"> <br>
</form> <br>
<?php
if (isset($_POST["name"])){
$sql = mysqli_query($link, "INSERT INTO `tovar` ( `name`, `opisan`, `parametr`, `izotavlenie`, `id_cat`, `Srok`, `Buy`) VALUES ( '".$_POST["name"]."', '".$_POST["opisan"]."','".$_POST["parametr"]."','".$_POST["izotavlenie"]."','".$_POST["id_cat"]."','".$_POST["Srok"]."', '".$_POST["Buy"]."')");
echo "Товар добавлен";
}else{
echo "Товар не добавлен";
}

?>
