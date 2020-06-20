<?php

$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = '';
if(strlen($login) <= 3)
    $error = 'Логин должен быть не менее 3х символов!';
else if(strlen($pass) <= 3)
    $error = 'Пароль должен быть не менее 3х символов!';

if($error != '') {
    echo $error;
    exit();
}

$hash = "sdfjsdkhgs234jh324SDk";
$pass = md5($pass . $hash);

require_once '../mysql_connect.php';


$sql = 'SELECT `id` FROM `users` WHERE `login` = :login && `pass` = :pass';
$query = $pdo->prepare($sql);
$query->execute(['login' => $login, 'pass' => $pass]);

$user = $query->fetch(PDO::FETCH_OBJ);
if($user->id == 0)
    echo 'Такой пользователь не зарегистрирован!';
else{
    setcookie('login', $login, time() + 3600 * 24, "/");
    echo 'Готово';
}

?>

