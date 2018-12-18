@extends('guest.master')
@section('title')
<title>{{$chi_tiet_dich_vu->ten_dv}}</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/batdongsan.css">
@stop
@section('main')
<div id="main">
	<div id="main-top">
		<h2>{{$chi_tiet_dich_vu->ten_dv}}</h2>
		<p>{{cut_string($chi_tiet_dich_vu->gioi_thieu, 650)}}</p>
	</div>

	<div class="container">
		<div class="row">
			<div id="content" class="col-md-8 col-sm-12 col-xs-12">
				<h2>giới thiệu chung</h2>
				
				{!!$chi_tiet_dich_vu->quy_trinh!!}
			</div>

			<div id="side-bar" class="col-md-4 col-sm-12 col-xs-12">
				<h2>dịch vụ thẩm địch giá vng</h2>
				<div id="menu-side-bar">
					<ul>
						
						@foreach($dich_vu as $item)
							<li><a href="{{asset('thamdinhgia/'.$item->slug)}}">{{$item->ten_dv}}</a></li>				
						@endforeach
					</ul>
					<div id="download">
						<img src="../images/Shape-2.png">
						<p class="bold">Brochure công ty</p>
						<p>Download brochure mới nhất của Novaland để hiểu rõ hơn về chúng tôi</p>
						<a href="{{asset('downloadprofile')}}">
							<div id="button-download">
								Download
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop