@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение галереи</h1>
		</div>

		<div>
			<!-- HAVENT FINISHED YET -->
				@foreach($all_pics as $pic)
					<a href="{{route('gallery_images.edit', $pic->id)}}">Картинка {{$pic->id}}</a>
				@endforeach
				
			<a href="{{route('gallery_images.create')}}">Добавить картинку</a>
		</div>
	</div>
@endsection