@extends('assets.admin_template')

@section('admin_content')
		<h1>Продукты</h1>
	</div>

	<div>
		<ul class="goods">
			@foreach($goods as $good)
				<li> {{ $good->name }} - {{ $good->price }} рублей

				<a href="{{ route('goods.edit', $good->id) }}"><i class="fa-solid fa-pencil"></i></a> 

				<form action="{{ route('goods.destroy', $good->id)}}" method="post">
					@csrf
					@method('delete')

					<button type="submit"><i class="fa-solid fa-trash"></i> </button>					
				</form>

				</li> 
			@endforeach
		</ul>


		<a href="{{ route('goods.create') }}"><i class="fa-solid fa-plus"></i></a>
	</div>

	
@endsection