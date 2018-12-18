@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suadoitac.css">
@stop
	<h1 class="page-header">Thêm Lĩnh Vực</h1>
	<div id="main">
		<form method="post" action="{{asset('quanlylinhvuc/postadd')}}">
			<p>Lĩnh Vực</p>
			<input type="text" name="ten_lv" required="">
			
			<p>Level</p>
			<select name="level">
				<option>1</option>
				<option>2</option>
			</select>
			</br>
			<input class="btn btn-primary" type="submit" name="" value="Thêm">
			{{csrf_field()}}
		</form>
	</div>

@stop