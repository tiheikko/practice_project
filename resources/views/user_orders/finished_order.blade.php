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
					</tr>

					@php
						$summary += $good->price * $orders_amount[$id]->amount;
					@endphp

				@endforeach
			@endforeach
		</tbody>
	</table>

	<p>Итого: {{ $summary }}</p>

@endsection