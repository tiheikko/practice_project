@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение новостей</h1>
		</div>

		<div>
			<form action="{{route('admin.update_company', $company_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div>
					<label for="img_left_url">URL картинки: </label><input type="text" name="img_left_url" value="{{ $company_elems->img_left_url }}">
				</div>

				<div> 
					<label for="title">Заголовок: </label><input type="text" name="title" value="{{ $company_elems->title }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $company_elems->subtitle }}">
				</div>


				<div>
					<label for="content">Содержимое: </label><input type="text" name="content" value="{{ $company_elems->content }}">
				</div>

				<div>
					<label for="img_right_url">URL диаграмы: </label><input type="text" name="img_right_url" value="{{ $company_elems->img_right_url }}">
				</div>
				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection