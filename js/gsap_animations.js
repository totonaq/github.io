$(document).ready(function() {
	var $head = $(".main-wrap-heading");
	var $par = $(".main-wrap-par");
	var $btn = $(".main-wrap-button");
	var $mainMenu = $(".main-menu");
	var $sandwich = $(".main-sandwich");
	var $barLine = $(".main-sandwich-item");
	var $listItem = $(".main-menu-nav-list-item");
	var $firstBlock = $("#first_block");
	var $txtBlock = $(".work-content-block-descr");
	var $imgBlock = $(".work-content-block-img");

	var $span = $('.letter');
	console.log($span);
	//var $popup = $(".skills-dev-text-link");
	//var $popup_content = $(".skills-dev-hidden");
	tl = new TimelineMax();
	//tl.staggerTo($barLine, 0.2, {left: '0', ease:Power4.easeInOut}, 0.1);
	//tl.staggerFrom($span, 0.8, {y: '-=50', autoAlpha: 0, ease:Power4.easeInOut, delay: 1.5}, 0.1);

	$sandwich.click(function() {
		if(!($mainMenu.is(":visible"))) {
			tl.staggerFrom($listItem, 0.2, {y: '+=20', autoAlpha: 0, ease:Power4.easeInOut}, 0.1);
		}
	});

	//tl.from($firstBlock.find($txtBlock), 0.5, {x: '-200', autoAlpha: 0, ease:Power4.easeInOut});
	
	
	
	/*var waypoint = $firstBlock.waypoint({
	  handler: function(direction) {
	    tl.from($firstBlock.find($txtBlock), 1, {x: '-200', autoAlpha: 0, ease:Power4.easeInOut});
	  },
	  offset: 100
	})*/


	/*TweenLite.from($head, 1, {autoAlpha: 0});
	TweenLite.to($head, 2, {autoAlpha: 1, delay: 1});
	TweenLite.from($par, 1, {autoAlpha: 0});
	TweenLite.to($par, 2, {autoAlpha: 1, delay: 2});
	TweenLite.to($btn, 1, {transform: "rotateX(0)", delay: 3});*/


	/*var clicked = true;
	$popup.click(function(evtObj) {
		
		if (clicked) {
			evtObj.preventDefault();
			TweenLite.to($popup_content, .5, {transform: "rotateX(0)"});
		} else {
			evtObj.preventDefault();
			TweenLite.to($popup_content, .5, {transform: "rotateX(90deg)"});
		}
		clicked = !clicked;
	})*/
})