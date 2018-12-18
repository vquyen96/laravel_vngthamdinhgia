@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Đối Tác Liên Kết</h1>

<div id="main">
	<div id="button">
		<a href="{{asset('quanlydoitac/add/linhvuc')}}">Thêm Lĩnh Vực</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
			<tr>
				<th><p class="tieu-de">Lĩnh vực</p></th>
				<th><p class="tieu-de">sửa</p></th>
				<th><p class="tieu-de">xóa</p></th>
			</tr>
		</thead>
		<tbody>
			@foreach($loai_doi_tac as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->ten_ldt}}</span>
					</div>
				</td>
			
				<td>
					<div class="icon">
						<a href="{{asset('quanlydoitac/linhvuc/edit/'.$item->id_ldt)}}"><img src="../images/icon-server.png" width="40px" height="40px"></a>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlydoitac/linhvuc/delete/'.$item->id_ldt)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
			

		</tbody>
	</table>

	
	<div id="button">
		<a href="{{asset('quanlydoitac/add')}}">Thêm đối tác</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
			<tr>
				<th><p class="tieu-de">tên đối tác</p></th>
				<th><p class="tieu-de">địa chỉ</p></th>
				<th><p class="tieu-de">Lĩnh vực</p></th>
				<th><p class="tieu-de">sửa</p></th>
				<th><p class="tieu-de">xóa</p></th>
			</tr>
		</thead>
		<tbody>
			@foreach($doi_tac as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->ten_dt}}</span>
					</div>
				</td>
				<td>
					<div>
						<span>{{$item->dia_chi}}</span>
					</div>
				</td>
				<td>
					<div>
						<span>{{$item->loaidoitac->ten_ldt}}</span>
					</div>
				</td>
				<td>
					<div class="icon">
						<a href="{{asset('quanlydoitac/edit/'.$item->id_dt)}}"><img src="../images/icon-server.png" width="40px" height="40px"></a>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlydoitac/delete/'.$item->id_dt)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>


			@endforeach
			

		</tbody>
			

	</table>
	
</div>
@stop