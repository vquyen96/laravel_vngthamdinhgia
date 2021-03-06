@extends('guest.master')
@section('title')
<title>Văn Bản</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/vanban.css">
@stop
@section('main')
<div id="main">
	<section>
		<div class="container">
			<div id="main-top">
				<h2>văn bản</h2>
				<p>Là một đơn vị uy tín, có nhiều kinh nghiệm trên thị trường Việt Nam – Công ty TNHH Thẩm định giá VNG Việt Nam được thành lập với tiêu chí mang đến niềm tin và giá trị đích thực cho Khách hàng trong lĩnh vực hoạt động thẩm định giá.Là một đơn vị uy tín, có nhiều kinh nghiệm trên thị trường Việt Nam – Công ty TNHH Thẩm định giá VNG Việt Nam được thành lập với tiêu chí mang đến niềm tin và giá trị đích thực cho Khách hàng trong lĩnh vực hoạt động thẩm định giá.</p>
				<a href="{{asset('lienhe')}}">
					<div id="phone-contact">
						<img src="../images/LH.png">
						<p>LIÊN HỆ</p>
					</div>
				</a>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div id="content" class="col-md-8 col-sm-12 col-xs-12">
					<div id="menu-content">
						<ul>
							@foreach($linh_vuc as $item)
							<li><a href="{{asset('vanban/'.$item->slug)}}">{{$item->ten_lv}}</a>

							</li>
							@endforeach
						</ul>
					</div>

					<div id="main-content">
						<div class="row">
						@foreach($van_ban as $item)
						<div class="main-conten-1 col-md-6 col-sm-6 col-xs-12">
							<div class="full-images">
							<img src="../images/images/tintuc/{{$item->anh_vb}}">
							</div>
							<div class="thong-so">
								<p>{{cut_string($item->ten_vb, 80)}}</p>
								<span>{{cut_string($item->chu_thich, 100)}}</span>
							</div>
							<div class="button">
								<a href="{{asset('downloadvanban/'.$item->id_vb)}}">DOWNLOAD</a>
							</div>
						</div>
						@endforeach
						</div>

					</div>
					{{$van_ban->links()}}
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
	</section>
</div>
@section('script')
<script type="text/javascript" src="js/vanban.js"></script>
@stop
@stop