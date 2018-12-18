@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/chitiettintuc.css">
@stop
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<h1 class="page-header">Chi Tiết Tin Tức</h1>
<div id="main">
	<form method="post" action="{{asset('quanlytintuc/postedit/'.$chi_tiet_tin_Tuc->id_tt)}}" enctype="multipart/form-data">
		<div class="row">
			<div id="content-left" class="col-md-6">

				<p>Tiêu Đề</p>
				<input type="text" name="tieu_de" value="{{$chi_tiet_tin_Tuc->tieu_de}}" required="">

				<p>Level</p>

				<select name="id_lt" required="">
					<option value="{{$chi_tiet_tin_Tuc->id_lt}}">{{$chi_tiet_tin_Tuc->loaitin->ten_lt}}</option>
					@foreach($loai_tin as $item)
					<option value="{{$item->id_lt}}">{{$item->ten_lt}}</option>			
					@endforeach					
				</select>

				<p>Tóm Tắt</p>
				<textarea name="tom_tat">{{$chi_tiet_tin_Tuc->tom_tat}}</textarea>

				

			</div>
			<div id="content-right" class="col-md-6">
				<p>Ảnh Tiêu Đề</p>
				<input class="img" type="file" name="anh_tieu_de" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
				<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="330px" src="../images/images/tintuc/{{$chi_tiet_tin_Tuc->anh_tieu_de}}">
			</div>
		</div>
		<p>Nội Dung Chi Tiết</p>
				<textarea name="noi_dung" required="">{{$chi_tiet_tin_Tuc->noi_dung}}</textarea>
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
	</br>
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