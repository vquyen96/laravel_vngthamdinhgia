@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suaykienkhachhang.css">
<link rel="stylesheet" type="text/css" href="css/suanhansu.css">
@stop
<h1 class="page-header">Sửa Banner</h1>
<div id="main">
	<form method="post" action="{{asset('quanlybanner/postedit/'.$banner->id)}}" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-6 col-xs-12 col-sm-12">
				<p>Tiêu đề</p>
				<input type="text" name="tieu_de" required="" value="{{$banner->tieu_de}}">
				<p>Mô tả</p>
				<textarea name="mo_ta" required="">{{$banner->mo_ta}}</textarea>
				<p>Trang hiển thị</p>
				<select name="loai_banner">
					<option @if($banner->loai_banner=='Trang chủ') selected="" @endif>Trang chủ</option>
					<option @if($banner->loai_banner=='Giới thiệu') selected="" @endif>Giới thiệu</option>
					<option @if($banner->loai_banner=='Dịch vụ') selected="" @endif>Dịch vụ</option>
				</select>
			</br>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">

			<p>Banner</p>
			<input class="img" type="file" name="anh" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
			<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="450px" height="450px" src="../images/{{$banner->anh}}">
		</div>
	</div>
	<input class="btn btn-primary" style="margin-top: 30px;" type="submit" name="" value="Cập nhật">
	{{csrf_field()}}

</form>
</div>

@stop

@section('script')
<script type="text/javascript">
	function changeImg(input){
         //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
         if(input.files && input.files[0]){
         	var reader = new FileReader();
             //Sự kiện file đã được load vào website
             reader.onload = function(e){
                 //Thay đổi đường dẫn ảnh
                 $('.avatar').attr('src',e.target.result);
             }
             reader.readAsDataURL(input.files[0]);
         }
     }
     $(document).ready(function() {
     	$('.avatar').click(function(){
     		$('.img').click();
     	});         
     });
 </script>
 @stop