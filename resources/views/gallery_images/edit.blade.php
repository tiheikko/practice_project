@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение галереи</h1>
		</div>

		<div>

				<form action="{{route('gallery_images.update', $gallery_image->id)}}" method="post">
					@csrf
					@method('patch')

					<label for="img_url">Картинка {{$gallery_image->id}}</label>
					<input type="text" name="img_url" value="{{$gallery_image->img_url}}">

					<select name="category_id">
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</select>

					<button type="submit"> Изменить картинку </button>
				</form>

				<form action="{{route('gallery_images.destroy', $gallery_image->id)}}" method="post">
					@csrf
					@method('delete')
					<button type="submit">Удалить картинку</button>
				</form>
				
							
			</form>
		</div>
	</div>
@endsection