@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение содержимого страниц</h1>
		</div>


		<div class="links">
			<h3>Изменить: </h3>

			<ul>
				<li><a href="{{route('admin.edit_nav')}}">Навигация</a></li>
				<li><a href="{{route('admin.edit_slider')}}">Слайдер</a></li>
				<li><a href="{{route('admin.edit_what_we_do')}}">Чем занимаемся</a></li>
				<li><a href="{{route('admin.edit_excursion')}}">Блок с экскурсией</a></li>
				<li><a href="{{route('admin.edit_gallery')}}">Галерея</a></li>
				<li><a href="{{route('admin.edit_video_block')}}">Блок с видео</a></li>
				<li><a href="{{route('admin.edit_news')}}">Новости</a></li>
				<li><a href="{{route('admin.edit_company')}}">О компании</a></li>
				<li><a href="{{route('admin.edit_processes')}}">Модель процессов</a></li>
				<li><a href="{{route('admin.edit_footer')}}">Подвал</a></li>
			</ul>
		</div>
	</div>
@endsection