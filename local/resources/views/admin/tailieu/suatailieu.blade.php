@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suanhansu.css">
@stop
	<h1 class="page-header">Sửa Tài Liệu</h1>
	<div id="main">
		<form method="post" action="{{asset('quanlytailieu/postedit/'.$tai_lieu->id_tl)}}" enctype="multipart/form-data">
			<div class="row">
				<div id="content-left" class="col-md-6">

					<p>Tên Tài Liệu</p>
					<input type="text" name="ten_tl" value="{{$tai_lieu->ten_tl}}" required="">
					
					<p>Lĩnh Vực</p>

					<select name="id_lv">
						<option value="{{$tai_lieu->id_lv}}">{{$tai_lieu->linhvuc->ten_lv}}</option>
						@foreach($linh_vuc as $item)
						<option value="{{$item->id_lv}}">{{$item->ten_lv}}</option>
						@endforeach
					</select>

					<p>Chú Thích</p>

					<input type="text" name="chu_thich" value="{{$tai_lieu->chu_thich}}">

					<p>File Văn Bản</p>

					<input class="btn btn-secondary" type="file" name="ten_file">
					
				</div>
				<div id="content-right" class="col-md-6">
					<p>Ảnh Mô Tả</p>
					<input class="img" type="file" name="anh_tl" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
					<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="330px" src="../images/images/tintuc/{{$tai_lieu->anh_tl}}">
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