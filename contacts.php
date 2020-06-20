<?php
    require_once 'vendor/autoload.php';

    $client = new App\Client();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $website_title = 'Как со мной связаться';
    require 'blocks/head.php'; ?>
</head>
<body>
<?php require 'blocks/header.php'?>
<main class="container-fluid">
    <div class="container">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/img/photo.jpg" class="card-img" alt="my_photo">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Динара Чанчанян</h5>
                        <p class="card-text text-left">09.01.1989</p>
                        <p class="card-text text-left">Центрально-Африканская Республика, город Банги</p>
                        <p class="card-text text-left">+236 75 918 485<br>WA: +374 93 097 189</p>
                        <p class="card-text text-left">Email: Dinara.Chanchanyan@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="text-center mt-4 mb-4 text-uppercase">Обратная связь</h4>
        <form action="ajax/mail.php" method="post" autocomplete="off">
            <div class="form-group">
                <input type="text" name="username" class="form-control mb-2" id="name" placeholder="Введите имя">
                <input type="email" name="mail" class="form-control mb-2" id="email" placeholder="Введите email">
                <input type="text" name="age" class="form-control mb-2" id="age" placeholder="Введите возраст">
                <textarea name="mess" id="mess" class="form-control" placeholder="Введите сообщение"></textarea>
                <div class="alert alert-danger mt-2" id="errorBlock"></div>
                <button type="button" id="mess_send" class="btn btn-outline-danger mt-3">Отправить</button>
            </div>
        </form>
    </div>
</main>
<?php require 'blocks/footer.php'?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>
