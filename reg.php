<!DOCTYPE html>
<html lang="ru">
<head>
 <?php 
 $website_title = 'Регистрация на сайте';
 require 'blocks/head.php';?>
</head>
<body>
  <?php require 'blocks/header.php'?>
  <?php
    if($_COOKIE['login'] == ''):
        ?>
  <main class="container-fluid">
    <div class="container">

    <h1>CUT.IT</h1>
    <p>Вам нужно сократить ссылку? Прежде чем это сделать, <br>зарегистрируйтесь на сайте</p>
    <form action="ajax/reg.php" method="post" autocomplete="off">
      <div class="form-group">
        <input type="email" class="form-control mb-2" id="email" placeholder="Введите почту">
        <input type="login" class="form-control mb-2" id="login" placeholder="Введите логин">
        <input type="pass" class="form-control mb-2" id="pass" placeholder="Введите пароль">
        <div class="alert alert-danger mt-2" id="errorBlock"></div>
        <button type="button" id="reg_user" class="btn btn-outline-danger mt-3">Зарегистрироваться</button>
      </div>
    </form>
    <p>Есть аккаунт? Тогда вы можете <a href="auth.php">авторизоваться</a></p>

  </div>
  </main>
  <?php
  else:
  ?>
  <div class="container">
      <h2>Кабинет пользователя</h2>
      <p>Привет, <?=$_COOKIE['login'] ?></p>
      <button class="btn btn-danger mb-4" id="exit">Выйти</button>
  </div>
  <?php
    endif;
  ?>

  <?php require 'blocks/footer.php'?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/index.js"></script>

</body>
</html>
    