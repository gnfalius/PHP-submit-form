<!doctype html>
<?php session_start() ?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP registration form</title>
</head>
<body>
<h1>Введите свои данные</h1>
<form method="post" action="dataCheck.php">
    <p>Ваше имя:</p><input type="text" name="name">
    <?php if (isset($_SESSION['nameError'])) echo $_SESSION['nameError']?>
    <p>Ваша фамилия:</p><input type="text" name="secondName">
    <?php if (isset($_SESSION['secondNameError'])) echo $_SESSION['secondNameError']?>
    <p>Ваш email:</p><input type="email" name="email">
    <?php if (isset($_SESSION['emailError'])) echo $_SESSION['emailError']?>
    <?php if (isset($_SESSION['missingData'])) echo $_SESSION['missingData']?>
    <p></p><input type="submit" value="Отправить">
</form>
</body>
<?php session_destroy()?>
</html>


