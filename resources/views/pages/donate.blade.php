<?php
$title = 'HJ Foundation | Where charity lives'; 
$active5='active';
?>
@include('layoutpages.head')
<style>
    ul.list{
        height:350px!important;
        overflow-y: scroll!important;
    }
</style>
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
                    <h2>Donate </h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
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
            {{-- <div class="col-lg-6">
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
            </div>  --}}
            <div class="col-lg-6">
                <div class="contact-area">
                    <div class="contact-content">
                        <h3>Donate Now!</h3>
                        <p>Contact us to get, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ainim veniam.</p>
                    </div>
                    <div class="contact-form">
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
                                        <select name="currency" class="form-control box" id="currency" required>
                                        <option>Select Currency</option>
                                            @foreach ($currency as $b)
                                                <option @php
                                                    if($b == 'NGN') print 'selected';
                                                @endphp value="{{ $b }}">{{ $b }}</option> 
                                            @endforeach
                                       
                                        
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="number" name="amount" id="amount" class="form-control" required data-error="Please enter Amount" placeholder="Enter Amount">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="send-btn">
                                        <button type="submit" id="submit" class="default-btn submit">
                                            Donate
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


@include('layoutpages.footer')
   <script src="https://checkout.flutterwave.com/v3.js"></script>
  <script>  
    
    function makePayment(txID,currency,amount,useremail,userphone,username) {
      FlutterwaveCheckout({
        public_key: "FLWPUBK_TEST-e4782dac6654d9fd6f6563bede389ca2-X",
        tx_ref: txID,
        amount: amount,
        currency: currency,
        country: "NG",
        payment_options: "account, card, banktransfer , barter , mobilemoneyghana, ussd , credit",
        redirect_url: // specified redirect URL
          "{{ route('Transaction') }}",
        meta: {
          consumer_id: 23,
          consumer_mac: "92a3-912ba-1192a",
        },
        customer: {
          email: useremail,
          phone_number: userphone,
          name: username,
        },
        callback: function (data) {
          console.log(data);
        },
        onclose: function() {
          // close modal
        },
        customizations: {
          title: "HJ - FOUNDATION",
          description: "Donation Payments",
          logo: "https://hadiqatuljannahfoundation.com/assets/img/logo-2.png",
        },
      });
    }
 
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $("#submit").click(function(e) {
    
            e.preventDefault();
            
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone_number').val();
            var currency = $('#currency').val();
            var amount = $('#amount').val();
            
            if(name === "" || email === "" || phone === ""|| amount === ""){
                swal("Error", "Please Fill all fields","error");
            }else{
            
                $.ajax({
                    url: "{{ route('GetuniqueIDTX') }}",
                    data: {name:name,email:email,phone:phone,currency:currency,amount:amount},
                    type : 'POST',
                    success: function(response){
                        
                        makePayment(response,currency,amount,email,phone,name);

                    }
                });
            }

    });

  </script>