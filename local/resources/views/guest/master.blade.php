<!DOCTYPE html>
<html>
<head>
	@yield('title')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://demo-cgroup.com/public/layout/frontend/img/Layer 2.png">
	<base href="{{ asset('local/storage/app/public/guest') }}/">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/master.css">
	@yield('css')
</head>
<body>
	<header>
		<div id="header">
			<div class="container">
				<div class="row">
					<div id="logo" class="col-md-2">
						<h1><a href="{{asset('/')}}"><img src="../images/logo-tham-dinh-gia-vng.png" width="160px" height="50px"></a></h1>
					</div>
					<div class="repon-menu">
						<div class="icon-re"></div>
						<div class="icon-re"></div>
						<div class="icon-re"></div>
					</div>
					<div id="menu" class="col-md-10">
						<ul>
							<li><a href="{{asset('gioithieu')}}">Giới thiệu</a></li>
							<li><a href="{{asset('dichvu')}}">Dịch vụ</a>
								<ul>
									@foreach($dich_vu as $item)
									<li><a href="{{asset('thamdinhgia/'.$item->slug)}}">{{$item->ten_dv}}</a></li>
									@endforeach
								</ul>
								<div class="arrow"><i></i></div>
							</li>
							<li><a href="{{asset('duantieubieu')}}">Dự án tiêu biểu</a></li>
							<li><a href="{{asset('vanban')}}">Văn bản</a>
								<ul>
									@foreach($linh_vuc_van_ban as $item)
									<li><a href="{{asset('vanban/'.$item->slug)}}">{{$item->ten_lv}}</a></li>
									@endforeach
								</ul>
								<div class="arrow"><i></i></div>
							</li>
							<li><a href="{{asset('tailieu')}}">Tài liệu</a>
								<ul>
									@foreach($linh_vuc_tai_lieu as $item)
									<li><a href="{{asset('tailieu/'.$item->slug)}}">{{$item->ten_lv}}</a></li>
									@endforeach
								</ul>
								<div class="arrow"><i></i></div>
							</li>
							<li><a href="{{asset('list-tintuc')}}">Tin tức</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>


	</header>

	@yield('main')

	<footer>
		<div id="footer">
			<div id="text-footer">
				VNG
			</div>

			<div class="contact">
				<h2>tư vấn trực tuyến</h2>

				<p>Bạn muốn tư vấn về các dịch vụ thẩm đinh giá? Chỉ cần gửi thông tin của bạn và chúng tôi sẽ liên lạc ngay. Bạn cũng có thể gửi email cho chúng tôi về hòm thư</p>

				<form method="post" action="{{asset('tuvankhachhang/post')}}">
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="ho_ten" placeholder="Họ và tên" required="">
						</div>
						<div class="col-md-6">
							<input type="text" name="dien_thoai" placeholder="Số điện thoại" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<select name="id_dv" required="">
								@foreach($dich_vu as $item)
								<option value="{{$item->id_dv}}">{{$item->ten_dv}}</option>	
								@endforeach					
							</select>
						</div>
					</div>
					<div class="submit">

					<input type="submit" name="" value="GỬI">
				</div>

					{{csrf_field()}}
				</form>
			</div>
			<div class="container footer-bt">
				<div class="row">
					<div class="col-12 col-md-3 col-lg-3">
						<div class="lien-he">
							<img src="../images/logo-footer.png">
							<p class="p1">Là một đơn vị uy tín, có nhiều kinh nghiệm trên thị trường Việt Nam – Công ty TNHH Thẩm định giá VNG Việt Nam được thành lập với tiêu chí mang đến niềm tin và giá trị đích thực cho Khách hàng trong lĩnh vực hoạt động thẩm định giá.</p>
						</div>
					</div>
					<div class="col-12 col-md-3 col-lg-3">
						<div class="lien-he">
							<h3>HÀ NỘI</h3>
							<div class="icon"><img src="../images/gps.png"></div><p>Tầng 5, tòa nhà Diamond Flower, P. Nhân chính, Q. Thanh Xuân, Hà Nội</p>
							<div class="icon"><img src="../images/phone.png"></div><p>0909988303</p>
							<div class="icon"><img src="../images/mail.png"></div><p>info&#64;thamdinhgiavng.com.</p>
						</div>
					</div>
					<div class="col-12 col-md-3 col-lg-3">
						<div class="lien-he">
							<h3>ĐÀ NẴNG</h3>
							<div class="icon"><img src="../images/gps.png"></div><p>Số 68, Đường 2 tháng 9, P. Bình Hiên, Q. Hải Châu, TP. Đà Nẵng</p>
							<div class="icon"><img src="../images/phone.png"></div><p>0981228939</p>
							<div class="icon"><img src="../images/mail.png"></div><p>info&#64;thamdinhgiavng.com.</p>
						</div>
					</div>
					<div class="col-12 col-md-3 col-lg-3">
						<div class="lien-he">
							<h3>TP.HỒ CHÍ MINH</h3>
							<div class="icon"><img src="../images/gps.png"></div><p>Tầng 10, Số 40 Phạm Ngọc Thạch, Phường 6, Quận 3, Tp Hồ Chí Minh</p>
							<div class="icon"><img src="../images/phone.png"></div><p>0909988303</p>
							<div class="icon"><img src="../images/mail.png"></div><p>info&#64;thamdinhgiavng.com.</p>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div id="footer-sm">
			<div class="container">
				<div class="contact">
					<h2>tư vấn trực tuyến</h2>

					<p>Bạn muốn tư vấn về các dịch vụ thẩm đinh giá? Chỉ cần gửi thông tin của bạn và chúng tôi sẽ liên lạc ngay. Bạn cũng có thể gửi email cho chúng tôi về hòm thư</p>

					<form method="post" action="{{asset('tuvankhachhang/post')}}">
						<input type="text" name="ho_ten" placeholder="Họ và tên" required="">
						<input type="text" name="dien_thoai" placeholder="Số điện thoại" required="">
						<select name="id_dv" required="">
							@foreach($dich_vu as $item)
							<option value="{{$item->id_dv}}">{{$item->ten_dv}}</option>	
							@endforeach					
						</select>
						<div class="submit">
							<input type="submit" name="" value="GỬI">
						</div>

						{{csrf_field()}}
					</form>
				</div>
			</div>
			<div class="container footer-bt">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="lien-he">
							<img src="../images/logo-footer.png">
							<p class="p1">Là một đơn vị uy tín, có nhiều kinh nghiệm trên thị trường Việt Nam – Công ty TNHH Thẩm định giá VNG Việt Nam được thành lập với tiêu chí mang đến niềm tin và giá trị đích thực cho Khách hàng trong lĩnh vực hoạt động thẩm định giá.</p>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="lien-he">
							<h3>HÀ NỘI</h3>
							<div class="icon"><img src="../images/gps.png"></div><p>Tầng 5, tòa nhà Diamond Flower, P. Nhân chính, Q. Thanh Xuân, Hà Nội</p>
							<div class="icon"><img src="../images/phone.png"></div><p>0909988303</p>
							<div class="icon"><img src="../images/mail.png"></div><p>info&#64;thamdinhgiavng.com.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/reponsive.js"></script>

	@yield('script')
</body>
</html>