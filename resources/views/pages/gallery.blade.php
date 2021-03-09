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
                    <h2>Gallery</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gallery-area pt-100 pb-70">
    <div class="section-title">
        <h2>Gallery</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-gallery-box">
                    <img src="{{ asset('assets/assetpage/img/gallery/1.jpg') }}" alt="image">
                    <a href="{{ asset('assets/assetpage/img/gallery/1.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class="flaticon-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-gallery-box">
                    <img src="{{ asset('assets/assetpage/img/gallery/2.jpg') }}" alt="image">
                    <a href="{{ asset('assets/assetpage/img/gallery/2.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class="flaticon-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-gallery-box">
                    <img src="{{ asset('assets/assetpage/img/gallery/3.jpg') }}" alt="image">
                    <a href="{{ asset('assets/assetpage/img/gallery/3.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class="flaticon-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-gallery-box">
                    <img src="{{ asset('assets/assetpage/img/gallery/4.jpg') }}" alt="image">
                    <a href="{{ asset('assets/assetpage/img/gallery/4.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class="flaticon-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-gallery-box">
                    <img src="{{ asset('assets/assetpage/img/gallery/5.jpg') }}" alt="image">
                    <a href="{{ asset('assets/assetpage/img/gallery/5.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class="flaticon-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-gallery-box">
                    <img src="{{ asset('assets/assetpage/img/gallery/6.jpg') }}" alt="image">
                    <a href="{{ asset('assets/assetpage/img/gallery/6.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class="flaticon-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-gallery-box">
                    <img src="{{ asset('assets/assetpage/img/gallery/7.jpg') }}" alt="image">
                    <a href="{{ asset('assets/assetpage/img/gallery/7.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class="flaticon-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-gallery-box">
                    <img src="{{ asset('assets/assetpage/img/gallery/8.jpg') }}" alt="image">
                    <a href="{{ asset('assets/assetpage/img/gallery/8.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class="flaticon-search"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layoutpages.footer')