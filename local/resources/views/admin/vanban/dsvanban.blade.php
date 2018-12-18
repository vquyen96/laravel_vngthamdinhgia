@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Văn Bản</h1>

<div id="main">
	<div id="button">
		<a href="{{asset('quanlyvanban/add')}}">Thêm văn bản</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
		<tr>
			<th><p class="tieu-de">tên văn bản</p></th>
			<th><p class="tieu-de">lĩnh vực</p></th>
			<th><p class="tieu-de">chú thích</p></th>
			<th><p class="tieu-de">ảnh mô tả</p></th>
			<th><p class="tieu-de">Download</p></th>
			<th><p class="tieu-de">sửa</p></th>
			<th><p class="tieu-de">xóa</p></th>
		</tr>
		</thead>
		
		<tbody>
			@foreach($van_ban as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->ten_vb}}</span>
					</div>
				</td>

				<td>
					<div>
						<span>{{$item->linhvuc->ten_lv}}</span>
					</div>
				</td>
				<td>
					<div>
						<span>{{$item->chu_thich}}</span>
					</div>
				</td>
				<td>
					<div class="anh-demo">
						<img src="../images/images/tintuc/{{$item->anh_vb}}" width="200px" height="200px">
					</div>
				</td>
				<td>
					<div>
						<span><a href="{{asset('quanlyvanban/download/'.$item->id_vb)}}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download</a></span>
					</div>
				</td>
				<td>
					<div class="icon">
						<a href="{{asset('quanlyvanban/edit/'.$item->id_vb)}}"><img src="../images/icon-server.png" width="40px" height="40px"></a>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlyvanban/delete/'.$item->id_vb)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
		

	</table>
	
</div>
@stop