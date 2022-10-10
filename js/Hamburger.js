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

const TitleHeight = jQuery(".title").outerHeight(true);

const LineHeight = jQuery(".line__side__under").outerHeight(true);

const TextHeight = jQuery(".maptext").outerHeight(true) 

const MapHeight = TitleHeight + LineHeight + TextHeight

jQuery(".l-main__under__map__img").css('height', MapHeight);

jQuery("l-main__under__map__box").css('height', MapHeight);




const Boxp1Height = jQuery(".l-main__bottom__box__1__left__p").outerHeight(true);
console.log(Boxp1Height)

const BoxtitleHeight = jQuery(".l-main__bottom__box h2").outerHeight(true);
console.log(BoxtitleHeight)

const Box1Height = Boxp1Height + BoxtitleHeight 
console.log(Box1Height)

jQuery(".l-main__bottom__box__1__left").css('height', Box1Height);


const Boxp2Height = jQuery(".l-main__bottom__box__2__left__p").outerHeight(true);
console.log(Boxp2Height)

const Box2Height = Boxp2Height + BoxtitleHeight
console.log(Box2Height)

jQuery(".l-main__bottom__box__2__left").css('height', Box2Height);

const img_lineHeight = jQuery(".line__side").outerHeight(true);
console.log(img_lineHeight)

const img_titleHeight = jQuery(".boxtitle").outerHeight(true);
console.log(img_titleHeight)

const bottom_left_imgHeight = Box2Height + Box1Height + img_lineHeight + img_titleHeight + 300



jQuery(".l-main__bottom__left").css('height',bottom_left_imgHeight);

const rBoxp1Height = jQuery(".l-main__bottom__box__1__right__p").outerHeight(true);
console.log(Boxp1Height)


const rBox1Height = Boxp1Height + BoxtitleHeight 


jQuery(".l-main__bottom__box__1__right").css('height', rBox1Height);


const rBoxp2Height = jQuery(".l-main__bottom__box__2__right__p").outerHeight(true);
console.log(rBoxp2Height)

const rBox2Height = rBoxp2Height + BoxtitleHeight


jQuery(".l-main__bottom__box__2__right").css('height', rBox2Height);


const bottom_right_imgHeight = rBox2Height + rBox1Height + img_lineHeight + img_titleHeight + 300

if(bottom_right_imgHeight > bottom_left_imgHeight){
  jQuery(".l-main__bottom__right").css('height',bottom_right_imgHeight);
}else{
  jQuery(".l-main__bottom__right").css('height',bottom_left_imgHeight);
}







var timer = false;
jQuery(window).resize(function() {
  if (timer !== false) {
    clearTimeout(timer);
  }
  timer = setTimeout(function() {
    location.reload();
  }, 100); });