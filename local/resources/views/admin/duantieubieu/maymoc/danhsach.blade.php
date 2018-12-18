@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Dự Án Máy Móc Thiết Bị </h1>

<div id="main">
	<div id="button">
		<a href="{{asset('quanlyduantieubieu/ms/add')}}">Thêm mới</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
			<tr>
				<th><p class="tieu-de">tên dự án</p></th>
				<th><p class="tieu-de">ảnh mô tả</p></th>
				<th><p class="tieu-de">Chi tiết</p></th>
				<th><p class="tieu-de">xóa</p></th>
			</tr>
		</thead>

		<tbody>
			@foreach($du_an_tieu_bieu as $item)
			<tr>
				<td >
					<div>
						<span>{{$item->ten_da}}</span>
					</div>
				</td>
			
				<td >
					<div class="anh-demo">
						<img src="../images/{{$item->anh_da}}" width="200px" height="200px">
					</div>
				</td>
				<td>
					<div class="dich-vu">
						<span><a href="{{asset('quanlyduantieubieu/ms/show/'.$item->id_da)}}">Chi Tiết</a></span>
					</div>
				</td>
				<td >
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlyduantieubieu/ms/delete/'.$item->id_da)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>	
			@endforeach

			
		</tbody>
			

	</table>
	
</div>
@stop