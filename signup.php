<?php
session_start();
$title = "Форма авторизации"; // название формы
require "template/header.php"; // подключаем шапку проекта
require "include/connect_db.php";
?>
<?php
if (!empty($_GET)) {
  if (!empty($_GET["error"])) {
    switch ($_GET["error"]) {
      case "emptyfields":
        $fields = "<h6 style='color:red ;'>Не все поля заполнены</h6>";
        break;
      case "regfailpass":
        $wrongp = "<h6 style='color:red ;'>В пароле могут быть только символы<br>A-Z, Цифры от 0-9, символы _-</h6>";
        break;
      case "reffaillogin":
        $wrongl = "<h6 style='color:red ;'>В логине могут быть только символы<br>  A-Z, Цифры от 0-9 и символы _-</h6>";
        break;
      case "regfailemail":
        $wronge = "<h6 style='color:red ;'>E-mail неверный</h6>";
        break;
      case "passnotmatch":
        $passnot = "<h6 style='color:red ;'>Пароли не совпадают</h6>";
        break;
      case "mysqlerror":
        $server1 = "<h6 style='color:red ;'>Ошибка на сервере, попробуйте позже</h6>";
        break;
      case "mysqlerror":
        $server2 = "<h6 style='color:red ;'>Ошибка на сервере, попробуйте позже</h6>";
        break;
      case "mysqlerrornotexist":
        $loginexist = "<h6 style='color:red ;'>Такой логин уже существует/h6>";
        break;
      case "mysqlerrorserver":
        $server3 = "<h6 style='color:red ;'>Ошибка на сервере, попробуйте позже/h6>";
        break;
      case "mysqlerroremailexist":
        $emailexist = "<h6 style='color:red ;'>Такая почта уже существует</h6>";
        break;
      case "mysqlerrorserver2":
        $server4 = "<h6 style='color:red ;'>Ошибка на сервере, попробуйте позже</h6>";
        break;
    }
  }
}
?>

<link rel="stylesheet" href="css/style1.css">



<div class="login-box mb-5">
    <h2>Регистрация</h2>
    <form action="include/reginc.php" method="POST">
        <div class="user-box">
            <input type="text" name="login" required="">
            <label>Логин</label>
        </div>
        <div class="user-box">
            <input type="email" name="email" required="">
            <label>Почта</label>
        </div>
        <div class="user-box">
            <input type="password" name="pass" required="">
            <label>Пароль</label>
        </div>
        <div class="user-box">
            <input type="password" name="passwordconf" required="">
            <label>Повторите пароль</label>

        </div>
        <p>Если у вас уже есть аккаунт <a href="login.php" style="color:#03e9f4;">войдите</a></p>
        <?php echo ($fields ?? "") ?>
        <?php echo ($wrongp ?? "") ?>
        <?php echo ($wrongl ?? "") ?>
        <?php echo ($wronge ?? "") ?>
        <?php echo ($server1 ?? "") ?>
        <?php echo ($server2 ?? "") ?>
        <?php echo ($loginexist ?? "") ?>
        <?php echo ($server3 ?? "") ?>
        <?php echo ($emailexist ?? "") ?>
        <?php echo ($server4 ?? "") ?>
        <button type="submit" value="reg" name="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Регистрация
        </button>
    </form>
</div>

<br>
<br>
<br>