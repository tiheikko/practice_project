@extends('assets.admin_template')

@section('admin_content')
			<h1>Изменение галереи</h1>
		</div>

		<div>
			<!-- HAVENT FINISHED YET -->
				@foreach($all_pics as $pic)
					<a href="{{route('gallery_pics.edit', $pic->id)}}">Картинка {{$pic->id}}</a>
				@endforeach
				
							
			</form>
		</div>
	</div>
@endsection