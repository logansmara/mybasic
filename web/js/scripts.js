$(document).ready(function(){
  /* кнопка hamburger в мобильном варианте */
  $('.js-click-knopka-mobile').on('click', function() {
        $('.hamburger').toggleClass('is-active');
        $(".submenu-ul-mobile").slideToggle();
        return false;
    });
    /* аккордион для раскрывающегося меню для маленьких экранов */
   $('.submenu-ul-mobile').dcAccordion({
     speed: 600,
   });
  /* кнопка hamburger в боковом меню */
  $('.js-click-knopka-vertical').on('click', function() {
    $('.js-click-knopka-vertical').toggleClass('rotate90deg');
    /*убираем, добавляем нижние полосы*/
    $('.knopka-menu').toggleClass('knopka-vertical');
    $(".submenu-vertical-ul").fadeToggle();
    /* затемнение страницы при открытии бокового меню */
    $(".submenu-vertical-fixed").fadeToggle();
    /* при затемнении страницы убираем background */
    $(".right1").toggleClass('dark');
    $("#main-vertical").toggleClass('main-vertical-color-click');
    $(".polosa").toggleClass('main-vertical-color-click');
    return false;
  });
  /* крестик в боковом меню */
  $('.close2').on('click', function() {
/* при клике на крестик три полоски кнопки меню возвращаются 
в горизонтальное положение */
    $('.js-click-knopka-vertical').toggleClass('rotate90deg');
    /*убираем, добавляем нижние полосы*/
    $('.knopka-menu').toggleClass('knopka-vertical');
    /* затемнение страницы при открытии бокового меню */
    $(".submenu-vertical-fixed").fadeToggle();
    /* при затемнении страницы убираем background */
    $(".right1").toggleClass('dark');
    $(".submenu-vertical-ul").fadeToggle();
    $("#main-vertical").toggleClass('main-vertical-color-click');
    return false;
  });

  /* Яндекс поиск по сайту */
  $('.search1').on('click', function() {
    $('.yandex-search-fixed').toggle();
  });
  $('.close-search').on('click', function() {
    $('.yandex-search-fixed').toggle();
  });

});
