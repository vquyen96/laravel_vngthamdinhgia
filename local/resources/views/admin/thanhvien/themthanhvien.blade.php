@extends('admin.quantri')
@section('main')
@section('css')
<link rel="stylesheet" type="text/css" href="css/suadoitac.css">
@stop
<h1 class="page-header">Thêm Thành Viên</h1>
<div id="main">
	@include('errors.note')
	
	<form  onsubmit="return checkPw(this)" method="post" action="{{asset('quanlythanhvien/postadd')}}">
		<p>Tên Đăng Nhập</p>
		<input type="email" name="email" required="">
		<p>Mật khẩu</p>
		<span style="font-style: italic;">Mật khẩu có độ dài từ 8 kí tự trở lên!</span><br/>
		<input type="password" name="password"></br>
		<p>Xác nhận lại mật khẩu</p>
		<input type="password" name="checkpassword"></br>
		<p>Level</p>
		<select name="level">
			<option>1</option>
			<option>2</option>
		</select>
	</br>
	<input class="btn btn-primary" type="submit" name="" value="Thêm">
	{{csrf_field()}}
</form>
</div>

@section('script')
<SCRIPT LANGUAGE="JavaScript">


<!-- Begin
function checkPw(form) {
	pw1 = form.password.value;
	pw2 = form.checkpassword.value;

	if (pw1 != pw2) {
		alert ("Mật khẩu xác nhận không chính xác")
		return false;
	}
	else return true;
}
// End -->
</script>
@stop

@stop