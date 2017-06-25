<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Den Telezhnikov | Front-end Developer</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<style>
		#preloader {
			background: #fff;
			height: 100%;
			font: 25px arial; 
			left: 0;
			
			position: fixed;
			text-align: center;
			top: 0;
			width: 100%;
			z-index: 10000;
		}
		#preloader div {
			
			margin-top: 40vh;
			perspective: 95px;
		}
		#preloader div .spinner {
			animation: spin 1.4s ease-in-out infinite;
			
			width: 20px;
		}
		@-webkit-keyframes spin {
			0% { transform: rotateY(0deg); }
			100% { transform: rotateY(-360deg); }
			
		}
		@keyframes spin {
			0% { transform: rotateY(0deg); }
			100% { transform: rotateY(-360deg); }
		}
		html, body, h1, h2, h3, p, ul, li {
		  margin: 0;
		  padding: 0; }
		body {
		  font: 16px "RobotoLight", sans-serif;
		  overflow-x: hidden; }
		a {
		  color: #fff;
		  text-decoration: none; }
		  a:focus {
		    outline: none; }
		button {
		  border: none; }
		  button:focus {
		    outline: none; }
		.main-wrap-button {
  			border-radius: 10px; }
  		.main {
			  background: fixed url(../img/main_bg.jpg) center center/cover no-repeat;
			  overflow: hidden;
			  padding-bottom: 4rem;
			  position: relative;
			  width: 100%; }
			  .main:after {
			    background-color: rgba(22, 22, 22, 0.8);
			    content: "";
			    height: 100%;
			    left: 0;
			    position: absolute;
			    top: 0;
			    width: 100%; }
			  .main-sandwich {
			    border-radius: 5%;
			    display: inline-block;
			    margin-left: 20px;
			    position: relative;
			    transition: all 0.5s ease;
			    vertical-align: middle;
			    z-index: 10; }
			    .main-sandwich:hover .main-sandwich-item {
			      border-top-color: #578f8f; }
			    .main-sandwich-wrap {
			      position: fixed;
			      right: 0;
			      text-align: right;
			      width: 300px;
			      z-index: 12; }
			      .main-sandwich-wrap-btn {
			        box-sizing: border-box;
			        cursor: pointer;
			        display: inline-block;
			        margin: 30px;
			        transition: all 0.5s ease; }
			        .main-sandwich-wrap-btn .main-sandwich-menu:after {
			          border-bottom: 1px solid #fff;
			          content: "";
			          height: 0;
			          left: 0;
			          position: absolute;
			          top: 100%;
			          transition: all 0.2s;
			          width: 0; }
			        .main-sandwich-wrap-btn:hover .main-sandwich-menu:after {
			          width: 100%; }
			    .main-sandwich-menu {
			      color: #fff;
			      display: none;
			      position: relative;
			      text-transform: uppercase; }
			    .main-sandwich-item {
			      border-top: 2px solid #00a8a8;
			      display: block;
			      height: 0;
			      opacity: 0.8;
			      padding: 0 0 5px;
			      position: relative;
			      transition: all 0.5s ease;
			      width: 25px; }
			      .main-sandwich-item_over {
			        transform-origin: 0 -4px; }
			      .main-sandwich-item_under {
			        transform-origin: 0 6px; }
			  .main-wrap {
			    color: #fff;
			    margin: auto;
			    max-width: 920px;
			    padding: 5vh 20px;
			    position: relative;
			    text-align: left;
			    z-index: 1; }
			    .main-wrap-logo {
			      display: inline-block;
			      margin-right: 10px;
			      width: 32px; }
			      .main-wrap-logo img {
			        width: 100%; }
			    .main-wrap-text {
			      display: inline-block; }
			      .main-wrap-text-up {
			        font: 1.1rem "RobotoBold";
			        text-transform: uppercase; }
			      .main-wrap-text-down {
			        font-size: 0.7rem;
			        letter-spacing: 2px;
			        text-transform: uppercase; }
			    .main-wrap-heading {
			      color: #fff;
			      font: 2.5rem "RobotoBold", sans-serif;
			      letter-spacing: 1px;
			      margin-bottom: 30px;
			      margin-top: 50px; }
			      .main-wrap-heading-span {
			        color: #00a8a8; }
			      .main-wrap-heading .letter {
			        display: inline-block; }
			    .main-wrap-par {
			      color: #fff;
			      font: 1rem "RobotoBold", sans-serif;
			      font-family: "RobotoRegular";
			      letter-spacing: 1px;
			      line-height: 1.7rem;
			      margin-top: 20px;
			      width: 88%; }
			    .main-wrap-buttons {
			      align-items: flex-end;
			      display: -webkit-flex;
			      display: -moz-flex;
			      display: -ms-flex;
			      display: -o-flex;
			      display: flex;
			      flex-flow: row wrap;
			      justify-content: center;
			      margin-top: 2rem; }
			    .main-wrap-button {
			      color: #eee;
			      font: 0.85rem "RobotoBold", sans-serif;
			      background-color: rgba(6, 187, 194, 0.5);
			      border-radius: 3px;
			      box-sizing: border-box;
			      cursor: pointer;
			      display: inline-block;
			      margin: 1.5rem 1rem 0 0;
			      outline: none;
			      padding: 15px 30px;
			      text-transform: uppercase;
			      transition: all 0.25s;
			      width: 190px; }
			      .main-wrap-button:hover {
			        background-color: #00a5a8; }
			      .main-wrap-button_gray {
			        background-color: rgba(255, 255, 255, 0.2);
			        background-image: none; }
			        .main-wrap-button_gray:hover {
			          background-color: rgba(255, 255, 255, 0.8);
			          color: #05051c; }
			  .main-menu {
			    background-color: rgba(0, 0, 0, 0.8);
			    display: none;
			    height: 100vh;
			    margin: auto;
			    position: fixed;
			    top: 0;
			    width: 100%;
			    z-index: 11; }
			    .main-menu-nav {
			      height: 100vh;
			      margin: auto;
			      text-align: center;
			      width: 100%; }
			      .main-menu-nav-list {
			        display: -webkit-flex;
			        display: -moz-flex;
			        display: -ms-flex;
			        display: -o-flex;
			        display: flex;
			        flex-flow: column wrap;
			        height: 100%;
			        justify-content: center; }
			        .main-menu-nav-list-item {
			          margin: 10px 0;
			          padding: 15px 0;
			          transition: all 0.5s ease; }
			          .main-menu-nav-list-item-link {
			            border-bottom: 2px solid transparent;
			            color: #ccc;
			            font-size: 2.5rem;
			            position: relative;
			            text-transform: uppercase;
			            transition: all 0.5s ease; }
			            .main-menu-nav-list-item-link:after {
			              border-bottom: 2px solid #fff;
			              content: "";
			              height: 0;
			              left: 0;
			              position: absolute;
			              top: 100%;
			              transition: all 0.2s;
			              width: 0; }
			            .main-menu-nav-list-item-link:hover:after {
			              width: 100%; }
			  .main-arrow {
			    bottom: 2rem;
			    color: rgba(255, 255, 255, 0.7);
			    cursor: pointer;
			    display: none;
			    font: 1rem "RobotoBold";
			    left: 50%;
			    position: absolute;
			    text-align: center;
			    transform: translateX(-50%);
			    transition: all 0.35s;
			    z-index: 1; }
			    .main-arrow .fa {
			      animation: moveArrow 1.5s infinite ease-in-out;
			      color: #00a8a8; }
			    .main-arrow:hover {
			      color: white; }
			    .main-arrow:hover .fa {
			      animation-play-state: paused; }
		@media all and (min-width: 600px) {
		  .main-sandwich-menu {
		    display: inline-block; }}
		@media all and (min-width: 992px) {
		  .main {
		    height: 100vh;
		    padding-bottom: 0; }
		    .main-wrap-heading {
		      font-size: 3.5rem;
		      margin-top: 15vh; }
		    .main-wrap-buttons {
		      justify-content: flex-start; }
		    .main-arrow {
		      display: block; }}
		@font-face {
		  font-family: "RobotoBold";
		  font-style: normal;
		  font-weight: normal;
		  src: url("../fonts/Roboto/roboto-bold-webfont.eot?#iefix") format("embedded-opentype"), url("../fonts/Roboto/roboto-bold-webfont.woff") format("woff"), url("../fonts/Roboto/roboto-bold-webfont.ttf") format("truetype"); }
		@font-face {
		  font-family: "RobotoLight";
		  font-style: normal;
		  font-weight: normal;
		  src: url("../fonts/Roboto/roboto-light-webfont.eot?#iefix") format("embedded-opentype"), url("../fonts/Roboto/roboto-light-webfont.woff") format("woff"), url("../fonts/Roboto/roboto-light-webfont.ttf") format("truetype"); }
	</style>
	<?php wp_head();?>
</head>
<body class="page">
<div id="preloader"><div>LOA<img src="img/logo.svg" class="spinner">ING</div></div>
	<section class="main">
		<div class="main-sandwich-wrap">
			<div class="main-sandwich-wrap-btn">
				<span class="main-sandwich-menu">Меню</span>
				<div class="main-sandwich">
					<span class="main-sandwich-item main-sandwich-item_over"></span>
					<span class="main-sandwich-item main-sandwich-item_middle"></span>
					<span class="main-sandwich-item main-sandwich-item_under"></span>
				</div>
			</div>	
		</div>

		<div class="main-wrap">
			<div class="main-wrap-logo">
				<a href="index.php">
					<img src="img/logo.svg" class="" data-wow-delay=".5s" data-wow-duration=".8s" alt="D">
				</a>
			</div>
			<div class="main-wrap-text">
				<p class="main-wrap-text-up">Den Telezhnikov</p>
				<p class="main-wrap-text-down">Front-end developer</p>
			</div>
			<h1 class="main-wrap-heading">Разработка сайтов.
			</h1>
			<p class="main-wrap-par">Я веб-разработчик из небольшого города на западе России. Я занимаюсь созданием веб-сайтов с нуля, исключая, разве что, дизайн. Если у вас есть готовый макет, который нужно превратить в сайт, или ваша компания ищет фронтенд-разработчика, я к вашим услугам.</p>
			<div class="main-wrap-buttons">
				<a href="#contacts-wrap" class="main-wrap-button">Мне нужен сайт</a>
				<a href="resume.pdf" target="_blank" class="main-wrap-button main-wrap-button_gray">Ищу сотрудника</a>
			</div>
		</div>
		<div class="main-menu">
			<nav class="main-menu-nav">
				<ul class="main-menu-nav-list">
					<!--<li class="main-menu-nav-list-item"><a href="#about" class="main-menu-nav-list-item-link">обо мне</a></li>-->
					<li class="main-menu-nav-list-item"><a href="#skills" class="main-menu-nav-list-item-link">навыки</a></li>
					<li class="main-menu-nav-list-item"><a href="#work" class="main-menu-nav-list-item-link">работы</a></li>
					<li class="main-menu-nav-list-item"><a href="#contacts" class="main-menu-nav-list-item-link">контакты</a></li>
				</ul>
			</nav>
		</div>
		<a class="main-arrow" href="#skills">
			<span class="main-arrow-text">Больше о моей работе</span><br>
			<i class="fa fa-chevron-down" aria-hidden="true"></i>
		</a>
	</section>
	<!--<section class="about" id="about">
		<div class="about-around">
			<div class="about-around-top"></div>
			<div class="about-around-bottom"></div>
		</div>-->
		
		<!--<div class="about-photo">
			<div class="about-photo-top">
			<img src="img/world_gray.jpg" alt="" class="about-photo-img">-->
			<!--</div>-->

		<!--</div>
		<div class="about-wrap">
			<h1 class="about-menu-item">Обо мне</h1>
			<p class="about-text">
				Меня зовут Денис и я более года занимаюсь веб-разработкой. Где я этому научился? В моем электротехническом ВУЗе, к сожалению, информационным технологиям не обучали, поэтому осваивать все пришлось самостоятельно, смотря видео-подкасты более старших товарищей (как, например, <a href="https://www.codeschool.com/courses/shaping-up-with-angular-js" class="about-text-link">этот</a> туториал по angularJS), читая умные книжки («Выразительный JavaScript», М. Хавербеке; «JavaScript. Подробное руководство», Д. Флэнаган; «You Don't Know JS», K.Simpson) и проходя онлайн-курсы (<a href="" class="about-text-link">W3School</a>, <a href="" class="about-text-link">codecademy</a>), причем не всегда на родном языке. В результате я научился делать адаптивные, анимированные сайты разной степени сложности. Я продолжаю совершенствовать свои навыки, изучая новые технологии и разрабатывая собственные проекты.
			</p>
		</div>
	</section>-->

	<section class="skills" id="skills">
		
		<h1 class="skills-menu-item wow fadeInTxt">Навыки</h1>
		<h2 class="skills-menu-item-sub wow fadeInTxt" data-wow-delay=".3s">3 основных направления моей работы:</h2>
		<div class="skills-blocks">
			<div class="skills-blocks-item">
				<div class="skills-blocks-item-fa-wrap">
					<i class="fa fa-code wow scaleElem" aria-hidden="true"></i>
				</div>
				<h3 class="skills-blocks-item-heading wow toDown" data-wow-delay=".4s" data-wow-duration=".7s">
					Код
				</h3>
				<p class="skills-blocks-item-descr wow toDown" data-wow-delay=".4s" data-wow-duration=".7s">
					Я разработчик, а это значит, что прежде всего я пишу код: HTML, CSS, JavaScript. При этом использую инструменты, ускоряющую разработку: SASS, jQuery, сетку Bootstrap.
				</p>
			</div>
			<div class="skills-blocks-item">
				<div class="skills-blocks-item-fa-wrap">
					<i class="fa fa-cog wow scaleElem" aria-hidden="true" data-wow-delay=".2s"></i>
				</div>
				<h3 class="skills-blocks-item-heading wow toDown" data-wow-delay=".6s" data-wow-duration=".7s">
					Анимации
				</h3>
				<p class="skills-blocks-item-descr wow toDown" data-wow-delay=".6s" data-wow-duration=".7s">
					Умеренная анимация оживляет сайт. Для ее создания помимо стандартных средств CSS3 я использую animate.css, GSAP и возможности HTML5 Canvas.
				</p>
			</div>
			<div class="skills-blocks-item">
				<div class="skills-blocks-item-fa-wrap">
					<i class="fa fa-server wow scaleElem" aria-hidden="true" data-wow-delay=".4s"></i>
				</div>
				<h3 class="skills-blocks-item-heading wow toDown" data-wow-delay=".8s" data-wow-duration=".7s">
					Сервер
				</h3>
				<p class="skills-blocks-item-descr wow toDown" data-wow-delay=".8s" data-wow-duration=".7s">
					Хотя моя основная специализация - фронтенд-разработка, я также работаю с серверными программами и базами данных (PHP и MySQL). Из CMS предпочитаю Wordpress.
				</p>
			</div>
		</div>
		<!--<div id="piechart_3d" style="width: 900px; height: 500px; "></div>-->
		<div class="skills-info">
			<!--<div class="skills-info-diagram">
				<canvas id="myChart" width="400" height="100"></canvas>
			</div>-->
			
			<div class="skills-info-wrap">
				<div class="skills-info-progress">
					<div class="skills-info-progress-item" id="html">
						<span class="skills-info-progress-item-text">HTML</span>
					</div>
					<div class="skills-info-progress-item" id="css">
						<span class="skills-info-progress-item-text">CSS<span class="skills-info-progress-item-text_normal"><br>(+ SASS)</span></span>
					</div>
					<div class="skills-info-progress-item" id="js">
						<span class="skills-info-progress-item-text">JavaScript<span class="skills-info-progress-item-text_normal"><br>(+ jQuery)</span></span>
					</div>
					<div class="skills-info-progress-item" id="php">
						<span class="skills-info-progress-item-text">PHP & MySQL</span>
					</div>
					<div class="skills-info-progress-item" id="wp">
						<span class="skills-info-progress-item-text">Wordpress</span>
					</div>
				</div>
			</div>
		<div class="skills-progress">
			
		</div>
	</section>

	
	<section class="work" id="work">
		
		<h1 class="work-menu-item wow fadeInTxt">Работы</h1>
		<h2 class="work-menu-item-sub wow fadeInTxt" data-wow-delay=".3s">Нужно больше примеров? <a href="#contacts-wrap" class="work-menu-item-sub-link">Напишите мне</a></h2>
		<div class="work-content-wrap">
			<div class="work-content-block" id="first_block">
				<div class="work-content-block-descr wow toRight">
					<h2 class="work-content-block-descr-heading">
						Texcort
					</h2>
					<i class="fa fa-circle" aria-hidden="true"></i>
					<span class="work-content-block-descr-sub">верстка, анимации, бэкенд</span>
					<p class="work-content-block-descr-par">
						Сайт международной китайской компании, занимающейся продажей швейных нитей.
					</p>
					<a href="http://texcort.com" class="work-content-block-descr-btn">Посетить сайт</a>
				</div>
				<div class="work-content-block-img wow toLeft">
					<img src="img/projects/texcort.png" alt="texcort" class="work-content-block-img-example">
				</div>
				<div class="work-content-block-testimonial">
					<p class="work-content-block-testimonial-cite wow toDown">"С Денисом, работаю постоянно. В плане сроков и исполнения все на высоком уровне, код чистый и где нужно комментарии. Задачи разной сложности всегда выполняются раньше поставленных дедлайнов. Работой доволен, продолжаем сотрудничать!"</p>
					<div class="work-content-block-testimonial-wrap">
						<div class="work-content-block-testimonial-photo-wrap wow flipInY">
							<img src="img/edik.jpg" alt="" class="work-content-block-testimonial-photo">
						</div>
						<span class="work-content-block-testimonial-descr wow toLeft">Эдуард Уайанай, веб-дизайнер, фрилансер</span>
					</div>
				</div>
			</div>
			<div class="work-content-block">
				<div class="work-content-block-descr wow toLeft">
					<h2 class="work-content-block-descr-heading">
						Gold-service
					</h2>
					<i class="fa fa-circle" aria-hidden="true"></i>
					<span class="work-content-block-descr-sub">верстка, настройка Google карт, бэкенд (+ посадка на wordpress)</span>
					<p class="work-content-block-descr-par">
						Сайт белгородской компании по ремонту компьютерной техники.
					</p>
					<a href="http://gold-service.com.ru" class="work-content-block-descr-btn">Посетить сайт</a>
				</div>
				<div class="work-content-block-img wow toRight">
					<img src="img/projects/itservice2.png" alt="itservice" class="work-content-block-img-example">
				</div>
				
			</div>
		</div>
	</section>

	<section class="contacts" id="contacts">
		<div id="map"></div>
		<div class="contacts-wrap" id="contacts-wrap">
			<div class="contacts-around-wrap">
				<div class="contacts-around wow rotateBlock">
					<div class="contacts-around-top"></div>
					<div class="contacts-around-bottom"></div>
				</div>
				<div class="contacts-photo">
					<div class="contacts-photo-wrap wow rotateY">
						<img src="img/me.jpg" alt="me" class="contacts-photo-img">
						<!--<h1 class="work-menu-item wow fadeInTxt">Контакты</h1>-->
					</div>
				</div>
				<div class="contacts-soc">
					<a href="https://vk.com/kymman"><i class="fa fa-vk wow scaleElem" aria-hidden="true"></i></a>
					<a href="skype:sprachforscher?call"><i class="fa fa-skype wow scaleElem" aria-hidden="true" data-wow-delay="0.2s"></i></a>
					<a href="mailto:mr.kymman@gmail.com"><i class="fa fa-envelope wow scaleElem" aria-hidden="true" data-wow-delay="0.4s"></i></a>
				</div>
			</div>
			<form class="contacts-form">
				<input type="text" name="name" class="contacts-form-input wow toDown" placeholder="Имя *">
				<input type="text" name="email" class="contacts-form-input wow toDown" placeholder="Email *" data-wow-delay="0.2s">
				<input type="tel" name="phone" class="contacts-form-input wow toDown" placeholder="Телефон" data-wow-delay="0.4s">
				<textarea name="text" id="" cols="30" rows="6" class="contacts-form-text wow toLeft" placeholder="Сообщение *"></textarea>
				<button type="submit" class="contacts-form-submit wow fadeIn" data-wow-delay="0.6s" data-wow-duration=".6s">Отправить</button>
				<span class="contacts-form-status"></span>
			</form>
		</div>
	</section>
	<footer>
		<span class="footer-copy">IAMDEN &copy; <?php echo date('Y') ?></span>
		<a href="resume.pdf" target="_blank" class="footer-resume">Смотреть резюме</a>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
	<script src="libs/jquery.malihu.PageScroll2id.min.js"></script>
	<script src="libs/wow.min.js"></script>
	<script src="libs/jquery-plugin-circliful-master/js/jquery.circliful.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
	<script src="js/gsap_animations.js"></script>
	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASpjaKD6x5IPtWj2t9DIEVCBZJ9NBsVTw&callback=initMap">
    </script>
    <script src="https://use.fontawesome.com/140b30ef96.js"></script>
    <script src="js/mapSettings.js"></script>
	<script src="js/common.js"></script>
	<script>
		$(window).on('load', function() {
			var $preloader = $('#preloader');
			var $spinner = $preloader.find('div');
			$spinner.fadeOut();
			$preloader.delay(350).fadeOut('slow');

		})
	</script>
</body>
</html>
<!--<link rel="stylesheet" href="libs/animate.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/font.css">
	<link rel="stylesheet" href="css/media.css">-->