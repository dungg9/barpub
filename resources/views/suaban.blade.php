@extends('master')
@section('content')
<h2>SỬA BÀN</h2>
	<form method="post" action="{{route('suaban')}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		MÃ <input type="text" name="txtmaban" value="{{$objban->maban}}" readonly="readonly"><br>
		TÊN BÀN <input type="text" name="txttenban" value="{{$objban->tenban}}"><br>
		SỐ LƯỢNG <input type="text" name="txtsoluong" value="{{$objban->soluong}}"><br>
		LOẠI BÀN <select name="ddlloai">
        BAR <select name="ddlquanbar">
			@foreach($arrquanbar as $objquanbar)
            <option value="{{$objquanbar->maquanbar}}" 
                @if($objquanbar->maquanbar==$objban->maban) selected="selected" 
                @endif>{{$objquanbar->tenquanbar}}
            </option>
			@endforeach
		</select><br>
		<input type="submit" value="SỬA">
	</form>
@endsection