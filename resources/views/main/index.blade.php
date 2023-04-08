@extends('assets.header')

@section('main_content')

	<!-- SLIDER -->
	<div class="block1">
		<img src="{{asset('/images/slider/slider3-bg2.jpg')}}">
		<h1>{{ $block1_elems->title }}</h1>
		<p>{{ $block1_elems->description }}</p>
		<button class="send">{{ $block1_elems->button_name }}</button>
		<button class="next_button"><i class="fa-solid fa-chevron-right"></i></button>
		<button class="prev_button"><i class="fa-solid fa-chevron-left"></i></button>

	</div>



	<div class="block2">
		<h1>{{ $block2_elems->title }}</h1>
		<h3>{{ $block2_elems->subtitle }}</h3>

		<div class="contents">
			<div class="content1">
				<h5>{{ $block2_elems->content1_title }}</h5>
				<p>{{ $block2_elems->content1 }}</p>
			</div>

			<div class="content2">
				<h5>{{ $block2_elems->content2_title }}</h5>
				<p>{{ $block2_elems->content2 }}</p>
			</div>
		</div>
	</div>



	<div class="block3">
		<h1>{{ $block3_elems->title }}</h1>
		<h3>{{ $block3_elems->subtitle }}</h3>
		<img src="asset( {{ $block3_elems->img_url }} )">
	</div>


	<div class="gallery">
		<h1>{{ $gallery_elems->title }}</h1>
		<h3>{{ $gallery_elems->subtitle }}</h3>

		<div class="pics">
			<script type="text/javascript">
				let gallery = document.querySelector('.pics');

				for (let i = 0; i < 6; i++) {
					gallery.innerHTML += `<div> <img src=""> </div>`;
					console.log(1);
				}
			</script>
		</div>
	</div>


	<!-- BLOCK4 -->
	<div class="video_block">
	
		<div class="bg"> <!--Для затемнения-->
		</div>
		<video poster="{{asset('/video/office.jpg')}}" controls autoplay muted loop>
			<source src="{{asset('/video/office.webm')}}" type="video/webm">
			<source src="{{asset('/video/office.mp4')}}" type="video/mp4">
		</video>

		<h1>{{ $block4_elems->title }}</h1>
		<h3>{{ $block4_elems->subtitle }}</h3>
	</div>



	<div class="news">
		<h1>{{ $news_elems->title }}</h1>
		<h3>{{ $news_elems->subtitle }}</h3>

		<div>
			<div class="img_wrapper">
				<img src="{{asset($news_elems->img_url)}}">
			</div>

			<div class="content_of_news">
				<h4>{{ $news_elems->name_content }}</h4>
				<p>{{ $news_elems->content }}</p>
			</div>
		</div>
	</div>




	<div class="about_company">
		<div class="img_wrapper">
			<img src="{{asset($company_elems->img_left_url)}}">
		</div>

		<div class="content_box">
			<h1>{{ $company_elems->title }}</h1>
			<h2>{{ $company_elems->subtitle }}</h2>
			<p>{{ $company_elems->content }}</p>
			<img id="diagram" src="{{asset($company_elems->img_right_url)}}"> 
		</div>
	</div>




	<div class="model_processes">
		<h1>{{ $processes_elems->title }}</h1>
		<h3>{{ $processes_elems->subtitle }}</h3>

		<div class="circles">

			<div class="blue">
				<p>1. {{ $processes_elems->point1 }}</p>
			</div>

			<div class="red">
				<p>2.{{ $processes_elems->point2 }}</p>
			</div>
			
			<div class="green">
				<p>3.{{ $processes_elems->point3 }}</p>
			</div>
			
			<div class="yellow">
				<p>4.{{ $processes_elems->point4 }}</p>
			</div>
		
		</div>

		<p>{{ $processes_elems->content }}</p>
	</div>


@endsection