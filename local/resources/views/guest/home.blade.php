@extends('guest.master')
@section('title')
<title>Trang Chủ</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/home.css">
@stop
@section('main')

<section>
	<div class="container">
		<div id="main">
			<div id="main-top">
				<div class="row">
					<div id="layer1" class="col-md-8 col-sm-12 col-xs-12" >				
						<img src="../images/@if(isset($banner->anh)){{$banner->anh}}@endif">
					</div>
					<div id="content" class="col-md-4 col-sm-12 col-xs-12">
						<h2>@if(isset($banner->tieu_de)) {{$banner->tieu_de}} @endif</h2>
						<p>@if(isset($banner->mo_ta)) {{$banner->mo_ta}} @endif</p>
						<div id="phone-number">
							<img src="../images/call.png">
							<p>0909988303</p>					
						</div>
						<a id="phone-contact" href="{{asset('lienhe')}}">
							<img src="../images/LH.png">
							<p>LIÊN HỆ</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div id="thong-ke">
			<div class="row">
				<div class="thong-ke-1 col-md-3 col-sm-6 col-xs-12">
					<span>321</span>
					<p>Dự án hoàn thành</p>
				</div>
				<div class="thong-ke-1 col-md-3 col-sm-6 col-xs-12">
					<span>27</span>
					<p>Chuyên gia tư vấn</p>
				</div>
				<div class="thong-ke-1 col-md-3 col-sm-6 col-xs-12">
					<span>125</span>
					<p>Chứng nhận</p>
				</div>
				<div class="thong-ke-1 col-md-3 col-sm-6 col-xs-12">
					<span>100%</span>
					<p>Khách hàng hài lòng</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="quang-cao-background">
	<div class="container">
		<div id="quang-cao">
			<div class="row">
				<div class="quang-cao-1 col-sm-4 col-xs-12" >
					<img src="../images/quang-cao-1.png">
					<div class="thong-so">
						<p>dịch vụ đa dạng</p>
						<a href="{{asset('dichvu')}}">
							<div class="button">
								<img src="../images/button-ngang.png" >
							</div>
						</a>
					</div>
				</div>
				<div class="quang-cao-1 col-sm-4 col-xs-12">
					<img src="../images/quang-cao-2.png">
					<div class="thong-so">
						<p>nhân sự trình độ cao</p>
						<a href="{{asset('nhansu')}}">
							<div class="button">
								<img src="../images/button-ngang.png">
							</div>
						</a>
					</div>
				</div>
				<div class="quang-cao-1 col-sm-4 col-xs-12">
					<img src="../images/quang-cao-3.png">
					<div class="thong-so">
						<p>quy trình chuyên nghiệp</p>
						<a href="{{asset('quytrinhthamdinh')}}">
							<div class="button">
								<img src="../images/button-ngang.png" >
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div id="dich-vu">
		<div class="container">
			<div class="row">

				<div id="gioi-thieu" class="gioi-thieu-sm col-md-6 col-sm-12 col-xs-12">
					<h2>dịch vụ thẩm định giá</h2>
					<p>Hiện nay, theo xu hướng quốc tế, các giao dịch bất động sản đều được một tổ chức tư vấn độc lập tư vấn thẩm định giá để đảm bảo tính khách quan, minh bạch trong quá trình giao dịch tài sản.</p>

					<p>Một bất động sản được đánh giá là sử dụng cao nhất và tốt nhất nếu tại thời điểm định giá cho thấy bất động sản đó đang được sử dụng hợp pháp cũng như đang cho thu nhập ròng lớn nhất hoặc có khả năng cho giá trị hiện tại của thu nhập ròng trong tương lai là lớn nhất, sử dụng cao nhất và tốt nhất đó có thể tồn tại và kéo dài liên tục trong một khoảng thời gian nhất định.</p>
				</div>

				<div id="danh-muc" class="col-md-6 col-sm-12 col-xs-12" >
					<div class="full-div">
						<div class="row">	
							@foreach($dichvu as $item)
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="img-danh-muc">
									<a href="{{asset('thamdinhgia/'.$item->slug)}}">
										<img src="../images/{{$item->logo}}" width="65px" height="55px">
										<p>{{$item->ten_dv}}</p>
									</a>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div id="gioi-thieu" class="gioi-thieu-md col-md-6 col-sm-12 col-xs-12">
					<h2>dịch vụ thẩm định giá</h2>
					<p>Hiện nay, theo xu hướng quốc tế, các giao dịch bất động sản đều được một tổ chức tư vấn độc lập tư vấn thẩm định giá để đảm bảo tính khách quan, minh bạch trong quá trình giao dịch tài sản.</p>

					<p>Một bất động sản được đánh giá là sử dụng cao nhất và tốt nhất nếu tại thời điểm định giá cho thấy bất động sản đó đang được sử dụng hợp pháp cũng như đang cho thu nhập ròng lớn nhất hoặc có khả năng cho giá trị hiện tại của thu nhập ròng trong tương lai là lớn nhất, sử dụng cao nhất và tốt nhất đó có thể tồn tại và kéo dài liên tục trong một khoảng thời gian nhất định.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="doi-tac">

	<div class="container">
		<div class="row">
			<div id="doi-tac-lk" class="col-md-6 col-sm-12 col-xs-12">
				<h2>đối tác liên kết</h2>
				<p>Với nhiều năm kinh nghiệm và hoạt động, Công ty TNHH Thẩm định Giá VNG Việt Nam ngày càng phát triển. Hiện chúng tôi là đơn vị cung cấp dịch vụ thẩm định giá cho nhiều ngân hàng, các cơ quan công quyền(Ban Bồi thường giải phóng mặt bằng, Phòng TCKH, tòa án, cơ quan thi hành án..) các quận huyện trên địa bàn Hà Nội và nhiều tỉnh thành khác trên cả nước.</p>
				<div id="xem-them">
					<a href="{{asset('doitac')}}">xem thêm</a>
				</div>
			</div>

			<div id="list-doi-tac" class="col-md-6 col-sm-12 col-xs-12">
				<div class="full-div">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="logo-doi-tac">
								<a href="{{asset('/')}}"><img src="../images/logo-cd-y-thai-nguyen-1.png"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="logo-doi-tac">
								<a href="{{asset('/')}}"><img src="../images/logo-dong-a-bank-1-1.png"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="logo-doi-tac">
								<a href="{{asset('/')}}"><img src="../images/logo-maritime-bank-1.png"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="logo-doi-tac">
								<a href="{{asset('/')}}"><img src="../images/logo-nxb-y-hoc-1.png"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="logo-doi-tac">
								<a href="{{asset('/')}}"><img src="../images/logo-poki-1.png"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="logo-doi-tac">
								<a href="{{asset('/')}}"><img src="../images/logo-unetkids-1.png"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>

