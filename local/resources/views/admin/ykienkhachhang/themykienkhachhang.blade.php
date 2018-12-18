@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suaykienkhachhang.css">
@stop
	<h1 class="page-header">Thêm Ý Kiến Khách Hàng</h1>
	<div id="main">
		<form method="post" action="{{asset('ykienkhachhang/postadd')}}" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-12">
					<p>Tên khách hàng</p>
					<input type="text" name="ho_ten" required="">
					<p>chức vụ</p>
					<input type="text" name="chuc_vu" required=""></br>
					<p>nội dung phản ánh</p>
					<textarea name="noi_dung" required=""></textarea>
					</br>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<p>Ảnh Đại Diện</p>
					<input class="img" type="file" name="anh_dd" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
					<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="330px" src="../images/29541772703_6ed8b50c47_b.jpg">
				</div>
			</div>
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