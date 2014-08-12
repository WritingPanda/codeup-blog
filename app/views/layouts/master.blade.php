<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="The website of Omar Quimbaya, software developer, web developer, teacher, content creator, and more. Please check out my blog if you want to learn more about the things I am up to, but if you are interested in hiring me for your company or side project, please check out my resume! Thank you!">
	<meta name="keywords" content="PHP, development, HTML, CSS, web development, jQuery, JavaScript, social media, writing, editing, Texas, China, Chinese, Spanish">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="/img/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/img/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="/img/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="/img/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="/img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="/img/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

	@yield('top-css')
	
	<link rel="stylesheet" type="text/css" href="/css/readable-bootstrap.css">
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
	<div id="top">
		<div class="navbar navbar-default navbar-fixed-top">
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
		        	<li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
		        	<li>
		        		{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'id' => 'search')) }}
							{{ Form::text('search', null, array('class' => 'form-control col-lg-8', 'placeholder' => 'Search', 'id' => 'searchForm')) }}
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

	<div id="bottom">
		<footer class="panel-footer">
			<div class="row clear-top">
				<div class="col-lg-12">
					<p>&copy; 2014 <a href="http://www.omarquimbaya.com" target="_blank">Omar Quimbaya / Written By a Panda</a> All rights and bamboo are reserved.</p>
				</div>
			</div>
		</footer>
	</div>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>

		$('#fade_message').delay(2000).fadeOut(1000);

    </script>

    @yield('bottomscript')

</body>
</html>