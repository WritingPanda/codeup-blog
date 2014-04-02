<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="/css/readable-bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/site.css">
	<title>Written by a Panda</title>

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
				</ul>
		    </div>
		</div>
		@if (Session::has('successMessage'))
			<div class="alert alert-dismissable alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
			<div class="alert alert-dismissable alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif

	    @yield('content')

		<footer class="footer">
			<div class="row clear-top">
				<div class="col-lg-12">
					<p>&copy; 2014 <a href="http://www.writtenbyapanda.com" target="_blank">Written by a Panda</a> All rights and bamboo are reserved.</p>
				</div>
			</div>
		</footer>
	</div>

    <script src="/js/jquery-1.11.0.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    @yield('bottomscript')

</body>
</html>