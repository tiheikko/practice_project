@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение галереи</h1>
		</div>

		<div>

				<form action="{{route('gallery_images.store')}}" method="post">
					@csrf

					<label for="img_url">URL: </label>
					<input type="text" name="img_url">

					<select name="category_id">
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</select>

					<button type="submit"> Добавить картинку </button>
				</form>
				
							
			</form>
		</div>
	</div>
@endsection