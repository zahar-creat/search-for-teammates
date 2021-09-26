<?php

session_start();
$title = "Личный кабинет";
$description = " ";
$keywords = " ";
require "template/header.php";
require "include/connect_db.php";

?>
<br>
<br>


<div class="text-center mt-5">
    <div class="cards request details">
        <div class="cards__title">
            <h4 class="cards__author pcolor mb-3"><?php echo  $_SESSION["username"] ?><span class="status  online "></span></h4>
        </div>
        <div class="cards__content">
            <p style="text-align: left;" class="mb-1 pcolor">Заявки:</p>
            <ul class="request__list">

            </ul>
            <p class="mb-1 pcolor">Контакты</p>
        </div>

        <div class="cards__bottom contact-list">
            <form action="" class="form-contorl">
                <?php
                $sql = "SELECT * FROM socials WHERE user_id=?";
                $stmt = mysqli_stmt_init($mysql);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "s", $_SESSION['user_id']);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_array($result)) { ?>
                    <div class=" mr-3">
                        <p style="text-align: left; " class="mt-1 pcolor">Вконтакте: <a href="https://vk.com/id<?= $row['vk_id'] ?>"> https://vk.com/id<?= $row['vk_id'] ?></a></p>

                    </div>
                    <div class=" mr-3">
                        <p style="text-align: left;" class="mt-1 pcolor">Discord: <?= $row['ds_id'] ?></p>
                    </div>
                    <div class=" mr-3">
                        <p style="text-align: left;" class="mt-1 pcolor">
                            Steam_id:<a href="https://steamcommunity.com/id/<?= $row['steam_id'] ?>">
                                https://steamcommunity.com/id/<?= $row['steam_id'] ?></a>
                        </p>
                    </div>
                <?php } ?>
            </form>

        </div>
        <div class="profile__edit-icon"><a href="profileedit.php"><i class="fas fa-cog"></i></a></div>
    </div>
</div>
</div>
<!-- Yandex.Metrika counter -->


<?php require "template/footer.php" ?>