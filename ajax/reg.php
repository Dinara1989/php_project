<?php
  
  $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
  $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
  $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

  $error = '';
  if(strlen($email) <= 3)
    $error = 'Введите email';
  else if(strlen($login) <= 3)
    $error = 'Логин слишком короткий';
  else if(strlen($pass) <= 3)
    $error = 'Пароль должен быть не менее 3х символов';

    if($error != '') {
        echo $error;
        exit();
      }

  $hash = "sdfjsdkhgs234jh324SDk";
  $pass = md5($pass . $hash);

  require_once '../mysql_connect.php';

  $sql = 'SELECT count(id) as count FROM users WHERE login=?';
  $query = $pdo->prepare($sql);
  $query->execute([$login]);
  $count_users = $query->fetch();
  if ((int)$count_users['count'] === 0) {
    $sql = 'INSERT INTO users(email, login, pass) VALUES(:email, :login, :pass)';
    $query = $pdo->prepare($sql);
    $query->execute(['email' => $email, 'login' => $login, 'pass' => $pass]);

    setcookie('login', $login, time() + 3600 * 24, "/");
      echo 'Готово';
  } else {
      exit('Пользователь с таким логином уже существует!');
  }



