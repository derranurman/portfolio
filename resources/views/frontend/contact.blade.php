@extends('blog')
@section('title')
Contact Us
@endsection
@section('content')
	<!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contact Us</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    
    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Tasikmalaya, Indihiang</h6>
                            <p>Derra Kusdianurman</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="https://wa.me/qr/YSIAYD5EY6WEH1">081901947018</a></h6>
                            <p>WhatsApp Number</p>
                            
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">Kuroderzz@gmail.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <a class="primary_btn" href="#"><span>Send Message</span></a>
                       
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="mapBox" class="mapBox" 
                data-lat="-7.2941722" 
                data-lon="108.1992015" 
                data-zoom="13" 
                data-info="Terminal Indihiang, Indihiang, Tasikmalaya."
                data-mlat="-7.2941722"
                data-mlon="108.1992015">
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
        
        <!--================Footer Area =================-->
	@endsection