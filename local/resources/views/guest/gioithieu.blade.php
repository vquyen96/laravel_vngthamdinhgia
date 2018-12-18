@extends('guest.master')
@section('title')
<title>Giới Thiệu</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/gioithieu.css">
@stop
@section('main')
<div id="main">
	<section>
		<div class="container">
			<div id="main-top">
				<div class="row">
					<div id="content" class="col-md-6 col-sm-12 col-xs-12">
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
					<div id="layer" class="col-md-6 col-sm-12 col-xs-12">
						<img src="../images/@if(isset($banner->anh)){{$banner->anh}}@endif">
					</div>
				</div>

			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div id="history">
				<div id="list-history">
					<div class="thoi-ky thoi-ky-active-1">
						<div class="year">
							<p>2010</p>
						</div>
						<div class="mo-ta">
							<p class="chu-de">KHỞI ĐẦU</p>
							<p class="noi-dung">Khởi đầu là Công ty Cổ phần Đầu tư ANG (Chuyển đổi từ Công ty Cổ phần đầu tư VNG Việt Nam)</p>
						</div>
					</div>
					<div class="thoi-ky thoi-ky-active-2">
						<div class="year">
							<p>2014</p>
						</div>
						<div class="mo-ta">
							<p class="chu-de">CHUYỂN ĐỔI</p>
							<p class="noi-dung">Chuyển đổi thành Công ty TNHH Thẩm định giá VNG Việt Nam</p>
						</div>
					</div>
					<div class="thoi-ky thoi-ky-active-3">
						<div class="year">
							<p>2016</p>
						</div>
						<div class="mo-ta">
							<p class="chu-de">ĐẾN NAY...</p>
							<p class="noi-dung">Công ty TNHH Thẩm định giá VNG Việt Nam sở hữu đội ngũ và chất lượng nhân sự vững về chuyên môn nghiệp vụ, tốt về đạo đức nghề nghiệp.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="background-1">
		<div class="container">
			<div id="chinh-xac-tt">
				<img src="../images/Forma-1.png">
				<h2>chính xác trung thực</h2>
				<p>Với phương châm “ Chính xác ” là điều kiện bắt buộc để khẳng định uy tín của mình, trong hoạt động nghề nghiệp của Công ty TNHH Thẩm định giá VNG Việt Nam luôn tôn chỉ đạo đức nghề nghiệp và mong muốn hợp tác với mọi tổ chức cá nhân trong và ngoài nước.</p>
			</div>
		</div>
	</section>	

	<section>
		<div class="container">
			<div id="staff">
				<h2>nhân sự</h2>
				<div id="list-staff">
					<div class="row">
						@foreach($nhan_su as $item)
						<div class="col-md-6 col-sm-6 col-xs-12">
							<a href="{{asset('nhan-su-detail/'.$item->slug)}}" class="mo-ta-staff">
								<div class="img" style="background: url('../images/{{$item->anh_ns}}') no-repeat center/cover;">
								</div>
								<p class="name-staff">{{$item->ho_ten}}</p>
								<p class="position">{{$item->chuc_vu}}</p>
								<p class="cv">Xem chi tiết</p>
							</a>
						</div>
						@endforeach
					</div>	
				</div>
				<a href="{{asset('nhansu')}}" class="view-more">
					Xem Thêm
				</a>
			</div>
		</div>
	</section>

	<section>
		<div id="thu-ngo">
			<div class="container">
				<h2>thư ngỏ</h2>
				<p> Công ty TNHH Thẩm định giá VNG Việt Nam được thành lập từ năm 2010. Là một thành viên trong hệ thống VNG Group. Chúng tôi tự hào là một trong những công ty thẩm định giá được công nhận, cấp phép hàng năm cho các hoạt động thẩm định theo tiêu chuẩn của Cục quản lý giá – Bộ tài chính Việt Nam.</p>
				<p>Công ty TNHH Thẩm định giá VNG Việt Nam có đội ngũ và chất lượng nhân sự vững về chuyên môn nghiệp vụ, tốt về đạo đức nghề nghiệp. Các thẩm định viên của Công ty có trình độ chuyên môn cao,đạt tiêu chuẩn theo quy định của Hội thẩm định giá Việt Nam (VVA),Hiệp hội thẩm định giá ASEAN(AVA) và Hiệp hội thẩm định giá Thế giới ( WAVO).Công ty cung cấp các dịch vụ thẩm định giá có chất lượng về các lĩnh vực:Thẩm định giá bất động sản; Thẩm định giá máy móc thiết bị , nhà xưởng, công trình xây dựng ;Thẩm định giá dự án đầu tư ; xác định giá trị doanh nghiệp ; Thẩm định giá phương tiện vận tải; Thẩm định mua sắm tài sản,chứng minh tài sản , thẩm định giá tài sản cần thanh lý , thẩm định giá trị tài sản vô hình , xác định giá trị cổ phiếu , xác định giá trị mỏ khoáng sản….</p>
				<p>Các chứng thư Thẩm định giá do VNG Việt Nam phát hành có giá trị về mặt pháp lý và được các Ngân hàng , các Cơ quan Nhà nước trên toàn quốc ( như Ủy ban nhân dân , Bộ Tài chính , Ban bồi thường giải phóng mắt bằng…) công nhận và sử dụng cho nhiều mục đích khác nhau như : mua bán , chuyển nhượng , cổ phần hóa , góp vốn – liên doanh , đền bù – giải tỏa , giải quyết tranh chấp dân sự , thanh lý , phát mãi tài sản , vay vốn ngân hàng , chứng minh tài sản du học – du lịch…</p>
				<p>Chúng tôi tự hào là một trong những đơn vị cung cấp dịch vụ thẩm định giá uy tín tại Việt Nam</p>
				<p>Ban Giám đốc công ty thẩm định giá VNG Việt Nam chân thành cám ơn sự quan tâm, rất mong tiếp tục nhận được sự tín nhiệm và hợp tác của Quý khách hàng.</p>
				<p class="span">Trân trọng!</p>
			</div>
		</div>
	</section>
</div>
@stop
