<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mainStyle.css">
    <style>
        <?php require_once 'vcss_fullpack.php'; ?>
    </style>
</head>
<body style="padding: 10px 20px;">
    <!--<div class="v-container-1440 v-mx-auto v-d-flex">
        <a class="category" href="elements/simple/index.php">Простые эдементы</a>
        <a class="category" href="elements/medium/index.php">Средние элементы + js</a>
        <a class="category" href="elements/difficult/index.php">Сложные элементы</a>
        <a class="category" href="elements/templates/index.php">Шаблоны</a>
        <a class="category" href="elements/properties/index.php">Свойства</a>
    </div>-->
    <div class="v-navbar-1 v-container-1440 v-bg-dark">
        <div class="v-navbar-1-collapse">
            <div class="v-btn v-btn-collapse v-bg-hover v-bg-active v-bg-dark v-btn-collapse-notx">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="v-collapsing" style="">
            <a href="elements/simple/index.php">Простые эдементы</a>
        </div>
        <div class="v-collapsing" style="">
            <a href="elements/medium/index.php">Средние элементы + js</a>
        </div>
        <div class="v-collapsing" style="">
            <a href="elements/difficult/index.php">Сложные элементы</a>
        </div>
        <div class="v-collapsing" style="">
            <a href="elements/templates/index.php">Шаблоны</a>
        </div>
        <div class="v-collapsing" style="">
            <a href="elements/properties/index.php">Свойства</a>
        </div>
    </div>
</body>

<script>
    <?php
        require_once "../VantusJS/VantusJS.js";
        require_once "../VantusJS/VJS_Show.js";
    ?>
</script>

<script>
    V(".v-navbar-1-collapse .v-btn-collapse").event({
        events: ['click'],
        funcs: [
            function(){
                let collapsing = V(this).parent('.v-navbar-1').children('.v-collapsing');
                collapsing.toggleShow({
                    speed: 250,
                    display: "flex",
                    direction: 'down'
                });
            }
        ]
    });
</script>

</html>