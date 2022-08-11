<?php
class UserDb{

    public function emailExists($email)
    {
        $conn = new PDO("mysql:host=localhost;port=3306;dbname=registrationForm", "root", "230476Igor");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("select count(*) as rowCount from Users where email=:email");
        $stmt->bindValue('email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row['rowCount'];
    }
    function addUser($user)
    {
        $conn = new PDO("mysql:host=localhost;port=3306;dbname=registrationForm", "root", "230476Igor");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("insert into Users (name, secondName,  email) values(:name,:secondName,:email)");
        $stmt->bindValue('name', $user->name);
        $stmt->bindValue('secondName', $user->secondName);
        $stmt->bindValue('email', $user->email);
        $stmt->execute();
        return $conn->lastInsertId();
    }
    function yourInfo($column,$insertId)
    {
        $conn = new PDO("mysql:host=localhost;port=3306;dbname=registrationForm", "root", "230476Igor");
        $stmt = $conn->prepare("Select $column from Users where id= :insertId");
        $stmt->bindValue(':insertId', $insertId);
        $stmt->execute();
        return $stmt->fetch();
    }
}
