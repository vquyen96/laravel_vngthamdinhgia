@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suanhansu.css">
@stop
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<h1 class="page-header">Sửa Nhân Sự</h1>
<div id="main">
	<form method="post" action="{{asset('quanlynhansu/postedit/'.$nhan_su_cu->id_ns)}}" enctype="multipart/form-data">
		<div class="row">
			<div id="content-left" class="col-md-6">

				<p>Họ và tên</p>
				<input type="text" name="ho_ten" required="" value="{{$nhan_su_cu->ho_ten}}">

				<p>Chức Vụ</p>

				<input type="text" name="chuc_vu" required="" value="{{$nhan_su_cu->chuc_vu}}">

				<p>Thông Tin</p>

				<div id="ckeditor">
					<textarea  rows="30" cols="30" name="thong_tin" class="ckeditor">{{$nhan_su_cu->thong_tin}}</textarea>

					<script>
						CKEDITOR.replace( 'thong_tin', {
							filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
							filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
							filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?type=Flash',
							filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
							filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
						} );
					</script>
				</div>

			</div>
			<div id="content-right" class="col-md-6">
				<p>Ảnh Đại Diện</p>
				<input class="img" type="file" name="anh_ns" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
				<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="330px"" src="../images/{{$nhan_su_cu->anh_ns}}">

				<p>Level</p>

				<select name="level">
					<option>{{$nhan_su_cu->level}}</option>
					<option>1</option>
					<option>2</option>
				</select>
			</div>
		</div>
	</br>
	<input class="btn btn-primary" type="submit" name="" value="Chỉnh sửa">

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