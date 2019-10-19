<?php
$driver = 'mysql';
$host = 'localhost';
$db_name = 'test';
$db_login = 'root';
$db_password = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_login, $db_password, $options);
    session_start();
} catch (PDOException $e) {
    die("АШИБКА АШИБКА АШИБКА" . $e->getMessage());
}


