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
    <!--<a class="back" href="../index.php">Назад</a>-->
    <div class="list v-container-1440">
        <div class="listitemelem">
            <div class="element v-container-full v-bg-light "> 
                <div class="v-input-1">
                    <label class="v-label-1" for="v-input-1-text">Ваше имя</label>
                    <div class="v-input-group-h">
                        <button class="v-btn v-input-1-btn v-input-btn-clear">x</button>
                        <input placeholder="Введите данные" class="v-input-clear v-input-1-text" type="text">   
                    </div>
                </div>
            </div>
        </div>
        <div class="listitemelem">
            <div class="element v-container-full v-bg-light"> 
                <div class="v-input-1">
                    <label class="v-input-1-checkbox-label">
                        <div class="v-input-1-checkbox-text"><span>Текст</span></div>
                        <input type="checkbox" class="v-input-1-check">
                        <div class="v-input-1-fake"></div>
                    </label>
                    <span class="v-input-1-checkbox-description">sdfcsc</span>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    <?php require_once '../../../vjs_fullpack.php'; ?>
</script>

<script>
    
</script>

</html>