@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Tin Tức</h1>

<div id="main">
	<div id="button">
		<a href="{{asset('quanlytintuc/add')}}">Thêm Tin tức</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
			<tr>
				<th><p class="tieu-de">Tiêu đề</p></th>
				<th><p class="tieu-de">Loại tin</p></th>
				<th><p class="tieu-de">Ảnh mô tả</p></th>
				<th><p class="tieu-de">chi tiết</p></th>
				<th><p class="tieu-de">xóa</p></th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($tin_tuc as $item)
			<tr>
				<td>
					<div>
						<span>
						{{$item->tieu_de}}</span>
					</div>
				</td>

				<td>
					<div>
						<span>{{$item->loaitin->ten_lt}}</span>
					</div>
				</td>
				<td>
					<div class="anh-demo">
						<img src="../images/images/tintuc/{{$item->anh_tieu_de}}" width="200px" height="200px">		
					</div>
				</td>
				<td>
					<div class="dich-vu">
						<span><a href="{{asset('quanlytintuc/show/'.$item->id_tt)}}">Chi Tiết</a></span>
					</div>		
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlytintuc/delete/'.$item->id_tt)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
		
		
	</table>
	
</div>
@stop