@extends('blog')
@section('title')
My Blog
@endsection
@section('content')
	<!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Blog</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/blog">My Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
        
    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area section_gap_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ asset('frontend/img/blog/cat-post/88.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#"><h5>NETWORKING</h5></a>
                                <div class="border_line"></div>
                                <p>Enjoy Learn Implementation Network</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ asset('frontend/img/blog/cat-post/gg.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#"><h5>DESAIN</h5></a>
                                <div class="border_line"></div>
                                <p>Let Learn Grafik Desain</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ asset('frontend/img/blog/cat-post/imagess.png')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#"><h5>PROGRAMER</h5></a>
                                <div class="border_line"></div>
                                <p>Enjoy Learn the Programing Language</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->
    
    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach ($data as $post_terbaru)
                        <article class="row blog_item">
                            <div class="col-md-3">
        
                              
                          
                          <div class="blog_info text-right">
                          
                                <ul class="blog_meta list">
                                <li><a href="">{{$post_terbaru->users->name}}<i class="lnr lnr-user"></i></a></li>
                                <li><a href="#">{{$post_terbaru->created_at->diffForHumans()}}<i class="lnr lnr-calendar-full"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                            <img src="{{ $post_terbaru->gambar}}" alt="" style="height: 200px">
                                <div class="blog_details">
                                <a href="{{ route('frontend.detail',$post_terbaru->slug)}}"><h2>{{ $post_terbaru->judul}}</h2></a>
                                
                                    <a href="{{ route('frontend.detail',$post_terbaru->slug)}}" class="primary_btn"><span>View More</span></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="{{asset('frontend/img/blog/99.jpg')}}" alt="">
                            <h4>Derra Kusdianurman</h4>
                            <p>Networking Enginer</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>Melalui Blog ini, Saya akan Sharing Pengalaman di bidang Programing, Networking, Desain, Dll.</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                        
                                <div class="media-body">
                                    <a href="single-blog.html"><h3>Networking Learn</h3></a>
                                  
                                </div>
                            </div>
                            <div class="media post_item">
                            
                                <div class="media-body">
                                    <a href="single-blog.html"><h3>Programing Learn</h3></a>
                                   
                                </div>
                            </div>
                            <div class="media post_item">
                                
                                <div class="media-body">
                                    <a href="single-blog.html"><h3>Technology</h3></a>
                                   
                                </div>
                            </div>
                          
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                         
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                       
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Basic Network</p>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Programing List</p>
                                        
                                    </a>
                                </li>
                             
                             
                              
                               													
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                            Here, I focus on a range of items and features that we use in life without
                            giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>	
                            <p class="text-bottom">You can unsubscribe at any time</p>	
                            <div class="br"></div>							
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    @endsection