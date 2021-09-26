<?php
session_start();
$title="Улучшаем траст фактор CS:GO";
$description="Зачем нужен траст фактор? Траст фактор нужен для того чтобы, игроки которые получают больше всего жалоб попадал к таким же игрокам как и он. Такие игроки выделяются в играх тем, что они еще с начала игры будут у вас в Муте. Таким образом, если у вас плохой траст фактор, то вероятность плохих тиммейтов и читеров возрастает.";
$keywords="как повысить траст фактор, как повысить траст фактор в кс, как повысить фактор доверия, как посмотреть фактор доверия";
require 'template/header.php'; // подключаем шапку проекта
require "include/connect_db.php"; // подключаем файл для соединения с БД
?>
<br>
<br>
	<br>
	<br>
<div class="container mb-5">
	
<h1 class="text-center " style="color: white;">Как повысить свой фактор доверия в CS:GO</h1>
<h3>Зачем нужен траст фактор?</h3>
<p class="pcolor">Траст фактор нужен для того чтобы, игроки которые получают больше всего жалоб попадал к таким же игрокам как и он.
Такие игроки выделяются в играх тем, что они еще с начала игры будут у вас в Муте.

Таким образом, если у вас плохой траст фактор, то вероятность плохих тиммейтов и читеров возрастает.</p>
<div class="text-center">
<img src="images/factors.webp" alt="виды траст факторов">
</div>
<h4 class="mt-3">Как получить зеленый фактор доверия и узнать свой траст фактор </h4>
<h3>Улучшаем траст фактор</h3>

<ol class="pcolor">
  <li>Используйте мобильный аутентификатор Steam Guard.</li>
  <li>Сделайте свой профиль общедоступным.</li>
  <li>Станьте активным участником сообщества Steam, пишите комментария под руководствами и лайкайте их.</li>
  <li>Играйте в игры без читов, если у вас есть VAC Ban в другой игре, то это негативно влияет</li>
  <li>Получите похвалу от товарищей по команде. (просите тиммейтов дать вам похвалу)</li>
  <li>Не выгоняйте никого из игры.</li>
  <li>Не блокируйте своих союзников и не причиняйте вред товарищу по команде в игре.</li>
  <li>Делайте больше разборов патрулей.</li>
  <li>Добавляйте больше друзей.</li>
  <li>Комментируйте профили, обсуждения и руководства, подобные этому.</li>
  <li>Покупайте больше внутриигровых предметов и игр. (очень помогает)</li>

</ol>


<h3>Как узнать свой траст фактор?</h3>
<p class="pcolor ml-3 ">Переходим на сайт <a href="https://faceitfinder.com/">https://faceitfinder.com/ </a>и вводим свой SteamID.<br>
<span style="color: #CD5C5C;">0 - красный фактор</span> <br>
<span style="color: #FFD700;">7 - желтый фактор</span><br>
<span style="color: #228B22;">15 - зеленый фактор</span></p>
<div class="row">
<img class="col-3 mr-5" src="images/screenshot3.webp" alt="траст факто профиля">
<img class="col-3 mr-5 ml-5" src="images/screenshot.webp" alt="траст факто профиля">
<img class="ml-5 mr-5 col-3 " src="images/screenshot2.webp" alt="траст факто профиля">
</div>
</div>
<!-- Yandex.Metrika counter -->
<script >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(71237899, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/71237899" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7PG7SXR1WV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7PG7SXR1WV');
</script>

<?php require 'template/footer.php'; ?>