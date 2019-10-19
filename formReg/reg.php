<?php
require_once 'dbConnection.php';
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);
if (!empty($login) && !empty($password)) {
    $sql_check = 'SELECT EXISTS(SELECT login FROM users WHERE login = :login)';
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute([':login' => $login]);
    if ($stmt_check->fetchColumn()) {
        die("Логин занят");
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = 'INSERT INTO users(login,password,email) VALUES(:login,:password,:email)';
    $params = ['login' => $login, ':password' => $password, 'email' => $email];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    echo "Вы успешно зарегались";
} else {
    echo "ЗАПОЛНИ ПОЛЯ!!!!";
}

