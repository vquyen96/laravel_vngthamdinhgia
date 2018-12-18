@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suadoitac.css">
@stop
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<h1 class="page-header">Chi Tiết Dịch Vụ</h1>
<div id="main">
	<form method="post" action="{{asset('quanlydichvu/postedit/'.$dich_vu->id_dv)}}" enctype="multipart/form-data">
		<h2>Tên Dịch Vụ</h2>
		<input type="text" name="ten_dv" required="" value="{{$dich_vu->ten_dv}}">
	</br>

	<h2>Baner</h2>

	<input class="img" type="file" name="baner" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
	<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="320px" src="../images/{{$dich_vu->baner}}">

	<h2>Logo</h2>

	<input class="img-1" type="file" name="logo" class="cssInput " onchange="changeImg1(this)" style="display: none;!important;">
	<img style="cursor: pointer;" class="avatar-1" class="cssInput thumbnail tableImgAvatar" width="66px" height="65px" src="../images/{{$dich_vu->logo}}">

	<h2>Giới thiệu</h2>

	<textarea name="gioi_thieu">{{$dich_vu->gioi_thieu}}</textarea>


	<h2>Quy Trình Thẩm Định</h2>

	<div id="quy-trinh">
		<textarea  rows="15" cols="30" name="quy_trinh" class="ckeditor">{{$dich_vu->quy_trinh}}</textarea>

		<script>
			CKEDITOR.replace( 'quy_trinh', {
				filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			} );
		</script>
	</div>
	<input class="btn btn-primary" type="submit" name="" value="Cập Nhật">
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

    function changeImg1(input){
         //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
             //Sự kiện file đã được load vào website
            reader.onload = function(e){
                 //Thay đổi đường dẫn ảnh
                $('.avatar-1').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('.avatar-1').click(function(){
            $('.img-1').click();
        });         
    });
</script>
@stop