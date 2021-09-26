<?php
require "include/connect_db.php";
session_start();
$title = "О нас";
$description = "Сайт который поможет, найти тиммейта, напарника или собрать команду для своей любимой игры. Просто оставь заявку и люди откликнутся.";
$keywords = "найти тиммейта, собрать команду, ищу команду кс го, поиск тиммейтов, где искать команду, тиммейта";
require "template/header.php" ?>
<br>
<br>
<!-- <div class="container mt-5">
    <div class="center">


        <div class="cards request details">

        </div>
    </div>
</div> -->

<div class="text-center mt-5">
    <div class="cards request details">
        <div class="cards__title">
            <p class="cards__author pcolor"><?php echo  $_SESSION["username"] ?><span class="status  online "></span>
            </p>
        </div>
        <div class="cards__content">
            <p style="text-align: left;" class="pcolor">Заявки:</p>
            <ul class="request__list">

            </ul>
            <p class="pcolor">Контакты</p>
        </div>

        <div class="cards__bottom contact-list">
            <form action="include/profileinc.php" class="form-contorl" method="POST">
                <div class=" mr-3">
                    <p style="text-align: left; " class="mt-2 pcolor mb-1">Вконтакте id:</p><input type="text" name="vk_id" class="form-control">

                </div>
                <div class=" mr-3">
                    <p style="text-align: left;" class="mt-3 pcolor mb-1">Discord:</p><input type="text" name="ds_id" class="form-control ">
                </div>
                <div class=" mr-3">
                    <p style="text-align: left;" class="mt-3 pcolor mb-1">Steam_id:</p><input type="text" name="steam_id" class="form-control">
                </div>
                <div>
                    <button style="text-align: right;" class="mt-3 text-center form-control btn btn-info" name="submit">Сохранить</button>
                </div>
            </form>
        </div>

        <div class="profile__edit-icon"><a href="profile.php"><i class="fas fa-cog"></i></a></div>

    </div>

</div>




<?php require "template/footer.php" ?>