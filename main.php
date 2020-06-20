<?php
    if($_COOKIE['login'] == '') {
        header('Location: /reg.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $website_title = 'Сократи ссылку';
    require 'blocks/head.php';
    ?>
</head>
<body>
    <?php require 'blocks/header.php'?>

    <main class="container-fluid">
        <div class="container">

            <h1>CUT.IT</h1>
            <p>Вам нужно сократить ссылку? Сейчас мы это сделаем!</p>

            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="big" class="form-control mb-2" id="big"  placeholder="Длинная ссылка">
                    <input type="text" name="short" class="form-control mb-2" id="short"  placeholder="Короткое название">

                    <div class="alert alert-danger mt-2" id="errorBlock"></div>
                    <button type="button" id="cut" class="btn btn-outline-primary mt-3">Уменьшить</button>
                </div>
            </form>
    <?php
    echo '<h2>Сoкращенные ссылки</h2>';
    require 'mysql_connect.php';
//    $name = $_COOKIE["login"];

    $sql = 'SELECT * FROM `link`';
    $query = $pdo->query($sql);
    while($row = $query->fetch(PDO::FETCH_OBJ)) {

        echo "<div class='container delete'>
              <div class='jumbotron ml-4 pt-2 pb-2 pl-0 pr-0 align-self-center'>
                <p class='m-0 p-o'>Длинная: $row->big</p>
                <p class='m-0 p-o'>Короткая: <a href='$row->big'>$row->short</a></p>
              <a href='/del.php?id=$row->id'>
              <button class='btn btn-danger btn-sm m-0 p-o' id='del'>Удалить <i class='fas fa-trash-alt'></i></button>
              </a>
              </div>
              </div> ";
    }
    $id = $_GET['id'];
    $sql = 'DELETE `id` FROM `link` WHERE `id` = :id';

    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);


    ?>
        </div>
    </main>


<?php require 'blocks/footer.php'?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>
