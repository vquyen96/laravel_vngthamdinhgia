@extends('guest.master')
@section('title')
<title>{{$tin_tuc->tieu_de}}</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/tintuc.css">
@stop

@section('main')
<div id="main">
	<section>
		<div id="main-top"></div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div id="content" class="col-md-8 col-sm-12 col-xs-12">
					<h2>{{$tin_tuc->tieu_de}}</h2>
					{!!$tin_tuc->noi_dung!!}
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

		<section>
			<div class="container">
				<div id="main-bt">
					<h2>tin liên quan</h2>
					<div id="list-news">
						<div class="row">
						@foreach($tin_tuc_chung as $item)
						<div class="news col-md-3 col-sm-6 col-xs-12">
							<a href="{{asset('chitiettintuc/'.$item->slug)}}">
								<img src="../images/images/tintuc/{{$item->anh_tieu_de}}">
								<div class="bg-news">
									<p>{{$item->tieu_de}}</p>
									<span>{{$item->created_at}}</span>
								</div>
							</a>
						</div>
						@endforeach
						</div>

					</div>
				</div>
			</div>
		</section>
	</div>
	@stop