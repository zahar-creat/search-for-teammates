<?php
session_start();
$title = "Заявка";
$description = "";
$keywords = "";
require "include/connect_db.php";
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
require 'template/header.php'; // подключаем шапку проекта


?>

<br>
<br>
<br>
<br>

<div class="container back">
    <h3 class="text-center mt-2">Оставить заявку</h3>

    <div class="row">

        <form action="include/formsinc.php" method="post" class="mt-2 ml-2">
            <div class="flex">
                <div class="col-2">
                    <label for="time_zone" class="form-label pcolor">Часовой пояс</label>
                    <input list="time_zone_list" type="text" class="form-control " name="time_zone" id="time_zone" placeholder="Ваш часовой пояс"><br>
                    <datalist id="time_zone_list">
                        <option>UTC-12</option>
                        <option>UTC-11</option>
                        <option>UTC-10</option>
                        <option>UTC-9</option>
                        <option>UTC-8</option>
                        <option>UTC-7</option>
                        <option>UTC-6</option>
                        <option>UTC-5</option>
                        <option>UTC-4</option>
                        <option>UTC-3</option>
                        <option>UTC-2</option>
                        <option>UTC-1</option>
                        <option>UTC+0</option>
                        <option>UTC+1</option>
                        <option>UTC+2</option>
                        <option>UTC+3</option>
                        <option>UTC+4</option>
                        <option>UTC+5</option>
                        <option>UTC+6</option>
                        <option>UTC+7</option>
                        <option>UTC+8</option>
                        <option>UTC+9</option>
                        <option>UTC+10</option>
                        <option>UTC+11</option>
                        <option>UTC+12</option>

                    </datalist>
                </div>

                <div class="col-2">
                    <label for="age" class="form-label pcolor">Ваш возраст</label>
                    <input id="age" onchange="fixage()" type="number" class="form-control" name="age">
                </div>
                <div class="col-3">
                    <label for="mood" class="form-label pcolor">Ваш настрой</label>
                    <select name="mood" id="mood " class="form-control">
                        <option value="">Не выбрано</option>
                        <option>Серьезно</option>
                        <option>Не серьезно</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="country " class="form-label pcolor ">Ваша страна</label>
                    <select name="country" id="country " class="form-control tran ">
                        <option value="">Не выбрано</option>
                        <option>Россия</option>
                        <option>Казахстан</option>
                        <option>Украина</option>
                        <option>Молдова</option>
                        <option>Армения</option>
                    </select>
                </div>
                <div class="game col-3 mb-3">
                    <label for="game" class="form-label pcolor">Выберите игру</label>
                    <select name="game" id="game" class="form-control">
                        <option value="">Не выбрано</option>
                        <?php
                        $sql = "SELECT * FROM games";
                        $result = mysqli_query($mysql, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value=" . $row["id"] . ">" . $row["gamename"] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-6 mb-3">

                <label class="form-label pcolor" for="description">Сообщение</label>
                <textarea type="text" class="form-control " rows="4" name="description" id="description" placeholder=""></textarea><br>

                <button class="btn btn-info pcolor" name="submit" type="submit" value="submit">Оставить заявку</button>

            </div>
        </form>
        <p class="mt-1 ml-3">В личном кабинете вы можете добавить ссылки на свои соц. сети или дискорд, чтобы другим
            игрокам проще было вас найти.</p>
    </div>

</div>
<script src="js/main.js"></script>
<br><br><br><br><br><br><br><br><br><br>
<?php require 'template/footer.php'; ?>
<!-- Подключаем подвал проекта -->