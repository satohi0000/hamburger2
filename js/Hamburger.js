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

const titleHeight = jQuery(".title").outerHeight(true);
console.log(titleHeight);

const lineHeight = jQuery(".line__side__under").outerHeight(true);
console.log(lineHeight);

const textHeight = jQuery(".maptext").outerHeight(true);
console.log(textHeight)


const sumHeight = titleHeight + lineHeight + textHeight + 47.5
console.log(sumHeight)

jQuery(".l-main__under__map__img").css('height', sumHeight);

jQuery("l-main__under__map__box").css('height', sumHeight);



var timer = false;
jQuery(window).resize(function() {
  if (timer !== false) {
    clearTimeout(timer);
  }
  timer = setTimeout(function() {
    location.reload();
  }, 10); });