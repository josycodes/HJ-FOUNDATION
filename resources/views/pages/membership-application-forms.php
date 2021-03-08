<?php
$title = 'HJ Foundation | Where charity lives'; $active5='active';
require_once('head.php');?>
<body>

<div class="preloader">
<div class="preloader">
<span></span>
<span></span>
</div>
</div>

<?php require_once('header.php');?>

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Membership Application Forms</h2>
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li>Membership Application Forms</li>
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

                <h4>Offline Application:<br>Click on the links below to download our membership application form for the category of interest.</h4>
                <p><a href="#" onclick="alert('Not available yet...');">Download Individual Membership Application Form</a></p>
                <p><a href="#" onclick="alert('Not available yet...');">Download Corporate Membership Application Form</a></p>

                <h4 align="center">Online Application:<br>Fill out the form below.</h4>
                <div class="faq-contact">
                    <div class="faq-contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="send-btn">
                                        <button type="submit" class="optional-btn">Send Message</button>
                                    </div>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require_once('footer.php');?>