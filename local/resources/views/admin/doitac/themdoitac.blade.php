@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suadoitac.css">
@stop
	<h1 class="page-header">Thêm Đối Tác</h1>
	<div id="main">
		<form method="post" action="{{asset('quanlydoitac/postadd')}}">
			<p>Tên Đối Tác</p>
			<input type="text" name="ten_dt" required="">
			<p>Địa chỉ</p>
			<input type="text" name="dia_chi"></br>
			<p>Lĩnh vực</p>
			<select name="id_ldt">
				@foreach($linh_vuc as $item)
				<option value="{{$item->id_ldt}}">{{$item->ten_ldt}}</option>
				@endforeach
				
			</select>
			</br>
			<input class="btn btn-primary" type="submit" name="" value="Thêm">

			{{csrf_field()}}
		</form>
	</div>

@stop