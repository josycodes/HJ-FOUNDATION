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
                    <h2>Events</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog-section pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="event-item pb-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="event-time">
                            <img src="/storage/news/3uui4ixT7GVyYXHQJZuKrnPxdK1p30w9oLiZtem0.jpg" width="300" height="235" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="event-content">
                            <h4>Huruma Con Donation 2021</h4>
                            <ul class="event-meta">
                                <li>
                                    <i class="flaticon-clock"></i>
                                    8:00 - 10:00
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    Newyork City
                                </li>
                            </ul>
                            <p>Dona ques suspendice consectetucaquuis ipsums gravida.</p>
                            <a href="event-detail" class="event-btn-one">Learn More +</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-item pb-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="event-time">
                           <img src="{{ asset('assets/assetpage/img/blog/1.jpg') }}" width="300" height="235" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="event-content">
                            <h4>Poor funding for helpless</h4>
                            <ul class="event-meta">
                                <li>
                                    <i class="flaticon-clock"></i>
                                    9:00 - 12:00
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    Calfornia City
                                </li>
                            </ul>
                            <p>Suspendice quis ipsum consectetucaquuis ipsums gravida.</p>
                            <a href="event-detail" class="event-btn-one">Learn More +</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-item pb-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="event-time">
                            <h3>0-130</h3>
                            <span>5 December 2021</span>
                            <div class="icon">
                                <i class="flaticon-clock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="event-content">
                            <h4>Huruma Con Donation 2021</h4>
                            <ul class="event-meta">
                                <li>
                                    <i class="flaticon-clock"></i>
                                    8:00 - 10:00
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    Newyork City
                                </li>
                            </ul>
                            <p>Dona ques suspendice consectetucaquuis ipsums gravida.</p>
                            <a href="event-detail" class="event-btn-one">Learn More +</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-item pb-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="event-time">
                            <h3>0-140</h3>
                            <span>10 January 2021</span>
                            <div class="icon">
                                <i class="flaticon-clock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="event-content">
                            <h4>Poor funding for helpless</h4>
                            <ul class="event-meta">
                                <li>
                                    <i class="flaticon-clock"></i>
                                    9:00 - 12:00
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    Calfornia City
                                </li>
                            </ul>
                            <p>Suspendice quis ipsum consectetucaquuis ipsums gravida.</p>
                            <a href="event-detail" class="event-btn-one">Learn More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layoutpages.footer')