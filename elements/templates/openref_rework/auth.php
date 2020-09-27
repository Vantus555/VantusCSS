<!DOCTYPE html>
<html class='openref' lang="en">
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
<body>
    <!--<a class="back" href="../index.php">Назад</a>-->
    <div class="v-w-100 logo_openref">
        <div class="v-text-banner-1">
            <div class="text-coding">
                <div>
                    <a href="" id="openref" class="text-coding-text"></a>
                </div>
                <div class="text-line-coding text-line-coding-blink"></div>
            </div>
            <!--<small>Информационный портал для инжинеров-программистов. Обучающие статьи и уроки.</small>-->
        </div>
    </div>
    <section class="v-container-1440">
        <header><!------------------HEADER----------------------------->
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
                    <a href="index.php">
                        <div class="v-navbar-5-img v-navbar-5-img-main"></div>
                        </svg>
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
                <div class="v-navbar-5-items">
                    <a class="v-bg-violet" href="auth.php">
                        <div class="v-navbar-5-img v-navbar-5-img-enter"></div>
                        <div class="v-collapsing v-navbar-5-title">Вход/Регистрация</div>
                    </a>
                </div>
            </div>
        </header><!------------------HEADER----------------------------->
        <main> <!------------------MAIN----------------------------->
            <div class="auth">
                <div class="v-form-1 v-container-360 v-bg-light">
                    <div class="v-text-banner-2">
                        Вход
                    </div>
                    <div class="v-input-1">
                        <label class="v-label-1" for="login">Логин</label>
                        <div class="v-input-group-h">
                            <button class="v-btn v-input-1-btn v-input-btn-clear">x</button>
                            <input id="login" placeholder="Введите данные" class="v-input-clear v-input-1-text" type="text">   
                        </div>
                    </div>
                    <div class="v-input-1">
                        <label class="v-label-1" for="pass">Пароль</label>
                        <div class="v-input-group-h">
                            <button class="v-btn v-input-1-btn v-input-btn-clear">x</button>
                            <input id="pass" placeholder="Введите данные" class="v-input-clear v-input-1-text" type="text">   
                        </div>
                    </div>
                    <div class="v-form-1-go">
                        <button class="v-text-white v-btn v-bg-active v-bg-primary v-shadow v-shadow-active">Войти</button>
                    </div>
                </div>
                <div class="v-form-1 v-container-360 v-bg-light">
                    <div class="v-text-banner-2">
                        Регистрация
                    </div>
                    <div class="v-input-1">
                        <label class="v-label-1" for="name">Ваше имя</label>
                        <div class="v-input-group-h">
                            <button class="v-btn v-input-1-btn v-input-btn-clear">x</button>
                            <input id="name" placeholder="Введите данные" class="v-input-clear v-input-1-text" type="text">   
                        </div>
                    </div>
                    <div class="v-input-1">
                        <label class="v-label-1" for="regemail">Email</label>
                        <div class="v-input-group-h">
                            <button class="v-btn v-input-1-btn v-input-btn-clear">x</button>
                            <input id="regemail" placeholder="Введите данные" class="v-input-clear v-input-1-text" type="text">   
                        </div>
                    </div>
                    <div class="v-input-1">
                        <label class="v-label-1" for="reglogin">Логин</label>
                        <div class="v-input-group-h">
                            <button class="v-btn v-input-1-btn v-input-btn-clear">x</button>
                            <input id="reglogin" placeholder="Введите данные" class="v-input-clear v-input-1-text" type="text">   
                        </div>
                    </div>
                    <div class="v-input-1">
                        <label class="v-label-1" for="regpass">Пароль</label>
                        <div class="v-input-group-h">
                            <button class="v-btn v-input-1-btn v-input-btn-clear">x</button>
                            <input id="regpass" placeholder="Введите данные" class="v-input-clear v-input-1-text" type="password">   
                        </div>
                    </div>
                    <div class="v-input-1">
                        <label class="v-label-1" for="confirmpass">Подтвердить пароль</label>
                        <div class="v-input-group-h">
                            <button class="v-btn v-input-1-btn v-input-btn-clear">x</button>
                            <input id="confirmpass" placeholder="Введите данные" class="v-input-clear v-input-1-text" type="password">   
                        </div>
                    </div>
                    <div class="v-form-1-go">
                        <button class="v-text-white v-btn v-bg-active v-bg-primary v-shadow v-shadow-active">Регистрация</button>
                    </div>
                </div>
            </div>
        </main> <!------------------MAIN----------------------------->
    </section>
    

</body>

<script>
    <?php require_once '../../../vjs_fullpack.php'; ?>
</script>

<script>
    V(".v-navbar-5-collapse .v-btn-collapse").Navbar(".v-navbar-5", 300, 'flex', 'right');
    V('#openref').textCoding("Open Reference", 1250);
</script>
</html>