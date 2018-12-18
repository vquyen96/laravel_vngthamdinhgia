@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suadoitac.css">
@stop
	<h1 class="page-header">Sửa Lĩnh Vực</h1>
	<div id="main">
		<form method="post" action="{{asset('quanlydoitac/linhvuc/postedit/'.$linh_vuc->id_ldt)}}">
			<p>Lĩnh Vực</p>
			<input type="text" name="ten_ldt" required="" value="{{$linh_vuc->ten_ldt}}">
			
			</br>
			<input class="btn btn-primary" type="submit" name="" value="Thêm">
			{{csrf_field()}}
		</form>
	</div>

@stop