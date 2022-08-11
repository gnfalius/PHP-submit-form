<?php
require('UserDB.php');
require ('User.php');
$database= new UserDb();
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

if ($database->emailExists($email)){
    $_SESSION['emailError']='Пользователь с таким email уже зарегистрирован';
}
if (isset($_SESSION['nameError']) || isset($_SESSION['secondNameError']) || isset($_SESSION['emailError'])) {
    header('Location:homepage.php');
    die();
}
$user = new User($name,$secondName,$email);
$insertId=$database->addUser($user);
setcookie('loggedIn',$insertId, time()+99999999);
header('Location: myaccount.php');




