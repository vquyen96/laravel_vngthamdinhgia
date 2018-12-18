@extends('guest.master')
@section('title')
<title>{{$chi_tiet_du_an->ten_da}}</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/thamdinhgia-bds.css">

@stop

@section('main')
<div id="main">
	<div id="main-top">
		
	</div>
	<div class="container">
		<div class="row">
			<div id="content" class="col-md-8 col-sm-12 col-xs-12">
				<h2>{{$chi_tiet_du_an->ten_da}}</h2>
				{!!$chi_tiet_du_an->noi_dung!!}
			</div>
			<div id="side-bar" class="col-md-4 col-sm-12 col-xs-12">
				<h2>dịch vụ thẩm địch giá vng</h2>
				<div id="menu-side-bar">
					<ul>
						@foreach($dich_vu as $item)
							<li><a href="{{asset('thamdinhgia/'.$item->slug)}}">{{$item->ten_dv}}</a>
							<div class="hover"></div></li>				
							@endforeach
					</ul>
					<div id="download">
						<img src="../images/Shape-2.png">
						<p class="bold">Brochure công ty</p>
						<p>Download brochure mới nhất của Novaland để hiểu rõ hơn về chúng tôi</p>
						<div id="button-download">
							<a href="#">Download</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop