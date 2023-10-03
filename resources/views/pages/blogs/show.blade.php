@extends('layouts.master')

@section('content')
     <!-- Banner Section -->
     <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/website') }}/images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Blog Single</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="{{route('index')}}">Home</a></li>
                        <li class="current">Blog Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Sidebar Page Container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-xl-8 col-lg-7 col-md-12 col-sm-12">
                    <div class="blog-classic">

                        <!-- News Detail -->
                        <div class="news-detail">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><img src="{{ asset('storage') }}/images/blogs/{{$blog->image}}" alt="" title=""></div>
                                </div>
                                <div class="lower-content">
                                    <div class="info">
                                        <span class="i-block">By : {{$blog->author_name}}</span> &ensp; | &ensp; <span
                                            class="i-block">{{ date('d M Y', strtotime($blog->created_at))}}</span>
                                    </div>
                                    <h4>{{$blog->title}}</h4>
                                    {!! $blog->description !!}
                                    {{-- <div class="gallery-box">
                                        <div class="row clearfix">
                                            <!-- Column -->
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <div class="image">
                                                    <img src="{{ asset('assets/website') }}/images/resource/news-5.jpg" alt="" />
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <div class="image">
                                                    <img src="{{ asset('assets/website') }}/images/resource/news-6.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <blockquote>
                                        <div class="quote-icon"><img src="{{ asset('assets/website') }}/images/icons/quote-icon.svg" alt="" />
                                        </div>
                                        Producing Ideas Is The Main Way To Grow The Economy Life Insurance for
                                        Stay-at-Home Parents
                                        <span>JHON SMITH</span>
                                    </blockquote> --}}
                                    {{-- <p>An executive of VIP bodyguard can also check for potential vulnerability in
                                        the home and/or transportation, even transportation routes, adding extra
                                        reinforcement or making changes where needed. They can give helpful advice
                                        on how to stay safe and what to do in the event of a dangerous situation.
                                        Finally, a bodyguard presence can act as a deterrent against potential
                                        dangers. When a bodyguard is seen, it may put people off from trying
                                        anything against highly trained personal security. Of course, some people
                                        may prefer their bodyguards in plain clothing.</p> --}}
                                    <!-- Post Share Options-->
                                    {{-- <div class="post-share-options">
                                        <div class="tags"><span class="tag">Tags:</span><a href="#">Fashion</a><a
                                                href="#">Beauty</a></div>
                                    </div> --}}

                                    <!-- Author Box -->
                                    {{-- <div class="blog-author-box">
                                        <div class="author-inner">
                                            <div class="thumb"><img src="{{ asset('assets/website') }}/images/resource/author-1.jpg" alt=""></div>
                                            <div class="name">Amena Green</div>
                                            <div class="text">A small river named Duden flows by their place and
                                                supplies it with the necessary regelialia. It is a paradisematic
                                                country.</div>
                                            <ul class="social-icons clearfix">
                                                <li><a href="#"><span class="fab fa-facebook-f fa-fw"></span></a>
                                                </li>
                                                <li><a href="#"><span class="fab fa-twitter fa-fw"></span></a></li>
                                                <li><a href="#"><span class="fab fa-youtube fa-fw"></span></a></li>
                                                <li><a href="#"><span class="fab fa-instagram fa-fw"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <!-- End Author Box -->

                                    <!-- More Posts -->
                                    {{-- <div class="more-posts clearfix">
                                        <div class="pull-left">
                                            <a href="#">Previous Post</a>
                                        </div>
                                        <span class="grid-icon fas fa-grid-2 fa-fw"></span>
                                        <div class="pull-right">
                                            <a href="#">Next Post</a>
                                        </div>
                                    </div> --}}
                                    <!-- End More Posts -->

                                    <!-- Carousel Box -->
                                    {{-- <div class="carousel-box">
                                        <h5>Top Related Post</h5>
                                        <div class="related-blog-carousel owl-carousel owl-theme">

                                            <!-- Slide -->
                                            <div class="slide">
                                                <div class="row clearfix">
                                                    <!-- Image Column -->
                                                    <div class="image-column col-xl-6 col-lg-12 col-md-6 col-sm-12">
                                                        <div class="image">
                                                            <img src="{{ asset('assets/website') }}/images/resource/news-7.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <!-- Content Column -->
                                                    <div
                                                        class="content-column col-xl-6 col-lg-12 col-md-6 col-sm-12">
                                                        <div class="inner-column">
                                                            <div class="info">
                                                                <span class="i-block">By : Sword Joy</span> &ensp; |
                                                                &ensp; <span class="i-block">20 March 2022</span>
                                                            </div>
                                                            <h4><a href="blog-single.html">THE BEST BOXERS IN THEIR
                                                                    WEIGH Target CATEGOR</a></h4>
                                                            <div class="text">Fight School has specialized in
                                                                martial arts since 1986 and has one of the most
                                                                innovative</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Slide -->
                                            <div class="slide">
                                                <div class="row clearfix">
                                                    <!-- Image Column -->
                                                    <div class="image-column col-xl-6 col-lg-12 col-md-6 col-sm-12">
                                                        <div class="image">
                                                            <img src="{{ asset('assets/website') }}/images/resource/news-7.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <!-- Content Column -->
                                                    <div
                                                        class="content-column col-xl-6 col-lg-12 col-md-6 col-sm-12">
                                                        <div class="inner-column">
                                                            <div class="info">
                                                                <span class="i-block">By : Sword Joy</span> &ensp; |
                                                                &ensp; <span class="i-block">20 March 2022</span>
                                                            </div>
                                                            <h4><a href="blog-single.html">THE BEST BOXERS IN THEIR
                                                                    WEIGH Target CATEGOR</a></h4>
                                                            <div class="text">Fight School has specialized in
                                                                martial arts since 1986 and has one of the most
                                                                innovative</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Slide -->
                                            <div class="slide">
                                                <div class="row clearfix">
                                                    <!-- Image Column -->
                                                    <div class="image-column col-xl-6 col-lg-12 col-md-6 col-sm-12">
                                                        <div class="image">
                                                            <img src="{{ asset('assets/website') }}/images/resource/news-7.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <!-- Content Column -->
                                                    <div
                                                        class="content-column col-xl-6 col-lg-12 col-md-6 col-sm-12">
                                                        <div class="inner-column">
                                                            <div class="info">
                                                                <span class="i-block">By : Sword Joy</span> &ensp; |
                                                                &ensp; <span class="i-block">20 March 2022</span>
                                                            </div>
                                                            <h4><a href="blog-single.html">THE BEST BOXERS IN THEIR
                                                                    WEIGH Target CATEGOR</a></h4>
                                                            <div class="text">Fight School has specialized in
                                                                martial arts since 1986 and has one of the most
                                                                innovative</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> --}}
                                    <!-- End Carousel Box -->

                                    <!-- Comments Area -->
                                    {{-- <div class="comments-area">
                                        <div class="group-title">
                                            <h5>3 Replies To “How Water Useful For Our Body & Life”</h5>
                                        </div>

                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb"><img src="{{ asset('assets/website') }}/images/resource/author-2.jpg"
                                                        alt=""></div>
                                                <div class="comment-info clearfix"><strong>James Hayden</strong>
                                                    <div class="comment-time">Jan 30, 2022</div>
                                                </div>
                                                <div class="text">Droin ac quam et lectus vestibulum blandit. Nunc
                                                    maximus nibh at placerat tincidunt. Nam sem lacus, ornare non
                                                    ante sed, ultricies</div>
                                                <a class="theme-btn reply-btn" href="#"> Reply</a>
                                            </div>
                                        </div>

                                        <div class="comment-box reply-comment">
                                            <div class="comment">
                                                <div class="author-thumb"><img src="{{ asset('assets/website') }}/images/resource/author-2.jpg"
                                                        alt=""></div>
                                                <div class="comment-info clearfix"><strong>James Hayden</strong>
                                                    <div class="comment-time">Jan 30, 2022</div>
                                                </div>
                                                <div class="text">Droin ac quam et lectus vestibulum blandit. Nunc
                                                    maximus nibh at placerat tincidunt. Nam sem lacus, ornare non
                                                    ante sed, ultricies</div>
                                                <a class="theme-btn reply-btn" href="#"> Reply</a>
                                            </div>
                                        </div>

                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb"><img src="{{ asset('assets/website') }}/images/resource/author-2.jpg"
                                                        alt=""></div>
                                                <div class="comment-info clearfix"><strong>James Hayden</strong>
                                                    <div class="comment-time">Jan 30, 2022</div>
                                                </div>
                                                <div class="text">Droin ac quam et lectus vestibulum blandit. Nunc
                                                    maximus nibh at placerat tincidunt. Nam sem lacus, ornare non
                                                    ante sed, ultricies</div>
                                                <a class="theme-btn reply-btn" href="#"> Reply</a>
                                            </div>
                                        </div>

                                    </div> --}}

                                    <!-- Comment Form -->
                                    {{-- <div class="comment-form">
                                        <div class="group-title">
                                            <h4>Leave A comments</h4>
                                        </div>

                                        <!--Comment Form-->
                                        <form method="post" action="blog.html">
                                            <div class="row clearfix">

                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <input type="text" name="username" placeholder="Your Name*"
                                                        required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <input type="email" name="email" placeholder="Your Email*"
                                                        required>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <textarea class="" name="message"
                                                        placeholder="Write Message"></textarea>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <button class="theme-btn btn-style-two"><span class="txt">Submit
                                                            Now <i class="fa fa-angle-right"></i></span></button>
                                                </div>

                                            </div>
                                        </form>

                                    </div> --}}
                                    <!--End Comment Form -->


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="sidebar-column col-xl-4 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Search Widget -->
                        <div class="sidebar-widget search-box">
                            <div class="sidebar-title">
                                <h5>Search</h5>
                            </div>

                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Here ..."
                                        required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>

                        </div>

                        <!-- Follow Widget -->
                        {{-- <div class="sidebar-widget follow-widget">
                            <div class="sidebar-title">
                                <h5>Follow us</h5>
                            </div>
                            <ul class="social-list">
                                <li class="facebook"><span class="icon fab fa-facebook-f fa-fw"></span>
                                    <strong>1250M +</strong> Followers</li>
                                <li class="twitter"><span class="icon fab fa-twitter fa-fw"></span> <strong>1250M
                                        +</strong> Followers</li>
                                <li class="youtube"><span class="icon fab fa-youtube fa-fw"></span> <strong>1250M
                                        +</strong> Followers</li>
                                <li class="linkedin"><span class="icon fab fa-linkedin-in fa-fw"></span>
                                    <strong>1250M +</strong> Followers</li>
                            </ul>
                        </div> --}}

                        <!-- Category Widget -->
                        {{-- <div class="sidebar-widget category-widget">
                            <div class="sidebar-title">
                                <h5>Category</h5>
                            </div>
                            <ul class="sidebar-category-list">
                                <li style="background-image: url({{ asset('assets/website') }}/images/background/category-1.jpg)">
                                    <span class="txt">Therapy</span> <span class="number">05</span>
                                </li>
                                <li style="background-image: url({{ asset('assets/website') }}/images/background/category-2.jpg)">
                                    <span class="txt">Beauty Items</span> <span class="number">09</span>
                                </li>
                                <li style="background-image: url({{ asset('assets/website') }}/images/background/category-3.jpg)">
                                    <span class="txt">Body Sliming</span> <span class="number">07</span>
                                </li>
                                <li style="background-image: url({{ asset('assets/website') }}/images/background/category-4.jpg)">
                                    <span class="txt">Fashion Fitness</span> <span class="number">10</span>
                                </li>
                            </ul>
                        </div> --}}

                        <!-- Search Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h5>Recent Post</h5>
                            </div>

                            @forelse ($recentBlogs as $blog)
                            <article class="post">
                                <figure class="post-thumb"><img src="{{ asset('storage') }}/images/blogs/{{$blog->thumbnail}}" alt=""><a
                                        href="{{route('blogs.show', $blog)}}" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{route('blogs.show', $blog)}}">{{$blog->title}}</a></div>
                                <div class="post-info">{{ date('d M Y', strtotime($blog->created_at))}}</div>
                            </article>
                            @empty
                            <p style="text-align:center;">No Blogs to Show.</p>
                            @endforelse

                        </div>

                        <!-- Buy Treker Widget -->
                        {{-- <div class="sidebar-widget buy-treker-widget">
                            <div class="widget-content" style="background-image: url({{ asset('assets/website') }}/images/background/buy.jpg)">
                                <div class="logo">
                                    <a href="{{route('index')}}"><img src="{{ asset('assets/website') }}/images/icons/buy-treker.svg" alt="" /></a>
                                </div>
                                <div class="text">Awesome Trekking Travel <br> Theme !</div>
                                <a href="#" class="theme-btn buy-now">Buy Now</a>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
