<?php
$title = 'HJ Foundation | Where charity lives';
$active3='active';
?>
@include('layoutpages.head')
<body>

<div class="preloader">
<div class="preloader">
<span></span>
<span></span>
</div>
</div>

@include('layoutpages.header')

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>News</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog-section pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog">
                            <img src="{{ asset('assets/assetpage/img/blog/1.jpg') }}" alt="image">
                            <div class="content">
                                <span>Poor, 22 January</span>
                                <h3>
                                    <a href="#">
                                        Poverty not only money it can be food sometimes
                                    </a>
                                </h3>
                                <a href="news-detail" class="blog-btn">Read more +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog">
                            <img src="{{ asset('assets/assetpage/img/blog/2.jpg') }}" alt="image">
                            <div class="content">
                                <span>Food, 21 December</span>
                                <h3>
                                    <a href="#">
                                        Strawberry-Banana Quinoa Muffins Recipe for poor
                                    </a>
                                </h3>
                                <a href="news-detail" class="blog-btn">Read more +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog">
                            <img src="{{ asset('assets/assetpage/img/blog/1.jpg') }}" alt="image">
                            <div class="content">
                                <span>Poor, 22 January</span>
                                <h3>
                                    <a href="#">
                                        Poverty not only money it can be food sometimes
                                    </a>
                                </h3>
                                <a href="news-detail" class="blog-btn">Read more +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog">
                            <img src="{{ asset('assets/assetpage/img/blog/2.jpg') }}" alt="image">
                            <div class="content">
                                <span>Food, 21 December</span>
                                <h3>
                                    <a href="#">
                                        Strawberry-Banana Quinoa Muffins Recipe for poor
                                    </a>
                                </h3>
                                <a href="news-detail" class="blog-btn">Read more +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog">
                            <img src="{{ asset('assets/assetpage/img/blog/3.jpg') }}" alt="image">
                            <div class="content">
                                <span>Healthy, 21 June</span>
                                <h3>
                                    <a href="#">
                                        The charity can help make a smile of poor people
                                    </a>
                                </h3>
                                <a href="news-detail" class="blog-btn">Read more +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog">
                            <img src="{{ asset('assets/assetpage/img/blog/4.jpg') }}" alt="image">
                            <div class="content">
                                <span>Poor, 22 January</span>
                                <h3>
                                    <a href="#">
                                        South Korea pre-primary school build for children
                                    </a>
                                </h3>
                                <a href="news-detail" class="blog-btn">Read more +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog">
                            <img src="{{ asset('assets/assetpage/img/blog/5.jpg') }}" alt="image">
                            <div class="content">
                                <span>Food, 21 December</span>
                                <h3>
                                    <a href="#">
                                        Provide pure water for Filipino poor people
                                    </a>
                                </h3>
                                <a href="news-detail" class="blog-btn">Read more +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog">
                            <img src="{{ asset('assets/assetpage/img/blog/6.jpg') }}" alt="image">
                            <div class="content">
                                <span>Healthy, 21 June</span>
                                <h3>
                                    <a href="#">
                                        Children’s national festival for learning or play
                                    </a>
                                </h3>
                                <a href="news-detail" class="blog-btn">Read more +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers">
                                <i class="flaticon-left"></i>
                            </a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current" aria-current="page">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers">
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit">
                                <i class="flaticon-search"></i>
                            </button>
                        </form>
                    </div>
                    <section class="widget widget_huruma_posts_thumb">
                        <h3 class="widget-title">Popular Posts</h3>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg1" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2021</time>
                                <h4 class="title usmall">
                                    <a href="#">Delicate contempt received two yet advanced</a>
                                </h4>
                            </div>
                            <div class="clear"></div>
                        </article>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg2" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2021</time>
                                <h4 class="title usmall">
                                    <a href="#">Future Plan & Strategy for Consutruction</a>
                                </h4>
                            </div>
                            <div class="clear"></div>
                        </article>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg3" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2021</time>
                                <h4 class="title usmall">
                                    <a href="#">Melancholy devonshire alteration</a>
                                </h4>
                            </div>
                            <div class="clear"></div>
                        </article>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg4" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2021</time>
                                <h4 class="title usmall">
                                    <a href="#">Delicate contempt received two yet advanced</a>
                                </h4>
                            </div>
                            <div class="clear"></div>
                        </article>
                    </section>
                    <section class="widget widget_categories">
                        <h3 class="widget-title">Archives</h3>
                        <ul>
                            <li><a href="#">May 2021</a></li>
                            <li><a href="#">April 2021</a></li>
                            <li><a href="#">June 2021</a></li>
                            <li><a href="#">julay 2021</a></li>
                        </ul>
                    </section>
                    <section class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="#">Educataon (10)</a></li>
                            <li><a href="#">National (20)</a></li>
                            <li><a href="#">Sports (10)</a></li>
                            <li><a href="#">Megazine (12)</a></li>
                            <li><a href="#">Health (16)</a></li>
                        </ul>
                    </section>
                    <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tagcloud">
                            <a href="#">Fashion</a>
                            <a href="#">Education</a>
                            <a href="#">Nation</a>
                            <a href="#">Study</a>
                            <a href="#">Health</a>
                            <a href="#">Food</a>
                            <a href="#">Travel</a>
                            <a href="#">Science</a>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>


@include('layoutpages.footer')