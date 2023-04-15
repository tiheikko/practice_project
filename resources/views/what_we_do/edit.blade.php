@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение блока "Чем мы занимаемся"</h1>
		</div>

		<div>
			<form action="{{route('what_we_do.update', $what_we_do_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $what_we_do_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $what_we_do_elems->subtitle }}">
				</div>
				
				<div>
					<label for="content1_title">Заголовок 1 подблока: </label><input type="text" name="content1_title" value="{{ $what_we_do_elems->content1_title }}">
				</div>

				<div>
					<label for="content1">Контент 1 подблока: </label><input type="text" name="content1" value="{{ $what_we_do_elems->content1 }}">
				</div>

				<div>
					<label for="content2_title">Заголовок 2 подблока: </label><input type="text" name="content2_title" value="{{ $what_we_do_elems->content2_title }}">
				</div>

				<div>
					<label for="content2">Контент 2 подблока: </label><input type="text" name="content2" value="{{ $what_we_do_elems->content2 }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection