@extends('layouts.master')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/website') }}/images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Blog Classic</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="{{route('index')}}">Home</a></li>
                        <li class="current">Blog Classic</li>
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

                        <!-- Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="{{route('blogs.show', 1)}}"><img
                                                src="{{ asset('assets/website') }}/images/resource/news-4.jpg" alt="" title=""></a></div>
                                    <div class="overlay-box">
                                        <div class="category">Trekking</div>
                                        <h4><a href="{{route('blogs.show', 1)}}">THE UPCOMING WBC CHAMP SHIPS 2022 in feb</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="info">
                                        <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span
                                            class="i-block">20 March 2022</span>
                                    </div>
                                    <div class="text">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts. Separated
                                        they live in Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. Separated they live
                                        in...</div>
                                    <a class="theme-btn read-more" href="{{route('blogs.show', 1)}}">Read More <span
                                            class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="{{route('blogs.show', 1)}}"><img
                                                src="{{ asset('assets/website') }}/images/resource/news-4.jpg" alt="" title=""></a></div>
                                    <div class="overlay-box">
                                        <div class="category">Trekking</div>
                                        <h4><a href="{{route('blogs.show', 1)}}">THE UPCOMING WBC CHAMP SHIPS 2022 in feb</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="info">
                                        <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span
                                            class="i-block">20 March 2022</span>
                                    </div>
                                    <div class="text">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts. Separated
                                        they live in Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. Separated they live
                                        in...</div>
                                    <a class="theme-btn read-more" href="{{route('blogs.show', 1)}}">Read More <span
                                            class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="{{route('blogs.show', 1)}}"><img
                                                src="{{ asset('assets/website') }}/images/resource/news-4.jpg" alt="" title=""></a></div>
                                    <div class="overlay-box">
                                        <div class="category">Trekking</div>
                                        <h4><a href="{{route('blogs.show', 1)}}">THE UPCOMING WBC CHAMP SHIPS 2022 in feb</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="info">
                                        <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span
                                            class="i-block">20 March 2022</span>
                                    </div>
                                    <div class="text">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts. Separated
                                        they live in Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. Separated they live
                                        in...</div>
                                    <a class="theme-btn read-more" href="{{route('blogs.show', 1)}}">Read More <span
                                            class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="{{route('blogs.show', 1)}}"><img
                                                src="{{ asset('assets/website') }}/images/resource/news-4.jpg" alt="" title=""></a></div>
                                    <div class="overlay-box">
                                        <div class="category">Trekking</div>
                                        <h4><a href="{{route('blogs.show', 1)}}">THE UPCOMING WBC CHAMP SHIPS 2022 in feb</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="info">
                                        <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span
                                            class="i-block">20 March 2022</span>
                                    </div>
                                    <div class="text">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts. Separated
                                        they live in Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. Separated they live
                                        in...</div>
                                    <a class="theme-btn read-more" href="{{route('blogs.show', 1)}}">Read More <span
                                            class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Styled Pagination -->
                        <ul class="styled-pagination">
                            <li class="prev"><a href="#">Prev</a></li>
                            <li><a href="#" class="active">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#">05</a></li>
                            <li class="next"><a href="#">Next</a></li>
                        </ul>
                        <!-- End Styled Pagination -->

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
                                    <strong>1250M +</strong> Followers
                                </li>
                                <li class="twitter"><span class="icon fab fa-twitter fa-fw"></span> <strong>1250M
                                        +</strong> Followers</li>
                                <li class="youtube"><span class="icon fab fa-youtube fa-fw"></span> <strong>1250M
                                        +</strong> Followers</li>
                                <li class="linkedin"><span class="icon fab fa-linkedin-in fa-fw"></span>
                                    <strong>1250M +</strong> Followers
                                </li>
                            </ul>
                        </div> --}}

                        <!-- Category Widget -->
                        {{-- <div class="sidebar-widget category-widget">
                            <div class="sidebar-title">
                                <h5>Category</h5>
                            </div>
                            <ul class="sidebar-category-list">
                                <li style="background-image: url(images/background/category-1.jpg)">
                                    <span class="txt">Therapy</span> <span class="number">05</span>
                                </li>
                                <li style="background-image: url(images/background/category-2.jpg)">
                                    <span class="txt">Beauty Items</span> <span class="number">09</span>
                                </li>
                                <li style="background-image: url(images/background/category-3.jpg)">
                                    <span class="txt">Body Sliming</span> <span class="number">07</span>
                                </li>
                                <li style="background-image: url(images/background/category-4.jpg)">
                                    <span class="txt">Fashion Fitness</span> <span class="number">10</span>
                                </li>
                            </ul>
                        </div> --}}

                        <!-- Search Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h5>Recent Post</h5>
                            </div>

                            <article class="post">
                                <figure class="post-thumb"><img src="{{ asset('assets/website') }}/images/resource/post-thumb-1.jpg" alt=""><a
                                        href="{{route('blogs.show', 1)}}" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{route('blogs.show', 1)}}">the best beach hikes on the west
                                        coast</a></div>
                                <div class="post-info">20 March 2022</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="{{ asset('assets/website') }}/images/resource/post-thumb-2.jpg" alt=""><a
                                        href="{{route('blogs.show', 1)}}" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{route('blogs.show', 1)}}">New: Freehand Template for the
                                        whole</a></div>
                                <div class="post-info">20 March 2022</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="{{ asset('assets/website') }}/images/resource/post-thumb-3.jpg" alt=""><a
                                        href="{{route('blogs.show', 1)}}" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{route('blogs.show', 1)}}">Security isn’t just a techn logy
                                        problem it’s</a></div>
                                <div class="post-info">20 March 2022</div>
                            </article>

                        </div>

                        <!-- Buy Treker Widget -->
                        {{-- <div class="sidebar-widget buy-treker-widget">
                            <div class="widget-content" style="background-image: url(images/background/buy.jpg)">
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
