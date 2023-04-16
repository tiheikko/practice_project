<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<!-- <label>Categories: </label>
	<input type="radio" name="category" value="frogs" onclick="checkCategory(this)">
	<input type="radio" name="category" value="cats" onclick="checkCategory(this)">
	

	<script type="text/javascript">
		let category = '';
		function checkCategory(node) {
			category = node.value;
		}
	</script> -->

	@foreach($images as $image)
		@if($image->category["name"] == "cats")
			<img src="{{asset($image->img_url)}}" width="400px"> 
		@endif
	@endforeach

	


</body>
</html>