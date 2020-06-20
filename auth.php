<!DOCTYPE html>
<html lang="ru">
<head>
 <?php
 $website_title = 'Авторизация на сайте';
 require 'blocks/head.php';?>
</head>
<body>
  <?php require 'blocks/header.php'?>
  <?php
  if($_COOKIE['login'] == ''):
  ?>
  <main class="container-fluid">
    <div class="container">
    <h2>Авторизация</h2>
    <p>Здесь вы можете авторизоваться на сайте</p>
    <form action="ajax/auth.php" method="post" autocomplete="off">
      <div class="form-group">
        <input type="login" class="form-control mb-2" id="login" placeholder="Введите логин">
        <input type="pass" class="form-control mb-2" id="pass" placeholder="Введите пароль">
        <div class="alert alert-danger mt-2" id="errorBlock"></div>
        <button type="button" id="auth_user" class="btn btn-outline-success mt-3">Войти</button>
          <p class="mt-2">Еще нет аккаунта? Тогда  <a href="reg.php">зарегистрируйтесь</a> тут!</p>
      </div>
    </form>
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
