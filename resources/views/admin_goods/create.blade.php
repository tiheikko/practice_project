@extends('assets.admin_template')

@section('admin_content')
		<h1>Создание продукта</h1>
	</div>

	<div>
		<form action="{{ route('goods.store') }}" method="post">
			@csrf

			<input type="text" name="name" placeholder="Название продукта...">
			<input type="text" name="price" placeholder="Цена в рублях">			

			<button type="submit">Создать</button>
		</form>
	</div>
@endsection