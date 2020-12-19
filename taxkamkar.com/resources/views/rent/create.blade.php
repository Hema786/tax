@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Rent Caluclator</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Rent Caluclator</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>

<!------ Include the above in your HEAD tag ---------->

<div class="container">    
    <div class="row">
    	<div class="col-sm-7">
            <div class="calculator-box order-2">
                <div class="calculator-inner-wrap animated3 type2" id="taxForm">
                    <div class="tab-list-wrap flex">
                        <h3>Generate Rent Receipt</h3>
                        <ul class="tab-list" id="tabList">
                            <li class="active active-list" id="step-1">1 <span>Basic details</span></li>
                            <li id="step-2" class="active-list">2 <span>Rented property</span></li>
                            <li id="step-3" class="active-list">3 <span>Duration</span></li>
                            <li id="step-4" class="active-list"></li>
                        </ul>
                        <div class="d-flex-desktop recipt-preview display-none" id="reciptPreview">
                            <p>Rent Receipt Preview</p>
                            <p id="reciptType">Format: Monthly</p>
                        </div>
                    </div>
                    <div class="step-1 step-inner-box animated3 show-section fadeInRight">
                        <h2>Just fill in few required details &amp; get started!</h2>
                        <div class="calculator-form mrgn-in-input">
                            <div class="from-elem-wrapper">
                                <div class="form-group-elem">
                                    <input type="text" class="input-elmn placeholder commen-input" placeholder="Full Name" id="fullName">
                                    <span class="error-text commen-error" style="visibility: hidden;"></span>
                                    <label class="floating-label">Enter full Name</label>
                                </div>
                            </div>
                            <div class="from-elem-wrapper">
                                <div class="form-group-elem">
                                    <input type="tel" class="input-elmn placeholder commen-input input-number" placeholder="Monthly Rent" id="monthlyRent">
                                    <span class="error-text commen-error" style="visibility: hidden;"></span>
                                    <label class="floating-label">Enter Monthly Rent</label>
                                </div>
                            </div>
                            <div class="calc-btn-box rquired"><button type="submit" class="bold commen-btn">Continue</button> <i class="arrow calc-arrow-icon"></i></div>
                        </div>
                    </div>
                    <div class="step-2 step-inner-box animated3" data-step="step-2">
                        <h4>Tell us more about the rented property</h4>
                        <div class="calculator-form mrgn-in-input">
                            <div class="from-elem-wrapper">
                                <div class="form-group-elem"><input type="text" class="input-elmn placeholder commen-input" placeholder="Owner name" id="ownerName"> <span class="error-text commen-error" style="visibility: hidden;"></span> <label class="floating-label">Name of your house owner</label></div>
                            </div>
                            <div class="from-elem-wrapper">
                                <div class="form-group-elem"><input type="text" class="input-elmn placeholder uppercase" placeholder="Enter your house owner's PAN number (optional)?" id="panNumber"> <span class="error-text" style="visibility: hidden;"></span> <label class="floating-label">House owner's PAN number</label></div>
                            </div>
                            <div class="from-elem-wrapper">
                                <div class="form-group-elem"><input type="text" class="input-elmn placeholder commen-input" placeholder="Full address" id="address"> <span class="error-text commen-error" style="visibility: hidden;"></span> <label class="floating-label">Address of the rented property</label></div>
                            </div>
                            <div class="calc-btn-box rquired"><button type="submit" class="bold commen-btn" id="calcBtnStep1">Continue</button> <i class="arrow calc-arrow-icon"></i></div>
                        </div>
                    </div>
                    <div class="step-3 step-inner-box animated3" data-step="step-3">
                        <h4>Lastly, tell us the duration</h4>
                        <div class="calculator-form mrgn-in-input">
                            <div class="from-elem-wrapper">
                                <div class="form-group-elem">
                                    <div class="date" id="datetimepicker1"><input type="text" class="input-elmn placeholder commen-input" data-date-format="MM/DD/YYYY" placeholder="Start Date" id="starDate"> <span class="error-text commen-error" style="visibility: hidden;"></span> <span class="input-group-addon display-none" style="padding:0px !important; border:0px !important"></span> <label class="floating-label">Start date of rent receipts</label></div>
                                </div>
                            </div>
                            <div class="from-elem-wrapper">
                                <div class="form-group-elem">
                                    <div class="date" id="datetimepicker2"><input type="text" class="input-elmn placeholder commen-input" data-date-format="MM/DD/YYYY" placeholder="End Date" id="endDate"> <span class="error-text commen-error" style="visibility: hidden;"></span> <span class="input-group-addon display-none" style="padding:0px !important; border:0px !important"></span> <label class="floating-label">End date of rent receipts</label></div>
                                </div>
                            </div>
                            <div class="from-elem-wrapper mb25">
                                <div class="form-group-elem">
                                    <label class="commen-label">Rent receipt format</label>
                                    <div><label class="radio-btn type2 mrgn19"><input type="radio" class="radio-btn-input circle" checked="checked" name="receipt" id="monthly"> <span></span> Monthly</label> <label class="radio-btn type2"><input type="radio" class="radio-btn-input circle" name="receipt" id="quarterly"> <span></span> Quarterly</label></div>
                                    <span class="error-text"></span>
                                </div>
                            </div>
                            <div class="calc-btn-box rquired"><button type="submit" class="bold commen-btn" id="calcBtnStep2">Continue</button> <i class="arrow calc-arrow-icon"></i></div>
                        </div>
                    </div>
                    <div class="step-4 step-inner-box animated3" data-step="step-4">
                        <div class="calculator-form">
                            <div class="rent-recipt-block" id="previewBlock">
                                <div class="d-flex-desktop">
                                    <div>
                                        <h2 class="black bold uppercase">Rent Receipt</h2>
                                        <p class="period">Nov 2020</p>
                                    </div>
                                </div>
                                <p class="black">Received sum of ₹<span class="bold" id="rentPriview"></span> from <span class="underline capitalize" id="tenantPriview">Divesh Jangid</span> towards the rent of property located at <span id="addressPreview" class="underline capitalize">A-13</span>, for the period <span class="period">Nov 2020</span></p>
                                <div class="d-flex-desktop">
                                    <p class="black">Landlord Name:</p>
                                    <p id="ownerNamePriview" class="capitalize"></p>
                                </div>
                                <div class="d-flex-desktop">
                                    <p class="black">PAN Number:</p>
                                    <p id="ownerPanPriview" class="uppercase"></p>
                                </div>
                                <div class="two-btn">
                                    <div class="calc-btn-box"><button type="submit" class="bold click edit-btn">Edit</button></div>
                                    <div class="calc-btn-box"><button type="submit" class="bold click print-btn">Print all receipts</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="" style=" margin-top:50px">
            	<ul>
            		<li>If you don't receive HRA, you can now claim upto Rs. 60,000 deduction under Section 80GG.</li>
            		<br>
            		<li>Click here to calculate your tax as per Budget 2020.</li>
            		<br>
            		<li>If you receive HRA, you can use this calculator.</li>
            		<br>
            	</ul>
            </div>
        </div>
    </div>
    <div id="print-area-2" class="print-area display-none">
        <table cellpadding="0" cellspacing="0" style="page-break-after:always;padding:0;display:block;max-width:100%;width:710px;margin:0;font-family:arial;position:fixed;bottom:0" id="footer">
            <tr>
                <td></td>
            </tr>
        </table>
        <div id="inner-print-area-2" class="print-area"></div>
    </div>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none"></iframe>
</div>
<!-- Include Bootstrap Datepicker -->
@endsection