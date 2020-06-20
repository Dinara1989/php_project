<?php
$big = trim(filter_var($_POST['big'], FILTER_SANITIZE_STRING));
$short = trim(filter_var($_POST['short'], FILTER_SANITIZE_STRING));
$name = $_COOKIE["login"];

$error = '';
if (strlen($big) <= 6)
    $error = 'Подозрительно короткая ссылка!';
else if (strlen($short) <= 2)
    $error = 'МАААЛО!!!';

if ($error != '') {
    echo $error;
    exit();
}

require_once '../mysql_connect.php';

$sql = 'SELECT count(id) as count FROM link WHERE short=?';
$query = $pdo->prepare($sql);
$query->execute([$short]);
$count_link = $query->fetch();
if ((int)$count_link['count'] === 0) {
    $sql = 'INSERT INTO link(big, short, name) VALUES(:big, :short, :name)';
    $query = $pdo->prepare($sql);
    $query->execute(['big' => $big, 'short' => $short, 'name' =>$name]);


    echo 'Готово';
} else {
    exit('Такое сокращение уже используется в базе!');
}