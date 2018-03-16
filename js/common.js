$(document).ready(function() {
  var $body = $("body");
  var $header = $("header");
  var $footer = $("footer")
  var $logoWrap = $(".main-wrap-logo");
  var $logo = $(".logo-text");
  var $imgLogo = $("#logo");
  var $mainMenu = $(".main-menu");
  var $fixedMenu = $(".fixed-menu");
  var $sandwich = $(".main-sandwich");
  //var $sandwichBtn = $(".main-sandwich-wrap-btn");
  var $navLine = $(".main-sandwich-wrap");
  var $barText = $(".main-sandwich-menu");
  var $items = $(".main-sandwich-item");
  var $listItem = $(".main-menu-nav-list-item");
  var $workItem = $(".work-item");
  //var $bgc = '';
  var $mainSection = $(".main");
 
  var $mainHead = $(".main-wrap-heading");
  var $mainHeadHtml = $mainHead.html();
  var span = '';
  var $maxWidth = 600;

  function closeMenu() {
    $mainMenu.fadeOut(500, function() {
      $(this).removeAttr('style');
    });
    $items.each(function(i) {
      $(this).removeClass("deg" + i);
    });
    $header.removeClass('transparent');
   
    $('html, body').css('overflow-y', 'auto');
    $logoWrap.css('opacity', '1')
    
  }
  
  function openMenu() {
    $mainMenu.fadeIn(500);
    $items.each(function(i) {
      $(this).addClass("deg" + i);
    });

    $('html, body').css('overflow-y', 'hidden');
    $header.addClass('transparent');
     
  }
  $(window).on("orientationchange resize", function() {
    if ($body.css('overflow-y') === 'hidden') {
      closeMenu();
    }
    
  });
  var $lastScrollTop = 0;
  $(window).scroll(function() {

    var links = $fixedMenu.find('a');

    $.each(links, function(i, elem) {
     
      links.eq(i).removeClass('active-item');

      //if (i > 0) {
        var len = links.length;
        var current = $(links.eq(i).attr('href'));
        var next = i < len - 1 ? $(links.eq(i + 1).attr('href')) : 
        $footer;


      
          if ( $(window).scrollTop() >= current.offset().top && 
              $(window).scrollTop() < next.offset().top ) {

            $(this).addClass('active-item')
          }
     

    })


  	
    var $st = $(this).scrollTop();
    var $headerHeight = $header.outerHeight();
    
      if ($st > $lastScrollTop) {
        $header.css({
          'transform' : 'translateY(' + (-$headerHeight) + 'px)',
        });

        if (($(this).width() >= 768 && $(this).scrollTop() >= $mainSection.height()) ||
          ($(this).width() < 768 && $(this).scrollTop() > 2 * $headerHeight)) {
         
          $header.addClass('fixed');
          $header.removeClass('absolute');
        }
       
      } else {
        $header.css({
          'transform' : 'translateY(0)',
        });
        
        if (($(this).width() >= 768 && $(this).scrollTop() < $mainSection.height()) ||
          ($(this).width() < 768 && $(this).scrollTop() === 0)) {
            $header.addClass('absolute');
            $header.removeClass('fixed');
        } else {
            $header.addClass('fixed');
            $header.removeClass('absolute');
        }
      }

    $lastScrollTop = $st;
  });

  $listItem.find('a').click(function() {
    closeMenu();
  });
	
	$sandwich.click(function() {
		if ($mainMenu.is(":visible")) {
			closeMenu();
		} else {
      openMenu();
		}
		
	});
  
  $("a[href*='#about']").mPageScroll2id();
  $("a[href*='#skills']").mPageScroll2id();
  $("a[href*='#work']").mPageScroll2id();
  $("a[href*='#projects']").mPageScroll2id();
  $("a[href*='#contacts']").mPageScroll2id();
  $("a[href*='#contacts-wrap']").mPageScroll2id();

  $workItem.click(function() {
    $workItem.removeClass("work-item_active");
    $(this).addClass("work-item_active");
  });

  $('.contacts-form-input, .contacts-form-text').on('blur', function() {
    if((this).value !== '') {
      $(this).removeClass('errorTxt');
    }
  });

var canvas = document.querySelector('#html');
var width = canvas.width;
var height = canvas.height;

function drawCircles(element, breakPoint, rgbColorArr) {

  var el = document.querySelector(element);
  var ctx = el.getContext('2d');

  var lightenColor = rgbColorArr.map(function(elem) {
    return Math.floor((255 - elem) / 2) + elem;
  });

  for ( var i = 0; i < 10; i++ ) {

    ctx.beginPath();
    ctx.arc(10 + i * width / 10, height / 2, 8, 0, 2 * Math.PI);

    if ( i < breakPoint ) {

      ctx.fillStyle = "rgba(" + rgbColorArr[0] + ", " + 
      rgbColorArr[1] + ", " + rgbColorArr[2] + ", 1)";

    } else if ( i < breakPoint + 1 ) {

      ctx.fillStyle = "rgba(" + lightenColor[0] + ", " + 
      lightenColor[1] + ", " + lightenColor[2] + ", 1)";

    } else {

      ctx.fillStyle = "rgba(255,255,255,1)";
      
    }

    ctx.shadowColor = "#ccc";
    ctx.shadowOffsetX = -3;
    ctx.shadowOffsetY = 3;
    ctx.shadowBlur = 10;
    ctx.fill();
  }

}

drawCircles('#html', 9, [44, 48, 90]);
drawCircles('#css', 9, [45, 130, 142]);
drawCircles('#js', 8, [146, 139, 96]);
drawCircles('#wp', 6, [193, 70, 70]);

var wow = new WOW({
  live: true
});
wow.init();
  
setclock("#clock", {
  timeZone: 'current',
  strokes: true,
  strokeSm: false,
  strokeOffset: 0,
  strokeLgLength: 15,
  strokeMdLength: 10,
  numerals: false,
  arrowHLength: 35,
  arrowMLength: 45,
  arrowSLength: 55,
  strokeLgWidth: 3,
  timeLabel: false,
  diam: 130,
  centerDiam: 3,
  borderWidth: 0,
  bgColor: 'transparent',
  arrowHWidth: 3,
  arrowMWidth: 2,
  arrowSWidth: 1,
  arrowColor: '#00504d',
  strokeColor: '#00504d'
});


var data = {};
var form = $(".contacts-form");
var status = $(".contacts-form-status");
function resetErrors() {
  $('.contacts-form-input, .contacts-form-text').removeClass('errorTxt');
}
status.html("");
form.submit(function (evtObj) {
  evtObj.preventDefault();
  resetErrors();

  var url = '../handler.php';
  $.each($('form input, form textarea'), function(i, v) {
    if(v.type !== 'submit') {
      data[v.name] = v.value;
    }
  });
  var errors = [];
  
  $.ajax({
      dataType: "json",
      type: "POST",
      url: url,
      data: data,
      
      success: function(resp) {
        $.each(resp, function(i, v) {
          errors.push(v);
        });
        function noErrors(elem) {
          return elem !== 'errorTxt';
        }

        if (errors.every(noErrors)) {
          
          status.html("<span class='correct'>" + 
            resp['success'] + "</span>");
        } else {
          $.each(resp, function(i, v) {
            console.log(i + " => " + v);
            status.html("<span class='error'>" + 
              "Одно или несколько полей заполнены некорректно" + 
              "</span>");
            $('input[name="' + i + '"], textarea[name="' + i + 
              '"]').addClass(v);
          });
        }
        return false;
      }
       
    });
    return false;
  });

});