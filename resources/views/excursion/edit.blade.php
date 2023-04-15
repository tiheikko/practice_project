@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение блока об экскурсии</h1>
		</div>

		<div>
			<form action="{{route('excursion.update', $excursion_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $excursion_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $excursion_elems->subtitle }}">
				</div>
				
				<div>
					<label for="img_url">URL картинки: </label><input type="text" name="img_url" value="{{ $excursion_elems->img_url }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection