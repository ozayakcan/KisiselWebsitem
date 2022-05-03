function classDegistir(x, classAdi) {
  x.classList.toggle(classAdi);
}
function classSilEkle(div1, silinecek, eklenecek){
    if($(div1).hasClass(silinecek)){
        $(div1).removeClass(silinecek);  
    }
    $(div1).addClass(eklenecek);
}
function classEkle(div1, eklenecek){
    if(!$(div1).hasClass(eklenecek)){
        $(div1).addClass(eklenecek);  
    }
}
function classSil(div1, silinecek){
    if($(div1).hasClass(silinecek)){
        $(div1).removeClass(silinecek);  
    }
}
function acilirMenuGoster(divA, divUl){
    if(!$(divA).hasClass("show")){
        $(divA).addClass("show");
    }
    if(!$(divUl).hasClass("show")){
        $(divUl).addClass("show");
    }
    $(divA).attr("aria-expanded", "true");
}
function acilirMenuGizle(divA, divUl){
    if($(divA).hasClass("show")){
        $(divA).removeClass("show");
    }
    if($(divUl).hasClass("show")){
        $(divUl).removeClass("show");
    }
    $(divA).attr("aria-expanded", "false");
}
$(document).ready(function() {
    var calismaSayisi = $(".calismalar").children().length;
    if(calismaSayisi == 1){
        $('.calismalar').children('ul').each(function () {
            $(this).addClass('tek');
        });
    }else if(calismaSayisi == 2){
        $('.calismalar').children('ul').each(function () {
            $(this).addClass('iki');
        });
    }else if(calismaSayisi == 3){
        $('.calismalar').children('ul').each(function () {
            $(this).addClass('uc');
        });
    }
    
    var ekrangenisligi = $(window).width();
    $( window ).resize(function() {
        ekrangenisligi = $(window).width();
        if(ekrangenisligi > 1180){
            $(".menu").show();
        }/*else {
            classSilEkle("#menuBtn", "fa-times", "fa-bars");
            $(".menu").hide();
        }*/
    });
    /*$(document).on("click", function(event){
        if(ekrangenisligi <= 626) {
            var $menubutonu = $(".mobilbtn");
            var $menu = $(".menu");
            if($menubutonu !== event.target && !$menubutonu.has(event.target).length && $menu !== event.target && !$menu.has(event.target).length){
                //$(".menu").slideUp(300);
                $(".menu").hide(0);
                classSilEkle("#menuBtn", "fa-times", "fa-bars");
            }
        }
    });*/
});