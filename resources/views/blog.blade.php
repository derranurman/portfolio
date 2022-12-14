<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('frontend/img/KZ.png')}}" type="image/png">
	<title>@yield('title')</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/vendors/nice-select/css/nice-select.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
	@yield('css-after')
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="2b3b5328-90bc-471b-95b9-3a431ece74b4";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{ url('') }}"><img src="{{ asset('frontend/img/logo.png')}}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="{{ url('') }}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('frontend.about') }}">About</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('frontend.portfolio') }}">Portfolio</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('frontend.certification') }}">My Certifications</a></li>

							<li class="nav-item"><a class="nav-link" href="{{ route('frontend.blog') }}">Blog</a></li>
							
							<li class="nav-item"><a class="nav-link" href="{{ route('frontend.contact') }}">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start Home Banner Area =================-->
@yield('content')
	<!--================ End Newsletter Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="{{ url('') }}">
								<img src="{{ asset('frontend/img/logo.png')}}" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="https://m.facebook.com/derra.nurman"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script>
		const scriptURL = 'https://script.google.com/macros/s/AKfycbwYfaaMM7v7KakGNA9tEOi1aq072RaTb7D6onNw7jQrcOLFIpJZ9Y1-ZRhxsN9rr0zv/exec'
		const form = document.forms['contact-blog-me']
		const btnKirim = document.querySelector('.btn-kirim');
		const btnLoading = document.querySelector('.btn-loading');
		const myAlert = document.querySelector('.my-alert');

		form.addEventListener('submit', e => {
		  e.preventDefault()
		
			btnLoading.classList.toggle('d-none');
			btnKirim.classList.toggle('d-none');

		  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
			.then(response => {
				btnLoading.classList.toggle('d-none');
			btnKirim.classList.toggle('d-none');
			myAlert.classList.toggle('d-none');
			form.reset();
				console.log('Success!', response)
			})
			.catch(error => console.error('Error!', error.message))
		})
	  </script>
	<script src="{{ asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('frontend/js/popper.js')}}"></script>
	<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('frontend/js/stellar.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{ asset('frontend/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('frontend/js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('frontend/js/gmaps.min.js')}}"></script>
	<script src="{{ asset('frontend/js/theme.js')}}"></script>
	@yield('js-after')
	</body>
	
	</html>