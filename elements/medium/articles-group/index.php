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
                    <div class="v-art-gr-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    <?php require_once '../../../vjs_fullpack.php'; ?>
</script>

<script>
    V('.v-addArt').event({
        events: ['click'],
        funcs:[
            function() {
                var now = new Date();
                //alert( now.getTime() );
                //console.log(this);
                let elem = `<div data-art="${now.getTime()}" class="v-art-title">\
                                <span contenteditable="True" class="v-art-text">Пусто</span>\
                                <div class="v-art-close">X</div>\
                            </div>`;
                V(this).put(elem, 'beforeBegin');
                let content = V(this).parent('.v-articles-group').children('.v-art-gr-content');
                //<div style='display: none;' data-art="${now.getTime()}" class="v-vertical-art-gr"></div>
                let contentelem = `<div contenteditable="True" style='display: none;' data-art="${now.getTime()}" class="v-contenteditable v-content-art-gr"></div>`;
                content.put(contentelem, 'afterBegin');
            }
        ]
    });

    V('.v-horizontal-art-gr').event({
        events: ['click'],
        funcs: [
            function() {
                var id = V(this).data('data-art');
            }
        ],
        elements: '.v-art-close'
    });

    V('.v-horizontal-art-gr').event({
        events: ['click'],
        funcs: [
            function() {
                let id;
                let parent = V(this).parent('.v-art-title');
                if(parent)
                    id = parent.attr('data-art');
                else
                    id = V(this).attr('data-art');
                
                let main = V(this).parent('.v-articles-group').children('.v-art-gr-content');
                let contentHide = main.children(`div[style='display: block;']`);
                console.log(contentHide);
                contentHide.hide();

                let content = main.children(`div[data-art='${id}']`);
                content.show();
            }
        ],
        elements: ['.v-art-title', '.v-art-text'],
    });
</script>

</html>