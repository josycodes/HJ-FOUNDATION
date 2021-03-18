<?php
$title = 'HJ Foundation | Where charity lives'; 
$active5='active';
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
                    <h2>Volunteer Opportunities</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Volunteer Opportunities</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="mission-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <?php print $member->volunteer_oppurtunities;?>
            </div>
        </div>
    </div>
</section>


@include('layoutpages.footer')