$(".l-header__left__menu__botton").click(function () {
  $(".l-sidebar").toggleClass("__is-open");
  $(".l-sidebar2").toggleClass("__is-open");
  $(".l-sidebar__batsu").toggleClass("__is-open");
  $(".l-contents").toggleClass("__is-open");
  $("body").css("overflow-y","hidden");
});

$(".l-sidebar__batsu").click(function () {
  $(".l-sidebar").toggleClass("__is-open");
  $(".l-sidebar2").toggleClass("__is-open");
  $(".l-sidebar__batsu").toggleClass("__is-open")
  $(".l-contents").toggleClass("__is-open")
  $("body").css("overflow-y","auto");
});

$(function(){
  // 高さの最大値を代入するための変数h
  var h = 0;

  // それぞれの要素の高さを調べる
  $("l-main__under__map__box").each(function(){
    // 要素の高さと変数hの値を比較し、大きい方を変数hに代入
    if($(this).height() > h){
      h = $(this).height();
    }
  });

  // 要素の高さを変数hの値に統一します
  $("l-main__under__map__img").css("height", h + "px");
});
