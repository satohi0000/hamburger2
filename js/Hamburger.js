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