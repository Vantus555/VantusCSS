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
                <div class="v-slider-card-1 v-container-300">
                    <div class="v-slider-card-1-switches"></div>
                    <div class="v-slider-card-1-items">
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                    </div>
                    <a class="v-btn v-bg-hover v-bg-lightblue v-text-white v-text-trans-upper" href="">next</a>
                </div>
            </div>
        </div>
        <div class="listitemelem">
            <div class="element v-container-full v-bg-light "> 
                <div class="v-slider-card-1 v-container-300">
                    <div class="v-slider-card-1-switches"></div>
                    <div class="v-slider-card-1-items">
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                        <div class="v-slider-card-1-slids"></div>
                    </div>
                    <a class="v-btn v-bg-hover v-bg-lightblue v-text-white v-text-trans-upper" href="">next</a>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    <?php require_once '../../../vjs_fullpack.php'; ?>
</script>

<script>
    {
        /*let slider = V("v-slider-card-1");
        let count = slider.parent(".v-slider-card-1-slids").count;*/
        let count = V(".v-slider-card-1-slids").count;
        V(".v-slider-card-1-slids").parent().css({
            'width' : count * 100 +'%'
        });
        V(".v-slider-card-1-slids").css({
            'width' : 100/count +'%'
        });
        for (let i = count; i > 0; i--) {
            let elem = V(document.createElement('label')).attr('data-slide-index', i - 1);
            if(i == 1)
                elem.addClass('v-active-slide');
            V('.v-slider-card-1-switches').put(elem.array()[0], 'prepend');
        }
        V('.v-slider-card-1-switches label').event({
            events: ['click'],
            funcs: [
                function(){
                    if(!V(this).hasClass("v-active-slide")){
                        let a = V('.v-active-slide').removeClass('v-active-slide');
                        V(this).addClass('v-active-slide');
                        let index = V(this).attr('data-slide-index');
                        V(".v-slider-card-1-items").css({
                            'margin-left' : -100 * index + '%'
                        });
                    }
                }
            ]
        });
    }
    
</script>

</html>