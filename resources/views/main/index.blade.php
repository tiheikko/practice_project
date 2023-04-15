@extends('assets.header')

@section('main_content')

	<div class="slider">
		<img src="{{asset('/images/slider/slider3-bg2.jpg')}}">
		<h1>{{ $slider_elems->title }}</h1>
		<p>{{ $slider_elems->description }}</p>
		<button class="send">{{ $slider_elems->button_name }}</button>
		<button class="next_button"><i class="fa-solid fa-chevron-right"></i></button>
		<button class="prev_button"><i class="fa-solid fa-chevron-left"></i></button>

	</div>



	<div class="what_we_do">
		<h1>{{ $what_we_do_elems->title }}</h1>
		<h3>{{ $what_we_do_elems->subtitle }}</h3>

		<div class="contents">
			<div class="content1">
				<h5>{{ $what_we_do_elems->content1_title }}</h5>
				<p>{{ $what_we_do_elems->content1 }}</p>
			</div>

			<div class="content2">
				<h5>{{ $what_we_do_elems->content2_title }}</h5>
				<p>{{ $what_we_do_elems->content2 }}</p>
			</div>
		</div>
	</div>



	<div class="excursion">
		<h1>{{ $excursion_elems->title }}</h1>
		<h3>{{ $excursion_elems->subtitle }}</h3>
		<img src="asset( {{ $excursion_elems->img_url }} )">
	</div>


	<div class="gallery">
		<h1>{{ $gallery_elems->title }}</h1>
		<h3>{{ $gallery_elems->subtitle }}</h3>

		<div class="pics">
			@foreach($gallery_pics as $pic_url)

				<div><img src="{{asset($pic_url->img_url)}}"></div>

			@endforeach
			<!-- <script type="text/javascript">
				let gallery = document.querySelector('.pics');

				for (let i = 0; i < 6; i++) {
					gallery.innerHTML += `<div> <img src=""> </div>`;
					console.log(1);
				}
			</script> -->
		</div>
	</div>


	<div class="video_block">
	
		<div class="bg"> <!--Для затемнения-->
		</div>
		<video poster="{{asset('/video/office.jpg')}}" controls autoplay muted loop>
			<source src="{{asset('/video/office.webm')}}" type="video/webm">
			<source src="{{asset('/video/office.mp4')}}" type="video/mp4">
		</video>

		<h1>{{ $video_block_elems->title }}</h1>
		<h3>{{ $video_block_elems->subtitle }}</h3>
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




	<div class="model_of_processes">
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