@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Danh Sách Thành Viên</h1>

<div id="main">
	<div id="button">
		<a href="{{asset('quanlythanhvien/add')}}">Thêm Thành viên</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
			<tr>
				<th><p class="tieu-de">User</p></th>
				<th><p class="tieu-de">level</p></th>
				<th><p class="tieu-de">sửa</p></th>
				<th><p class="tieu-de">xóa</p></th>
			</tr>
		</thead>
		<tbody>
			@foreach($thanh_vien as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->email}}</span>
					</div>
				</td>
			
				<td>
					<div>
						<span>{{$item->level}}</span>
					</div>
				</td>
				<td>
					<div class="icon">
						<a href="{{asset('quanlythanhvien/edit/'.$item->id)}}"><img src="../images/icon-server.png" width="40px" height="40px"></a>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlythanhvien/delete/'.$item->id)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
			

		</tbody>
			

	</table>
	
</div>
@stop