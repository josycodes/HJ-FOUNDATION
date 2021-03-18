<?php
$title = 'HJ Foundation | Where charity lives';
$active2='active';
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
                    <h2>Management Team</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Management Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="mission-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            @foreach ($management as $m)
           
            <div class="col-lg-6">
                <div class="row pb-5">
                    <div class="col-lg-2">
                        <div class="team-image" style="width:60px;height:60px;">
                            <img style="width:60px;height:60px;" src="/storage/Management Team/{{ $m->image }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h3>{{ $m->full_name }}</h3>
                        {{ $m->position }}
                        <p>{{ $m->email }}<br>
                            {{ $m->phone }}</p>
                    </div>
                </div>
            </div>
 @endforeach
            
        </div>
    </div>
</section>

@include('layoutpages.footer')