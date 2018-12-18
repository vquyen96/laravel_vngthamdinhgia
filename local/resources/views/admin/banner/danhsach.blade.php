@extends('admin.quantri')
@section('main')

@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Banner</h1>

<div id="main">
	<div id="button">
		<a href="{{asset('quanlybanner/add')}}">Thêm Banner</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
			<tr>
				<th><p class="tieu-de">Tiêu đề</p></th>
				<th><p class="tieu-de">Banner</p></th>
				<th><p class="tieu-de">Mô tả</p></th>
				<th><p class="tieu-de">Trang</p></th>
				<th><p class="tieu-de">Sửa</p></th>
				<th><p class="tieu-de">xóa</p></th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($banner as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->tieu_de}}</span>
					</div>
				</td>
				<td >
					<div class="anh-demo">
						<img src="../images/{{$item->anh}}" width="200px" height="200px">
					</div>
				</td>
				<td>
					<div>
						<span>{{$item->mo_ta}}</span>
					</div>
				</td>
				
				
				<td>
					<div>
						<span>{{$item->loai_banner}}</span>
					</div>
				</td>
				<td>
					<div class="icon">
						<a href="{{asset('quanlybanner/edit/'.$item->id)}}"><img src="../images/icon-server.png" width="40px" height="40px"></a>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlybanner/delete/'.$item->id)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>
	
</div>
@stop