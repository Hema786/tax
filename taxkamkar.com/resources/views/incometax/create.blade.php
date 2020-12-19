@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Income Tax Caluclator</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Income Tax Caluclator</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>

<div class="container">
    <?php /* ?>
    <div class="row">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">1. Basic Details</a></li>
                <li><a href="#tab2" data-toggle="tab">2. Income Details</a></li>
                <li><a href="#tab3" data-toggle="tab">3. Basic Deductions - 80C</a></li>
                <li><a href="#tab4" data-toggle="tab">Section 3</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <div class="form_design">
                        <p>See how the latest budget impacts your tax calculation. Updated as per latest budget on 1 February, 2020.
                        </p>
                        <div class="form-group m20">
                            <label class="headLabel">Which Financial Year do you want to calculate taxes for?</label>
                            <div class="radio-container clearfix">
                                <div class="control-group">
                                    <label class="radio" style="width: 100%">
                                    <input checked="checked" id="Year" name="Year" type="radio" value="2020-2021">
                                    <span>FY </span>
                                    <span>2020-2021</span>
                                    <span class="label label-warning">Latest Budget</span>
                                    <span>(Return to be filed between 1st April 2021 - 31st March 2022)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="headLabel">Your age</label>
                            <div class="radio-container clearfix">
                                <div class="control-group">
                                    <label class="radio">
                                    <input checked="checked" data-val="true" data-val-required="The AgeGroup field is required." id="AgeGroup" name="AgeGroup" type="radio" value="NotSenior"> 0 to 60
                                    </label>
                                    <label class="radio">
                                    <input id="AgeGroup" name="AgeGroup" type="radio" value="Senior"> 60 to 80
                                    </label>
                                    <label class="radio">
                                    <input id="AgeGroup" name="AgeGroup" type="radio" value="SuperSenior"> 80 &amp; above
                                    </label>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs bottom_ul">
                            <li><a href="#tab2" data-toggle="tab" class="next action-button" >Next</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tab2 -->
                <div class="tab-pane" id="tab2">
                    <div class="form_design">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="TaxableSalary" class="head">Income from Salary</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Salary before reducing exemptions (HRA, LTA), standard deduction &amp; professional tax</span>
                                </div>
                                <input class="form-control" id="TaxableSalary" name="TaxableSalary" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ExemptIncome" class="head">Exemptions &amp; Deductions from Salary</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">HRA, LTA, Standard Deduction, etc.</span>
                                </div>
                                <input class="form-control" id="ExemptIncome" name="ExemptIncome" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="InterestIncome" class="head">Income from Interest</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Includes interest from savings bank, deposits and other interest</span>
                                </div>
                                <input class="form-control" id="InterestIncome" name="InterestIncome" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="OtherIncome" class="head">Other Income</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Includes taxable freelancing income or any other taxable income</span>
                                </div>
                                <input class="form-control" id="OtherIncome" name="OtherIncome" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="OccupiedPropertyInterest" class="head">Interest Paid on Home Loan</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Interest paid on housing loan taken for self-occupied property</span>
                                </div>
                                <input class="form-control" id="OccupiedPropertyInterest" name="OccupiedPropertyInterest" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6" style="clear: left;">
                                <label for="RentalPropertyIncome" class="head">Rental Income Received</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Annual rent received on let-out property</span>
                                </div>
                                <input class="form-control" id="RentalPropertyIncome" name="RentalPropertyIncome" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="RentalPropertyInterest" class="head">Interest Paid on Loan</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Interest paid on housing loan taken for rented/let-out property</span>
                                </div>
                                <input class="form-control" id="RentalPropertyInterest" name="RentalPropertyInterest" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                        </div>
                        <ul class="nav nav-tabs bottom_ul">
                            <li><a href="#tab3" data-toggle="tab" class="next action-button" >Next</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tab 3 -->
                <div class="tab-pane" id="tab3">
                    <div class="form_design">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="Section80C" class="head">Basic Deductions - 80C</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Amount invested/paid in tax saving instruments such as PPF, ELSS mutual funds, LIC premium, etc.</span>
                                </div>
                                <input class="form-control" id="Section80C" name="Section80C" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="Section80TTA" class="head">Interest from Deposits - <span class="showTTA">80TTA</span><span class="showTTB" style="display: none;">80TTB</span></label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Amount of interest income on deposits in savings account (includes fixed/recurring deposit interest in case of senior citizen)</span>
                                </div>
                                <input class="form-control" id="Section80TTA" name="Section80TTA" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="Section80D" class="head">Medical Insurance - 80D</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Medical premium &amp; preventive health checkup fees paid for self &amp; family including parents</span>
                                </div>
                                <input class="form-control" id="Section80D" name="Section80D" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="Section80G" class="head">Donations to Charity - 80G</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Amount paid as donation to charitable insitutions or certain recognized funds</span>
                                </div>
                                <input class="form-control" id="Section80G" name="Section80G" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="Section80E" class="head">Interest on Educational Loan - 80E</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Amount of interest paid on loan taken for higher education</span>
                                </div>
                                <input class="form-control" id="Section80E" name="Section80E" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="Section80E" class="head">Interest on Housing Loan - 80EEA</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Amount of interest paid on housing loan sanctioned during FY 19-20</span>
                                </div>
                                <input class="form-control" id="Section80EEA" name="Section80EEA" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="Section80CCD" class="head">Employee's contribution to NPS - 80CCD</label>
                                <div class="tooltip-container">
                                    <img class="info-icon" src="https://assets1.cleartax-cdn.com/ct-frontend/images/elev_icon.svg">
                                    <span class="tooltip-text">Includes voluntary contribution to National Pension Scheme (NPS) under section 80CCD(1) and 80CCD(1B)</span>
                                </div>
                                <input class="form-control" id="Section80CCD" name="Section80CCD" type="tel" value="" onkeyup="inrFormatter(this)">
                            </div>
                        </div>
                        <ul class="nav nav-tabs bottom_ul">
                            <li><a href="#tab4" data-toggle="tab" class="next action-button" >Next</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tab 4 -->
                <div class="tab-pane" id="tab4">
                    <div class="form_design">
                        <div class="row m20">
                            <div style="text-align:center;">
                                <div style="text-align: center">
                                    <a href="/save/plan/22?utm_source=Income_Tax_Calculator&amp;utm_medium=display&amp;utm_campaign=Invest&amp;utm_content=80C_Full" target="_blank">
                                    <img src="https://assets1.cleartax-cdn.com/filing/images/Calculator-exhausted.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php */ ?>
    <iframe src="https://cleartax.in/paytax/TaxCalculatorEmbedUsers" frameborder="0" onload="iframeLoaded()" id="calculator-iframe" style="position: relative; min-height: 400px; width: 100%;" height="547px"></iframe>
</div>



<style>

.action-button {
    width: 100px;
    background: #ee0979;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 20px;
    margin: 10px 5px;
}
ul.nav.nav-tabs.bottom_ul {
    border-bottom: 0px;
}
ul.nav.nav-tabs.bottom_ul li a {
    background: #7fffd4;
    color: #000;
}
</style>

<script>
$(function(){
  var hash = window.location.hash;
  hash && $('ul.nav a[href="' + hash + '"]').tab('show');

  $('.nav-tabs a').click(function (e) {
    $(this).tab('show');
    var scrollmem = $('body').scrollTop();
    window.location.hash = this.hash;
    $('html,body').scrollTop(scrollmem);
  });
});
</script>

<script>
    
</script>
<!-- MultiStep Form -->


@endsection