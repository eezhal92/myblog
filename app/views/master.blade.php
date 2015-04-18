<html>
<head>
	<title>My Blog</title>
	{{ HTML::style('css/style.css') }}
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Posts</a></li>
				<li><a href="#">Categories</a></li>
			</ul>
		</nav>
	</header>
	<div class="container">
	@yield('content')
	
	{{ HTML::script('js/main.js') }}
	</div>
</body>
</html>