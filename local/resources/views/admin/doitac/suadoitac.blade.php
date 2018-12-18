@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suadoitac.css">
@stop
	<h1 class="page-header">Sửa Đối Tác</h1>
	<div id="main">
		<form method="post" action="{{asset('quanlydoitac/postedit/'.$doi_tac_cu->id_dt)}}">
			<p>Tên Đối Tác</p>
			<input type="text" name="ten_dt" required="" value="{{$doi_tac_cu->ten_dt}}">
			<p>Địa chỉ</p>
			<input type="text" name="dia_chi" value="{{$doi_tac_cu->dia_chi}}"></br>
			<p>Lĩnh vực</p>
			<select name="id_ldt">
				<option value="{{$doi_tac_cu->id_ldt}}">{{$doi_tac_cu->loaidoitac->ten_ldt}}</option>
				@foreach($linh_vuc as $item)
				<option value="{{$item->id_ldt}}">{{$item->ten_ldt}}</option>
				@endforeach
			</select>
			</br>
			<input class="btn btn-primary" type="submit" name="" value="Chỉnh sửa">
			{{csrf_field()}}
		</form>
		
	</div>

@stop