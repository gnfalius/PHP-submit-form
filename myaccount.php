<!doctype html>
<?php
require('UserDB.php');
$database = new UserDb();
$name = $database->yourInfo('name', $_COOKIE['loggedIn']);
$secondName = $database->yourInfo('secondName', $_COOKIE['loggedIn']);
$email = $database->yourInfo('email', $_COOKIE['loggedIn']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Ваши данные:
    <ul>Имя: <?php echo $name['name'] ?></ul>
    <ul>Фамилия: <?php echo $secondName['secondName'] ?></ul>
    <ul>Email: <?php echo $email['email'] ?></ul>
</li>
<form action="logout.php" method="get">
    <input type="submit" value="Добавить нового пользователя">
</form>
</body>
</html>