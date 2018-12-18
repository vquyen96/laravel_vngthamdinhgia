@extends('guest.master')
@section('title')
<title>Dịch Vụ</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/dichvu.css">
@stop
@section('main')
<div id="main">
	<section>
		<div class="container">

			<div id="main-top">	
				<div  class="row">		
					<div id="layer" class="col-md-7 col-sm-12">
						<img src="../images/@if(isset($banner->anh)){{$banner->anh}}@endif">
					</div>
					<div id="content" class="col-md-5 col-sm-12">
						<h2>@if(isset($banner->tieu_de)) {{$banner->tieu_de}} @endif</h2>
						<p>@if(isset($banner->mo_ta)) {{$banner->mo_ta}} @endif</p>
						<div id="phone-number">
							<img src="../images/call.png">
							<p>0909988303</p>					
						</div>
						<a href="{{asset('lienhe')}}">
							<div id="phone-contact">
								<img src="../images/LH.png">
								<p>LIÊN HỆ</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="list-dichvu">
		<div class="container">
			<div id="dichvu-flex">
				<div class="row">
					@foreach($dich_vu as $item)
					<a href="{{asset('thamdinhgia/'.$item->slug)}}">
						<div class="dichvu col-md-4 col-sm-6 col-xs-12">
							<div class="img">
								<div class="full-images">
									<img src="../images/{{$item->baner}}">
								</div>
								<p>{{$item->ten_dv}}</p>
							</div>
{{-- 					<div class="logo-dv">
							<img src="">
						</div> --}}
					</div>
				</a>
				@endforeach
			</div>

		</div>
	</div>
</section>

</div>
@stop