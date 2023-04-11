@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение слайдера</h1>
		</div>

		<div>
			<form action="{{route('admin.update_slider', $slider_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $slider_elems->title }}">
				</div>

				<div>
					<label for="description">Описание: </label><input type="text" name="description" value="{{ $slider_elems->description }}">
				</div>
				
				<div>
					<label for="button_name">Текст кнопки: </label><input type="text" name="button_name" value="{{ $slider_elems->button_name }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection