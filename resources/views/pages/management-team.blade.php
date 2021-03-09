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
            <div class="col-lg-6">
                <div class="row pb-5">
                    <div class="col-lg-2">
                        <div class="team-image">
                            <img src="{{ asset('assets/assetpage/img/team/7.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h3>Dr. Kingsley .K. Akinroye</h3>
                        Executive Director
                        <p>k.akinroye@nigerianheart.org<br>
                            09086314840</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row pb-5">
                    <div class="col-lg-2">
                        <div class="team-image">
                            <img src="{{ asset('assets/assetpage/img/team/7.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h3>Dr. Kingsley .K. Akinroye</h3>
                        Executive Director
                        <p>k.akinroye@nigerianheart.org<br>
                            09086314840</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layoutpages.footer')