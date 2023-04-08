@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение второго блока</h1>
		</div>

		<div>
			<form action="{{route('admin.update_block2', $block2_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $block2_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $block2_elems->subtitle }}">
				</div>
				
				<div>
					<label for="content1_title">Заголовок 1 подблока: </label><input type="text" name="content1_title" value="{{ $block2_elems->content1_title }}">
				</div>

				<div>
					<label for="content1">Контент 1 подблока: </label><input type="text" name="content1" value="{{ $block2_elems->content1 }}">
				</div>

				<div>
					<label for="content2_title">Заголовок 2 подблока: </label><input type="text" name="content2_title" value="{{ $block2_elems->content2_title }}">
				</div>

				<div>
					<label for="content2">Контент 2 подблока: </label><input type="text" name="content2" value="{{ $block2_elems->content2 }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection