<?php
//Этот вариант пыталась реализовать через Composer, но при отправке
//просто перекидывает на страницу ошибки.

//require_once '../vendor/autoload.php';
//$mail = new PHPMailer;
//$mail->CharSet = 'utf-8';
//
//$name = $_POST['username'];
//$mail = $_POST['mail'];
//$name = $_POST['age'];
//$mail = $_POST['mess'];
//
//$mail->isSMTP();
//$mail->Host = 'smtp.example.com';
//$mail->SMTPAuth = true;
//$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
//$mail->Port = 25;
//$mail->Username = 'dinara@example.com';
//$mail->Password = '123456';
//$mail->setFrom('list@example.com', 'List manager');
//$mail->addReplyTo('list@example.com', 'List manager');
//
//$mail->Subject = 'PHPMailer Simple database mailing list test';
//$mail->Subject = 'PHPMailer Simple database mailing list test';
//
//$mail->setForm = 'Обратная связь';
//$mail->Body = '' .$name . 'оставил заявку на моем сайте. Его почта: ' .$mail;
//$mail->AltBody = '';
//
//if(!$mail->send()) {
//    echo 'Error';
//} else {
//    echo 'Спасибо!';
//}


$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$age = trim(filter_var($_POST['age'], FILTER_SANITIZE_STRING));
$mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($name) <= 3)
    $error = 'Имя слишком короткое';
else if (strlen($email) <= 3)
    $error = 'Email слишком короткий';
else if (strlen($mess) <= 3)
    $error = 'Сообщение слишком короткое';

if ($error != '') {
    echo $error;
    exit();
}

$my_email = "dinara198989@bk.ru";
$subject = "=?utf-8?B?".base64_encode("Сообщение от пользователя сайта")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text\html; charset=utf-8\r\n";

mail($my_email, $subject, $mess, $headers);

echo "Готово";

