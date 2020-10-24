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
                <div style="height: 500px;" class="v-editor v-container-540">
                    <div class="v-editor-settings">
                    </div>
                    <div class="v-editor-content">
                        <div class="v-editor-lines">
                        </div>
                        <div class="v-editor-text"> 
                            <div class="v-editor-line">
                                <div class="v-editor-area"><div class="v-editor-cursor"></div></div>
                            </div>
                        </div>
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
    V('.v-editor-line').event({
        events: ['click'],
        funcs: [
            function(){
            }
        ]
    });

    V(window).event({
        events: ['keydown'],
        funcs: [
            function(e){ 
                e.preventDefault();

                let valueLeft = 11;
                let valueTop = 23.43;
                var inputValue = e.which;
                let cursor = V('.v-editor-cursor');
                let left = parseFloat(cursor.css('left'));
                let top = parseFloat(cursor.css('top'));
                let area = cursor.parent('.v-editor-area');
                let areaWH = area.css(['width', 'height']);
                let prevTextElems = cursor.prevAll();
                let nextTextElems = cursor.nextAll();
                let lineW = parseInt(cursor.parent('.v-editor-line').css('width'));
                let lineH = parseInt(cursor.parent('.v-editor-line').css('height'));
                let symbols_in_line = parseInt(lineW/valueLeft);
                let cursor_position = (top/valueTop)*symbols_in_line + (left/valueLeft);

                areaWH.forEach((value, key, map) => {
                    map.set(key, parseInt(areaWH.get(key)));
                });
                if( inputValue > 31 && inputValue < 127
                    && [37, 38, 39, 40].indexOf(inputValue) == -1) 
                {
                    let text = document.createTextNode(e.key);
                    if(prevTextElems.count == 0)
                        cursor.put(text, 'before');
                    else{
                        prevTextElems.get(cursor_position - 1).put(text, 'after');
                    }
                    if(left < lineW-valueLeft)
                        cursor.css({'left': left + valueLeft + 'px'});
                    else {
                        cursor.css({'left': valueLeft + 'px'});
                        cursor.css({'top': top + valueTop + 'px'});
                    }
                }
                else if(e.key == 'ArrowLeft'){
                    if(left > 0)
                        cursor.css({'left': left - valueLeft + 'px'});
                    else if(top != 0){
                        cursor.css({'left': symbols_in_line*valueLeft + 'px'});
                        cursor.css({'top': top-valueTop + 'px'});
                    }
                }
                else if(e.key == 'ArrowRight'){
                    if(prevTextElems.count > cursor_position){
                        if(left <= areaWH.get('width')-valueLeft)
                            cursor.css({'left': left + valueLeft + 'px'});
                        else{
                            cursor.css({'left': 0 + 'px'});
                            cursor.css({'top': top + valueTop + 'px'});
                        }
                    }
                    
                }
                else if(e.key == 'ArrowUp'){
                    if(top > 0)
                        cursor.css({'top': top - valueTop + 'px'});
                }
                else if(e.key == 'ArrowDown'){
                    cursor_position = ((top+valueTop)/valueTop)*symbols_in_line + (left/valueLeft);
                    if(top < lineH - valueTop && prevTextElems.count >= cursor_position)
                        cursor.css({'top': top + valueTop + 'px'});
                    else if(top < lineH - valueTop){
                        cursor.css({'top': top + valueTop + 'px'});
                        let a = prevTextElems.count - cursor_position;
                        let b = left + a * valueLeft;
                        cursor.css({'left': b + 'px'});
                    }
                }
                else if(e.key == 'Backspace'){
                    if(left > 0)
                        cursor.css({'left': left - valueLeft + 'px'});
                    else{
                        cursor.css({'left': symbols_in_line*valueLeft - valueLeft + 'px'});
                        cursor.css({'top': top-valueTop + 'px'});
                    }
                    if(prevTextElems){
                        if(left != 0 && top == 0){
                            prevTextElems.get(left/valueLeft-1).remove();
                        }
                        else{
                            prevTextElems.get(((top/valueTop)*symbols_in_line) + (left/valueLeft) - 1).remove();
                        }
                    }
                }
            }
        ]
    });
    
</script>


</html>