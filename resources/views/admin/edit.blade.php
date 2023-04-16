@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение содержимого страниц</h1>
		</div>


		<div class="links">
			<h3>Изменить: </h3>

			<ul>
				<li><a href="{{route('nav.edit')}}">Навигация</a></li>
				<li><a href="{{route('slider.edit')}}">Слайдер</a></li>
				<li><a href="{{route('what_we_do.edit')}}">Чем занимаемся</a></li>
				<li><a href="{{route('excursion.edit')}}">Блок с экскурсией</a></li>
				<li><a href="{{route('gallery.edit')}}">Галерея</a></li>
				<li><a href="{{route('gallery_pics.index')}}">Картинки в галерее</a></li>
				<li><a href="{{route('video_block.edit')}}">Блок с видео</a></li>
				<li><a href="{{route('news.edit')}}">Новости</a></li>
				<li><a href="{{route('company.edit')}}">О компании</a></li>
				<li><a href="{{route('processes.edit')}}">Модель процессов</a></li>
				<li><a href="{{route('footer.edit')}}">Подвал</a></li>
			</ul>
		</div>
	</div>
@endsection