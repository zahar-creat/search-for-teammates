<?php
session_start();
$title = "Войти"; // название формы
require "template/header.php"; // подключаем шапку проекта
require "include/connect_db.php";

?>
<?php
if (!empty($_GET)) {
  if (!empty($_GET["error"])) {
    switch ($_GET["error"]) {
      case "emptyfields":
        $emptyfields = "<h6 style='color:red ;'>Не все поля заполнены</h6>";
        break;
      case "sqlerror":
        $servererror = "<h6 style='color:red ;'>Ошибка на сервере</h6>";
        break;
      case "wrongpass":
        $passn = "<h6 style='color:red ;'>Пароль неверный</h6>";
        break;
    }
  }
}
?>

<link rel="stylesheet" href="css/style1.css">


<div class="login-box">
    <h2>Войти</h2>
    <form action="include/logininc.php" method="POST">
        <div class="user-box">
            <input type="text" name="login" required="">
            <label>Логин</label>
        </div>
        <div class="user-box">
            <input type="password" name="pass" required="">
            <label>Пароль</label>

            <p class="mt-2">Если у вас еще нет аккаунта то <a href="signup.php"
                    style="color:#03e9f4;">зарегистрируйтесь</a></p>
            <?php echo ($emptyfields ?? "") ?>
            <?php echo ($servererror ?? "") ?>
            <?php echo ($passn ?? "") ?>
        </div>
        <button type="submit" value="reg" name="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Войти
        </button>

    </form>
</div>
</body>

</html>
<br>
<br>
<br>