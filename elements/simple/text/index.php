<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../mainStyle.css">
    <style>
        <?php require_once '../../../vcss_fullpack.php'; ?>
    </style>
</head>
<body>
    <a class="back" href="../index.php">Назад</a>
    <div class="list v-container-1440">
        <div class="listitemelem">
            <div class="element v-container-full v-bg-light"> 
                <div class="v-text-banner-1">
                    <div class="text-coding">
                        <div>
                            <a href="" id="openref" class="text-coding-text"></a>
                        </div>
                        <div class="text-line-coding"></div>
                    </div>
                    <small>Информационный портал для программистов. Обучающие статьи и уроки.</small>
                </div>
            </div>
        </div>
    </div>
</body>


<script>
    <?php
        require_once '../../../vjs_fullpack.php';
    ?>

    V('#openref').textCoding("Добро пожаловать на Open Reference", 1000);
</script>


</html>