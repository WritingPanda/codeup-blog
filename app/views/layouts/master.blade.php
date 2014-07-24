<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="The website of Omar Quimbaya, software developer, web developer, teacher, content creator, and more. Please check out my blog if you want to learn more about the things I am up to, but if you are interested in hiring me for your company or side project, please check out my resume! Thank you!">
	<meta name="keywords" content="PHP, development, HTML, CSS, web development, jQuery, JavaScript, social media, writing, editing, Texas, China, Chinese, Spanish">

	@yield('top-css')

	<link rel="stylesheet" type="text/css" href="/css/readable-bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/site.css">

	@yield('bottom-css')

	<title>
		@yield('title')
	</title>

	<script src="/js/jquery.min.js"></script>

	@yield('topscript')

</head>
<body>
	<div class="container">
		<div class="navbar navbar-default">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle collasped" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		    	</button>
		    	<a class="navbar-brand" href="{{{ action('HomeController@showIndex') }}}">Written by a Panda</a>
		    </div>
		    <div class="navbar-collapse collapse navbar-responsive-collapse">
		    	<ul class="nav navbar-nav">
		        	<li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
		    		<li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
		        	<li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
					<li>
						{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', 'id' => 'search')) }}
							{{ Form::submit('Search', array('class' => 'btn btn-link')) }}
							{{ Form::text('search') }}
						{{ Form::close() }}
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::check())
					<!-- Show logout, user email, create post -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{{ Auth::user()->email }}}<b class="caret"></b></a>	
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ action('PostsController@create') }}">Create Post</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ action('HomeController@doLogout') }}">Logout</a></li>
						</ul>
					 </li>
					@else
					 <!-- Show login -->
					 <li><a href="{{ action('HomeController@showLogin') }}">Login</a></li>
					@endif
				</ul>
		    </div>
		</div>
		@if (Session::has('successMessage'))
			<div class="alert alert-dismissable alert-success" id="fade_message">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
			<div class="alert alert-dismissable alert-danger" id="fade_message">{{{ Session::get('errorMessage') }}}</div>
		@endif
	</div>

	@yield('content')

	<div class="container">
		<footer class="footer">
			<div class="row clear-top">
				<div class="col-lg-12">
					<p>&copy; 2014 <a href="http://www.omarquimbaya.com" target="_blank">Omar Quimbaya / Written By a Panda</a> All rights and bamboo are reserved.</p>
				</div>
			</div>
		</footer>
	</div>

    <script src="/js/bootstrap.min.js"></script>
    <script>
		$('#fade_message').delay(2000).fadeOut(1000);
    </script>

    @yield('bottomscript')

</body>
</html>