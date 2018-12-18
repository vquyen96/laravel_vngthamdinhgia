@foreach( $errors->all() as $err)
<div class="alert alert-danger">{{ $err }} </div>

@endforeach 

@if( Session::has('error') )

<div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif