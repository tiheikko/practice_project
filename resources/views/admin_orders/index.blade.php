@extends('assets.admin_template')

@section('admin_content')
		<h1>Заказы</h1>
	</div>

	<div>
		<div>
			<h3 class="see_more" onclick="seeMore(this)">Новые</h3>

			<table class="show">
				<thead>
					<tr>
						<th>№</th>
						<th>email</th>
						<th>Комментарий</th>
						<th>Ожидаемая дата</th>
						<th>Подтвердить</th>
						<th>Отменить</th>
					</tr>
				</thead>

				<tbody>
					@foreach($confirmed_orders as $order)
						<tr>
							<td>
								<form action="{{ route('admin.order_show', $order->id)}}">
									@csrf

									<button type="submit">{{ $order->id }}</button>
								</form> 
							</td>
							<td> {{ $order->email }} </td>
							<td> {{ $order->note }} </td>
							<td> {{ $order->delivery_date }} </td>

							<td>
								<form action="{{ route('admin.order_confirm')}}" method="post">
									@csrf
									@method('patch')

									<button type="submit" name="order_id" value="{{ $order->id }}">подтвердить</button>
								</form>
							</td>

							<td>
								<form action="{{ route('admin.order_destroy')}}" method="post">
									@csrf
									@method('delete')

									<button type="submit" name="order_id" value="{{ $order->id }}">отменить</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div>
			<h3 class="see_more1" onclick="seeMore(this)">В работе</h3>
			
			<table>
				<thead>
					<tr>
						<th>№</th>
						<th>email</th>
						<th>Комментарий</th>
						<th>Ожидаемая дата</th>
						<th>Завершен</th>
						<th>Отменить</th>
					</tr>
				</thead>

				<tbody>
					@foreach($in_progress_orders as $order)
						<tr>
							<td>
								<form action="{{ route('admin.order_show', $order->id)}}">
									@csrf
									
									<button type="submit">{{ $order->id }}</button>
								</form>  
							</td>
							<td> {{ $order->email }} </td>
							<td> {{ $order->note }} </td>
							<td> {{ $order->delivery_date }} </td>

							<td>
								<form action="{{ route('admin.order_finish')}}" method="post">
									@csrf
									@method('patch')

									<button type="submit" name="order_id" value="{{ $order->id }}">завершить</button>
								</form>
							</td>

							<td>
								<form action="{{ route('admin.order_destroy')}}" method="post">
									@csrf
									@method('delete')

									<button type="submit" name="order_id" value="{{ $order->id }}">отменить</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div>
			<h3 class="see_more2" onclick="seeMore(this)">Выполненные</h3>
			
			<table>
				<thead>
					<tr>
						<th>№</th>
						<th>email</th>
						<th>Комментарий</th>
						<th>Ожидаемая дата</th>
					</tr>
				</thead>

				<tbody>
					@foreach($finished_orders as $order)
						<tr>
							<td>
								<form action="{{ route('admin.order_show', $order->id)}}">
									@csrf
									
									<button type="submit">{{ $order->id }}</button>
								</form>  
							</td>
							<td> {{ $order->email }} </td>
							<td> {{ $order->note }} </td>
							<td> {{ $order->delivery_date }} </td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	
@endsection