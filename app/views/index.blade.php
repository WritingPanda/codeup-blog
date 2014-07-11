@extends('layouts.master')

@section('title')

Omar Quimbaya: Web Developer

@stop

@section('bottom-css')

<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet">
<link rel="stylesheet" href="/css/skel-noscript.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/style-desktop.css">

@stop

@section('topscript')

<script src="/js/config.js"></script>
<script src="/js/skel.min.js"></script>

@stop

@section('content')

<nav id="nav">
	<ul class="container">
		<li><a href="#top">Top</a></li>
		<li><a href="#work">Mini Resume</a></li>
		<li><a href="#portfolio">Portfolio</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
	</ul>
</nav>

<!-- Home -->
<div class="wrapper wrapper-style1 wrapper-first">
	<article class="container" id="top">
		<div class="row">
			<div class="4u">
				<span class="me image image-full"><img src="img/me.png" alt="omar quimbaya"></span>
			</div>
			<div class="8u" id="font-color-white">
				<header>
					<h1>I'm <strong>Omar Quimbaya</strong>.</h1>
					<span>Web Developer and Lead Panda at Written by a Panda</span>
				</header>
				<p>This is the place where you can find out more about me, check out my projects, connect with me, and read what I am up to via my blog. If you would like to hire me, please contact me!</p>
				<a href="#work" class="button button-big">Check me out</a>
			</div>
		</div>
	</article>
</div>

<!-- Work -->
<div class="wrapper wrapper-style2">
	<article id="work">
		<header>
			<h2>My passions are building things to connect people and tell stories</h2>
			<span>People are the center of everything I do, and it shows in my recent work.</span>
		</header>
		<div class="container">
			<div class="row">
				<div class="4u">
					<section class="box box-style1">
						<img src="/img/codeup.png" alt="codeup logo">
						<h3>Codeup</h3>
						<p>Learned how to code from amazing instructors and am now teaching it to others. Changing the world, one programmer at a time.</p>
					</section>
				</div>
				<div class="4u">
					<section class="box box-style1">
						<img src="/img/geekdom.png" alt="geekdom logo">
						<h3>Geekdom</h3>
						<p>Served as the Community Manager for the largest and most innovative coworking space in Texas. Worked on social media and events.</p>
					</section>
				</div>
				<div class="4u">
					<section class="box box-style1">
						<img src="/img/parlevel.png" alt="parlevel systems logo">
						<h3>ParLevel Systems</h3>
						<p>Expanded their online presence as their Director of Social Media and Public Relations. Expert in vending + social media.</p>
					</section>
				</div>
			</div>
		</div>
		<footer>
			<p>Want to see some of my code?</p>
			<a href="#portfolio" class="button button-big">See some of my projects</a>
		</footer>
	</article>
</div>

<!-- Portfolio -->
<div class="wrapper wrapper-style3">
	<article id="portfolio">
		<header>
			<h2>Passionately Producing Panda Projects</h2>
			<span>I love connecting people, culture, and software together in a nice package. </span>
		</header>
		<div class="container">
			<div class="row">
				<div class="4u">
					<article class="box box-style2">
						<a href="https://github.com/WritingPanda/codeup-blog" class="image image-full"><img src="/img/writtenbyapandalogo.png" alt="Written by a Panda" /></a>
						<h3><a href="https://github.com/WritingPanda/codeup-blog">A Laravel Blog</a></h3>
						<p>Open source blog built using Laravel and other web techs</p>
					</article>
				</div>
				<div class="4u">
					<article class="box box-style2">
						<a href="http://www.reservette.info" class="image image-full"><img src="/img/portfolio03.png" alt="Reservette" /></a>
						<h3><a href="http://www.reservette.info">Reservette</a></h3>
						<p>A web application to reserve conference rooms</p>
					</article>
				</div>
				<div class="4u">
					<article class="box box-style2">
						<a href="https://github.com/WritingPanda" class="image image-full"><img src="/img/portfolio06.jpg" alt="hello"></a>
						<h3><a href="https://github.com/WritingPanda">My Code</a></h3>
						<p>Check out my code on Github and tell me your thoughts</p>
					</article>
				</div>
			</div>
		</div>
		<footer>
			<a href="#contact" class="button button-big">Get in touch</a>
		</footer>
	</article>
</div>

<!-- Contact -->
<div class="wrapper wrapper-style4">
	<article id="contact" class="container small">
		<header>
			<h2>Send me a message</h2>
			<span>Send me an email! I'd love to hear from you.</span>
		</header>
		<div>
			<div class="row">
				<div class="12u">
					<form method="POST" action="/php/mail.php">
						<div>
							<div class="row half">
								<div class="6u">
									<input type="text" name="name" id="name" placeholder="Name" class="inputTextForm" required>
								</div>
								<div class="6u">
									<input type="text" name="email" id="email" placeholder="Email" class="inputTextForm" required>
								</div>
							</div>
							<div class="row half">
								<div class="12u">
									<input type="text" name="subject" id="subject" placeholder="Subject" class="inputTextForm" required>
								</div>
							</div>
							<div class="row half">
								<div class="12u">
									<textarea name="message" id="message" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<a href="#" class="button form-button-submit">Send Message</a>
									<a href="#" class="button button-alt form-button-reset">Clear Form</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="12u">
					<hr>
					<h3>Connect with me:</h3>
					<ul class="social">
						<li class="twitter"><a href="http://twitter.com/writtenbyapanda" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="facebook"><a href="https://www.facebook.com/omar.quimbaya" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li class="linkedin"><a href="https://www.linkedin.com/in/omarleonardoquimbaya/" class="fa fa-linkedin"><span>LinkedIn</span></a></li>
						<li class="googleplus"><a href="https://plus.google.com/u/0/+OmarQuimbayaPanda/" class="fa fa-google-plus"><span>Google+</span></a></li>
						<li class="github"><a href="http://github.com/writingpanda" class="fa fa-github"><span>Github</span></a></li>
						<li class="instagram"><a href="http://instagram.com/propagandapanda4" class="fa fa-instagram"><span>Instagram</span></a></li>
						<li class="foursquare"><a href="https://foursquare.com/writtenbyapanda" class="fa fa-foursquare"><span>Foursquare</span></a></li>
					</ul>
					<hr>
				</div>
			</div>
		</div>
	</article>
</div>

@stop