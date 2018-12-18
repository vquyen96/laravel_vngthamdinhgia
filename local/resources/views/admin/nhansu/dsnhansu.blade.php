@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Nhân Sự</h1>

<div id="main">
	<div id="button">
		<a href="{{asset('quanlynhansu/add')}}">Thêm nhân sự</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
		<tr>
			<th><p class="tieu-de">họ và tên</p></th>
			<th><p class="tieu-de">chức vụ</p></th>
			<th><p class="tieu-de">thông tin</p></th>
			<th><p class="tieu-de">ảnh đại diện</p></th>
			<th><p class="tieu-de">level</p></th>
			<th><p class="tieu-de">sửa</p></th>
			<th><p class="tieu-de">xóa</p></th>
		</tr>
		</thead>
		
		<tbody>
			@foreach($nhan_su as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->ho_ten}}</span>
					</div>
				</td>

				<td>
					<div>
						<span>{{$item->chuc_vu}}</span>
					</div>
				</td>
				<td>
					<div>
						<span>{!!$item->thong_tin!!}</span>
					</div>
				</td>
				<td >
					<div class="anh-demo">
						<img src="../images/{{$item->anh_ns}}" width="200px" height="200px">
					</div>
				</td>
				<td>
					<div>
						<span>{{$item->level}}</span>
					</div>
				</td>
				<td>
					<div class="icon">
						<a href="{{asset('quanlynhansu/edit/'.$item->id_ns)}}"><img src="../images/icon-server.png" width="40px" height="40px"></a>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlynhansu/delete/'.$item->id_ns)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
		

	</table>
	
</div>
@stop