@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение галереи</h1>
		</div>

		<div>
			<form action="{{route('admin.update_gallery', $gallery_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $gallery_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $gallery_elems->subtitle }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection