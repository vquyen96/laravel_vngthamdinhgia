@extends('guest.master')
@section('title')
<title>Quy Trình Thẩm Định</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/quytrinhthamdinh.css">
@stop

@section('main')
<div id="main">
	<div id="main-top">
		
	</div>
	<div class="container">
		<div class="row">
			<div id="content" class="col-md-8 col-sm-12 col-xs-12">
				<h2>quy trình thẩm định</h2>
				<p>Doanh nghiệp chúng tôi có đã có nhiều năm hợp tác với thẩm định giá VNG Việt Nam. Tôi đánh giá cao năng lực tư vấn, hiệu quả công việc và tinh thần sẵn sàng hỗ trợ của Quý công ty.Doanh nghiệp chúng tôi có đã có nhiều năm hợp tác với thẩm định giá VNG Việt Nam. Tôi đánh giá cao năng lực tư vấn, hiệu quả công việc và tinh thần sẵn sàng hỗ trợ của Quý công ty.Doanh nghiệp chúng tôi có đã có nhiều năm hợp tác với thẩm định giá VNG Việt Nam. Tôi đánh giá cao năng lực tư vấn, hiệu quả công việc và tinh thần sẵn sàng hỗ trợ của Quý công ty.Doanh nghiệp chúng tôi có đã có nhiều năm hợp tác với thẩm định giá VNG Việt Nam. Tôi đánh giá cao năng lực tư vấn, hiệu quả công việc và tinh thần sẵn sàng hỗ trợ của Quý công ty.</p>
				<img src="../images/quy-trinh.png">
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
						<a href="{{asset('downloadprofile')}}" style="color: #fff;font-weight: bold;">
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