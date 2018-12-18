@extends('admin.quantri')
@section('main')
<h1 class="page-header">Sửa Thành Viên</h1>
<div id="main">
	{{-- @include('errors.note') --}}
	<form  onsubmit="return checkPw(this)" method="post" action="{{asset('quanlythanhvien/postedit/'.$thanh_vien_cu->id)}}">
		<p>Tên Đăng Nhập</p>
		<input type="email" name="email" required="" value="{{$thanh_vien_cu->email}}" class="form-control">
		<p>Mật khẩu</p>
		<span style="font-style: italic;">Mật khẩu có độ dài từ 8 kí tự trở lên!</span><br/>
		<input type="password" name="password" value="{{$thanh_vien_cu->password}}" class="form-control"></br>
		<p>Xác nhận lại mật khẩu</p>
		<input type="password" name="checkpassword" value="{{$thanh_vien_cu->password}}" class="form-control"></br>
		<p>Level</p>
		<select name="level" class="form-control">
			<option>{{$thanh_vien_cu->level}}</option>
			<option>1</option>
			<option>2</option>
		</select>
	</br>
	<input class="btn btn-primary" type="submit" name="" value="Chỉnh Sửa">
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