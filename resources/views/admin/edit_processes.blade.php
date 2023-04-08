@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение модели процессов</h1>
		</div>

		<div>
			<form action="{{route('admin.update_processes', $processes_elems->id)}}" method="post">
				@csrf
				@method('patch')


				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $processes_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $processes_elems->subtitle }}">
				</div>


				<div>
					<label for="content">Содержимое: </label><input type="text" name="content" value="{{ $processes_elems->content }}">
				</div>

				<div>
					<label for="point1">Пункт 1: </label><input type="text" name="point1" value="{{ $processes_elems->point1 }}">
				</div>

				<div>
					<label for="point2">Пункт 2: </label><input type="text" name="point2" value="{{ $processes_elems->point2 }}">
				</div>

				<div>
					<label for="point3">Пункт 3: </label><input type="text" name="point3" value="{{ $processes_elems->point3 }}">
				</div>

				<div>
					<label for="point4">Пункт 4: </label><input type="text" name="point4" value="{{ $processes_elems->point4 }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection