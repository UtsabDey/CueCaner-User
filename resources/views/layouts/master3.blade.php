<!DOCTYPE html> 
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>@yield('title')</title>
		<!-- Favicons -->
		<link type="image/x-icon" href="{{asset('front/img/favicon.png')}}" rel="icon">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('front/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/plugins/fontawesome/css/all.min.css')}}">
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{asset('front/css/bootstrap-datetimepicker.min.css')}}">
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('front/plugins/select2/css/select2.min.css')}}">
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="{{asset('front/plugins/fancybox/jquery.fancybox.min.css')}}">
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('front/css/style.css')}}">
	</head>
	<body>
		<div class="main-wrapper">
			<!-- Header -->
			@include('layouts.header')
			<!-- /Header -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
                        @include('layouts.sidebar2')
                        @yield('content')
                    </div>
				</div>
			</div>   
			<!-- Footer -->
			<br>
            @include('layouts.footer')
			<!-- /Footer -->
	   </div>
		<!-- jQuery -->
		<script src="{{asset('front/js/jquery.min.js')}}"></script>
		<!-- Bootstrap Core JS -->
		<script src="{{asset('front/js/popper.min.js')}}"></script>
		<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
		<!-- Slick JS -->
		<script src="{{asset('front/js/slick.js')}}"></script>
		<!-- Custom JS -->
		<script src="{{asset('front/js/script.js')}}"></script>
		<script src="{{asset('front/js/bs-custom-file-input.min.js')}}"></script>
		<script>
           function showPass1() {
			var x = document.getElementById("myInput1");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
			function showPass2() {
				var x = document.getElementById("myInput2");
				if (x.type === "password") x.type = "text";
				else x.type = "password";
			}
			function showPass3() {
				var x = document.getElementById("myInput3");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
	
			$(document).ready(function () {
						bsCustomFileInput.init()
					})
					$(document).ready(function(){
					setTimeout(function(){
					$('.foo').fadeOut()
				}, 3000);
			});
		</script>
	</body>


</html>