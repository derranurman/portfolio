@extends('blog')
@section('title')
My CERTIFICATIONS
@endsection
@section('content')
	<!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>My Certifications</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/portfolio">My certification</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area section_gap_top" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>My Certifications <br>
							having successfully completed the training  </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">Networking</li>
					<li data-filter=".latest">Programming</li>
					
				</ul>
			</div>
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio/html1.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('frontend/img/portfolio/html1.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Html and Css</a></h4>
								<p>Html And Css, certification</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio/mtcna1.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('frontend/img/portfolio/mtcna1.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">MTCNA</a></h4>
								<p>Router, Certification</p>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio/laravel1.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('frontend/img/portfolio/laravel1.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Laravel Liveware</a></h4>
								<p>Laravel Liveware, Certification</p>
							</div>
						</div>
					</div>	
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio/git1.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('frontend/img/portfolio/git1.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Git</a></h4>
								<p>Git, Certification</p>
							</div>
						</div>
					</div>	
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio/php1.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('frontend/img/portfolio/php1.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Php</a></h4>
								<p>php, certification</p>
							</div>
						</div>
					</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!--================ End Newsletter Area =================-->
        @endsection
     