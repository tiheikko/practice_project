@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение модели процессов</h1>
		</div>

		<div>
			<form action="{{route('footer.update', $footer_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div>
					<label for="logo_url">URL логотипа: </label><input type="text" name="logo_url" value="{{ $footer_elems->logo_url }}">
				</div>

				<div>
					<label for="about_company">О компании: </label><input type="text" name="about_company" value="{{ $footer_elems->about_company }}">
				</div>

				<div>
					<label for="subtitle">Подзаголовок: </label><input type="text" name="subtitle" value="{{ $footer_elems->subtitle }}">
				</div>


				<div>
					<label for="company">Что-то еще о компании: </label><input type="text" name="company" value="{{ $footer_elems->company }}">
				</div>


				<div>
					<label for="address">Адрес: </label><input type="text" name="address" value="{{ $footer_elems->address }}">
				</div>

				<div>
					<label for="phone">Телефон: </label><input type="text" name="phone" value="{{ $footer_elems->phone }}">
				</div>

				<div>
					<label for="email">Электронная почта: </label><input type="text" name="email" value="{{ $footer_elems->email }}">
				</div>

				<div>
					<label for="by">Автор сайта: </label><input type="text" name="by" value="{{ $footer_elems->by }}">
				</div>

				
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection