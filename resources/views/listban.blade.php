@extends('master')
@section('content')
@if(session()->has("username"))
	{{"Xin Chao:".session()->get("username")}}
@endif
@include('header')
<div class="container">
	{{-- <a href="{{route('themban')}}">THÊM BÀN</a> --}}
	{{-- <table border="1" cellspacing="0" cellpadding="0" width="100%"> --}}
		<tr>
			<div class="row">
				<hr width="100%">
				<div class="col-lg-3 font-weight-bold" style="font-size: 18px">Tên Bàn</div>
				<div class="col-lg-3 font-weight-bold" style="font-size: 18px">Loại Bàn</div>
				<div class="col-lg-4 font-weight-bold" style="font-size: 18px">Bar</div>
				<div class="col-lg-2 font-weight-bold" style="font-size: 18px">BOOKING</div>
				<hr width="100%">
				<hr width="100%">
			</div>
			{{-- <th>Mã Bàn</th> --}}
			{{-- <th>Tên Bàn</th> --}}
			{{-- <th>Số Lượng</th> --}}
			{{-- <th>Loại Bàn</th> --}}
			{{-- <th>Bar</th> --}}
			{{-- <th></th>
			<th></th> --}}
		</tr>
		@foreach($arrban as $objban)
		<tr>
			<div class="row">
				<div class="col-lg-3" style="font-size: 16px">
					{{$objban->tenban}}
				</div>
				<div class="col-lg-3" style="font-size: 16px">
					{{$objban->tenloai}}
				</div>
				<div class="col-lg-4" style="font-size: 16px">
					{{$objban->tenquanbar}}
				</div>
				<div class="col-lg-2">
					<a style="font-size: 16px; color: pink" href="#">NOW</a>
				</div>
				<hr width="100%">
			</div>
			{{-- <td>{{$objban->maban}}</td> --}}
			{{-- {{$objban->tenban}} --}}
			{{-- <td>{{$objban->soluong}}</td> --}}
			{{-- {{$objban->tenloai}} --}}
			{{-- {{$objban->tenquanbar}} --}}
			{{-- <td><a href="suaban/{{$objban->maban}}">SỬA</a></td>
			<td><a href="xoaban/{{$objban->maban}}">XÓA</a></td> --}}
		</tr>
		@endforeach
	{{-- </table> --}}
</div>
@include('footer')
@endsection