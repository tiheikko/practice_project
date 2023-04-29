@extends('assets.header')

@section('main_content')
			<h1>Связаться</h1>
			<h3>Не стесняйтесь писать нам</h3>
		</div>

		<div>
			<p style="color:red">Пользователь с таким телефоном или почтой уже существует!</p>
			<form action="{{route('contact.store')}}" method="post" id="contact_form">
				@csrf

				<input type="text" name="name" placeholder="Ваше имя">
				<input type="tel" name="phone" placeholder="Телефон">
				<input type="text" name="email" placeholder="Электронная почта">
				<select name="theme" placeholder="Тема">
					<option value="Сотрудничество">Сотрудничество</option>
					<option value="Поддержка">Поддержка</option>
				</select>
				<textarea name="message" placeholder="Напишите Ваше сообщение сюда..."></textarea>

				<button type="submit">Отправить</button>
			</form>
		</div>
	</div>
@endsection