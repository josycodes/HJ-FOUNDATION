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
                    <h2>Frequently Asked Questions</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Frequently Asked Questions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="faq-area ptb-100">
    <div class="container">
        <div class="faq-accordion-content">
            <ul class="accordion">
                @foreach ($question as $k => $q )
                <li class="accordion-item">
                    <a class="accordion-title <?php if($k==0){ echo 'active';}?>" href="javascript:void(0)">
                        <i class="flaticon-plus"></i>
                        {{ $q->question }}
                    </a>
                    <p class="accordion-content <?php if($k==0){ echo 'show';}?>"><?php print $q->answer?></p>
                </li>
               @endforeach
            </ul>
        </div>
    </div>
</section>

@include('layoutpages.footer')