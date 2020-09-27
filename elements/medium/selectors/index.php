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
                <div class="select-1">
                    
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    <?php require_once '../../../vjs_fullpack.php'; ?>
</script>

<script>
    /*---------------------v-navbar-2----------------------*/
    V(".v-navbar-1-collapse .v-btn-collapse").Navbar(".v-navbar-1", 250);
    /*---------------------v-navbar-2----------------------*/
    V(".v-navbar-2-collapse .v-btn-collapse").Navbar(".v-navbar-2", 250);
    /*---------------------v-navbar-3----------------------*/
    V(".v-navbar-3-collapse .v-btn-collapse").Navbar(".v-navbar-3", 500, 'flex', 'right', '200');
    /*---------------------v-navbar-4----------------------*/
    V(".v-navbar-4-collapse .v-btn-collapse").Navbar(".v-navbar-4", 250, 'flex');
    /*---------------------v-navbar-4----------------------*/
    V(".v-navbar-5-collapse .v-btn-collapse").Navbar(".v-navbar-5", 300, 'flex', 'right');

    V('#openref').textCoding("Open Reference", 500);
    V('#openref2').textCoding("Open Reference", 500);
    V('#openref3').textCoding("Open Reference", 500);
</script>

</html>