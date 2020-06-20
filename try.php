<!--  <?php
//    require_once 'mysql_connect.php';
//
//    echo'<h2>Сокращенные ссылки</h2>';

//        if($_POST['big'] != '' && $_POST['short'] != '') {
//
//        $big = trim(filter_var($_POST['big'], FILTER_SANITIZE_STRING));
//        $short = trim(filter_var($_POST['short'], FILTER_SANITIZE_STRING));
//
//        $sql = 'INSERT INTO link(big, short) VALUES(?, ?)';
//        $query = $pdo->prepare($sql);
//        $query->execute([$big, $short]);
//
//        echo 'Готово';
//    if($_POST['big'] != '' && $_POST['short'] != '') {
//
//    $big = trim(filter_var($_POST['big'], FILTER_SANITIZE_STRING));
//    $short = trim(filter_var($_POST['short'], FILTER_SANITIZE_STRING));
//
//    $sql = 'INSERT INTO link(big, short, id_name) VALUES(?, ?, ?)';
//    $query = $pdo->prepare($sql);
//    $query->execute([$big, $short, $_GET['id']]);
//
////    echo 'Готово';
//
//    $sql = 'SELECT * FROM `link` WHERE `id_name` = :id_name ORDER BY `id_name` DESC';
//    $query = $pdo->prepare($sql);
//    $query->execute(['id_name' => $_GET['id_name']]);
//    $links = $query->fetchAll(PDO::FETCH_OBJ);
//
//    foreach ($links as $link) {
//        echo "<div class='container'>
//              <div class='jumbotron ml-4 pt-2 pb-2 pl-0 pr-0 align-self-center'>
//                <p class='m-0 p-o'>Длинная: $link->big</p>
//                <p class='m-0 p-o'>Короткая: $link->short</p>
//              <button class='btn btn-danger btn-sm m-0 p-o' id='del'>Удалить <i class='fas fa-trash-alt'></i></button>
//              </div>
//              </div> ";
//        }



//    $sql = 'SELECT * FROM `link` WHERE `id_name` = :id ORDER BY `id` DESC';
//    $query = $pdo->query($sql);
//
//    while($row = $query->fetch(PDO::FETCH_OBJ)) {
//
//        echo "<div class='container'>
//              <div class='jumbotron ml-4 pt-2 pb-2 pl-0 pr-0 align-self-center'>
//                <p class='m-0 p-o'>Длинная: $row->big</p>
//                <p class='m-0 p-o'>Короткая: $row->short</p>
//              <button class='btn btn-danger btn-sm m-0 p-o'>Удалить <i class='fas fa-trash-alt'></i></button>
//              </div>
//              </div> ";
//    }
//    ?>--><?php
