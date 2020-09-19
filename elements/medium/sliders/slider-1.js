{
    let sliders = V(".v-slider-card-1");
    sliders.forEach(element => {
        let children = element.children(".v-slider-card-1-slids");
        let count = children.count;
        children.parent().css({ 'width' : count * 100 +'%' });
        children.css({ 'width' : 100/count +'%' });
        for (let i = count; i > 0; i--) {
            let elem = V(document.createElement('label')).attr('data-slide-index', i - 1);
            if(i == 1)
                elem.addClass('v-active-slide');
            element.children('.v-slider-card-1-switches').put(elem.array()[0], 'prepend');
        }
        V('.v-slider-card-1-switches label').event({
            events: ['click'],
            funcs: [
                function(){
                    if(!V(this).hasClass("v-active-slide")){
                        V(this).parent().children('.v-active-slide').removeClass('v-active-slide');
                        V(this).addClass('v-active-slide');
                        let index = V(this).attr('data-slide-index');
                        V(this).parent('.v-slider-card-1').children(".v-slider-card-1-items").css({
                            'margin-left' : -100 * index + '%'
                        });
                    }
                }
            ]
        });
    });
    let duration = V('.v-slider-card-1 .v-slider-card-1-items').css('transition-duration');
    duration = parseFloat(duration);

    function rb(el){
        el.attr('disabled', true);
        let active = el.parent('.v-slider-card-1').children('.v-slider-card-1-switches label');
        active.for((index, element, arr) => {
            if(element.hasClass('v-active-slide')){
                if(arr.length != index+1)
                    arr[index+1].click();
                else arr[0].click();
                setTimeout(() => {
                    el.attr('disabled', false);
                }, duration * 1000);
                return false;
            }
            return true;
        });
    }

    function lb(el){
        el.attr('disabled', true);
        let active = el.parent('.v-slider-card-1').children('.v-slider-card-1-switches label');
        active.for((index, element, arr) => {
            if(element.hasClass('v-active-slide')){
                if(index != 0)
                    arr[index-1].click();
                else arr[arr.length - 1].click();
                setTimeout(() => {
                    el.attr('disabled', false);
                }, duration * 1000);
                return false;
            }
            return true;
        });
    }

    V('.v-slider-card-1 .v-slider-card-1-rb').event({
        events: ['click'],
        funcs: [
            function(){
                return rb(V(this));
            }
        ]
    });
    V('.v-slider-card-1 .v-slider-card-1-lb').event({
        events: ['click'],
        funcs: [
            function(){
                return lb(V(this));
            }
        ]
    });

}   