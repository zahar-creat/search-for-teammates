<?php
session_start();
$title = "Поиск игроков";
$description = "Наш сайт поможет, найти тиммейта, напарника или собрать команду для своей любимой игры. Просто оставь заявку и люди откликнутся.";
$keywords = "найти тиммейта, собрать команду, ищу команду кс го, поиск тиммейтов, где искать команду, тиммейта,ищу тиммейта";
require 'include/connect_db.php';
require 'template/header.php';
$posts = [];
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    function clean($var)
    {
        $var = strip_tags($var);
        $var = trim($var);
        $var = str_replace(chr(10), "<br>", $var);
        $var = str_replace(chr(13), "<br>", $var);
        return $var;
    }
    $id = clean($id);
    $sql =  'SELECT request.*,users.login,games.gamename,socials.*
                            FROM request 
                            INNER JOIN games ON request.game_id = games.id  
                            INNER JOIN users ON request.user_id = users.id
                            LEFT JOIN socials ON request.user_id = socials.user_id
                            WHERE request.id=?
                            ORDER BY request.id DESC';
    $stmt = mysqli_stmt_init($mysql);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    $posts = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($posts);
}



?>
<br>

<div class="container back mt-5">


    <p class='pcolor mt-3' style=' color: #CC9900 ;'>
        <?= $row['gamename'] ?>
    <p>


    <p class='mr-2 pcolor' style='color: #29c5e6;'>
        Никнейм: <?= $row['login'] ?>
    <p>

    <h4>Общая информация</h4>
    <p class="pcolor">Страна: <?= $row['country'] ?></p>
    <p class="pcolor">Возраст: <?= $row['age'] ?> лет</p>
    <p class="pcolor">Цель: <?= $row['mood'] ?></p>
    <p class="pcolor">Мое время: <?= $row['time_zone'] ?></p>
    <p class="pcolor">Добавлено: <?php $date = date_create($row['date']);
                                    echo date_format($date, 'd.m.Y'); ?></p>
    <h4>Сообщение:</h4>
    <p class="pcolor"><?= $row['description'] ?> </p>
    <h5>Контакты:</h5>
    <div class="flex mr-3">

        <p style="text-align: left; " class="mt-1 pcolor mr-2"><a href="https://vk.com/id<?= $row['vk_id'] ?>"><img src="images/vk1.png" alt=""></a>
        </p>
        <p style="text-align: left;" class="mt-1 pcolor mr-2">
            <a href="https://steamcommunity.com/id/<?= $row['steam_id'] ?>"><img src="images/steam-logo.png" alt="">
            </a>
        </p>


        <p style="text-align: left;" class="mt-1 pcolor mr-2 ">Discord: <?= $row['ds_id'] ?></p>



    </div>



</div>

<?php require 'template/footer.php'; ?>