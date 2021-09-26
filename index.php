<?php
session_start();
$title = "Поиск тиммейтов и команд на anyplay";
$description = "Сайт который поможет, найти тиммейта, напарника или собрать команду для своей любимой игры. Просто оставь заявку и люди откликнутся.";
$keywords = "найти тиммейта, собрать команду, ищу команду кс го, поиск тиммейтов, где искать команду, тиммейта, где найти тиммейтов для кс го";
require 'template/header.php'; // подключаем шапку проекта
require "include/connect_db.php"; // подключаем файл для соединения с БД

?>
<link href="css/glide.core.min.css" rel="stylesheet">
<link href="css/style.css@id=6356126a5aff5bad4775.css" rel="stylesheet">


<br>

<div class="container">

    <h1 class="text-center w-100 mt-5">Поиск команды и игроков</h1>


    <!--<blockquote>
			<p>
				Наш проект поможет вам найти тиммейта в своей любимой игре, быстро и
				легко, так же вы может найти команду или даже собрать свою собственную.
			</p>
		</blockquote>-->
    <br>


    <h4 class="text-center" style="color: #fff;">Выберите игру и оставьте заявку</h4>
    <div class="container-fluid">
        <div class="glide games-block glide--ltr glide--carousel glide--swipeable">
            <div data-glide-el="track" class="glide__track">
                <ul class="glide__slides">
                    <li class="glide__slide games glide__slide--clone"><a draggable="true"
                            href="search.php?game=League of Legends"><img src="images/LoL1.webp" alt="League of Legends"
                                class="glide__slide-back-image"> <img src="images/LoL1.webp" alt="League of Legends"
                                class="glide__slide-icon"></a></li>
                    <li class="glide__slide games glide__slide--clone"><a draggable="true"
                            href="search.php?game=PlayerUnknown's Battlegrounds"><img src="images/pubg.webp"
                                alt="PlayerUnknown’s Battlegrounds" class="glide__slide-back-image"> <img
                                src="images/pubg.webp" alt="PlayerUnknown’s Battlegrounds"
                                class="glide__slide-icon"></a></li>
                    <li class="glide__slide games glide__slide--clone"><a draggable="true"
                            href="search.php?game=Valorant">v<img src="images/volorant.webp" alt="Valorant"
                                class="glide__slide-back-image"> <img src="images/imgvol.webp" alt="Valorant"
                                class="glide__slide-icon"></a></li>
                    <li class="glide__slide games glide__slide--clone"><a draggable="true"
                            href="search.php?game=Fortnite"><img src="images/fortnite.webp" alt="Fortnite"
                                class="glide__slide-back-image"> <img src="images/imgfor.webp" alt="Fortnite"
                                class="glide__slide-icon"></a></li>
                    <li class="glide__slide games"><a draggable="true"
                            href="search.php?game=Counter-Strike: Global Offensive"><img src="images/csgo.webp"
                                alt="Counter-Strike: Global Offensive" class="glide__slide-back-image"> <img
                                src="images/imgcsgo.webp" alt="Counter-Strike: Global Offensive"
                                class="glide__slide-icon"></a></li>
                    <li class="glide__slide games"><a draggable="true" href="search.php?game=Dota 2"><img
                                src="images/dota.webp" alt="Dota 2" class="glide__slide-back-image">
                            <img src="images/imgdota.webp" alt="Dota 2" class="glide__slide-icon"></a></li>
                    <li class="glide__slide games"><a draggable="true" href="search.php?game=League of Legends"><img
                                src="images/LoL1.webp" alt="League of Legends" class="glide__slide-back-image"> <img
                                src="images/imglol.webp" alt="League of Legends" class="glide__slide-icon"></a></li>
                    <li class="glide__slide games glide__slide--active"><a draggable="true"
                            href="search.php?game=PlayerUnknown's Battlegrounds"><img src="images/pubg.webp"
                                alt="PlayerUnknown’s Battlegrounds" class="glide__slide-back-image"> <img
                                src="images/imgpubg.webp" alt="PlayerUnknown’s Battlegrounds"
                                class="glide__slide-icon"></a></li>
                    <li class="glide__slide games"><a draggable="true" href="search.php?game=Valorant"><img
                                src="images/volorant.webp" alt="Valorant" class="glide__slide-back-image"> <img
                                src="images/imgvol.webp" alt="Valorant" class="glide__slide-icon"></a></li>
                    <li class="glide__slide games"><a draggable="true" href="search.php?game=Fortnite"><img
                                src="images/fortnite.webp" alt="Fortnite" class="glide__slide-back-image"> <img
                                src="images/imgfor.webp" alt="Fortnite" class="glide__slide-icon"></a></li>
                    <li class="glide__slide games glide__slide--clone"><a draggable="true"
                            href="search.php?game=Counter-Strike: Global Offensive"><img src="images/csgo.webp"
                                alt="Counter-Strike: Global Offensive" class="glide__slide-back-image"> <img
                                src="images/imgcsgo.webp" alt="Counter-Strike: Global Offensive"
                                class="glide__slide-icon"></a></li>
                    <li class="glide__slide games glide__slide--clone"><a draggable="true"
                            href="search.php?game=Dota 2"><img src="images/dota.webp" alt="Dota 2"
                                class="glide__slide-back-image">
                            <img src="images/imgdota.webp" alt="Dota 2" class="glide__slide-icon"></a></li>
                    <li class="glide__slide games glide__slide--clone"><a draggable="true"
                            href="search.php?game=League of Legends"><img src="images/LoL1.webp" alt="League of Legends"
                                class="glide__slide-back-image"> <img src="images/imglol.webp" alt="League of Legends"
                                class="glide__slide-icon"></a></li>
                    <li class="glide__slide games glide__slide--clone"><a draggable="true"
                            href="search.php?game=PlayerUnknown's Battlegrounds"><img src="images/pubg.webp"
                                alt="PlayerUnknown’s Battlegrounds" class="glide__slide-back-image"> <img
                                src="images/imgpubg.webp" alt="PlayerUnknown’s Battlegrounds"
                                class="glide__slide-icon"></a></li>
                </ul>
            </div>
            <div data-glide-el="controls" class="glide__arrows"><button data-glide-dir="<"
                    class="glide__arrow glide__arrow--left">❮</button> <button data-glide-dir=">"
                    class="glide__arrow glide__arrow--right">❯</button></div>
        </div>
    </div>
    <?php $sql = mysqli_query($mysql, 'SELECT request.*,users.login, games.gamename 
                            FROM request
                            INNER JOIN users ON request.user_id = users.id
                            INNER JOIN games ON request.game_id = games.id
                            ORDER BY id DESC LiMIT 3');

    ?>
    <h4 class="text-center">Последние заявки</h4>
    <div class="flex cardx mb-5">
        <?php while ($row = mysqli_fetch_assoc($sql)) {
            $id = $row['id']; ?>
        <a href="request.php?id=<?= $id ?>" class=" request">
            <div class='card card-bg mr-3 mt-3' style='background-color: #222222; border-radius: 0px; '
                onmouseover="this.style.backgroundColor='#282828';" onmouseout="this.style.backgroundColor='#222222';">

                <div class='card-body'>
                    <p class='card-title' style='font-size: 18px; font-weight: 500; border-bottom: 0px ; color:#d1b15e'>
                        <?= $row['gamename'] ?>
                    <p>
                    <div class="flex">
                        <p class='card-title mr-2' style='font-size: 18px; font-weight: 500; color: #29c5e6;'>
                            <?= $row['login'] ?>
                        <p>
                            <small class=' '>
                                <?php $date = date_create($row['date']);
                                    echo date_format($date, 'd.m.Y'); ?> </small>
                    </div>
                    <p class='card-text pcard news-content'><?= $row['description'] ?> </p>
                </div>
                <div class='card-footer  ' style="flex-wrap: nowrap; ">
                    <small class=''>
                        <span class="r7 mr-1 "><?= $row['country'] ?></span>
                        <span class="r7 mr-1 "><?= $row['age'] ?> лет</span>
                        <span class="r7 mr-1"><?= $row['mood'] ?></span>
                        <span class="r7 "><?= $row['time_zone'] ?></span></small>
                </div>
            </div>
        </a>
        <?php } ?>
        <br>
        <br>
    </div>

    <div class="media c1 flex">
        <img src="images/team.webp" class="mr-3 img1 img-fluid" alt="Команда">
        <div class="media-body">
            <h3 class="mt-0 ">Хотите найти тиммейта?</h3>
            <p class="color text-justify text">Мы поможем вам найти тиммейта в своей любимой игре, быстро и
                легко, так же вы может найти команду или даже собрать свою собственную. Мы поможем найти вам игроков или
                даже ваших будующих друзей практически любого возраста,
                любого
                уровня игры начиная от совсем молодых, заканчивая профессиональными игроками.</p>
            <p class="color text">Найти команду для поднятия рейтинга или просто хорошую компанию для проведения
                вечера, а может и того , кто научит вас играть, независимо от их сложности и ваших навыков.
                Не упускайте шанс, оставьте заявку на AnyPlay и найдите себе команду или тиммейта всего
                за несколько кликов.
            </p>
        </div>
    </div>
</div>
<br>
<br>
<br>
<!-- Yandex.Metrika counter -->
<script>
(function(m, e, t, r, i, k, a) {
    m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
    };
    m[i].l = 1 * new Date();
    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k,
        a)
})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(71237899, "init", {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
    webvisor: true
});
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/71237899" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7PG7SXR1WV"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-7PG7SXR1WV');
</script>
<script src="js/text.js"></script>
<script src="js/glide.min.js"></script>
<script>
new Glide('.glide', {
    type: 'carousel',
    startAt: 1,
    perView: 4,
    autoplay: 4000,
    gap: 20,
    animationDuration: 800,
    breakpoints: {
        1200: {
            perView: 3
        },
        400: {
            perView: 1
        }
    }
}).mount()
</script>
<?php require 'template/footer.php'; ?>