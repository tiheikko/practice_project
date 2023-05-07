@extends('assets.admin_template')

@section('admin_content')
		<h1>Подробности заказа</h1>
	</div>

	<div>
		<a href="{{ route('admin.orders') }}">Назад</a>

		<p>Заказ №{{ $order->id }}</p>
		<p>Заказчик: {{ $user[0]->name }}</p>
		<p>Почта заказчика: {{ $user[0]->email }}</p>

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
				@foreach($order->goods as $id => $good)
					<tr>
						<td>{{ $good->name }}</td>
						<td>{{ $order_amounts[$id]->amount }}</td>
						<td>{{ $good->price }} рублей</td>
						<td>{{ $good->price * $order_amounts[$id]->amount }} рублей</td>
					</tr>

					@php
						$summary += $good->price * $order_amounts[$id]->amount;
					@endphp

				@endforeach
			</tbody>
		</table>

		<p>Итого: {{ $summary }} рублей</p>
	</div>

	
@endsection