<footer class="footer-section pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contact info</h3>
                    <div class="footer-info-contact">
                        <i class="flaticon-pin"></i>
                        <h3>Location</h3>
                        <span>{{ $allbasics->siteaddress }}</span>
                    </div>
                    <div class="footer-info-contact">
                        <i class="flaticon-call"></i>
                        <h3>Call Us</h3>
                        <span><a href="tel:{{ $allbasics->sitephone }}">{{ $allbasics->sitephone }}</a></span>
                    </div>
                    <div class="footer-info-contact">
                        <i class="flaticon-email"></i>
                        <h3>Email Us</h3>
                        <span>{{ $allbasics->siteemail }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>About</h3>
                    <ul class="footer-quick-links">
                        <li>
                            <a href="about">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="board-of-trustees">
                                Board of Trustees
                            </a>
                        </li>
                        <li>
                            <a href="management-team">
                                Management Team
                            </a>
                        </li>
                        <li>
                            <a href="news-events">
                                News/Events
                            </a>
                        </li>
                        <li>
                            <a href="contact">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="gallery">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="faq">
                                Frequently Asked Question
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Our Services</h3>
                    <ul class="footer-quick-links">
                        <li>
                            <a href="donate">
                                Donate
                            </a>
                        </li>
                        <li>
                            <a href="awareness">
                                Awareness
                            </a>
                        </li>
                        <li>
                            <a href="fund-raising">
                                Fund Raising
                            </a>
                        </li>
                        <li>
                            <a href="volunteer-opportunities">
                                Volunteer
                            </a>
                        </li>
                        <li>
                            <a href="membership-categories">
                                Member Categories
                            </a>
                        </li>
                        <li>
                            <a href="benefits-to-members">
                                Benefits
                            </a>
                        </li>
                        <li>
                            <a href="membership-application-forms">
                                Membership Form
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Recent News</h3>
                    <div class="footer-news">
                        <a href="single-blog.html">
                            <img src="{{ asset('assets/assetpage/img/footer-news/1.jpg') }}" alt="image">
                            <h4>Support about poverty to poor family</h4>
                            <span>Poor, 22 January</span>
                        </a>
                    </div>
                    <div class="footer-news">
                        <a href="single-blog.html">
                            <img src="{{ asset('assets/assetpage/img/footer-news/2.jpg') }}" alt="image">
                            <h4>Mostly suffered school Boys care</h4>
                            <span>Health, 24 February</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="copyright-logo">
                            <img src="{{ asset('assets/assetpage/img/white-logo.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <p>
                            <i class="far fa-copyright"></i>
                            Copyright © <?php $d=date('Y'); print $d;?> {{ $allbasics->sitename }}. All Rights Reserved. Developed by
                            <a href="https://techocraft.com/" target="_blank">
                                Techo Craft
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <ul>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="go-top">
    <i class="bx bx-chevron-up"></i>
    <i class="bx bx-chevron-up"></i>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/assetpage/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/imagelightbox.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/main.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/assetpage/js/rev-slider-custom.js') }}"></script>
</body>
</html>