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
                    <h2>Events Detail</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Events Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="events-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="events-details-desc">
                    <div class="causes-details-image">
                        <img src="/storage/Event/{{ $event->image }}" alt="image">
                    </div>
                    <div class="events-details-content">
                        <div class="entry-meta">
                            <ul>
                                <li>
                                    <span>Posted On:</span>
                                    <a href="#">July 31, 2021</a>
                                </li>
                            </ul>
                        </div>
                        <h3>{{ $event->title }}</h3>
                        <p><?php print $event->content ?></p>
                    </div>
                    <div class="events-details-footer">
                        <div class="article-tags">
                            <span>
                            <i class="bx bx-share"></i>
                            </span>
                            <a href="#">Share</a>
                        </div>
                        <div class="article-share">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799090714!2d-74.25987368715496!3d40.697670064588735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1570689677254!5m2!1sen!2sbd"></iframe>
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
                        @foreach ($event1 as $ee )
                            
                        <article class="item">
                            <a href="{{ route('Event-Detail',$ee->id) }}" class="thumb">
                                <span class="fullimage cover" role="img" style="background-image: url(/storage/Event/{{ $ee->image }})!important;
                            }"></span>
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">{{ $ee->event_date }}</time>
                                <h4 class="title usmall">
                                    <a href="{{ route('Event-Detail',$ee->id) }}">{{ $ee->title }}</a>
                                </h4>
                            </div>
                            <div class="clear"></div>
                        </article>
                        @endforeach

                        
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