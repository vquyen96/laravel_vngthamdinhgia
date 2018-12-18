@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suadoitac.css">
@stop
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<h1 class="page-header">Chi Tiết Dự án</h1>
<div id="main">
	<form method="post" action="{{asset('quanlyduantieubieu/bds/postedit/'.$chi_tiet_du_an->id_da)}}" enctype="multipart/form-data">
		<h3>Tên Dự Án Tiêu Biểu</h3>
		<input type="text" name="ten_da" required="" value="{{$chi_tiet_du_an->ten_da}}">
	</br>

	<h3>Baner</h3>

	<input class="img" type="file" name="anh_da" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
	<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="355px" height="360px" src="../images/{{$chi_tiet_du_an->anh_da}}">

	<h3>Nội Dung</h3>

	<div id="ckeditor">
		<textarea  rows="30" cols="30" name="noi_dung" class="ckeditor">{{$chi_tiet_du_an->noi_dung}}</textarea>

		<script>
			CKEDITOR.replace( 'noi_dung', {
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
</script>
@stop