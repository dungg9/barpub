@extends('master')
@section('content')
<h2>THÊM BAR</h2>
	<form method="post" action="{{route('thembar')}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		MÃ <input type="text" name="txtmaquanbar"><br>
		BAR <input type="text" name="txttenquanbar"><br>
		ĐỊA CHỈ <input type="text" name="txtdiachi"><br>
		<input type="submit" value="THÊM">
	</form>
@endsection