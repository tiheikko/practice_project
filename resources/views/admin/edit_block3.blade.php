@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение третьего блока</h1>
		</div>

		<div>
			<form action="{{route('admin.update_block3', $block3_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $block3_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $block3_elems->subtitle }}">
				</div>
				
				<div>
					<label for="img_url">URL картинки: </label><input type="text" name="img_url" value="{{ $block3_elems->img_url }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection