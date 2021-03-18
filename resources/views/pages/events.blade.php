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
            @foreach ($event as $e)
                
            
            <div class="event-item pb-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="event-time">
                            <img src="/storage/Event/{{ $e->image }}" width="300" height="235" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="event-content">
                            <h4>{{ $e->title}}</h4>
                            <ul class="event-meta">
                                <li>
                                    <i class="flaticon-clock"></i>
                                    {{ $e->starttime }} - {{ $e->endtime }}
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    {{ $e->location }}
                                </li>
                            </ul>
                            <a href="{{ route('Event-Detail',$e->id) }}" class="event-btn-one">Learn More +</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="{{ $event->previousPageUrl() }}" class="prev page-numbers">
                        <i class="flaticon-left"></i>
                    </a>
                    
                    <span class="page-numbers current" aria-current="page">{{ $event->currentPage() }}</span>
                    
                    <a href="{{ $event->nextPageUrl() }}" class="next page-numbers">
                        <i class="flaticon-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layoutpages.footer')