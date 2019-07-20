@extends('master')
@section('content')
<h2>SỬA BAR</h2>
	<form method="post" action="{{route('suabar')}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		MÃ <input type="text" name="txtmaquanbar" value="{{$objbar->maquanbar}}" readonly="readonly"><br>
		BAR <input type="text" name="txttenquanbar" value="{{$objbar->tenquanbar}}"><br>
		ĐỊA CHỈ <input type="text" name="txtdiachi" value="{{$objbar->diachi}}"><br>
		<input type="submit" value="SỬA">
	</form>
@endsection