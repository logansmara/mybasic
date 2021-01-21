$(document).ready(function() {

  $('#vk1').click(function(e) {
    e.preventDefault();
    $('.submenu').slideToggle();
  });
  /* крестик, закрывающий группы в мобильном меню */
  $('.close1').click(function(e) {
    e.preventDefault();
    $('.submenu').slideToggle();
  });

});