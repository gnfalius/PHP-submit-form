<?php
session_start();
if (isset($_POST['name']) && isset($_POST['secondName']) && isset($_POST['email'])) {
    $name = htmlentities(trim($_POST['name']));
    $secondName = htmlentities(trim($_POST['secondName']));
    $email = htmlentities(trim($_POST['email']));
}
if (strlen($name) < 3) {
    $_SESSION['nameError'] = 'Имя должно содержать больше 3 букв';
}
if (strlen($secondName) < 4) {
    $_SESSION['secondNameError'] = 'Фамилия должна содержать больше 4 букв';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['emailError'] = 'Введите корректный email';
}
if (isset($_SESSION['nameError']) || isset($_SESSION['secondNameError']) || isset($_SESSION['emailError'])) {
    header('Location:homepage.php');
}


