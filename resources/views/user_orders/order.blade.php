@extends('assets.user_orders_header')

@section('main_content')
	
	<p>Заказ №{{ $order_id }}</p>
	<p>Заказчик: {{ $user->name }}</p>
	<p>Почта заказчика: {{ $user->email }}</p>

	@php
		$summary = 0;
	@endphp

	<table>
		<thead>
			<tr>
				<th>Товар</th>
				<th>Количество</th>
				<th>Стоимость за шт.</th>
				<th>Стоимость</th>
				<th>Удалить</th>
			</tr>
		</thead>

		<tbody>
			@foreach($orders as $order)
				@foreach($order->goods as $id => $good)
					<tr>
						<td>{{ $good->name }}</td>
						<td>{{ $orders_amount[$id]->amount }}</td>
						<td>{{ $good->price }} рублей</td>
						<td>{{ $good->price * $orders_amount[$id]->amount }} рублей</td>
						<td>
							<form action="{{ route('order_good.destroy') }}" method="post">
								@csrf
								@method('delete')

								<input type="text" name="good_id" value="{{ $good->id }}" hidden>
								<input type="text" name="order_id" value="{{ $order->id }}" hidden>
								<input type="text" name="amount" value="{{ $orders_amount[$id]->amount }}" hidden>

								<button type="submit">удалить</button>							
							</form>
						</td>
					</tr>

					@php
						$summary += $good->price * $orders_amount[$id]->amount;
					@endphp

				@endforeach
			@endforeach
		</tbody>
	</table>

	<p>Итого: {{ $summary }}</p>

	<form action="{{ route('order_good.create') }}">
		@csrf

		<button type="submit" name="order_id" value="{{ $order_id }}">Добавить продукт</button>
	</form>

	<a href="{{ route('user_orders.index') }}">Сохранить заказ как черновик</a>

	<form action="{{ route('user_orders.send_order') }}" method="post">
		@csrf
		@method('patch')

		<textarea name="note"></textarea>
		<input type="date" name="delivery_date">

		<button type="submit" name="order_id" value="{{ $order_id }}"> Заказать </button>
	</form>

	<form action="{{ route('user_orders.destroy') }}" method="post">
		@csrf
		@method('delete')

		<button type="submit" name="order_id" value="{{ $order_id }}">Удалить заказ</button>
	</form>

@endsection