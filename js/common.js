$(document).ready(function() {
  var $body = $("body");
  var $mainMenu = $(".main-menu");
  var $sandwich = $(".main-sandwich");
  var $sandwichBtn = $(".main-sandwich-wrap-btn");
  var $navLine = $(".main-sandwich-wrap");
  var $barText = $(".main-sandwich-menu");
  var $items = $(".main-sandwich-item");
  var $listItem = $(".main-menu-nav-list-item");
  var $workItem = $(".work-item");
  var $bgc = '';
  var $mainSection = $(".main");
 
  var $mainHead = $(".main-wrap-heading");
  var $mainHeadHtml = $mainHead.html();
  var span = '';
  var $maxWidth = 600;

  function closeMenu() {
    $(".main-menu").fadeOut(500);
      $items.each(function(i) {
         $(this).removeClass("deg" + i);
      });
      $navLine.css({"height":"auto"});
      $sandwich.css({"backgroundColor": $bgc});
  }

  function openMenu() {
    $mainMenu.fadeIn(500);
      $items.each(function(i) {
         $(this).addClass("deg" + i);
      });
      $navLine.css({"height":"0"});
      $sandwich.css({"backgroundColor":"transparent"});
     
  }

  $(window).scroll(function() {
  	var height = $mainSection.height();
    if ($(window).width() >= $maxWidth) {
    	if($(this).scrollTop() > 60 && $(this).scrollTop() < height) {
    		$bgc = 'rgba(255,255,255,.2)';
    		$sandwich.css({
    			'backgroundColor' : $bgc,
    			'padding' : '15px 25px'
    		});
    		$barText.css({'display' : 'none'});
    	} else if ($(this).scrollTop() >= height) {
    		$bgc = 'rgba(6, 187, 194, .15)';
    		$sandwich.css({
    			'backgroundColor' : $bgc,
    			'padding' : '15px 25px'
    		});
    		$barText.css({'display' : 'none'});
    	} 
    	else {
    		$bgc = 'transparent'
    		$sandwich.css({
    			'backgroundColor' : $bgc,
    			'padding' : '0'
    		});
        $barText.css({'display' : 'inline-block'});
      }
    }
  })

  $listItem.click(function() {
    closeMenu();
  });
	
	$sandwichBtn.click(function() {
		if ($mainMenu.is(":visible")) {
			closeMenu();
		} else {
      openMenu();
		}
		
	});
  
  $("a[href*='#about']").mPageScroll2id();
  $("a[href*='#skills']").mPageScroll2id();
  $("a[href*='#work']").mPageScroll2id();
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

    $("#html").circliful({
        animationStep: 8,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        backgroundColor: '#ddd',//'rgba(6, 187, 194, .15)',
        foregroundColor: 'hsl(180,100%,25%)',// 'rgba(6, 187, 194, 1)',//'#7dcdcd',// 'rgba(6, 187, 194, 1)',
        percent: 95,
        fontColor: '#05051c',
        animateInView: true,
    });
    $("#css").circliful({
        animationStep: 8,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        backgroundColor: '#ddd',//'rgba(6, 187, 194, .15)',
        foregroundColor: 'hsl(180,100%,25%)',//'rgba(6, 187, 194, 1)',//'#7dcdcd',//'rgba(6, 187, 194, 1)',
        percent: 95,
        fontColor: '#05051c',
        animateInView: true
    });
    $("#js").circliful({
        animationStep: 8,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        backgroundColor: '#ddd',//'rgba(6, 187, 194, .15)',
        foregroundColor: 'hsl(180,100%,30%)',//'rgba(6, 187, 194, 1)',//'#7dcdcd',//'rgba(6, 187, 194, 1)',
        percent: 85,
        fontColor: '#05051c',
        animateInView: true
    });
    $("#php").circliful({
        animationStep: 5,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        backgroundColor: '#ddd',//'rgba(6, 187, 194, .15)',
        foregroundColor: 'hsl(180,100%,33%)',//'rgba(6, 187, 194, 1)',//'#7dcdcd',//'rgba(6, 187, 194, 1)',
        percent: 70,
        fontColor: '#05051c',
        animateInView: true,
        //halfCircle: 1
    });
    $("#wp").circliful({
        animationStep: 5,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        backgroundColor: '#ddd',//'rgba(6, 187, 194, .15)',
        foregroundColor: 'hsl(180,100%,37%)',//'rgba(6, 187, 194, 1)',//'#7dcdcd',//'rgba(6, 187, 194, 1)',
        percent: 55,
        fontColor: '#05051c',
        animateInView: true,
        //halfCircle: 1
    });
    var wow = new WOW({
      live: true
    })
    wow.init();
   /*var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["HTML5", "CSS3", "JavaScript", "PHP & MySQL", "Wordpress"],
        datasets: [{
            label: '%',
            data: [95, 95, 85, 65, 55],
            backgroundColor: [
               
                 'rgba(0, 160, 160, 0.2)',
                  'rgba(0, 160, 160, 0.2)',
                   'rgba(0, 160, 160, 0.2)',
                    'rgba(0, 160, 160, 0.2)',
                     'rgba(0, 160, 160, 0.2)'
            ],
            borderColor: [
                'rgba(0, 160, 160, 1)',
                'rgba(0, 160, 160, 1)',
                'rgba(0, 160, 160, 1)',
                'rgba(0, 160, 160, 1)',
                'rgba(0, 160, 160, 1)'
               
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});*/


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

  var url = 'handler.php';
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