<section id="phan-hoi">
	<div class="container">
		<h2>khách hàng nói gì về chúng tôi</h2>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">


					@foreach($y_kien as $key=>$item)
					@if($key==3)
					@break
					@endif
					<div class="content-phan-hoi col-md-4 col-sm-4 col-xs-12">
						<div class="bg-noi-dung">
							{{-- <img src="../images/Polygon-1.png"> --}}
							<p class="noi-dung">{{$item->noi_dung}}</p>
						</div>

						<div class="profile">

							<img src="../images/{{$item->anh_dd}}">
							<div class="khach-hang">
								<p class="ten-kh">{{$item->ho_ten}}</p>
								<p class="chuc-vu">{{$item->chuc_vu}}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>

				<div class="item">
					@foreach($y_kien as $key=>$item)
					@if($key==6)
					@break	
					@endif
					@if($key==3)
					<div class="content-phan-hoi col-md-4 col-sm-4 col-xs-12">
						<div class="bg-noi-dung">
							{{-- <img src="../images/Polygon-1.png"> --}}
							<p class="noi-dung">{{$item->noi_dung}}</p>
						</div>

						<div class="profile">

							<img src="../images/{{$item->anh_dd}}">
							<div class="khach-hang">
								<p class="ten-kh">{{$item->ho_ten}}</p>
								<p class="chuc-vu">{{$item->chuc_vu}}</p>
							</div>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>


</section>
<section id="phan-hoi-sm">
	<div class="container">
		<h2>khách hàng nói gì về chúng tôi</h2>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					@foreach($y_kien as $key=>$item)
					@if($key==2)
					@break
					@endif
					<div class="content-phan-hoi col-sm-6 col-xs-12">
						<div class="bg-noi-dung">
							{{-- <img src="../images/Polygon-1.png"> --}}
							<p class="noi-dung">{{$item->noi_dung}}</p>
						</div>

						<div class="profile">

							<img src="../images/{{$item->anh_dd}}">
							<div class="khach-hang">
								<p class="ten-kh">{{$item->ho_ten}}</p>
								<p class="chuc-vu">{{$item->chuc_vu}}</p>
							</div>
						</div>
					</div>

					@endforeach
				</div>

				<div class="item">
					@foreach($y_kien as $key=>$item)
					@if($key==4)
					@break
					@endif

					@if($key == 2)
					<div class="content-phan-hoi col-sm-6 col-xs-12">
						<div class="bg-noi-dung">
							{{-- <img src="../images/Polygon-1.png"> --}}
							<p class="noi-dung">{{$item->noi_dung}}</p>
						</div>

						<div class="profile">

							<img src="../images/{{$item->anh_dd}}">
							<div class="khach-hang">
								<p class="ten-kh">{{$item->ho_ten}}</p>
								<p class="chuc-vu">{{$item->chuc_vu}}</p>
							</div>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>

			<!-- Left and right controls -->
			{{-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a> --}}
		</div>
	</div>
</section>
@stop