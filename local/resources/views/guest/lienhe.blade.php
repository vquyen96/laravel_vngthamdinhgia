@extends('guest.master')
@section('css')
<link rel="stylesheet" type="text/css" href="css/lienhe.css">
@stop
@section('main')
<div id="main">
	<section>
		<div class="container">
			<div id="main-top">
				<h2>liên hệ</h2>
				<p>Là một đơn vị uy tín, có nhiều kinh nghiệm trên thị trường Việt Nam – Công ty TNHH Thẩm định giá VNG Việt Nam được thành lập với tiêu chí mang đến niềm tin và giá trị đích thực cho Khách hàng trong lĩnh vực hoạt động thẩm định giá.Là một đơn vị uy tín, có nhiều kinh nghiệm trên thị trường Việt Nam – Công ty TNHH Thẩm định giá VNG Việt Nam được thành lập với tiêu chí mang đến niềm tin và giá trị đích thực cho Khách hàng trong lĩnh vực hoạt động thẩm định giá.</p>
				
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div id="menu-content">
				<ul>
					<li><a href="{{asset('lienhe')}}">Hà Nội</a></li>
					<li><a href="{{asset('lienhe')}}">Đà Nẵng</a></li>
					<li><a href="{{asset('lienhe')}}">Tp. Hồ Chí Minh</a></li>					
				</ul>
			</div>
			<div id="map" ></div>
		</div>


<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 21.005368, lng: 105.8025841};
  // The map, centered at Uluru
  var map = new google.maps.Map(
  	document.getElementById('map'), {zoom: 17, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
	-->
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOc88r0unTZkaOlPWE9oYQ6l6_WpZvUAY&callback=initMap">
</script>	
</section>
</div>
@stop