<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="/css/readable-bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/site.css">
	<title>Written by a Panda</title>
	@yield('topscript')
</head>
<body>
	<div class="container">
		<div class="navbar">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		    	</button>
		    	<a class="navbar-brand" href="/">Written by a Panda</a>
		    </div>
		    <div class="navbar-collapse collapse navbar-responsive-collapse">
		    	<ul class="nav navbar-nav">
		    		<li><a href="/portfolio">Portfolio</a></li>
		        	<li><a href="/resume">Resume</a></li>
		        	<li><a href="#">Blog</a></li>
				</ul>
		    </div>
		</div>
	    
	    @yield('content')

		
		<footer class="footer">
			<div class="row clear-top">
				<div class="col-lg-12">
					<p>&copy; 2014 <a href="http://www.writtenbyapanda.com" target="_blank">Written by a Panda</a></p>
				</div>
			</div>
		</footer>
	</div>
    <script src="/js/jquery-1.11.0.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    @yield('bottomscript')

</body>
</html>