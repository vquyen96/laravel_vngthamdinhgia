@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Tư Vấn Khách Hàng</h1>

<div id="main">
	
	<table data-toggle="table" data-search="true">
		<thead>
		<tr>
			<th><p class="tieu-de">tên khách hàng</p></th>
			<th><p class="tieu-de">số điện thoại</p></th>
			<th><p class="tieu-de">dịch vụ cần tư vấn</p></th>
			<th><p class="tieu-de">xóa</p></th>
		</tr>
		</thead>
		
		<tbody>
			@foreach($tu_van as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->ho_ten}}</span>
					</div>
				</td>

				<td>
					<div>
						<span>{{$item->dien_thoai}}</span>
					</div>
				</td>
				<td>
					<div>
						<span>{{$item->dichvu->ten_dv}}</span>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('tuvankhachhang/delete/'.$item->id_tv)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
		

	</table>
	
</div>
@stop