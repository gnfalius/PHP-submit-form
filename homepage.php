<!doctype html>
<?php session_start() ?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>PHP registration form</title>
</head>
<body>
<h1>Введите свои данные</h1>
<form method="post" action="dataCheck.php">
    <p>Ваше имя:</p><input type="text" name="name">
    <div class="text-danger"> <?php if (isset($_SESSION['nameError'])) echo $_SESSION['nameError']?></div>
    <p>Ваша фамилия:</p><input type="text" name="secondName">
    <div class="text-danger"><?php if (isset($_SESSION['secondNameError'])) echo $_SESSION['secondNameError']?></div>
    <p>Ваш email:</p><input type="email" name="email">
    <div class="text-danger"><?php if (isset($_SESSION['emailError'])) echo $_SESSION['emailError']?> </div>
    <p></p><input type="submit" value="Отправить">
</form>
</body>
<?php session_destroy()?>
</html>


