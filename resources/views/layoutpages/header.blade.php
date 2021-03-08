<?php
$siteName = 'HJ Foundation';
$siteName2 = 'Hadiqatul Jannah Foundation';
$siteDomain = 'hadiqatuljannahfoundation.com';
$siteFacebook = 'https://facebook.com';
$siteInstagram = 'https://instagram.com';
$siteTwitter = 'https://twitter.com';
$siteLinkedin = 'https://linkedin.com';
$siteAddress = '67 Yakuma Street Off Idoku FCT Abuja';
$sitePhone = '+2348038475290';
$siteEmail = 'info@'.$siteDomain;
?>
<div class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-content">
                    <p>
                        <a href="donate">The fund will go to the poor... <span>Donate Now</span></a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                
                <div class="top-header-social">
                    <span>Follow us:</span>
                    <a href="{{ $siteFacebook }}" target="_blank">
                        <i class='flaticon-facebook'></i>
                    </a>
                    <a href="{{ $siteTwitter }}" target="_blank">
                        <i class='flaticon-twitter'></i>
                    </a>
                    <a href="{{ $siteInstagram }}" target="_blank">
                        <i class='flaticon-instagram'></i>
                    </a>
                    <a href="{{ $siteLinkedin }}" target="_blank">
                        <i class='flaticon-linkedin'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-area fixed-top" style="background: #000;">
    <div class="huruma-responsive-nav">
        <div class="container">
            <div class="huruma-responsive-menu">
                <div class="logo">
                    <a href="./">
                        <img src="{{ asset('assets/assetpage/img/logo-3.png') }}" class="white-logo" alt="logo">
                        <img src="{{ asset('assets/assetpage/img/logo-2.png') }}" class="black-logo" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="huruma-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand fixnavbar-brand" href="./">
                    <img src="{{ asset('assets/assetpage/img/logo-3.png') }}" class="white-logo" alt="logo">
                    <img src="{{ asset('assets/assetpage/img/logo-2.png') }}" class="black-logo" alt="image">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="./" class="nav-link {{ $active1 }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about" class="nav-link {{ $active2 }}">
                                About
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="aims-objectives" class="nav-link">
                                        Aims & Objectives
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="board-of-trustees" class="nav-link">
                                        Board of Trustees
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="management-team" class="nav-link">
                                        Management Team
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq" class="nav-link">
                                        Frequently Asked Question
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="gallery" class="nav-link">
                                        Gallery
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php print @$active3;?>">
                                News/Events
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="news" class="nav-link">
                                        News
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="events" class="nav-link">
                                        Events
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php print @$active4;?>">
                                Programme
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="awareness" class="nav-link">
                                        Awareness
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="research" class="nav-link">
                                        Research
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="fund-raising" class="nav-link">
                                        Fund Raising
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php print @$active5;?>">
                                Membership
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="membership-categories" class="nav-link">
                                        Membership Categories
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="benefits-to-members" class="nav-link">
                                        Benefits to Members
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="membership-application-forms" class="nav-link">
                                        Membership Application Forms
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="volunteer-opportunities" class="nav-link">
                                        Volunteer Opportunities
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact" class="nav-link <?php print @$active6;?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="others-options">
                        <div class="option-item">
                            <a href="donate" class="btn btn-success baseColor">Donate</a>
                        </div>
                        <div class="burger-menu">
                            <i class="flaticon-menu"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="sidebar-modal">
    <div class="sidebar-modal-inner">
        <div class="sidebar-about-area">
            <div class="title">
                <center><h2>DONATE NOW</h2>
                    <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
            </div>
        </div></center>
        <div class="sidebar-instagram-feed">
            <center><a href="donate" class="btn btn-success baseColor btn-lg">DONATE</a></center>
        </div>
        <div class="sidebar-contact-area">
            <div class="contact-info">
                <div class="contact-info-content">
                    <h2>
                        <a href="tel:{{ $sitePhone }}">
                           {{ $sitePhone }}
                        </a>
                        <span>OR</span>
                        <span class="__cf_email__"><?php print $siteEmail;?></span>
                    </h2>
                    <ul class="social">
                        <li>
                            <a href="<?php print $siteFacebook;?>" target="_blank">
                                <i class="flaticon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php print $siteTwitter;?>" target="_blank">
                                <i class="flaticon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php print $siteInstagram;?>" target="_blank">
                                <i class="flaticon-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php print $siteLinkedin;?>" target="_blank">
                                <i class="flaticon-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <span class="close-btn sidebar-modal-close-btn">
<i class="flaticon-close"></i>
</span>
    </div>
</div>