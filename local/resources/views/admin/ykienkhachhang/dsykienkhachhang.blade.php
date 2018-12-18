@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Ý Kiến Khách Hàng</h1>

<div id="main">
	<div id="button">
		<a href="{{asset('ykienkhachhang/add')}}">Thêm ý kiến khách hàng</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
			<tr>
				<th ><p class="tieu-de">Tên khách hàng</p></th>
				<th ><p class="tieu-de">chức vụ</p></th>
				<th ><p class="tieu-de">nội dung phản ánh</p></th>
				<th ><p class="tieu-de">ảnh đại diện</p></th>
				<th ><p class="tieu-de">sửa</p></th>
				<th ><p class="tieu-de">xóa</p></th>
			</tr>
		</thead>
		<tbody>
			@foreach($y_kien as $item)
			<tr>
				<td >
					<div>
						<span>{{$item->ho_ten}}</span>
					</div>
				</td>

				<td >
					<div>
						<span>{{$item->chuc_vu}}</span>
					</div>
				</td>

				<td>
					<div>
						<span>{{$item->noi_dung}}</span>
					</div>
				</td>
				<td >
					<div class="anh-demo">
						<img src="../images/{{$item->anh_dd}}" width="150px" height="150px">
					</div>
				</td>
				<td >
					<div class="icon">
						<a href="{{asset('ykienkhachhang/edit/'.$item->id_yk)}}"><img src="../images/icon-server.png" width="40px" height="40px"></a>
					</div>
				</td>
				<td >
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('ykienkhachhang/delete/'.$item->id_yk)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>

			</tr>
			@endforeach
		</tbody>
		

	</table>
	
</div>
@stop