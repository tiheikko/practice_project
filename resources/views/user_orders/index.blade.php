@extends('assets.user_orders_header')

@section('main_content')
		<table>
			<thead>
				<tr>
					<th>№ заказа</th>
					<th>Комментарий</th>
					<th>Желаемая дата</th>
					<th>Статус</th>
				</tr>
			</thead>

			<tbody>
				@foreach($orders as $order)
				<tr>
					<td> 
						<form action="{{ route('user_orders.show', $order->id) }}">
							@csrf

							<button type="submit" name="order_id" value="{{ $order->id }}">{{ $order->id }}</button>
						</form>
					</td>
					<td> {{ $order->note }} </td>
					<td> {{ $order->delivery_date }} </td>
					<td>
						@if($order->draft == 1)
							Черновик
						@elseif($order->confirmed == 1)
							Принят
						@elseif($order->in_progress == 1)
							В работе
						@else
							Выполнен
						@endif
					</td>  
				</tr>
				@endforeach
			</tbody>
		</table>

		<form action="{{ route('user_orders.store') }}" method="post">
            @csrf

            <button type="submit">Создать заказ</button>             
       </form>

@endsection	