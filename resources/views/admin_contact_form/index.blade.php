@extends('assets.admin_template')

@section('admin_content')
		<h1>Заявки</h1>
	</div>

	<div>
		<form action="{{route('admin.request_search')}}" id="search_requests">
			@csrf
			<input type="text" name="search">
			<button type="submit">Искать</button>
		</form>

		<table id="forms_table">
			<thead>
				<tr>
					<th>Имя</th>
					<th>Телефон</th>
					<th>Почта</th>
					<th>Тема</th>
					<th>Сообщение</th>
					<th class="date">Дата 
						<form action="{{route('admin.sort')}}">
							<button type="submit"> <i class="fa-sharp fa-solid fa-angle-up"></i> </button>
						</form>

						<form action="{{route('admin.sort_desc')}}">
							<button type="submit"> <i class="fa-sharp fa-solid fa-angle-down"></i> </button>
						</form>
					</th>
					<th>Подтвердить</th> 
					<th>Удалить</th>
				</tr>
			</thead>

			<tbody>
				@foreach($forms as $form)
					<tr>
						<td>{{$form->name}}</td>
						<td>{{$form->phone}}</td>
						<td>{{$form->email}}</td>
						<td>{{$form->theme}}</td>
						<td>{{$form->message}}</td>
						<td>{{$form->created_at}}</td>

						<td id="confirm_column">
							<form action="{{ route('request.register') }}">
								@csrf
								<button type="submit" name="id" value="{{$form->id}}"> <i class="fa-solid fa-circle-check"></i> </button>
							</form>
						</td>

						<td id="reject_column">
							<form action="{{ route('request.destroy') }}" method="post">
								@csrf
								@method('delete')
								<button type="submit" name="id" value="{{$form->id}}"> <i class="fa-sharp fa-solid fa-circle-xmark"></i> </button>
							</form>
						</td>

					</tr>
				@endforeach
			</tbody>

		</table>

		{{$forms->links()}}

		<script src="https://kit.fontawesome.com/407dedc4b6.js" crossorigin="anonymous"></script>
		
	</div>
@endsection