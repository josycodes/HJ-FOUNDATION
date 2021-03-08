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
                    <h2>Donate </h2>
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li>Donate</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="contact-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-area">
                    <div class="contact-content">
                        <h3>Donate Now!</h3>
                        <p>Contact us to get, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ainim veniam.</p>
                    </div>
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="subjects" name="subjects" id="subjects" class="form-control" required data-error="Please enter your subjects" placeholder="Subjects">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Write Something"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="send-btn">
                                        <button type="submit" class="default-btn">
                                            Contact us
                                            <i class="flaticon-right"></i>
                                            <span></span>
                                        </button>
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