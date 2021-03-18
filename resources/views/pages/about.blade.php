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
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="about-section pt-70 pb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about-item">
<span>
<i class="flaticon-care-about-plants"></i>
About us
</span>
<h3>{{ $allbasics->sitename }}</h3>
<p class="main-color">
Your support will help us to make life better living for poor vulnerable children.
</p>
<p><?php print $about->about ?></p>
<div class="about-btn">
<a href="{{ route('Donate') }}" class="default-btn baseColor">
Donate Now
<i class="flaticon-right"></i>
<span></span>
</a>
<a class="optional-btn" href="{{ route('About-Us') }}">
More about us
<i class="flaticon-right"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="about-image about-four">
<img src="{{ asset('assets/assetpage/img/about/1.jpg') }}" class="shadow" alt="image">
<img src="{{ asset('assets/assetpage/img/about/2.jpg') }}" class="shadow" alt="image">
<div class="about-video">
<a href="https://www.youtube.com/watch?v=uemObN8_dcw" class="video-btn popup-youtube">
<i class="bx bx-play"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="mission-section">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 p-0">
<div class="mission-image">
<img src="{{ asset('assets/assetpage/img/mission.png') }}" alt="image">
</div>
</div>
<div class="col-lg-6">
<div class="mission-tab">
<span>
<i class="flaticon-target"></i>
Our Mission
</span>
<h2>Concern about Our Mission</h2>
<div class="tab mission-list-tab">
<ul class="tabs">
<li>
<a href="#">
Our Mission
</a>
</li>
<li>
<a href="#">
Our Vision
</a>
</li>
<li>
<a href="#">
Our Goal
</a>
</li>
</ul>
<div class="tab_content">
<div class="tabs_item">
<p><?php print $about->mission ?></p>
<a class="default-btn" href="#">
Our Mission
<span></span>
<i class="flaticon-right"></i>
</a>
</div>
<div class="tabs_item">
<p><?php print $about->vision ?></p>
<a class="default-btn" href="#">
Our Mission
<span></span>
<i class="flaticon-right"></i>
</a>
</div>
<div class="tabs_item">
<p><?php print $about->goal ?></p>
<a class="default-btn" href="#">
Our Mission
<span></span>
 <i class="flaticon-right"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="team-section pt-100 pb-70">
<div class="container">
<div class="team-title-area">
<div class="row align-items-center">
<div class="col-lg-7">
<div class="section-title">
<span>
<i class="flaticon-support"></i>
Meet Our Team
</span>
<h2>Talented Team behind {{ $allbasics->sitename1 }}</h2>
<p>Quis ipsum suspendice consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendices gravida.</p>
</div>
</div>
<div class="col-lg-5">
<div class="team-btn">
<a href="{{ route('Management-Team') }}" class="optional-btn">
Meet Our Team
<i class="flaticon-right"></i>
</a>
</div>
</div>
</div>
</div>
<div class="row">

    @foreach ($team as $t)
    
    <div class="col-lg-3 col-sm-6">
    <div class="single-team-member">
    <div class="team-image">
    <img style="width:380px; height:250px;" src="/storage/Management Team/{{ $t->image }}" width="380" height="350" alt="image">
    </div>
    <ul class="social-btn">
    <li>
    <a href="#">
    <i class="flaticon-facebook"></i>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="flaticon-twitter"></i>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="flaticon-instagram"></i>
    </a>
    </li>
    </ul>
    <div class="member-content">
    <h3>{{ $t->full_name }}</h3>
    <span>{{ $t->position }}</span>
    </div>
    <div class="team-icon">
    <i class="flaticon-plus"></i>
    </div>
    </div>
    </div>
    @endforeach




{{-- <div class="col-lg-3 col-sm-6">
<div class="single-team-member">
<div class="team-image">
<img src="{{ asset('assets/assetpage/img/team/7.png') }}" alt="image">
</div>
<ul class="social-btn">
<li>
<a href="#">
<i class="flaticon-facebook"></i>
</a>
</li>
<li>
<a href="#">
<i class="flaticon-twitter"></i>
</a>
</li>
<li>
<a href="#">
<i class="flaticon-instagram"></i>
</a>
</li>
</ul>
<div class="member-content">
<h3>Alex Maxwel</h3>
<span>CEO & Founder</span>
</div>
<div class="team-icon">
<i class="flaticon-plus"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-team-member">
<div class="team-image">
<img src="{{ asset('assets/assetpage/img/team/8.png') }}" alt="image">
</div>
<ul class="social-btn">
<li>
<a href="#">
<i class="flaticon-facebook"></i>
</a>
</li>
<li>
<a href="#">
<i class="flaticon-twitter"></i>
</a>
</li>
<li>
<a href="#">
<i class="flaticon-instagram"></i>
</a>
</li>
</ul>
<div class="member-content">
<h3>Smith Jhon</h3>
<span>Manager</span>
</div>
<div class="team-icon">
<i class="flaticon-plus"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-team-member">
<div class="team-image">
<img src="{{ asset('assets/assetpage/img/team/9.png') }}" alt="image">
</div>
<ul class="social-btn">
<li>
<a href="#">
<i class="flaticon-facebook"></i>
</a>
</li>
<li>
<a href="#">
<i class="flaticon-twitter"></i>
</a>
</li>
<li>
<a href="#">
<i class="flaticon-instagram"></i>
</a>
</li>
</ul>
<div class="member-content">
<h3>Ched Kurtsovski</h3>
<span>Volunteer</span>
</div>
<div class="team-icon">
<i class="flaticon-plus"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-team-member">
<div class="team-image">
<img src="{{ asset('assets/assetpage/img/team/10.png') }}" alt="image">
</div>
<ul class="social-btn">
<li>
<a href="#">
<i class="flaticon-facebook"></i>
</a>
</li>
<li>
<a href="#">
<i class="flaticon-twitter"></i>
</a>
</li>
<li>
<a href="#">
<i class="flaticon-instagram"></i>
</a>
</li>
</ul>
<div class="member-content">
<h3>Ched Kurtsovski</h3>
<span>Volunteer</span>
</div>
<div class="team-icon">
<i class="flaticon-plus"></i>
</div>
</div>
</div> --}}
</div>
</div>
</section>


@include('layoutpages.footer')