<?php
$title = 'HJ Foundation | Where charity lives'; 
$active5='active';
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
                    <h2>Membership Categories</h2>
                    <ul>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Membership Categories</li>
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
<?php print $member->member_cat; ?>
                <p>Special Membership Categories</p>
                <div class="table-responsive">
                    <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>CATEGORIES</th>
                        <th>ENTRANCE (N)</th>
                        <th>ANNUAL DUES (N)</th>
                    </tr>
                    <tr>
                        <td>BENEFACTOR</td>
                        <td>500,000</td>
                        <td>20,000</td>
                    </tr>
                    <tr>
                        <td>SPONSOR</td>
                        <td>250,000</td>
                        <td>20,000</td>
                    </tr>
                    <tr>
                        <td>SUSTAINER</td>
                        <td>100,000</td>
                        <td>20,000</td>
                    </tr>
                    <tr>
                        <td>SUPPORTING DONOR</td>
                        <td>50,000</td>
                        <td>10,000</td>
                    </tr>
                    <tr>
                        <td>PARTICIPATE DONOR</td>
                        <td>25,000</td>
                        <td>10,000</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layoutpages.footer')