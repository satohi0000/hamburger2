jQuery(".l-header__left__menu__botton").click(function () {
  jQuery(".l-sidebar").toggleClass("__is-open");
  jQuery(".l-sidebar2").toggleClass("__is-open");
  jQuery(".l-sidebar__batsu").toggleClass("__is-open");
  jQuery(".l-contents").toggleClass("__is-open");
  jQuery("body").css("overflow-y","hidden");
});

jQuery(".l-sidebar__batsu").click(function () {
  jQuery(".l-sidebar").toggleClass("__is-open");
  jQuery(".l-sidebar2").toggleClass("__is-open");
  jQuery(".l-sidebar__batsu").toggleClass("__is-open")
  jQuery(".l-contents").toggleClass("__is-open")
  jQuery("body").css("overflow-y","auto");
});

jQuery(function(){
  
  var h = 0;
  jQuery("l-main__under__map__box") //コメントを入力してあるクラス
  
  .each(function(){
  if($(this).height() > h){
        h = jQuery(this).overheight();
      }
    });
    
    jQuery("l-main__under__map__img")　 //地図のクラス
  .css("height", h + "px");
  });