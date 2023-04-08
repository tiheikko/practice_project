@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение новостей</h1>
		</div>

		<div>
			<form action="{{route('admin.update_news', $news_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $news_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $news_elems->subtitle }}">
				</div>

				<div>
					<label for="name_content">Название новости: </label><input type="text" name="name_content" value="{{ $news_elems->name_content }}">
				</div>

				<div>
					<label for="content">Новость: </label><input type="text" name="content" value="{{ $news_elems->content }}">
				</div>

				<div>
					<label for="img_url">URL картинки для новости: </label><input type="text" name="img_url" value="{{ $news_elems->img_url }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection