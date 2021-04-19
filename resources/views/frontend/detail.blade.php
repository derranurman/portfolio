@extends('blog')
@section('title')
 Blog Details
@endsection
@section('content')
	<!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Blog Details</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/blog">Blog</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                @foreach ($data as $detail_blog)
                                    
                                <img class="img-fluid" src="{{ asset($detail_blog->gambar)}}" alt="" style="width:100%">
                                @endforeach
                            </div>									
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    
                                </div>
                                <ul class="blog_meta list">
                                    @foreach ($data as $detail)
                                    <li><a href="#">{{ $detail->users->name}}<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">{{ $detail->created_at->diffForHumans()}}<i class="lnr lnr-calendar-full"></i></a></li>
                                   @endforeach
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            @foreach ($data as $postingan)
                            <h2>{{$postingan->judul}}</h2>
                            <p class="excert">
                               {!!$postingan->content!!}
                            </p>
                            
                            @endforeach
                        </div>
                  
                        <div class="col-lg-12">
                            <div class="quotes">
                                
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                                </div>	
                                <div class="col-lg-12 mt-25">
                               
                                
                                </div>									
                            </div>
                        </div>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="" src=""></a>
                                </div>
                               
                                <div class="detials">
                                    <p>Prev Post</p>
                                   
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                
                                </div>
                              			
                            </div>									
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>Comments</h4>
                        <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://derranurman.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
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
                            <img class="author_img rounded-circle" src="{{asset('frontend/img/blog/12.jpg')}}" alt="">
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
                                    <a href="{{route('frontend.blog')}}"><h3>Networking Learn</h3></a>
                                  
                                </div>
                            </div>
                            <div class="media post_item">
                            
                                <div class="media-body">
                                    <a href="{{route('frontend.blog')}}"><h3>Programing Learn</h3></a>
                                   
                                </div>
                            </div>
                            <div class="media post_item">
                                
                                <div class="media-body">
                                    <a href="{{route('frontend.blog')}}"><h3>Technology</h3></a>
                                   
                                </div>
                            </div>
                          
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="{{route('frontend.blog')}}" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                       
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('frontend.blog')}}" class="d-flex justify-content-between">
                                        <p>Basic Network</p>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('frontend.blog')}}" class="d-flex justify-content-between">
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
                                <li><a href="{{route('frontend.blog')}}">Technology</a></li>
                                <li><a href="{{route('frontend.blog')}}">Network</a></li>
                                <li><a href="{{route('frontend.blog')}}">Programing</a></li>
                     
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
     @endsection