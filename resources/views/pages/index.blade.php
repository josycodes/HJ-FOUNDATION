@php
$title = 'HJ Foundation | Where charity lives';
$active1 = 'active';
@endphp

@include('layoutpages.head')
<body>

<div class="preloader">
<div class="preloader">
<span></span>
<span></span>
</div>
</div>

@include('layoutpages.header')
@include('layoutpages.slider')

<section class="feature-section">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 p-0">
<div class="feature-card">
<div class="icon">
<img src="{{ asset('assets/assetpage/img/icon/1.png') }}" alt="image">
<img src="{{ asset('assets/assetpage/img/icon/white-1.png') }}" alt="image">
</div>
<h3>Become A Volunteer</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididun labore voluptatem accusantium.</p>
<a href="{{ route('Volunteer-Opportunities') }}" class="feature-btn">
Join now +
</a>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 p-0">
<div class="feature-card">
<div class="icon">
<img src="{{ asset('assets/assetpage/img/icon/2.png') }}" alt="image">
<img src="{{ asset('assets/assetpage/img/icon/white-2.png') }}" alt="image">
</div>
<h3>Quick Fundraiser</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididun labore voluptatem accusantium.</p>
<a href="{{ route('Fund-Raising') }}" class="feature-btn">
Give now +
</a>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 p-0">
<div class="feature-card">
<div class="icon">
<img src="{{ asset('assets/assetpage/img/icon/3.png') }}" alt="image">
<img src="{{ asset('assets/assetpage/img/icon/white-3.png') }}" alt="image">
</div>
<h3>Give Donation</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididun labore voluptatem accusantium.</p>
<a href="{{ route('Donate') }}" class="feature-btn">
Donate now +
</a>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 p-0">
<div class="feature-card">
<div class="icon">
<img src="{{ asset('assets/assetpage/img/icon/4.png') }}" alt="image">
<img src="{{ asset('assets/assetpage/img/icon/white-4.png') }}" alt="image">
</div>
<h3>Join as a member</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididun labore voluptatem accusantium.</p>
<a href="{{ route('Membership-Application-Forms') }}" class="feature-btn">
Be Member +
</a>
</div>
</div>
</div>
</div>
</section>


<section class="about-section pt-70 pb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about-item">
<span>
<i class="flaticon-care-about-plants"></i>
About us
</span>
<h3>{{ $allbasics->sitename1 }}</h3>
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


<section class="fun-facts-area">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-fun-fact">
<p>Beneficiaries</p>
<h3>
<span class="sign-icon dolor">₦</span>
<span class="odometer" data-count="500">00</span>
<span class="sign-icon">M</span>
</h3>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-fun-fact">
<p>Happy Donators</p>
<h3>
<span class="odometer" data-count="458">00</span>
<span class="sign-icon">+</span>
</h3>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-fun-fact">
<p>Volunteer</p>
<h3>
<span class="odometer" data-count="45">00</span>
<span class="sign-icon">+</span>
</h3>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-fun-fact">
<p>Donated Poor</p>
<h3>
<span class="odometer" data-count="20">00</span>
<span class="sign-icon">K</span>
</h3>
</div>
</div>
</div>
</div>
</section>

<section class="donor-section pt-100 pb-70">
<div class="container">
<div class="section-title">
<h2>To have become a volunteer or donor</h2>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="donor-item">
<div class="icon">
<i class="flaticon-support"></i>
</div>
<h3>Select Membership Type</h3>
<p>Lorem ipsum dolor siamet ecteturadipisicing</p>
<a href="{{ route('Membership-Application-Forms') }}" class="donor-btn">Learn more +</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="donor-item">
<div class="icon">
<i class="flaticon-confirmation"></i>
</div>
<h3>Get Confirmation</h3>
<p>Dolor Lorem ipsumsiamet ecteturadipisicin</p>
<a href="{{ route('Memebership-Categories') }}" class="donor-btn">Lear more +</a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-md-6 offset-md-3 offset-lg-0">
<div class="donor-item">
<div class="icon">
<i class="flaticon-enjoy"></i>
</div>
<h3>Get Enjoyed</h3>
<p>Lorem ipsum dolor siamet ecteturadipisicing</p>
<a href="{{ route('Memebership-Categories') }}" class="donor-btn">Learn more +</a>
</div>
</div>
</div>
</div>
<div class="lines">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
</div>
</section>


