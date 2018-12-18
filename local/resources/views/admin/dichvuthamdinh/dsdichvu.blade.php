@extends('admin.quantri')
@section('main')

@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Dịch Vụ Thẩm Định</h1>

<div id="main">
	<div id="button">
		<a href="{{asset('quanlydichvu/add')}}">Thêm Dịch Vụ</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
		<tr>
			<th><p class="tieu-de">tên dịch vụ</p></th>
			
			<th><p class="tieu-de">chi tiết dịch vụ</p></th>
			<th><p class="tieu-de">xóa</p></th>
		</tr>
		</thead>
		
		<tbody>
			@foreach($dich_vu as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->ten_dv}}</span>
					</div>
				</td>

				
				<td>
					<div class="dich-vu">
						<span><a href="{{asset('quanlydichvu/show/'.$item->id_dv)}}">Chi Tiết</a></span>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlydichvu/delete/'.$item->id_dv)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>
	
</div>
@stop