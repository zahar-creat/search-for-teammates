<?php
session_start();
$title = "Новости в мире CS:GO";
$description = "Новости по Counter-Strike: Global Offensive, Dota 2 и других кибер спортивных играх, только актуальные и свежие новости.";
$keywords = "новости кс, новости кс го, последние новости кс, найти команду для игры, новости киберспорта, как повысить фактор доверия в кс, ";
require "template/header.php" ?>
<link href="css/glide.core.min.css" rel="stylesheet" />

<link href="css/style.css@id=6356126a5aff5bad4775.css" rel="stylesheet" />

<br />
<br />
<br />
<div class="container back">
    <h1 style="color: white; text-shadow: 5px 3px 4px black;" class="mt-1">Новости и фишки CS:GO</h1>
    <!-- <div class="glide" >
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide games"><img src="images/Getry4.jpg" alt="" class=".glide__slide-back-image"></li>
                <li class="glide__slide games"><img src="images/prevfactor.png" alt="" class=".glide__slide-back-image"></li>
                <li class="glide__slide games"><img src="images/csgo.jpg" alt="" class=".glide__slide-back-image"></li>
                <li class="glide__slide games" ><img src="images/dota.jpg" alt="" class=".glide__slide-back-image"></li>
                <li class="glide__slide games"><img src="images/LoL1.jpg" alt="" class=".glide__slide-back-image"></li>
                <li class="glide__slide games"><img src="images/volorant.jpg" alt="" class=".glide__slide-back-image"></li>
            </ul>
        </div>
        <div data-glide-el="controls" class="glide__arrows"><button data-glide-dir="<" class="glide__arrow glide__arrow--left">❮</button> <button data-glide-dir=">" class="glide__arrow glide__arrow--right">❯</button></div>
    </div> -->





    <div class="media mb-4 mt-4">
        <img src="images/opetation.webp" class="mr-3 w-25" alt="...">
        <div class="media-body">
            <h4 class="mt-0">Как быстро поднять уровень операции "Сломанный клык" CS:GO</h4>
            <p class="pcolor">В данной статье я расскажу о системе опыта и в какие режимы лучше играть чтобы быстрее
                апать уровень операции</p>
            <p class="font10">27.01.2021</p>
            <a href="post3.php"><button class="btn btn-info ">Читать подбрнее</button></a>
        </div>
    </div>
    <div class="media mb-3">
        <img src="images/prevfactor.webp" class="mr-3 mt-2 w-25" alt="...">
        <div class="media-body">
            <h4 class="">Как получить положительный фактор доверия в CS:GO</h4>
            <p class="pcolor">Хочешь получить зеленый фактор доверия и больше не играть с читерами?</p>
            <p class="font10">17.01.2021</p>
            <a href="post2.php"><button class="btn btn-info">Читать подбрнее</button></a>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
    const config = {
        type: 'carousel',
        startAt: 0,
        perView: 1,
        animationDuration: 800,
        autoplay: 4000,


    }

    new Glide('.glide', config).mount()
</script>
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
<?php require "template/footer.php" ?>