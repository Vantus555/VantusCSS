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
                <div style="height: 500px;" tabindex="1" id="v-eitor1" class="v-editor v-container-540">
                    <div class="v-editor-settings"> 
                    </div>
                    <div class="v-editor-content">
                        <div class="v-editor-text"> 
                            <div class="v-editor-line">
                                <div class="v-editor-line-num">1</div>
                                <div class="v-editor-area"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="listitemelem">
            <div class="element v-container-full v-bg-light "> 
                <div style="height: 500px;" tabindex="1" id="v-eitor2" class="v-editor v-container-1140">
                    <div class="v-editor-settings"> 
                    </div>
                    <div class="v-editor-content">
                        <div class="v-editor-text"> 
                            <div class="v-editor-line">
                                <div class="v-editor-line-num">1</div>
                                <div class="v-editor-area"></div>
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
    V('#v-eitor1').editorCode(11, 23.43);
    V('#v-eitor2').editorCode(11, 23.43);
    // let valueLeft = 11;
    // let valueTop = 23.43;
    // let cursor_node = VantusJS.createElement('<div class="v-editor-cursor"></div>');
    // V('.v-editor').event({
    //     events: ['click'],
    //     funcs: [
    //         function(e){
    //             let x = e.offsetX;
    //             let y = e.offsetY;
    //             let top = 0;
    //             let left = 0;
    //             let count_elems = V(this).children('text');

    //             while(top < y - valueTop)
    //                 top+=valueTop;
    //             while(left < x - valueLeft)
    //                 left+=valueLeft;
    //             alert(left + 'x' + top);

    //             if(count_elems.count == 0){
    //                 cursor_node.css({
    //                     'left': 0,
    //                     'top': 0
    //                 });
    //                 V(this).put(cursor_node, 'append');
    //             }
    //             else{
    //                 let cursor = V('.v-editor-cursor');
    //                 let h = parseInt(V(this).css('width'));
    //                 let symbols_in_line = parseInt(h/valueLeft);
    //                 let cursor_position = (top/valueTop)*symbols_in_line + (left/valueLeft);
    //                 //alert(cursor_position);
    //                 let elems_in_area = V(this).children('text');

    //                 if(elems_in_area.count > cursor_position){
    //                     cursor.css({
    //                         'left': left + 'px',
    //                         'top': top + 'px'
    //                     });
    //                 }
    //                 else{
    //                     let l = parseInt(elems_in_area.count % symbols_in_line) * valueLeft;
    //                     let t = parseInt(elems_in_area.count / symbols_in_line) * valueTop;
    //                     cursor.css({
    //                         'left': l + 'px',
    //                         'top': t + 'px'
    //                     });
    //                 }

    //                 V(this).put(cursor, 'append');
    //             }
    //         }
    //     ],
    //     elements: ['.v-editor-area']
    // });

    // let line_count = 1;
    // V(window).event({
    //     events: ['keydown'],
    //     funcs: [
    //         function(e){ 
    //             let cursor = V('.v-editor-cursor');
    //             if(cursor.count != 0){
    //                 e.preventDefault();

    //                 let inputValue = e.which;
    //                 let left = parseFloat(cursor.css('left'));
    //                 let top = parseFloat(cursor.css('top'));
    //                 let area = cursor.parent('.v-editor-area');
    //                 let areaWH = area.css(['width', 'height']);
    //                 let prevTextElems = cursor.prevAll();
    //                 let lineW = parseInt(cursor.parent('.v-editor-area').css('width'));
    //                 let lineH = parseFloat(cursor.parent('.v-editor-area').css('height'));

    //                 let LH = parseInt(lineH / parseInt(valueTop));
    //                 lineH = valueTop * LH;

    //                 let symbols_in_line = parseInt(lineW/valueLeft);
    //                 let cursor_position = (top/valueTop)*symbols_in_line + (left/valueLeft);
    //                 cursor_position = parseInt(cursor_position);
                    
    //                     console.log(inputValue);
    //                 areaWH.forEach((value, key, map) => {
    //                     map.set(key, parseInt(areaWH.get(key)));
    //                 });
    //                 if( inputValue >= 48 && inputValue <= 90 || 
    //                     inputValue >= 96 && inputValue <= 111 || 
    //                     inputValue >= 219 && inputValue <= 222 || 
    //                     inputValue >= 187 && inputValue <= 192 || 
    //                     [32, 9].indexOf(inputValue) != -1)
    //                 {
    //                     let text = 0;
    //                     let length = 1;
    //                     if(inputValue == 32)
    //                         text = document.createTextNode('\u00A0');
    //                     else if(inputValue == 9)
    //                         text = document.createTextNode('\u00A0');
    //                     else text = document.createTextNode(e.key);

    //                     for (let i = 0; i < length; i++) {
    //                         if(cursor_position == 0)
    //                             cursor.parent().put(text, 'prepend');
    //                         else{
    //                             prevTextElems.get(cursor_position - 1).put(text, 'after');
    //                         }
    //                         if(left < lineW-valueLeft)
    //                             cursor.css({'left': left + valueLeft + 'px'});
    //                         else {
    //                             cursor.css({'left': valueLeft + 'px'});
    //                             cursor.css({'top': top + valueTop + 'px'});
    //                         }
    //                     }
    //                 }
    //                 else if(e.key == 'ArrowLeft'){
    //                     if(left > 0)
    //                         cursor.css({'left': left - valueLeft + 'px'});
    //                     else if(top != 0){
    //                         cursor.css({'left': symbols_in_line*valueLeft + 'px'});
    //                         cursor.css({'top': top-valueTop + 'px'});
    //                     }
    //                     else if(top == 0 && left == 0){
    //                         let parentline = cursor.parent('.v-editor-line');
    //                         let prevline = parentline.prevElement();
    //                         if(prevline){
    //                             let prevarea = prevline.children('.v-editor-area');
    //                             let elemsinprevarea = prevarea.children('all');

    //                             let topprev = parseFloat(prevarea.css('height'));
    //                             let i = 0;
    //                             while(i < top)
    //                                 i+=valueTop;
    //                             topprev = i;

    //                             let leftprev = parseInt(elemsinprevarea.count % symbols_in_line);

    //                             cursor.css({
    //                                 'top': topprev + 'px',
    //                                 'left': leftprev * valueLeft + 'px'
    //                             })

    //                             prevarea.put(cursor, 'append');
    //                         }
    //                     }
    //                 }
    //                 else if(e.key == 'ArrowRight'){
    //                     if(prevTextElems.count > cursor_position){
    //                         if(left <= areaWH.get('width')-valueLeft)
    //                             cursor.css({'left': left + valueLeft + 'px'});
    //                         else{
    //                             cursor.css({'left': 0 + 'px'});
    //                             cursor.css({'top': top + valueTop + 'px'});
    //                         }
    //                     }
    //                     else{
    //                         let next = cursor.parent('.v-editor-line').nextElement();
    //                         if(next){
    //                             cursor.css({
    //                                 'left': 0,
    //                                 'top': 0
    //                             });
    //                             next.children('.v-editor-area').put(cursor, 'append');
    //                         }
    //                     }
    //                 }
    //                 else if(e.key == 'ArrowUp'){
    //                     if(top > 0)
    //                         cursor.css({'top': top - valueTop + 'px'});
    //                     else{
    //                         let parentline = cursor.parent('.v-editor-line');
    //                         let prevline = parentline.prevElement();
    //                         if(prevline){
    //                             let prevarea = prevline.children('.v-editor-area');
    //                             let elemsinprevarea = prevarea.children('all');
    //                             let prevareaHfake = parseFloat(prevline.children('.v-editor-area').css('height'));
    //                             let prevareaH = 0;
    //                             let y = 0;
    //                             do {
    //                                 prevareaH+=valueTop;
    //                                 y = prevareaHfake - prevareaH;
    //                             } while (y > valueTop);
                                
    //                             let prevareaSymobolsLeft = parseInt(elemsinprevarea.count % symbols_in_line);

    //                             if(elemsinprevarea.count >= cursor_position && prevareaSymobolsLeft == 0){
    //                                 cursor.css({
    //                                     'top' : prevareaH - valueTop + 'px',
    //                                 });
    //                             }
    //                             else if(cursor_position > prevareaSymobolsLeft){
    //                                 cursor.css({
    //                                     'left' : prevareaSymobolsLeft * valueLeft + 'px',
    //                                     'top' : prevareaH - valueTop + 'px',
    //                                 });
    //                             }
    //                             else{
    //                                 cursor.css({
    //                                     'left' : cursor_position * valueLeft + 'px',
    //                                     'top' : prevareaH - valueTop + 'px',
    //                                 });
    //                             }

    //                             prevarea.put(cursor, 'append');
    //                         }
    //                     }
    //                 }
    //                 else if(e.key == 'ArrowDown'){
    //                     let a = Math.abs(parseInt(lineH - valueTop));
    //                     if(top < lineH - valueTop && prevTextElems.count >= cursor_position)
    //                         cursor.css({'top': top + valueTop + 'px'});
    //                     else if(top < lineH - valueTop){
    //                         cursor.css({'top': top + valueTop + 'px'});
    //                         let a = prevTextElems.count - cursor_position;
    //                         let b = left + a * valueLeft;
    //                         cursor.css({'left': b + 'px'});
    //                     }
    //                     else if(parseInt(top) == a){
    //                         let nextline = cursor.parent('.v-editor-line').nextElement();
    //                         if(nextline){
    //                             let area = nextline.children('.v-editor-area');
    //                             let elemsinarea = area.children('all');
    //                             let areaH = parseFloat(area.css('height'));
    //                             let ost = parseInt(elemsinarea.count % symbols_in_line);
    //                             let t = cursor_position % symbols_in_line > ost;
                                
    //                             cursor.css({
    //                                 'top': 0
    //                             });
    //                             if(t){
    //                                 cursor.css({
    //                                     'left': ost * valueLeft + 'px'
    //                                 });
    //                             }
    //                             area.put(cursor, 'append');
    //                         }
    //                     }
    //                 }
    //                 else if(e.key == 'Backspace'){
    //                     if(left > 0)
    //                         cursor.css({'left': left - valueLeft + 'px'});
    //                     else if(top != 0){
    //                         cursor.css({'left': symbols_in_line*valueLeft - valueLeft + 'px'});
    //                         cursor.css({'top': top-valueTop + 'px'});
    //                     }
    //                     else if(cursor_position == 0){
    //                         let parentline = cursor.parent('.v-editor-line');
    //                         let prevline = parentline.prevElement();
    //                         if(prevline){
    //                             let prevarea = prevline.children('.v-editor-area');
    //                             let elemsinprevarea = prevarea.children('all');
    //                             let prevareaH = prevline.css('height');
    //                             let prevareaSymobolsLeft = parseInt(elemsinprevarea.count % symbols_in_line);

    //                             if(prevareaSymobolsLeft == 0){
    //                                 cursor.css({
    //                                     'left' : elemsinprevarea.count * valueLeft + 'px',
    //                                     'top' : 0,
    //                                 });
    //                             }
    //                             else{
    //                                 cursor.css({
    //                                     'left' : prevareaSymobolsLeft * valueLeft + 'px',
    //                                     'top' : prevareaH - valueTop + 'px',
    //                                 });
    //                             }

    //                             prevarea.put(prevTextElems, 'append');
    //                             prevarea.put(cursor, 'append');
    //                             parentline.remove();
    //                         }
    //                     }
    //                     if(cursor_position != 0){
    //                         if(left != 0 && top == 0){
    //                             prevTextElems.get(left/valueLeft-1).remove();
    //                         }
    //                         else{
    //                             prevTextElems.get(((top/valueTop)*symbols_in_line) + (left/valueLeft) - 1).remove();
    //                         }
    //                     }
    //                 }
    //                 else if(e.key == 'Enter'){
    //                     if(cursor.count != 0){
    //                         line_count+=1;
    //                         let newline = ` <div class="v-editor-line">\
    //                                             <div class="v-editor-line-num"></div>\
    //                                             <div class="v-editor-area"></div>\
    //                                         </div>`;
    //                         newline = VantusJS.createElement(newline);
    //                         let addnewline = cursor.parent('.v-editor-line');
    //                         let newlineparent = newline.children('.v-editor-area');

    //                         if(cursor_position < prevTextElems.count){
    //                             for (let i = 0; i < prevTextElems.count - cursor_position; i++) {
    //                                 newlineparent.put(prevTextElems.get(cursor_position+i), 'append');
    //                             }
    //                         }
    //                         cursor.css({
    //                             'top': 0,
    //                             'left': 0
    //                         });

    //                         newlineparent.put(cursor, 'append');
    //                         addnewline.put(newline, 'after');

    //                         let num_lines = V('.v-editor-line-num');
                            
    //                         num_lines.for((index, velement, mass) => {
    //                             velement.text(index+1);
    //                             return true;
    //                         });
    //                     }
    //                 }
    //             }
    //         }
    //     ]
    // });
    
</script>


</html>