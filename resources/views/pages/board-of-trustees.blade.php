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
                    <h2>Board Of Trustees</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Board Of Trustees</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="mission-section pt-5 pb-5">
    <div class="container">
        @foreach ( $boards as $board )
       
        <div class="row pb-5">
            <div class="col-lg-3">
                <div class="team-image">
                    <img src="/storage/board/{{ $board->image }}" alt="image">
                </div>
            </div>
            <div class="col-lg-9">
                <h3>{{ $board->name }}</h3>
                {{ $board->position }}
               <p><?php print $board->about;?></p>
            </div>
        </div>
             
        @endforeach

    </div>
</section>

@include('layoutpages.footer')