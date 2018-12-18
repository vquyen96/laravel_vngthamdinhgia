@extends('guest.master')
@section('title')
<title>Nhân sự</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/nhansu.css">
@stop
@section('main')
<div id="main">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="heading">
						<h2>nhân sự chủ chốt</h2>
						<div class="description">
							Đội ngũ cán bộ, chuyên viên Thẩm định giá VNG Việt Nam nhiệt tình, có kinh nghiệm và trình độ chuyên môn nghiệp vụ cao. Hy vọng sự hợp tác giữa Quý công ty và đơn vị chúng tôi bền vững, đem lại lợi ích thiết thực cho cả hai bên.
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="images"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="list-staff">
		<div class="container">
			<div class="row">
				@foreach($nhan_su as $item)
				<div class="col-md-3 col-sm-4 col-xs-12">
					<a href="{{asset('nhan-su-detail/'.$item->slug)}}" class="staff">
						<div class="img" style="background: url('../images/{{$item->anh_ns}}') no-repeat center/cover;"></div>
						<p class="name-staff">{{$item->ho_ten}}</p>
						<p class="position">{{$item->chuc_vu}}</p>
						<div class="cv">Xem chi tiết</div>
					</a>
				</div>
				@endforeach
				

			</div>
		</div>
	</section>
</div>
@stop
