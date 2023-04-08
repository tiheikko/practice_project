<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>admin page</title>
		@vite(['resources/css/admin.css'])
	</head>
	<body>
		<nav>
			<div id="links">
				<a id="admin_logo" href="{{route('admin.index')}}">Admin</a>

				<h3>UI</h3>
				
				<ul>
					<li><a href="{{route('admin.edit')}}">Изменить страницы</a></li>
				</ul>
			</div>
		</nav>

		<main>
			<div>
				<div class="title">
					@yield('admin_content')
		</main>

	</body>
</html>