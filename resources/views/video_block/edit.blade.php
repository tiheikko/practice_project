@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение блока с видео</h1>
		</div>

		<div>
			<form action="{{route('video_block.edit', $video_block_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $video_block_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $video_block_elems->subtitle }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection