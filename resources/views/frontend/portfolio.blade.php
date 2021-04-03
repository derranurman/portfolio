@extends('blog')
@section('title')
My Portfolio
@endsection
@section('content')
	<!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Portfolio</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/portfolio">Portfolio</a>
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
						<h2>quality work <br>
							Recently done project </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio/333.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('frontend/img/portfolio/333.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Office</a></h4>
								<p>Office, exel, word ,portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio/222.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('frontend/img/portfolio/222.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Website</a></h4>
								<p>Website, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio/images.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('frontend/img/portfolio/images.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Desain</a></h4>
								<p>Desain, portfolio</p>
							</div>
						</div>
					</div>	
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio/animator1.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('frontend/img/portfolio/animator1.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Animasi</a></h4>
								<p>Animation, portfolio</p>
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
     