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
                <div class="v-navbar-1 v-container-1140 v-bg-dark">
                    <div class="v-navbar-1-collapse">
                        <div class="v-btn v-btn-collapse v-bg-hover v-bg-active v-bg-dark">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Whatch Now</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Movies</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">TV Show</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Sports</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Kids</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Library</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="listitemelem">
            <div class="element v-container-full v-bg-dark"> 
                <div class="v-navbar-1 v-container-1140 v-bg-light">
                    <div class="v-navbar-1-collapse">
                        <div class="v-btn v-btn-collapse v-bg-hover v-bg-active v-bg-dark">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Whatch Now</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Movies</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">TV Show</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Sports</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Kids</a>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-shadow-rev-5 v-shadow-hover">Library</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="listitemelem">
            <div class="element v-container-full v-bg-dark"> 
                <div class="v-navbar-2 v-container-1140 v-bg-light">
                    <div class="v-navbar-2-collapse">
                        <div class="v-btn v-btn-collapse v-bg-hover v-bg-active v-bg-dark">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-navbar-2-items v-bg-light">Whatch Now</a>
                        <div class="borderdown"></div>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-navbar-2-items v-bg-light">Movies</a>
                        <div class="borderdown"></div>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-navbar-2-items v-bg-light">TV Show</a>
                        <div class="borderdown"></div>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-navbar-2-items v-bg-light">Sports</a>
                        <div class="borderdown"></div>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-navbar-2-items v-bg-light">Kids</a>
                        <div class="borderdown"></div>
                    </div>
                    <div class="v-collapsing">
                        <a href="" class="v-navbar-2-items v-bg-light">Library</a>
                        <div class="borderdown"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="listitemelem">
            <div style="box-sizing: content-box; align-items: flex-start; min-height: 200px; justify-content: flex-start;" class="element v-container-full v-bg-light"> 
                <div class="v-navbar-3 v-bg-dark">
                    <div class="v-navbar-3-collapse">
                        <div class="v-btn v-btn-collapse v-bg-hover v-bg-active v-bg-dark">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="v-navbar-3-groups">
                        <div><a href="">Whatch Now</a></div>
                        <div><a href="">Movies</a></div>
                        <div><a href="">TV Show</a></div>
                        <div><a href="">Sports</a></div>
                        <div><a href="">Kids</a></div>
                        <div><a href="">Library</a></div>
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
    /*---------------------v-navbar-2----------------------*/
    V(".v-navbar-2-collapse .v-btn-collapse").event({
        events: ['click'],
        funcs: [
            function(){
                let collapsing = V(this).parent('.v-navbar-2').children('.v-collapsing');
                collapsing.toggleShow({
                    speed: 250,
                    display: "flex",
                    direction: 'down'
                });
            }
        ]
    });
    V(".v-navbar-2-items").event({
        events: ['mouseover', 'mouseout'],
        funcs: [
            function(){
                let border = V(this).parent().children(".borderdown");
                border.show({
                    speed: 150,
                    display: "flex",
                    direction: 'right'
                });
            },
            function(){
                let border = V(this).parent().children(".borderdown");
                border.show({
                    speed: 150,
                    display: "flex",
                    direction: 'rightback'
                });
            }
        ]
    });

    V(".v-navbar-3-collapse").event({
        events: ['click'],
        funcs: [
            function(){
                V(this).parent(".v-navbar-3").children(".v-navbar-3-groups").toggleShow({
                    speed: 1000,
                    display: "flex",
                    direction: 'right',
                    width: '200'
                });
            }
        ]
    });

    V(".v-btn-collapse").event({
        events: ['click'],
        funcs: [
            function(){
                let thiselem = V(this);
                if(!thiselem.hasClass("v-btn-collapse-x") && !thiselem.hasClass("v-btn-collapse-notx")){
                    thiselem.toggleClass("v-btn-collapse-x");
                }
                else{
                    thiselem.toggleClass("v-btn-collapse-notx");
                    thiselem.toggleClass("v-btn-collapse-x");
                }
            }
        ]
    });
</script>

</html>