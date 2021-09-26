<?php
session_start();
$title = "О нас";
$description = "Сайт который поможет, найти тиммейта, напарника или собрать команду для своей любимой игры. Просто оставь заявку и люди откликнутся.";
$keywords = "найти тиммейта, собрать команду, ищу команду кс го, поиск тиммейтов, где искать команду, тиммейта";
require "template/header.php" ?>

<br />
<br />
<br />
<div class="container simple-linear back">

    <div class="row">
        <div class="col">
            <div class="h2" itemscope itemtype="http://schema.org/Organization">
                <H1 style="color: #29c5e6;" class="mt-1"><span itemprop="name">AnyPlay</span></H1>
                <p class="text-justify"> <span itemprop="description"> Наш проект представляет из себя сайт по поиску
                        игроков для совместной игры, вы
                        просто оставляете
                        заявку со своими данными, чтобы другим игрокам было проще найти вас, и ждете, пока вас добавят в
                        друзья для дальнейшей совместной игры.</span> <br>
                <p class="text-justify">Мы только на начале своего пути поэтому наша
                    команда будет рада, если мы вам сможем помочь, и принести пользу для игрового сообщества.</p>
                </p>
                <h3 class="mt-3 " style="color:#c0972e;">Контакты<br></h3>
                <div class="pcolor mb-1" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <p class="pcolor"><strong>Адрес:</strong>
                        <span itemprop="addressLocality">Омск</span>,
                        <span itemprop="streetAddress">
                            ул. 27 Северная, 69</span>,
                        <span itemprop="postalCode">644116</span>
                    </p>
                    <p class="pcolor">E-mail: <span itemprop="email">zrogovskiy@gmail.com</span></p>
                    <p class="pcolor"> Телефон: <span class="" itemprop="telephone">+7 3812 68-07-73</span></p>
                    <a href="https://vk.com/id191465175"><img src="images/vk1.png" alt=""> <span class="" itemprop="url"> <a href="https://vk.com/id191465175"></a></span>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- <p class="pcolor panding">Привет! Меня зовут Захар-Я веб-разработчик.
        Учусь на 3 курсе в колледже. Этот сайт является моей проектной работой в рамках обучающего процесса.
        Профессия веб-дизайн – необъятный поток необходимой в современном мире интересной информации. Я стремлюсь
        учиться и экспериментировать, осваивать и применять на практике навыки веб-разработки. Сайт является этому
        примером, показывающим мой интерес, к данной сфере. </p>

    <div class="mt-5 text-center">
        <img src="images/mail.webp" class="" alt="">
        <p class="mt-2 text">Есть вопросы или предложения напишите мне:<br>zrogovskiy@gmail.com</p>
    </div>
</div> -->
<!-- Yandex.Metrika counter -->
<script>
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode
            .insertBefore(k,
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
    <div><img src="https://mc.yandex.ru/watch/71237899" style="position:absolute; left:-9999px;" alt="" />
    </div>
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