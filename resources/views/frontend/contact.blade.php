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
                            <h6><a href="https://api.whatsapp.com/send?phone=6285156735590">085156735590</a></h6>
                            <p><a href="https://api.whatsapp.com/send?phone=6285156735590">WhatsApp Number</a></p>
                            
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">Kuroderzz@gmail.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-9">
                    <div class="alert alert-success d-none my-alert" role="alert">
                        <strong>Terima Kasih!!!</strong>  Pesan Anda Sudah Kami terima.
                      </div>
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate" name="contact-blog-me">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="nama" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subjek" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="pesan" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="primary_btn btn-kirim"><span>Send Message</span></button>
                       
                            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                              </button>
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