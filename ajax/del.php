<?php

//$big = trim(filter_var($_POST['big'], FILTER_SANITIZE_STRING));
//$short = trim(filter_var($_POST['short'], FILTER_SANITIZE_STRING));

$sql = 'DELETE `id` FROM `link` WHERE `id` = :id';
$id = $_GET['id'];
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);


//
//$sql = 'SELECT count(id) as count FROM link WHERE short=?';
//$query = $pdo->prepare($sql);
//$query->execute([$short]);
//$count_link = $query->fetch();
//if ((int)$count_link['count'] === 0) {
//    $sql = 'INSERT INTO link(big, short) VALUES(:big, :short)';
//    $query = $pdo->prepare($sql);
//    $query->execute(['big' => $big, 'short' => $short]);
//
//
//    echo 'Готово';
//} else {
//    exit('Такое сокращение уже используется в базе!');
//}
//if( is_numeric($_POST['id']) ) {
//    $commentId = (int)$_POST['id'];
//    $sqlDel = 'DELETE FROM comments WHERE id = ' . $commentId;
//    $result = $db->query($sqlDel);
//}
//}
