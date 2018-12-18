@extends('guest.master')
@section('title')
<title>Nhân sự</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/tailieu.css">
<link rel="stylesheet" type="text/css" href="css/nhansu-detail.css">
@stop
@section('main')
<div id="main">
	

	<section>
		<div class="container">
			<div class="row">
				<div id="content" class="col-md-8 col-sm-12 col-xs-12">
					<div class="name">{{$nhan_su_detail->ho_ten}}</div>
					<div class="position">{{$nhan_su_detail->chuc_vu}}</div>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-12">
							<div class="avatar" style="background: url('../images/{{$nhan_su_detail->anh_ns}}') no-repeat center/cover"></div>
						</div>
						<div class="col-md-8 col-md-8 col-xs-12">
							<div class="thongtin">
								{!!$nhan_su_detail->thong_tin!!}
							</div>
						</div>
					</div>
				</div>

				<div id="side-bar" class="col-md-4 col-sm-12 col-xs-12">
					<h2>dịch vụ thẩm địch giá vng</h2>
					<div id="menu-side-bar">
						<ul>
							@foreach($dich_vu as $item)
							<li><a href="{{asset('thamdinhgia/'.$item->slug)}}">{{$item->ten_dv}}</a></li>
							@endforeach
						</ul>
					
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@stop