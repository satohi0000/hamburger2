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
  jQuery(".l-sidebar__batsu").toggleClass("__is-open");
  jQuery(".l-contents").toggleClass("__is-open");
  jQuery("body").css("overflow-y","auto");
});

$(function(){
var height = jQuery(".l-main__under__map__box").outerWidth(true);
var width = jQuery(".l-main__under__map__box").outerHeight(true);
jQuery("l-main__under__map").css(width,"width");
jQuery("l-main__under__map").css(height,"height");
});
