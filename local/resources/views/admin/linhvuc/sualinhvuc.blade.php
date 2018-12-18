@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suadoitac.css">
@stop
	<h1 class="page-header">Sửa Lĩnh Vực</h1>
	<div id="main">
		<form method="post" action="{{asset('quanlylinhvuc/postedit/'.$linh_vuc_cu->id_lv)}}">
			<p>Tên Lĩnh Vực</p>
			<input type="text" name="ten_lv" value="{{$linh_vuc_cu->ten_lv}}" required="">

			<p>Level</p>
			<select name="level" >
				<option>{{$linh_vuc_cu->level}}</option>
				<option>1</option>
				<option>2</option>
	
			</select>
			</br>
			<input class="btn btn-primary" type="submit" name="" value="Chỉnh sửa">
			{{csrf_field()}}
		</form>
	</div>

@stop