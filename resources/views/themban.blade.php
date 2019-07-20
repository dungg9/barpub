@extends('master')
@section('content')
<h2>THÊM BÀN</h2>
	<form method="post" action="{{route('themban')}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		MÃ <input type="text" name="txtmaban"><br>
		TÊN BÀN <input type="text" name="txttenban"><br>
		SỐ LƯỢNG <input type="text" name="txtsoluong"><br>
		LOẠI BÀN <select name="ddloai">
			{{-- @foreach ($arrban as $objban)
				<option value="{{$objban->maloai}}">{{$objban->tenloai}}</option>
			@endforeach	 --}}
		</select><br>
		BAR <select name="ddlquanbar">
			@foreach($arrquanbar as $objquanbar)
			    <option value="{{$objquanbar->maquanbar}}">{{$objquanbar->tenquanbar}}</option>
			@endforeach
		</select><br>
		<input type="submit" value="THÊM">
	</form>
@endsection