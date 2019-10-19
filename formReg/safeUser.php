<?php
require_once 'dbConnection.php';
if (isset($_SESSION['user_login'])) {
    echo $_SESSION['user_login'] . "Вы авторизовались";
    echo '<a href="logOut.php">Выйти из аккаунта</a>';
} else {
    die("??");
}