<section class="solve-section pt-100 pb-70">
<div class="container">
<div class="section-title">
<span>
<i class="flaticon-to-do-list"></i>
What We Do
</span>
<h2>A mission to solve a problem</h2>
<p>Quis ipsum suspendice consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendices gravida.</p>
</div>
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="solve-item">
<div class="icon">
<img src="{{ asset('assets/assetpage/img/solve/1.png') }}" alt="image">
</div>
<h3>Education Facilities</h3>
<p>Roknin sanso dolor sit amet consecteturadipisicingitsed do eiusmod tempor.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="solve-item">
<div class="icon">
<img src="{{ asset('assets/assetpage/img/solve/2.png') }}" alt="image">
</div>
<h3>Medical Facilities</h3>
<p>Dobani Kulie dolor sit amet consecteturadipisicingitsed do eiusmod tempor.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="solve-item">
<div class="icon">
<img src="{{ asset('assets/assetpage/img/solve/3.png') }}" alt="image">
</div>
<h3>Healthy Food</h3>
<p>Horith ipsum dolor sit amet consecteturadipisicingitsed do eiusmod tempor.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="solve-item">
<div class="icon">
<img src="{{ asset('assets/assetpage/img/solve/4.png') }}" alt="image">
</div>
<h3>Pure Water</h3>
<p>Warek ipsum dolor sit amet consecteturadipisicingitsed do eiusmod tempor.</p>
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
<a href="{{ route('About-Us') }}">
Our Mission
</a>
</li>
<li>
<a href="{{ route('About-Us') }}">
Our Vision
</a>
</li>
<li>
<a href="{{ route('About-Us') }}">
Our Goal
</a>
</li>
</ul>
<div class="tab_content">
<div class="tabs_item">
<p><?php print $about->mission ?></p>
<a class="default-btn" href="{{ route('About-Us') }}">
Our Mission
<span></span>
<i class="flaticon-right"></i>
</a>
</div>
<div class="tabs_item">
<p><?php print $about->vision?></p>
<a class="default-btn" href="{{ route('About-Us') }}">
Our Vision
<span></span>
<i class="flaticon-right"></i>
</a>
</div>
<div class="tabs_item">
<p><?php print $about->goal ?></p>
<a class="default-btn" href="{{ route('About-Us') }}">
Our Goal
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

</div>
</div>
</section>


<section class="event-section pt-100 pb-5">
<div class="container">
<div class="section-title">
<span>
<i class="flaticon-clipboard"></i>
 Upcoming Events
</span>
<h2>Be ready for Our Events</h2>
<p>Event makes suspendice adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendices gravida.</p>
</div>
<div class="event-slider owl-carousel owl-theme">

@foreach ($event as $e )
    
<div class="event-item">
<div class="row">
<div class="col-lg-4">
<div class="event-time">
{{-- <h3>0-130</h3> --}}
<span>{{ $e->event_date }}</span>
<div class="icon">
<i class="flaticon-clock"></i>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="event-content">
<h4>{{ $e->title }}</h4>
<ul class="event-meta">
<li>
<i class="flaticon-clock"></i>
{{ $e->starttime }}-{{ $e->endtime }}
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

{{-- 
<div class="event-item">
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
<a href="detailed" class="event-btn-one">Join Now +</a>
</div>
</div>
</div>
</div>

<div class="event-item">
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
<a href="detailed" class="event-btn-one">Join Now +</a>
</div>
</div>
</div>
</div>


<div class="event-item">
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
<a href="detailed" class="event-btn-one">Join Now +</a>
</div>
</div>
</div>
</div> --}}


</div>
</div>
</section>


<section class="donate-section ptb-100">
<div class="container">
<div class="section-title">
<h2>Want you know How Can Help?</h2>
<p>Toiken ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntlabore et dolore magna aliqua. Ut enim ad minim.</p>
<a href="{{ route('Donate') }}" class="donate-btn">
Donate Now
<i class="flaticon-right"></i>
</a>
</div>
</div>
<div class="default-shape">
<img src="{{ asset('assets/assetpage/img/donate/1.png') }}" alt="image">
<img src="{{ asset('assets/assetpage/img/donate/2.png') }}" alt="image">
</div>
</section>


<section class="blog-section pt-100 pb-70">
<div class="container">
<div class="section-title">
<span>
<i class="flaticon-book"></i>
Our Blog
</span>
<h2>Check Out Our Latest News</h2>
</div>
<div class="row">

@foreach ($news as $n)

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-blog">
<img src="/storage/news/{{ $n->image }}" alt="image">
<div class="content">
 <a href="#">
<i class='bx bx-user'></i>
</a>
<span>{{ $n->category }}</span>
<h3>
<a href="#">
{{ $n->title }}
</a>
</h3>
<a href="{{ route('News-Detail',$n->id) }}" class="blog-btn">Read more +</a>
</div>
</div>
</div>
@endforeach

{{-- <div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-blog">
<img src="{{ asset('assets/assetpage/img/blog/2.jpg') }}" alt="image">
<div class="content">
<a href="#">
<i class='bx bx-user'></i>
</a>
<span>Food, 21 December</span>
<h3>
<a href="#">
Strawberry-Banana Quinoa Muffins Recipe for poor
</a>
</h3>
<a href="detailed" class="blog-btn">Read more +</a>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-sm-6 offset-sm-3 offset-lg-0">
<div class="single-blog">
<img src="{{ asset('assets/assetpage/img/blog/3.jpg') }}" alt="image">
<div class="content">
<a href="#">
<i class='bx bx-user'></i>
</a>
<span>Healthy, 21 June</span>
<h3>
<a href="#">
The Plant-Powered Dietitian To Consume Habit
</a>
</h3>
<a href="detailed" class="blog-btn">Read more +</a>
</div>
</div>
</div>
 --}}

</div>
</div>
</section>


@include('layoutpages.footer')