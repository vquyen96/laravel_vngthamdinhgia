@extends('guest.master')
@section('css')
<link rel="stylesheet" type="text/css" href="css/list-tintuc.css">
@stop
@section('main')
<div id="main">
	<section>
		<div class="container">
			<div id="main-top">
				<div class="button">
					<div id="button-top" href=""><img src="../images/button01.png"></div></br>
					<div id="button-bottom" href=""><img src="../images/button02.png"></div>
				</div>
				<div id="overflow">
					<div id="list-tin-tham-dinh">
						@foreach($tin_tham_dinh as $item)
						<div id="tin-tham-dinh">
							<div class="row">
								<div id="img" class="col-md-6 col-sm-6 col-xs-6">
									<div class="full-images">
										<img id="anh-de-mo" src="../images/images/tintuc/{{$item->anh_tieu_de}}">
									</div>
								</div>
								<div id="gioi-thieu" class="col-md-6 col-sm-6 col-xs-12">
									<h2>{{$item->tieu_de}}</h2>
									<p>{{$item->tom_tat}}</p>
									<div class="read" >
										<a href="{{asset('chitiettintuc/'.$item->slug)}}">đọc tiếp</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>

			<div id="main-top-sm">
				<div id="list-tin-tham-dinh">
					@foreach($tin_tham_dinh as $item)
					<div id="tin-tham-dinh">
						<div class="row">
							<div id="img" class="col-md-6 col-sm-6 col-xs-6">
								<img id="anh-de-mo" src="../images/images/tintuc/{{$item->anh_tieu_de}}" width="455px" height="570px">
							</div>
							<div id="gioi-thieu" class="col-md-6 col-sm-6 col-xs-6">
								<h2>{{$item->tieu_de}}</h2>
								<div class="read" >
									<a href="{{asset('chitiettintuc/'.$item->slug)}}">đọc tiếp</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

	<section id="bg-ban-tin">
		<div class="container">
			<div id="ban-tin">
				<h2>{{$tin_value->tieu_de}}</h2>
				<div class="full-images-ban-tin">
				<img src="../images/images/tintuc/{{$tin_value->anh_tieu_de}}">
				<div>
				<p>{{$tin_value->tom_tat}}</p>
				<div class="read">
					<a href="{{asset('chitiettintuc/'.$tin_value->slug)}}">đọc tiếp</a>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div id="tin-tuc">
				<h2>tin tức chung</h2>
				<div class="row">
					<div id="content-left" class="col-md-7 col-sm-12 col-xs-12" >
						<div class="full-images-chung">
							<img src="../images/images/tintuc/{{$tin_tuc_chung_moi->anh_tieu_de}}">
						</div>
						<h5>{{$tin_tuc_chung_moi->tieu_de}}</h5>
						<p>{{$tin_tuc_chung_moi->tom_tat}}</p>
						<div class="read">
							<a href="{{asset('chitiettintuc/'.$tin_tuc_chung_moi->slug)}}">đọc tiếp</a>
						</div>
					</div>

					<div id="content-right" class="col-md-5 col-xs-12 col-sm-12">
						<div class="row">
							@foreach($tin_tuc_chung as $item)
							<div class="tin-tham-dinh">
								<a href="{{asset('chitiettintuc/'.$item->slug)}}">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<img src="../images/images/tintuc/{{$item->anh_tieu_de}}">
									</div>
									<div class="noi-dung col-md-6 col-sm-6 col-xs-6">
										<p>{{$item->tieu_de}}</p>
										<span>{{$item->create_at}}</span>
									</div>
								</a>
							</div>
							@endforeach
						</div>
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
		$('#button-bottom').click(function(){
			if (($('#list-tin-tham-dinh').css("margin-Top"))== '0px') {	
				$('#list-tin-tham-dinh').animate({marginTop:'-570px'});
			}
			else if (($('#list-tin-tham-dinh').css("margin-Top"))== '-570px'){
				$('#list-tin-tham-dinh').animate({marginTop:'-1140px'});
			}
			else if (($('#list-tin-tham-dinh').css("margin-Top"))== '-1140px'){
				$('#list-tin-tham-dinh').animate({marginTop:'0px'});
			}	
			

		});
		$('#button-top').click(function(){
			if (($('#list-tin-tham-dinh').css("margin-Top"))== '-1140px') {	
				$('#list-tin-tham-dinh').animate({marginTop:'-570px'});
			}
			else if (($('#list-tin-tham-dinh').css("margin-Top"))== '-570px'){
				$('#list-tin-tham-dinh').animate({marginTop:'0px'});
			}	
		});

	});

</script>
@stop