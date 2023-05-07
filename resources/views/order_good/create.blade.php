@extends('assets.user_orders_header')

@section('main_content')
	<form action="{{ route('order_good.store')}}" method="post">
		@csrf

		<select name="good_id">
			@foreach($goods as $good)
				<option value="{{ $good->id }}"> {{ $good->name }} </option>
			@endforeach
		</select>

		<input type="text" name="amount" placeholder="Количество">

		<button type="submit" name="order_id" value="{{ $order_id }}">Добавить</button>
		
	</form>

@endsection