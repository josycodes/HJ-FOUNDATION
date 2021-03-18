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
                    <h2>News Detail</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>News Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img src="/storage/news/{{$news->image }}" alt="image">
                    </div>
                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li>
                                    <span>Posted By:</span>
                                    <a href="#">{{ $news->poster }}</a>
                                </li>
                            </ul>
                        </div>
                        <h3>{{ $news->title }}</h3>
                        <p><?php print $news->content; ?></p>
                        
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