@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suanhansu.css">
@stop
	<h1 class="page-header">Thêm Tài Liệu</h1>
	<div id="main">
		<form method="post" action="{{asset('quanlytailieu/postadd')}}" enctype="multipart/form-data">
			<div class="row">
				<div id="content-left" class="col-md-6">

					<p>Tên Tài Liệu</p>
					<input type="text" name="ten_tl" required="">
					
					<p>Lĩnh Vực</p>

					<select name="id_lv">
						@foreach($linh_vuc as $item)
						<option value="{{$item->id_lv}}">{{$item->ten_lv}}</option>
						@endforeach
					</select>

					<p>Chú Thích</p>

					<input type="text" name="chu_thich">

					<p>File Tài Liệu</p>

					<input class="btn btn-secondary" type="file" name="ten_file" required="">
					
				</div>
				<div id="content-right" class="col-md-6">
					<p>Ảnh Mô Tả</p>
					<input class="img" type="file" name="anh_tl" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
					<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="330px" src="../images/29541772703_6ed8b50c47_b.jpg">
				</div>
			</div>
			</br>
			<input class="btn btn-primary" type="submit" name="" value="Thêm">

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