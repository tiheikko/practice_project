@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение навигации</h1>
		</div>

		<div>
			<form action="{{route('admin.update_nav', $nav_elems->id)}}" method="post">
				@csrf
				@method('patch')

				<div> 
					<label for="logo_url">URL логотипа: </label><input type="text" name="logo_url" value="{{$nav_elems->logo_url}}">
				</div>

				<div>
					<label for="link1">Первая ссылка: </label><input type="text" name="link1" value="{{$nav_elems->link1}}">
				</div>
				
				<div>
					<label for="link2">Вторая ссылка: </label><input type="text" name="link2" value="{{$nav_elems->link2}}">
				</div>
				
				<div>
					<label for="link3">Третья ссылка: </label><input type="text" name="link3" value="{{$nav_elems->link3}}">
				</div>
				
				<button type="submit">Изменить</button>				
			</form>
		</div>
	</div>
@endsection