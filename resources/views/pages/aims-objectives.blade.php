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
                    <h2>Aims and Objectives</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Aims and Objectives</li>
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

                <h3>The aims and objectives of Nigerian Heart Foundation are:</h3>
                <ul>
                    <li>To promote the health and social well being of Nigerians especially in the areas of prevention and treatment of heart and allied diseases</li>
                    <li>To organize International, National and Local Conferences, Seminars, Workshops and participate in fora on topics related to heart diseases.</li>
                    <li>To disseminate up-to-date information on heart and other related diseases.</li>
                    <li>To establish contacts and affiliate with other groups, persons, organizations and associations with similar interests either within or outside the country.</li>
                    <li>To establish and administer research fund.</li>
                    <li>To create awareness, educate and enlighten the public on a behavioural modification for the prevention of heart diseases and other cardiovascular diseases.</li>
                </ul>
            </div>
        </div>
    </div>
</section>


@include('layoutpages.footer')