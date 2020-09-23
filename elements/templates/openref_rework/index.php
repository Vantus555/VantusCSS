<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../mainStyle.css">
    <link rel="stylesheet" href="openref_rework.css">
    <style>
        <?php require_once '../../../vcss_fullpack.php'; ?>
    </style>
</head>
<body class="v-container-1440 v-mx-auto">
    <!--<a class="back" href="../index.php">Назад</a>-->

    <header>
        <div style="height: 100%;" class="v-navbar-5 v-bg-light">
            <div class="v-navbar-5-collapse">
                <div class="v-btn v-btn-collapse v-bg-hover v-bg-active v-bg-dark">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="v-navbar-5-logo">
                <img src="images/logo-5.jpg" alt="">
            </div>
            <div class="v-navbar-5-items">
                <a href="#">
                    <div class="v-navbar-5-img v-navbar-5-img-main"></div>
                    
                    <div class="v-collapsing v-navbar-5-title">Главная</div>
                </a>
            </div>
            <div class="v-navbar-5-items">
                <a href="#">
                    <div class="v-navbar-5-img v-navbar-5-img-news"></div>
                    <div class="v-collapsing v-navbar-5-title">Новости</div>
                </a>
            </div>
            <div class="v-navbar-5-items">
                <a href="#">
                    <div class="v-navbar-5-img v-navbar-5-img-lessons"></div>
                    <div class="v-collapsing v-navbar-5-title">Уроки</div>
                </a>
            </div>
            <div class="v-navbar-5-items">
                <a href="#">
                    <div class="v-navbar-5-img v-navbar-5-img-doc"></div>
                    <div class="v-collapsing v-navbar-5-title">Документация</div>
                </a>
            </div>
            <hr>
        </div>
    </header>
    <main>
        <div class="v-text-banner-1">
            <div class="text-coding">
                <div>
                    <a href="" id="openref" class="text-coding-text"></a>
                </div>
                <div class="text-line-coding text-line-coding-blink"></div>
            </div>
            <small>Информационный портал для программистов. Обучающие статьи и уроки.</small>
        </div>
        <div  class="v-mx-auto v-slider-full v-slider-margin">
            <button class="v-btn v-slider-margin-rb">&gt;</button>
            <button class="v-btn v-slider-margin-lb">&lt;</button>
            <div class="v-slider-margin-switches"></div>
            <div class="v-slider-margin-items" style="width: 600%;">
                <img src="images/slider-margin/1.jpg" class="v-slider-margin-slids" style="width: 16.6667%;">
                <img src="images/slider-margin/2.jpg" class="v-slider-margin-slids" style="width: 16.6667%;">
                <img src="images/slider-margin/3.jpg" class="v-slider-margin-slids" style="width: 16.6667%;">
                <img src="images/slider-margin/4.jpg" class="v-slider-margin-slids" style="width: 16.6667%;">
                <img src="images/slider-margin/5.jpg" class="v-slider-margin-slids" style="width: 16.6667%;">
                <img src="images/slider-margin/6.jpg" class="v-slider-margin-slids" style="width: 16.6667%;">
            </div>
        </div>
    </main>

</body>

<script>
    <?php require_once '../../../vjs_fullpack.php'; ?>
</script>

<script>
    V(".v-navbar-5-collapse .v-btn-collapse").Navbar(".v-navbar-5", 300, 'flex', 'right');
    V('#openref').textCoding("Добро пожаловать на Open Reference", 1000);
</script>

<script src="slider-margin.js"></script>

</html>