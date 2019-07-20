@extends('master')
@section('content')
@if(session()->has("username"))
	{{"Xin Chao:".session()->get("username")}}
@endif
@include('header')
<div class="container">
	<table border="1" cellspacing="0" cellpadding="0">
		<tr>
			<th>Mã</th>
			<th>Tên</th>
			<th>Giới Tính</th>
			<th>Ngày Sinh</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
		</tr>
		@foreach($arrkhachhang as $objkhachhang)
		<tr>
			<td>{{$objkhachhang->makhachhang}}</td>
			<td>{{$objkhachhang->tenkhachhang}}</td>
            <td>{{$objkhachhang->gioitinh}}</td>
            <td>{{$objkhachhang->ngaysinh}}</td>
            <td>{{$objkhachhang->sdt}}</td>
            <td>{{$objkhachhang->email}}</td>
		</tr>
		@endforeach
	</table>
</div>
@include('footer')
@endsection