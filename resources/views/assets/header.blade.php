<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>main</title>

		@vite(['resources/css/main.css'])
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;900&display=swap" rel="stylesheet"> 

		<script src="https://kit.fontawesome.com/407dedc4b6.js" crossorigin="anonymous"></script>
	</head>

	<body>
		<nav>
			<a id="logo" href="{{route('main.index')}}"><img src="{{asset($nav_elems->logo_url)}}"></a>

			<ul>
				<li> <a href="">{{$nav_elems->link1}}</a> </li>
				<li> <a href="">{{$nav_elems->link2}}</a> </li>
				<li> <a href="">{{$nav_elems->link3}}</a> </li>
			</ul>
		</nav>


		<main>
			@yield('main_content')
		</main>

		<footer>
			<div class="wrapper">
				<div class="info">
					<img class="logo" src="{{asset($footer_elems->logo_url)}}">
					<p>{{ $footer_elems->about_company }}</p>
				</div>

				<div class="contacts">
					<h3>{{ $footer_elems->subtitle }}</h3>
					<p class="company">{{ $footer_elems->company }}</p>
					<p class="address"> <i class="fa-sharp fa-solid fa-location-dot"></i> {{ $footer_elems->address }}</p>
					<p class="phone"><i class="fa-sharp fa-solid fa-phone"></i>{{ $footer_elems->phone }}</p>
					<p class="email"><i class="fa-solid fa-envelope"></i> {{ $footer_elems->email }}</p>
				</div>

				<div class="by">
					<p>by {{ $footer_elems->by }}</p>
				</div>
			</div>
		</footer>
	</body>
</html>