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
            <div class="element v-container-full v-bg-light "> 
                <div style="height: 500px;" class="v-container-full v-articles-group">
                    <div class="v-horizontal-art-gr">
                        <div class="v-addArt">
                            +
                        </div>
                    </div>
                    <div style="display: inline-block;" class="v-art-gr-content">
                    </div>
                </div>
            </div>
        </div>
        <div class="listitemelem">
            <div class="element v-container-full v-bg-light "> 
                <div class="v-container-full" name="" id="testeditor"></div>
            </div>
        </div>
        <div class="listitemelem">
            <div class="element v-container-full v-bg-light "> 
                <div style="height: 500px;" class="v-editor v-container-720">
                    <div class="v-editor-settings">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    <?php require_once '../../../vjs_fullpack.php'; ?>
</script>

<script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
<script>
    V('.v-articles-group').ArticleTab();
    //DecoupledEditor.create( document.querySelector( '#testeditor' ) );
    //CKEDITOR.replace('testeditor');
</script>

</html>