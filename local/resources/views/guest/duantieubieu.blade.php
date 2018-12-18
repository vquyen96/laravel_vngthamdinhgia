@extends('guest.master')
@section('title')
<title>Dự Án Tiêu Biểu</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/duantieubieu.css">
@stop
@section('main')
<div id="main">
	<section>
		<div class="container">
			<div id="main-top">
				<h2>dự án tiêu biểu</h2>
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

	<section id="bg-bat-dong-san">
		<div class="container">
			<div id="list-bat-dong-san">
				<div class="row">				
					<div class="noi-dung col-md-4 col-sm-12 col-xs-12">
						<h2>THẨM ĐỊNH GIÁ BẤT ĐỘNG SẢN</h2>
						<p class="tieu-de">Hiện nay, theo xu hướng quốc tế, các giao dịch bất động sản đều được một tổ chức tư vấn độc lập tư vấn thẩm định giá để đảm bảo tính khách quan, minh bạch trong quá trình giao dịch tài sản.</p>
					</div>

					
					<div id="overflow" class="col-md-8 col-sm-12 col-xs-12">
						<div id="bat-dong-san">
							<div class="row">
								@foreach($da_bat_dong_san as $item)
								<div class="noi-dung col-md-6 col-sm-6 col-xs-12">
									<a href="{{asset('chitietduantieubieu/batdongsan/'.$item->slug)}}">
										<div class="full-images">
											<img src="../images/{{$item->anh_da}}">
										</div>
										<p class="p1">{{$item->ten_da}}</p>
									</a>	
								</div>
								@endforeach
							</div>
						</div>
					</div>

					<div id="list-button">

						<div class="button button-top">
							<img src="../images/button-doc.png">
						</div>

						<div class="button button-bottom">
							<img src="../images/button.png">
						</div>

					</div>
					
				</div>

				
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div id="list-van-tai">
				<div class="row">

					<div class="van-tai van-tai-sm col-md-3 col-sm-12 col-xs-12">
						<h2>THẨM ĐỊNH PHƯƠNG TIỆN VẬN TẢI</h2>
						<p>Thẩm định phương tiện vận tải là việc đánh giá, hoặc việc đánh giá lại giá trị tài sản cho phù hợp với thị trường tại một thời điểm nhất định theo tiêu chuẩn Việt Nam hoặc thông lệ quốc tế. Việc thẩm định phương tiện vận tải đang được đánh giá cao trong thời điểm hiện tại.</p>
					</div>
					<div class="van-tai col-md-9 col-sm-12 col-xs-12">
						<div class="row">
							@foreach($da_van_tai as $item)
							<div class ="o-to col-md-4 col-sm-4 col-xs-12">
								<a href="{{asset('chitietduantieubieu/vantai/'.$item->slug)}}">
									<div class="full-images-o-to">
										<img src="../images/{{$item->anh_da}}">
									</div>
									<p>{{$item->ten_da}}</p>
								</a>
							</div>	
							@endforeach
						</div>
					</div>

					<div class="van-tai van-tai-md col-md-3 col-sm-12 col-xs-12">
						<h2>THẨM ĐỊNH PHƯƠNG TIỆN VẬN TẢI</h2>
						<p>Thẩm định phương tiện vận tải là việc đánh giá, hoặc việc đánh giá lại giá trị tài sản cho phù hợp với thị trường tại một thời điểm nhất định theo tiêu chuẩn Việt Nam hoặc thông lệ quốc tế. Việc thẩm định phương tiện vận tải đang được đánh giá cao trong thời điểm hiện tại.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div id="may-moc">
			<div class="container">
				<h2>THẨM ĐỊNH GIÁ MÁY MÓC THIẾT BỊ</h2>
				<div id="list-may-moc">
					<div class="row">
						@foreach($da_may_moc as $key => $item)
						@if($key % 2 == 1)
						<div class="hinh-anh col-md-3 col-sm-6 col-xs-12" >
							<a href="{{asset('chitietduantieubieu/maymoc/'.$item->slug)}}">
								<div class="hinh-anh-1">
									<div class="full-images-ha">
										<img src="../images/{{$item->anh_da}}">
									</div>
									<div class="thong-tin">
										<p class="tieu-de-may-moc">{{$item->ten_da}}</p>
									</div>
								</div>
							</a>
						</div>
						@else
						<div class="hinh-anh col-md-3 col-sm-6 col-xs-12">
							<a href="{{asset('chitietduantieubieu/maymoc/'.$item->slug)}}">
								<div class="hinh-anh-2">
									<div class="thong-tin">
										<p class="tieu-de-may-moc">{{$item->ten_da}}</p>
									</div>
									<div class="full-images-ha">
										<img src="../images/{{$item->anh_da}}">
									</div>
								</div>
							</a>
						</div>
						@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@stop
@section('script')
<script type="text/javascript">
	// $(document).ready(function(){
	// 	$('#button-top').animate()
	// })

	$(document).ready(function(){
		$('.button-bottom').click(function(){
			if (($('#bat-dong-san').css("margin-Top"))== '0px') {	
				$('#bat-dong-san').animate({marginTop:'-406px'});
			}
			else if (($('#bat-dong-san').css("margin-Top"))== '-406px'){
				$('#bat-dong-san').animate({marginTop:'-812px'});
			}	
			else if (($('#bat-dong-san').css("margin-Top"))== '-812px'){
				$('#bat-dong-san').animate({marginTop:'-0px'});
			}	
		});
		$('.button-top').click(function(){
			if (($('#bat-dong-san').css("margin-Top"))== '-812px') {	
				$('#bat-dong-san').animate({marginTop:'-406px'});
			}
			else if (($('#bat-dong-san').css("margin-Top"))== '-406px'){
				$('#bat-dong-san').animate({marginTop:'0px'});		
			}	

		});

	});

</script>
@stop