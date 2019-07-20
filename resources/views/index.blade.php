@extends('master')
@section('content')
@if(session()->has("username"))
	{{"Xin Chao:".session()->get("username")}}
@endif
@include('header')
{{-- <div style="background-color: grey"> --}}
<div class="container">
	{{-- <table border="1" cellspacing="0" cellpadding="0" width="100%" height="350px"> --}}
		{{-- <tr>
			<th>Mã</th>
			<th>Bar</th>
			<th>Địa Chỉ</th>
			<th></th>
			<th></th>
		</tr> --}}
		@foreach($arrbar as $objbar)
		<tr>
			<div class="row">
				<hr width="100%">
				<div class="col-lg-10" style="font-size: 18px">
					{{-- <td>{{$objbar->maquanbar}}</td> --}}
					{{$objbar->tenquanbar}}
					{{-- <td>{{$objbar->diachi}}</td> --}}
				</div>
				<div class="col-lg-2">
					<a class="font-weight-bold" style="font-size: 18px; color: pink" href="listban">BOOKING</a><br>
				</div>
				<hr width="100%">
			</div>
		</tr>
		@endforeach
	{{-- </table> --}}
</div>
{{-- </div> --}}
@include('footer')
@endsection