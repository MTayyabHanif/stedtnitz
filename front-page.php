<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Example_Website</title>

	<link rel="stylesheet" type="text/css" href="./wp-content/themes/stedtnitz/assets/static-pagepilling/css/style.css" />
	<link rel="stylesheet" type="text/css" href="./wp-content/themes/stedtnitz/assets/static-pagepilling/css/page.min.css" />
	<link rel="stylesheet" type="text/css" href="./wp-content/themes/stedtnitz/assets/static-pagepilling/css/queries.css" />
	<link rel="stylesheet" type="text/css" href="./wp-content/themes/stedtnitz/assets/static-pagepilling/css/animate.css" />
	<script src="./wp-content/themes/stedtnitz/assets/static-pagepilling/js/jquery.js"></script>
	<script src="./wp-content/themes/stedtnitz/assets/static-pagepilling/js/script.js"></script>
	<script src="./wp-content/themes/stedtnitz/assets/static-pagepilling/js/animate.min.js"></script>
</head>
<body>
	<style>

		#menu-icon {
			width: 82px;
			height: 58px;
			position: fixed;
			z-index: 500;
			margin: 15px auto;
			right: -6px;
			cursor: pointer;
			top: -1.4%;
		}
		#menu-icon:hover {
			-moz-animation: burger .6s;
			-webkit-animation: burger .6s;
			animation: burger .6s;
		}
		#menu-icon.open .middle {
			width: 24px;
			height: 24px;
			top: 23%;
			left: 24%;
			border-radius: 50%;
			background-color: white;
			opacity: 0.3;
		}

		#menu-icon.open .top {
			-webkit-transform:rotate(45deg);
			top:40%;border-radius:10px;background-color:white;
		}

		#menu-icon.open .bottom{
			-webkit-transform:rotate(-45deg);
			top:40%;border-radius:10px;background-color:white;
		}

		.bar {
			width: 40px;
			-webkit-transition: all 0.4s;
			height: 4px;
			border: 2px solid white;
			position: absolute;
			border-radius: 10px;
		}

		.top {
			left: 15%;
			top: 24%;
		}

		.middle {
			left: 15%;
			top: 47%;
			-webkit-transition: all 0.35s;
		}

		.bottom {
			left: 15%;
			top: 71%;
		}

	</style>
	<div id="menu-icon">
		<div class="top bar"></div>
		<div class="middle bar"></div>
		<div class="bottom bar"></div>
	</div>
	<ul id="accordion" class="accordion">
		<li class="default open">
			<div class="link home"><i class="fa fa-paint-brush"></i>Home<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu" >
				<li data-menuanchor="culture" class="active"><a href="#culture">Culture</a></li>
				<li data-menuanchor="vishen" class=""><a href="#vishen">Vishen</a></li>
				<li data-menuanchor="book" class=""><a href="#book">The Book</a></li>
				<li data-menuanchor="team" class=""><a href="#team">The Team</a></li>
			</ul>
		</li>
		<li class="">
			<div class="link"><i class="fa fa-code"></i>Businesses<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu" >
				<li><a href="businesses.html#mva">Example_Website Academy</a></li>
				<li><a href="businesses.html#apps">Apps &amp; Platforms</a></li>
				<li><a href="businesses.html#events">Events</a></li>
				<li><a href="businesses.html#international">International</a></li>
				<li><a href="http://evercoach.com" target="_blank">Evercoach</a></li>
			</ul>
		</li>
		<li class=""><div class="link"><i class="fa fa-globe"></i>News<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="http://www.Example_Website.com/blog/" target="_blank">Blog</a></li>
			</ul>
		</li>
		<li class=""><div class="link"><i class="fa fa-globe"></i>Careers<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="http://careers.Example_Website.com/">Opportunities</a></li>
			</ul>
		</li>
		<li class=""><div class="link"><i class="fa fa-globe"></i>Contact<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="contact.html#cs">Customer Support</a></li>
				<li><a href="contact.html#aff">Affiliate Partnerships</a></li>
			</ul>
		</li>
	</ul>
	<div class="mouseScroll">
		<div class="mouse"></div>
	</div></div>
	<div class="middle-nav">
		<button id="arrow-next" class="opacity-zero">
			<span>Next</span>
		</button>

		<button id="arrow-prev" class="opacity-zero">
			<span>Prev</span>
		</button>      
	</div>

	<div id="core">
		<div class="section">
			<div class="section-img" id="culture-section"></div>
			<h1>Invest in</h1>
			<h2>Happy</h2>
			<div class="decsription-short-text">
				<p>Our best products are our employees – discover how our multi award-winning company culture drives our productivity and our growth.
				</p>
			</div>  
			<div class="explore-block">
				<a href="<?php bloginfo('url'); ?>/blog" class='button button__one'>Learn More</a>
			</div>
		</div>



		<div class="section">
			<div class="section-img" id="vishen-section"></div>
			<h1>Meet</h1>
			<h2>Stedtnitz</h2>
			<div class="decsription-short-text">
				<p>Our best products are our employees – discover how our multi award-winning company culture drives our productivity and our growth.
				</p>
			</div>  
			<div class="explore-block">
				<a href="<?php bloginfo('url'); ?>/blog" class='button button__one'>Learn More</a>
			</div>
		</div>



		<div class="section">
			<div class="section-img" id="book-section"></div>
			<h1>Discover</h1>
			<h2>The Book</h2>
			<div class="decsription-short-text">
				<p>Our best products are our employees – discover how our multi award-winning company culture drives our productivity and our growth.
				</p>
			</div>  
			<div class="explore-block">
				<a href="<?php bloginfo('url'); ?>/blog" class='button button__one'>Learn More</a>
			</div>
		</div>



		<div class="section">
			<div class="section-img" id="team-section"></div>
			<h1>40 Nationalities</h1>
			<h2>1 Mission</h2>
			<div class="decsription-short-text">
				<p>Our unique recruitment policy has resulted in a diverse and international tribe, collectively dedicated to hacking education worldwide.
				</p>
			</div>  
			<div class="explore-block">
				<a href="<?php bloginfo('url'); ?>/blog" class='button button__one'>Learn More</a>
			</div>
		</div>
	</div>
	<script>
		var animate = new Animate({
			target: '[data-animate]',
			animatedClass: 'visible',
			offset: [0.5, 0.5],
			delay: 0,
			remove: false,
			reverse: true,
			scrolled: false,
			debug: true,
			onLoad: true,
			onScroll: true,
			onResize: false
		});

		animate.init();
	</script>
</body>
</html>