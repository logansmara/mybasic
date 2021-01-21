/* jquery.cookie.js */
jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};
/* jquery.dcjqaccordion.2.7.js */
(function($){
    $.fn.dcAccordion = function(options) {
        //set default options 
        var defaults = {
            classParent  : 'dcjq-parent',
            classActive  : 'active',            classArrow   : 'dcjq-icon',         classCount   : 'dcjq-count',
            classExpand  : 'dcjq-current-parent',
            eventType    : 'click',
            hoverDelay   : 300,
            menuClose     : true,
            autoClose    : true,
            autoExpand   : false,
            speed        : 'slow',
            saveState    : true,
            disableLink  : true,            showCount : false,
            cookie  : 'dcjq-accordion'
        };
        //call in the default otions
        var options = $.extend(defaults, options);
        this.each(function(options){
            var obj = this;
            setUpAccordion();
            if(defaults.saveState == true){
                checkCookie(defaults.cookie, obj);
            }
            if(defaults.autoExpand == true){
                $('li.'+defaults.classExpand+' > a').addClass(defaults.classActive);
            }
            resetAccordion();
            if(defaults.eventType == 'hover'){
                var config = {
                    sensitivity: 2, // number = sensitivity threshold (must be 1 or higher)
                    interval: defaults.hoverDelay, // number = milliseconds for onMouseOver polling interval
                    over: linkOver, // function = onMouseOver callback (REQUIRED)
                    timeout: defaults.hoverDelay, // number = milliseconds delay before onMouseOut
                    out: linkOut // function = onMouseOut callback (REQUIRED)
                };
                $('li a',obj).hoverIntent(config);
                var configMenu = {
                    sensitivity: 2, // number = sensitivity threshold (must be 1 or higher)
                    interval: 1000, // number = milliseconds for onMouseOver polling interval
                    over: menuOver, // function = onMouseOver callback (REQUIRED)
                    timeout: 1000, // number = milliseconds delay before onMouseOut
                    out: menuOut // function = onMouseOut callback (REQUIRED)
                };
                $(obj).hoverIntent(configMenu);
                // Disable parent links
                if(defaults.disableLink == true){
                    $('li a',obj).click(function(e){
                        if($(this).siblings('ul').length >0){
                            e.preventDefault();
                        }
                    });
                }
            } else {            
                $('li a',obj).click(function(e){
                    $activeLi = $(this).parent('li');
                    $parentsLi = $activeLi.parents('li');
                    $parentsUl = $activeLi.parents('ul');
                    // Prevent browsing to link if has child links
                    if(defaults.disableLink == true){
                        if($(this).siblings('ul').length >0){
                            e.preventDefault();
                        }
                    }
                    // Auto close sibling menus
                    if(defaults.autoClose == true){
                        autoCloseAccordion($parentsLi, $parentsUl);
                    }
                    if ($('> ul',$activeLi).is(':visible')){
                        $('ul',$activeLi).slideUp(defaults.speed);
                        $('a',$activeLi).removeClass(defaults.classActive);
                    } else {
                        $(this).siblings('ul').slideToggle(defaults.speed);
                        $('> a',$activeLi).addClass(defaults.classActive);
                    }                   
                    // Write cookie if save state is on
                    if(defaults.saveState == true){
                        createCookie(defaults.cookie, obj);
                    }
                });
            }
            // Set up accordion
            function setUpAccordion(){
                $arrow = '<span class="'+defaults.classArrow+'"></span>';
                var classParentLi = defaults.classParent+'-li';
                $('> ul',obj).show();
                $('li',obj).each(function(){
                    if($('> ul',this).length > 0){                      $(this).addClass(classParentLi);
                        $('> a',this).addClass(defaults.classParent).append($arrow);
                    }
                });
                $('> ul',obj).hide();
                if(defaults.showCount == true){
                    $('li.'+classParentLi,obj).each(function(){
                        if(defaults.disableLink == true){
                            var getCount = parseInt($('ul a:not(.'+defaults.classParent+')',this).length);
                        } else {
                            var getCount = parseInt($('ul a',this).length);
                        }
                        $('> a',this).append(' <span class="'+defaults.classCount+'">('+getCount+')</span>');
                    });
                }
            }
            
            function linkOver(){

            $activeLi = $(this).parent('li');
            $parentsLi = $activeLi.parents('li');
            $parentsUl = $activeLi.parents('ul');

            // Auto close sibling menus
            if(defaults.autoClose == true){
                autoCloseAccordion($parentsLi, $parentsUl);

            }

            if ($('> ul',$activeLi).is(':visible')){
                $('ul',$activeLi).slideUp(defaults.speed);
                $('a',$activeLi).removeClass(defaults.classActive);
            } else {
                $(this).siblings('ul').slideToggle(defaults.speed);
                $('> a',$activeLi).addClass(defaults.classActive);
            }

            // Write cookie if save state is on
            if(defaults.saveState == true){
                createCookie(defaults.cookie, obj);
            }
        }

        function linkOut(){
        }

        function menuOver(){
        }

        function menuOut(){

            if(defaults.menuClose == true){
                $('ul',obj).slideUp(defaults.speed);
                // Reset active links
                $('a',obj).removeClass(defaults.classActive);
                createCookie(defaults.cookie, obj);
            }
        }

        // Auto-Close Open Menu Items
        function autoCloseAccordion($parentsLi, $parentsUl){
            $('ul',obj).not($parentsUl).slideUp(defaults.speed);
            // Reset active links
            $('a',obj).removeClass(defaults.classActive);
            $('> a',$parentsLi).addClass(defaults.classActive);
        }
        // Reset accordion using active links
        function resetAccordion(){
            $('ul',obj).hide();
            $allActiveLi = $('a.'+defaults.classActive,obj);
            $allActiveLi.siblings('ul').show();
        }
        });
        // Retrieve cookie value and set active items
        function checkCookie(cookieId, obj){
            var cookieVal = $.cookie(cookieId);
            if(cookieVal != null){
                // create array from cookie string
                var activeArray = cookieVal.split(',');
                $.each(activeArray, function(index,value){
                    var $cookieLi = $('li:eq('+value+')',obj);
                    $('> a',$cookieLi).addClass(defaults.classActive);
                    var $parentsLi = $cookieLi.parents('li');
                    $('> a',$parentsLi).addClass(defaults.classActive);
                });
            }
        }
        // Write cookie
        function createCookie(cookieId, obj){
            var activeIndex = [];
            // Create array of active items index value
            $('li a.'+defaults.classActive,obj).each(function(i){
                var $arrayItem = $(this).parent('li');
                var itemIndex = $('li',obj).index($arrayItem);
                    activeIndex.push(itemIndex);
                });
            // Store in cookie
            $.cookie(cookieId, activeIndex, { path: '/' });
        }
    };
})(jQuery);
/* scripts.js */
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
/* hover-click.js */
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
/* proba.js */
var header = $('.fixed-menu');
var header1 = $('.right1');
var contentq = $('.content-q');
/* чтобы при нажатии на "Показать еще" не появлялось второе меню */
$('.ias-trigger a').on('click', function() {
    header1.removeClass('out');
});

$(window).scroll(function() {
    var scrolled = $(window).scrollTop();

    if ( scrolled > 33) {
        header.addClass('position-fixed');
        contentq.addClass('content-scroll');
    } else {
        header.removeClass('position-fixed');
        contentq.removeClass('content-scroll');
    }
 
    if ( scrolled > 100 && scrolled > scrollPrev ) {
        header1.addClass('out');
    } else {
        header1.removeClass('out');
    }
/* только для мобильной версии, 
   чтобы удобно смотреть видео  с сайта */
var mobile = $('#menu-mobile');
    if ( scrolled > 50 && scrolled > scrollPrev ) {
        mobile.addClass('out');
    } else {
        mobile.removeClass('out');
    }
    scrollPrev = scrolled;
});
