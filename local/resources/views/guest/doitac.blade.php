@extends('guest.master')
@section('title')
<title>Đối Tác</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/doitac.css">
@stop
@section('main')
<div id="main">
	<div id="main-top">
		<div class="container">
			<h2>đối tác liên kết</h2>
			<p>Với nhiều năm kinh nghiệm và hoạt động, Công ty TNHH Thẩm định Giá VNG Việt Nam ngày càng phát triển. Hiện chúng tôi là đơn vị cung cấp dịch vụ thẩm định giá cho nhiều ngân hàng, các cơ quan công quyền(Ban Bồi thường giải phóng mặt bằng, Phòng TCKH, tòa án, cơ quan thi hành án..) các quận huyện trên địa bàn Hà Nội và nhiều tỉnh thành khác trên cả nước.</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div id="content" class="col-md-8 col-sm-12 col-xs-12">
				<div id="menu-content">
					<ul>
						@foreach($linh_vuc as $item)
						<li><a href="{{asset('doitac/'.$item->slug)}}">{{$item->ten_ldt}}</a></li>
						{{-- <li><img src="../images/CQ.png" width="20px" height="20px"><a href="#">khối công quyền</a></li> --}}
						@endforeach				
					</ul>
				</div>

				<div id="main-content">
					<ul>
						@foreach($doi_tac as $item)
						<li>
							<p class="ten-doi-tac">{{$item->ten_dt}}</p>
							<p class="dia-chi">{{$item->dia_chi}}</p>
						</li>
						@endforeach
					</ul>
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