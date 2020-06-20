<header>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="img/cat_clean.png" width="80" height="80" class="d-inline-block align-top" alt="logo" loading="lazy">
      </a>
      <span>CUT.IT</span>
    <ul class="nav justify-content-end mr-5">

      <li class="nav-item">
        <a class="nav-link" href="/contacts.php">Контакты</a>
      </li>

        <?php
        if($_COOKIE['login'] == ''):
        ?>
      <li class="nav-item">
        <a class="nav-link" href="/reg.php">Зарегистрироваться</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/auth.php">Войти</a>
      </li>
        <?php
        else:
        ?>
        <li class="nav-item">
            <a class="nav-link " href="/auth.php">Кабинет пользователя</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/main.php">Главная</a>
        </li>
        <?php
        endif;
        ?>
    </ul> 
  </nav>
  </header>