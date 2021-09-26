<?php
session_start();
$title = "Поиск игроков";
$description = "Наш сайт поможет, найти тиммейта, напарника или собрать команду для своей любимой игры. Просто оставь заявку и люди откликнутся.";
$keywords = "найти тиммейта, собрать команду, ищу команду кс го, поиск тиммейтов, где искать команду, тиммейта,ищу тиммейта";
require 'include/connect_db.php';
require 'template/header.php';
$posts = [];

if (isset($_GET["game"])) {
    $game = $_GET["game"];
    function clean($var)
    {
        $var = strip_tags($var);
        $var = trim($var);
        $var = str_replace(chr(10), "<br>", $var);
        $var = str_replace(chr(13), "<br>", $var);
        return $var;
    }
    $game = clean($game);
    $sql =  'SELECT request.*,users.login, games.gamename 
                            FROM request 
                            INNER JOIN games ON request.game_id = games.id  
                            INNER JOIN users ON request.user_id = users.id
                            WHERE games.gamename=?
                            ORDER BY request.id DESC';
    $stmt = mysqli_stmt_init($mysql);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $game);
    mysqli_stmt_execute($stmt);
    $posts = mysqli_stmt_get_result($stmt);
} else {
    $sql = mysqli_query($mysql, 'SELECT request.*,users.login, games.gamename 
                            FROM request
                            INNER JOIN users ON request.user_id = users.id
                            INNER JOIN games ON request.game_id = games.id
                            ORDER BY request.id DESC');
    while ($row = mysqli_fetch_assoc($sql)) {
        $posts[] = $row;
    }
}


?>

<br />
<br />
<br />
<h3 class='text-center'>Поиск игроков</h3>
<div class='text-center mt-3 mb-3'><a href='forms.php'><button type='button' class='btn btn-info font mr-2'>Оставить
            заявку</button></a>
    <?php if (isset($_SESSION['user_id'])) {
        echo "<button type='button' class='btn btn-info font'>Мои заявки</button>";
    }
    ?>
</div>







<div class="container">
    <!-- <div class="game  mb-3 text-center">
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
    </div> -->


    <div class="flex cardx mb-5">


        <?php foreach ($posts as $row) {
            $id = $row['id']; ?>
            <a href="request.php?id=<?= $id ?>" class=" request">
                <div class='card card-bg mr-3 mt-3' style='background-color: #222222; border-radius: 5px; box-shadow: 0 15px 25px rgba(0,0,0,.6);' onmouseover="this.style.backgroundColor='#282828';" onmouseout="this.style.backgroundColor='#222222';">

                    <div class='card-body'>
                        <p class='card-title' style='font-size: 18px; font-weight: 500; border-bottom: 0px ; color: #CC9900 ;'>
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

    </div>
</div>

</div>



<!-- Yandex.Metrika counter -->
<script>
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k,
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

<?php require 'template/footer.php' ?>
<script src="js/text.js"></script>