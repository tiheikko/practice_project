@extends('assets.admin_template')

@section('admin_content')
		<h1>Изменение продукта</h1>
	</div>

	<div>
		<form action="{{ route('goods.update', $good->id) }}" method="post">
			@csrf
			@method('patch')

			<input type="text" name="name" value="{{ $good->name }}" placeholder="Название продукта...">
			<input type="text" name="price" value="{{ $good->price }}" placeholder="Цена в рублях">			

			<button type="submit">Изменить</button>
		</form>
	</div>
@endsection