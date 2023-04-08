@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение четвертого блока</h1>
		</div>

		<div>
			<form action="{{route('admin.update_block4', $block4_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $block4_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $block4_elems->subtitle }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection