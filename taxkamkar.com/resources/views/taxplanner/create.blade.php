@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tax Planner</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Tax Planner</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>

<style>
        #heading {
        text-transform: uppercase;
        color: #335eea;
        font-weight: normal
    }
    
    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }
    
    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 80%;
        margin: 0px auto;
        padding-bottom: 20px;
        position: relative
    }
    
    .form-card {
        text-align: left
    }
    
    #msform fieldset:not(:first-of-type) {
        display: none
    }
    
    #msform input,
    #msform textarea, #msform select {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        background-color: transparent;
        font-size: 16px;
        letter-spacing: 1px
    }
    
    #msform input[type=checkbox],
    input[type=radio] {
        width: auto !important;
    }
    
    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #335eea;
        outline-width: 0
    }
    
    #msform .action-button {
        width: auto;
        background: #335eea;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }
    
    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92
    }
    
    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }
    
    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }
    
    .card {
        z-index: 0;
        border: none;
        position: relative
    }
    
    .fs-title {
        font-size: 25px;
        color: #335eea;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }
    
    .purple-text {
        color: #335eea;
        font-weight: normal
    }
    
    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }
    
    .fieldlabels {
        color: gray;
        text-align: left
    }
    
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }
    
    #progressbar .active {
        color: #335eea
    }
    
    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 24%;
        float: left;
        position: relative;
        font-weight: 400
    }
    
    #progressbar #first:before {
        font-family: FontAwesome;
        /*content: "\f00c"*/
        content: "1";
    }
    
    #progressbar #second:before {
        font-family: FontAwesome;
        content: "2";
    }
    
    #progressbar #third:before {
        font-family: FontAwesome;
        content: "3";
    }
    
    #progressbar #fifth:before {
        font-family: FontAwesome;
        content: "4";
    }
    
    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }
    
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }
    
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #335eea
    }
    
    .progress {
        height: 6px
    }
    
    .progress-bar {
        background-color: #335eea
    }
    
    .fit-image {
        width: 100%;
        object-fit: cover
    }
    
    #progressbar li {
    	cursor: pointer;
    }
    .error-text {
        font-size: 14px;
        position: relative;
        bottom: 74px;
        color: #ff2828;
        font-size: 12px;
        line-height: 15px;
        padding-top: 2px;
        visibility: hidden;
        position: absolute;
        display: block;
        right: 20px;
    }
    .canvasjs-chart-credit {display:none;}
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Tax Planner</h2>
                <p>We need the information to help you plan your taxes smartly</p>
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="first"><strong>Personal Information</strong></li>
                        <li id="second"><strong>Income Details</strong></li>
                        <li id="third"><strong>Tax Saving Invest</strong></li>
                        <li id="fifth"><strong>Analyse Tax Liability</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br>
                    
                	<!-- step 1 -->
                    <fieldset id="formstep1" class="animated3 fadeInRight">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-4">
                                    <label class="fieldlabels">What's Your Age ? *</label> 
                                    <input id="age" type="number" name="age" placeholder="What's Your Age ?" /> 
                                    <span id="age_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                                <div class="col-4">
                                </div>
                                <div class="col-4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="fieldlabels">Risk Appetite *</label> 
                                    <br>
                                    <select id="risk_appetite" name="risk_appetite">
                                    	<option value>Select risk Appetite</option>
                                    	<option value="High">High</option>
                                    	<option value="Medium">Medium</option>
                                    	<option value="Low">Low</option>
                                    </select>
                                    <span id="risk_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4"></div>
                            </div>
                        </div>
                        <input id="nextsubmit1" type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    
                	<!-- step 2 -->
                    <fieldset id="formstep2" class="animated3">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-4">
                                    <label class="fieldlabels">Gross Income(From all sources) *</label> 
                                    <input type="number" id="gross_income" name="gross_income" placeholder="Annual Income From All Sources" />
                                    <span id="gross_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                                <div class="col-4">
                                    <label class="fieldlabels">Basic Salary *</label> 
                                    <input type="number" id="basic_salary" name="basic_salary" placeholder="Basic Salary Inclusive of DA" />
                                	<span id="basic_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                                <div class="col-4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="fieldlabels">HRA As Part Of Your Salary (If Applicable)</label> 
                                    <input type="number" id="hra_salary" name="hra_salary" placeholder="HRA As Part Of Your Salary (If Applicable)" />
                                	<span id="hra_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                                <div class="col-4">
                                    <label class="fieldlabels">Rent Payable</label> 
                                    <input type="number" id="rent_payable" name="rent_payable" placeholder="Rent Payable" /> 
                                	<span id="rent_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                	<label class="fieldlabels">Lives in Metro?</label> 
                                	<label class="radio-inline"> <input checked type="radio" name="live_location" id="yes_metro" value="yes" style="margin-bottom: 10px">Yes</label>
                                	<label class="radio-inline"> <input type="radio" name="live_location" id="no_metro" value="no" style="margin-bottom: 10px">No </label>
                                </div>
                            </div>
                        </div>
                        <input id="nextsubmit2" type="button" name="next" class="next action-button" value="Next" />
                        <input id="backsubmit1" type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    
                	<!-- step 3 -->
                    <fieldset id="formstep3" class="animated3">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Your Investment</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="fieldlabels">Interest Paid on Home Loan</label> 
                                    <input type="number" min="0" max="200000" id="interest_on_home_loan" name="interest_on_home_loan" placeholder="Interest Paid on Home Loan" />
                               		<span id="interest_on_home_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                                <div class="col-4">
                                    <label class="fieldlabels">Interest Paid on Let Out Property Loan</label> 
                                    <input type="number" id="interest_on_let_out_property" name="interest_on_let_out_property" placeholder="Interest Paid on Let Out Property Loan" />
                                    <span id="interest_on_let_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                                <div class="col-4">
                                    <label class="fieldlabels">Basic Deductions - 80C</label> 
                                    <input type="number" min="0" max="150000" id="c_deduction" name="elss" placeholder="Basic Deductions - 80C" />
                                    <span id="c_deduction_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="fieldlabels">Medical Insurance - 80D</label> 
                                    <input type="number" min="0" max="100000" id="d_deduction" name="nps" placeholder="Medical Insurance - 80D" />
                                    <span id="d_deduction_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                                <div class="col-4">
                                	<label class="fieldlabels">Parent's age</label> 
                                    <input type="number" id="parents_age" name="other_investment" placeholder="Parent's age" />
                                    <span id="parents_age_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                                <div class="col-4">
                                    <label class="fieldlabels">NPS - 80 CCD(1B)</label> 
                                    <input type="number" id="ccd_deduction" name="other_investment" placeholder="NPS - 80 CCD(1B)" />
                                    <span id="ccd_deduction_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="fieldlabels">Other deductions</label> 
                                    <input type="number" id="other_deduction" name="employers_contriution" placeholder="Other deductions" />
                                    <span id="other_deduction_err" class="error-text commen-error show-error" style="visibility: visible;"></span>
                                </div>
                            </div>
                        </div>
                        <input id="analyze" type="button" name="next" class="next action-button" value="Analyse Tax Liability" />
                        <input id="backsubmit2" type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    
                	<!-- step 4 -->
                    
                	<!-- Results -->
                    <fieldset id="results" class="animated3">
                        <div class="form-card">
                            <br>
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                </div>
                                <div class="col-6 text-center">
                                    <div style="width:100%"><span>Taxable income</span>:- <span id="taxable_income">0</span></div>
                                    <div style="width:100%"><span>Surcharge</span>:- <span id="usable_surcharge">0</span></div>
                                    <div style="width:100%"><span>Income tax new</span>:- <span id="total_Fy_2021_new">0</span></div>
                                    <div style="width:100%"><span>Income tax old</span>:- <span id="total_Fy_1920_2021_old">0</span></div>
                                    <div style="width:100%"><span>Tax saving suggestion amount (80C)</span>:- <span id="tax_saving_sugestion_amount_80c">0</span></div>
                                    <div style="width:100%"><span>Tax saving suggestion amount (80CCD)</span>:- <span id="tax_saving_sugestion_amount_80ccd">0</span></div>
                                    <div style="width:100%">
                                        <span>Suggestion Breakups</span>
                                    	<ul>
                                        	<li id="ELSS" style="display:none"></li>
                                        	<li id="LIC" style="display:none"></li>
                                        	<li id="NPS" style="display:none"></li>
                                        	<li id="NSC" style="display:none"></li>
                                        	<li id="SCSS" style="display:none"></li>
                                        	<li id="PPF" style="display:none"></li>
                                        	<li id="Post_Office" style="display:none"></li>
                                    	</ul>
                                    </div>
                                    <?php /*
                                    <ul>
                                    	<li><span>Taxable income</span>:- <span id="taxable_income">0</span></li>
                                    	<li><span>Surcharge</span>:- <span id="surcharge">0</span></li>
                                    	<li><span>Usable Surcharge</span>:- <span id="usable_surcharge">0</span></li>
                                    	<li><span>Income tax new</span>:- <span id="total_Fy_2021_new">0</span></li>
                                    	<li><span>Income tax old</span>:- <span id="total_Fy_1920_2021_old">0</span></li>
                                    	<li><span>Exemption claimable</span>:- <span id="Excemption_claimable">0</span></li>
                                    	<li><span>Tax saving suggestion amount (80C)</span>:- <span id="tax_saving_sugestion_amount_80c">0</span></li>
                                    	<li><span>Tax saving suggestion amount (80CCD)</span>:- <span id="tax_saving_sugestion_amount_80ccd">0</span></li>
                                        <span>Suggestion Breakups</span>
                                    	<li id="ELSS" style="display:none"></li>
                                    	<li id="LIC" style="display:none"></li>
                                    	<li id="NPS" style="display:none"></li>
                                    	<li id="NSC" style="display:none"></li>
                                    	<li id="SCSS" style="display:none"></li>
                                    	<li id="PPF" style="display:none"></li>
                                    	<li id="Post_Office" style="display:none"></li>
                                    </ul>
                                    */ ?>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	var age_group;
	var risk_appetite;
	var gross_income;
	var basic_salary;
	var hra_salary;
	var rent_payable;
	var taxable_hra;
	var metro;
	var interest_on_home_loan;
	var interest_on_let_out_property;
	var c_deduction;
	var d_deduction;
	var ccd_deduction;
	var parents_age;
	var other_deduction;
	
	function thousands_separators(num) {
        var num_parts = num.toString().split(".");
        num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return num_parts.join(".");
    }
    
    function chart_generate(old, suggestion, newregime) {
        CanvasJS.addColorSet("greenShades",["#007CFF","#00D19D","#007CFF"]);
        var chart = new CanvasJS.Chart("chartContainer", {
        	colorSet: "greenShades",
        	title: {
        		text: "Tax Comparison"
        	},
        	axisY: {
        		title: "Amount",
        		includeZero: true,
        		prefix: "₹"
        	},
        	data: [{
        		type: "column",	
        		yValueFormatString: "₹#,###",
        		indexLabel: "{y}",
        		dataPoints: [
        			{ label: "Old TaxRegime", y: old },
        			{ label: "Our suggestion", y: suggestion },
        			{ label: "New TaxRegime", y: newregime }
        		]
        	}]
        });
        chart.render();
    }
    
	function calculate_hra(salary, hra_recieved, total_rent_paid, metro){
        var rent_10per = parseFloat(total_rent_paid) - (salary*0.1);
        if(rent_10per > 0) {
            var rent_10per_actual = rent_10per;
        } else {
            var rent_10per_actual = 0;
        }
        if(metro == 'yes') {
            var perpay = salary*0.5;
        } else {
            var perpay = salary*0.4;
        }
        var tax_excemption_allowed = Math.min(hra_recieved, rent_10per_actual, perpay);
        if(tax_excemption_allowed < hra_recieved){
            var gross_salary = parseFloat(hra_recieved) - parseFloat(tax_excemption_allowed);
        }
        
        return (tax_excemption_allowed);
	}
	
	function calculate_new_tax_after_sugesstions(gross_income, taxable_hra, basic_salary_excempted, interest_on_home_loan, interest_on_let_out_property, c_deduction, medical_insuarance_excemption, ccd_deduction, other_deduction) {
	    var taxable_income = (gross_income - taxable_hra - basic_salary_excempted - interest_on_home_loan - interest_on_let_out_property - c_deduction - medical_insuarance_excemption - ccd_deduction - other_deduction);

		var Fy_1920_2021_old;
		if(taxable_income <= 250000) {
			Fy_1920_2021_old = 0;
		} else if(taxable_income > 250000 && taxable_income <= 500000){
			Fy_1920_2021_old = 0.05*(taxable_income - 250000);
		} else if(taxable_income > 500000 && taxable_income <= 1000000) {
			Fy_1920_2021_old = (0.2*(taxable_income - 500000))+12500;
		} else {
			Fy_1920_2021_old = (0.3*(taxable_income - 1000000))+112500;
		}
		
		var surcharge;
		if(taxable_income <= 5000000){
			surcharge = 0;
		} else if(taxable_income > 5000000 && taxable_income <= 10000000) {
			surcharge = 0.1*Fy_1920_2021_old;
		} else if(taxable_income > 10000000 && taxable_income <= 20000000) {
			surcharge = 0.15*Fy_1920_2021_old;
		} else if(taxable_income > 20000000 && taxable_income <= 50000000) {
			surcharge = 0.25*Fy_1920_2021_old;
		} else {
			surcharge = 0.37*Fy_1920_2021_old;
		}
		
		var usable_surcharge;
		if(taxable_income <= 5000000){
			usable_surcharge = 0;
		} else if(taxable_income > 5000000 && taxable_income <= 5195895) {
			usable_surcharge = (taxable_income-5000000)*0.7
		} else if(taxable_income > 5195895 && taxable_income <= 10000000) {
			usable_surcharge = min(surcharge, (taxable_income-5000000)*0.7);
		} else if(taxable_income > 10000000 && taxable_income <= 10214695) {
			usable_surcharge = ((taxable_income-10000000)*0.7)+281250;
		} else if(taxable_income > 10214695 && taxable_income <= 20000000) {
			usable_surcharge = min(surcharge, ((taxable_income-10000000)*0.7)+281250);
		} else if(taxable_income > 20000000 && taxable_income <= 20930000) {
			usable_surcharge = ((taxable_income-20000000)*0.7)+871875;
		} else if(taxable_income > 20930000 && taxable_income <= 50000000) {
			usable_surcharge = min(surcharge, ((taxable_income-20000000)*0.7)+871875);
		} else if(taxable_income > 50000000 && taxable_income <= 53017827) {
			usable_surcharge = ((taxable_income-50000000)*0.7)+3703125;
		} else {
			usable_surcharge = min(surcharge, ((taxable_income-50000000)*0.7)+3703125);
		}
		
		var total_Fy_1920_2021_old = (Fy_1920_2021_old+usable_surcharge)*1.04;
		return (total_Fy_1920_2021_old);
	}
	
	function submitdata(){
		var age = $('#age').val();
		risk_appetite = $('#risk_appetite').val();
		// 0-60, 60-80 80 above
		if(age<60 && age > 0) {
			age_group = "0-60";
		} else if(age<80 && age>60) {
			age_group = "60-80";
		} else if(age>80) {
			age_group = "80-above";
		} else {
		    $('#age_err').text('this filed is compulsory');
			$("#formstep1").show();
			$("#formstep1").addClass("fadeInRight");
			$("#formstep2").hide();
			$("#formstep2").removeClass("fadeInRight");
			$("#formstep3").hide();
			$("#formstep3").removeClass("fadeInRight");
			$("#results").hide();
			$("#results").removeClass("fadeInRight");
		
			$("#second").removeClass("active");
			$("#third").removeClass("active");
			$("#fifth").removeClass("active");
			return 0;
		}
		if(risk_appetite == "" || risk_appetite == null) {
			$('#risk_err').text('Please select Risk Appetite');
			$("#formstep1").show();
			$("#formstep1").addClass("fadeInRight");
			$("#formstep2").hide();
			$("#formstep2").removeClass("fadeInRight");
			$("#formstep3").hide();
			$("#formstep3").removeClass("fadeInRight");
			$("#results").hide();
			$("#results").removeClass("fadeInRight");
		
			$("#second").removeClass("active");
			$("#third").removeClass("active");
			$("#fifth").removeClass("active");
			return 0;
		}
		

		gross_income = $('#gross_income').val();
		if(gross_income == "" || gross_income == null) {
			$('#gross_err').text('this filed is compulsory');
			$("#formstep1").hide();
			$("#formstep1").removeClass("fadeInRight");
			$("#formstep2").show();
			$("#formstep2").addClass("fadeInRight");
			$("#formstep3").hide();
			$("#formstep3").removeClass("fadeInRight");
			$("#results").hide();
			$("#results").removeClass("fadeInRight");
		
			$("#second").addClass("active");
			$("#third").removeClass("active");
			$("#fifth").removeClass("active");
			return 0;
		}
		basic_salary = $('#basic_salary').val();
		if(basic_salary == "" || basic_salary == null) {
			$('#basic_err').text('this filed is compulsory');
			$('#gross_err').text('this filed is compulsory');
			$("#formstep1").hide();
			$("#formstep1").removeClass("fadeInRight");
			$("#formstep2").show();
			$("#formstep2").addClass("fadeInRight");
			$("#formstep3").hide();
			$("#formstep3").removeClass("fadeInRight");
			$("#results").hide();
			$("#results").removeClass("fadeInRight");
		
			$("#second").addClass("active");
			$("#third").removeClass("active");
			$("#fifth").removeClass("active");
			return 0;
		}
		hra_salary = $('#hra_salary').val();
		if(hra_salary == "" || hra_salary == null) {
			hra_salary = 0;
		}
		rent_payable = $('#rent_payable').val();
		if(rent_payable == "" || rent_payable == null) {
			rent_payable = 0;
		}
		var basic_salary_excempted = 0;
		var basic_salary_taxable = 0;
		if(basic_salary > 50000){
			basic_salary_excempted = 50000
			basic_salary_taxable = basic_salary_excempted - 50000;
		} else {
			basic_salary_excempted = basic_salary;
			basic_salary_taxable = 0;
		}
		
		metro = $("input[name='live_location']:checked").val();

		taxable_hra = calculate_hra(basic_salary, hra_salary, rent_payable, metro);
		

		interest_on_home_loan = $('#interest_on_home_loan').val();
		if(interest_on_home_loan == "" || interest_on_home_loan == null) {
			interest_on_home_loan = 0;
		}
		interest_on_let_out_property = $('#interest_on_let_out_property').val();
		if(interest_on_let_out_property == "" || interest_on_let_out_property == null) {
			interest_on_let_out_property = 0;
		}
		c_deduction = $('#c_deduction').val();
		if(c_deduction == "" || c_deduction == null) {
			c_deduction = 0;
		}
		d_deduction = $('#d_deduction').val();
		if(d_deduction == "" || d_deduction == null) {
			d_deduction = 0;
		}
		ccd_deduction = $('#ccd_deduction').val();
		if(ccd_deduction == "" || ccd_deduction == null) {
			ccd_deduction = 0;
		}
		/*parents_age = $('#parents_age').val();
		if(parents_age == "" || parents_age == null) {
			$('#parents_age_err').text('Invalid Input');
			$("#formstep1").hide();
			$("#formstep1").removeClass("fadeInRight");
			$("#formstep2").hide();
			$("#formstep2").removeClass("fadeInRight");
			$("#formstep3").show();
			$("#formstep3").addClass("fadeInRight");
			$("#results").hide();
			$("#results").removeClass("fadeInRight");
		
			$("#second").addClass("active");
			$("#third").addClass("active");
			$("#fifth").removeClass("active");
			return 0;
		}*/
		other_deduction = $('#other_deduction').val();
		if(other_deduction == "" || other_deduction == null) {
			other_deduction = 0;
		}
		
		var medical_insuarance_excemption = 0;
		
		if(age < 60 && parents_age < 60) {
			if(d_deduction > 50000) {
				medical_insuarance_excemption = 50000;
			} else {
				medical_insuarance_excemption = d_deduction;
			}
		} else if(age < 60 && parents_age > 60) {
			if(d_deduction > 75000) {
				medical_insuarance_excemption = 50000;
			} else {
				medical_insuarance_excemption = d_deduction;
			}
		} else if(age > 60 && parents_age > 60) {
			if(d_deduction > 100000) {
				medical_insuarance_excemption = 50000;
			} else {
				medical_insuarance_excemption = d_deduction;
			}
		}
		
		var taxable_income = (gross_income - taxable_hra - basic_salary_excempted - interest_on_home_loan - interest_on_let_out_property - c_deduction - medical_insuarance_excemption - ccd_deduction - other_deduction);

		var Fy_1920_2021_old;
		if(taxable_income <= 250000) {
			Fy_1920_2021_old = 0;
		} else if(taxable_income > 250000 && taxable_income <= 500000){
			Fy_1920_2021_old = 0.05*(taxable_income - 250000);c
		} else if(taxable_income > 500000 && taxable_income <= 1000000) {
			Fy_1920_2021_old = (0.2*(taxable_income - 500000))+12500;
		} else {
			Fy_1920_2021_old = (0.3*(taxable_income - 1000000))+112500;
		}
		
		var Fy_2021_new;
		if(gross_income <= 250000) {
			Fy_2021_new = 0;
		} else if(gross_income > 250000 && gross_income <= 500000) {
			Fy_2021_new = 0.05*(gross_income - 250000);
		} else if(gross_income > 500000 && gross_income <= 750000) {
			Fy_2021_new = 0.1*(gross_income - 500000)+12500;
		} else if(gross_income > 750000 && gross_income <= 1000000) {
			Fy_2021_new = 0.15*(gross_income - 750000)+37500;
		} else if(gross_income > 1000000 && gross_income <= 1250000) {
			Fy_2021_new = 0.2*(gross_income - 1000000)+75000;
		} else if(gross_income > 1250000 && gross_income <= 1500000) {
			Fy_2021_new = 0.25*(gross_income - 1250000)+125000;
		} else {
			Fy_2021_new = 0.3*(gross_income - 1500000)+187500;
		}
		
		var surcharge;
		if(taxable_income <= 5000000){
			surcharge = 0;
		} else if(taxable_income > 5000000 && taxable_income <= 10000000) {
			surcharge = 0.1*Fy_1920_2021_old;
		} else if(taxable_income > 10000000 && taxable_income <= 20000000) {
			surcharge = 0.15*Fy_1920_2021_old;
		} else if(taxable_income > 20000000 && taxable_income <= 50000000) {
			surcharge = 0.25*Fy_1920_2021_old;
		} else {
			surcharge = 0.37*Fy_1920_2021_old;
		}
		
		var usable_surcharge;
		if(taxable_income <= 5000000){
			usable_surcharge = 0;
		} else if(taxable_income > 5000000 && taxable_income <= 5195895) {
			usable_surcharge = (taxable_income-5000000)*0.7
		} else if(taxable_income > 5195895 && taxable_income <= 10000000) {
			usable_surcharge = min(surcharge, (taxable_income-5000000)*0.7);
		} else if(taxable_income > 10000000 && taxable_income <= 10214695) {
			usable_surcharge = ((taxable_income-10000000)*0.7)+281250;
		} else if(taxable_income > 10214695 && taxable_income <= 20000000) {
			usable_surcharge = min(surcharge, ((taxable_income-10000000)*0.7)+281250);
		} else if(taxable_income > 20000000 && taxable_income <= 20930000) {
			usable_surcharge = ((taxable_income-20000000)*0.7)+871875;
		} else if(taxable_income > 20930000 && taxable_income <= 50000000) {
			usable_surcharge = min(surcharge, ((taxable_income-20000000)*0.7)+871875);
		} else if(taxable_income > 50000000 && taxable_income <= 53017827) {
			usable_surcharge = ((taxable_income-50000000)*0.7)+3703125;
		} else {
			usable_surcharge = min(surcharge, ((taxable_income-50000000)*0.7)+3703125);
		}
		
		var total_Fy_1920_2021_old = (Fy_1920_2021_old+usable_surcharge)*1.04;
		var total_Fy_2021_new = Fy_2021_new*1.04;
		
		var Excemption_claimable;
		if(taxable_income <= 500000) {
			Excemption_claimable = 0;
		} else if (taxable_income > 500000 && taxable_income < 700000) {
			Excemption_claimable = taxable_income - 500000;
		} else if (taxable_income >= 700000) {
			Excemption_claimable = 200000;
		}
		
		var tax_saving_sugestion_amount_80c;
		if(c_deduction <= 150000) {
			tax_saving_sugestion_amount_80c = 150000-c_deduction;
		} else {
			tax_saving_sugestion_amount_80c = 150000;
		}
		
		var tax_saving_sugestion_amount_80ccd;
		if(ccd_deduction <= 50000) {
			tax_saving_sugestion_amount_80ccd = 50000-ccd_deduction;
		} else {
			tax_saving_sugestion_amount_80ccd = 50000;
		}
		var percentage_of_allowable_amount_invested = tax_saving_sugestion_amount_80c/150000;
		
		$('#taxable_income').text(thousands_separators(taxable_income));
		$('#surcharge').text(thousands_separators(surcharge));
        $('#usable_surcharge').text(thousands_separators(usable_surcharge));
        $('#total_Fy_2021_new').text(thousands_separators(total_Fy_2021_new));
        $('#total_Fy_1920_2021_old').text(thousands_separators(total_Fy_1920_2021_old));
        $('#Excemption_claimable').text(thousands_separators(Excemption_claimable));
        $('#tax_saving_sugestion_amount_80c').text(thousands_separators(tax_saving_sugestion_amount_80c));
        $('#tax_saving_sugestion_amount_80ccd').text(thousands_separators(tax_saving_sugestion_amount_80ccd));
        
        //generate chart as per the result
        var new_c_deduction = c_deduction+tax_saving_sugestion_amount_80c;
        var new_ccd_deduction = ccd_deduction+tax_saving_sugestion_amount_80ccd;
        var new_payable_tax_suggestion = calculate_new_tax_after_sugesstions(gross_income, taxable_hra, basic_salary_excempted, interest_on_home_loan, interest_on_let_out_property, new_c_deduction, medical_insuarance_excemption, new_ccd_deduction, other_deduction);
        //alert(total_Fy_1920_2021_old +',' + new_payable_tax_suggestion +',' + total_Fy_2021_new);
        chart_generate(total_Fy_1920_2021_old, new_payable_tax_suggestion, total_Fy_2021_new);
        
        var breakup_from_algo_option_1 = null, breakup_from_algo_option_2 = null, breakup_from_algo_option_3 = null;
        
        $('#ELSS').hide();
        $('#NPS').hide();
        $('#NSC').hide();
        $('#LIC').hide();
        $('#SCSS').hide();
        $('#PPF').hide();
        
        if(risk_appetite == "High" && age <= 35){
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*150000;
        	$('#ELSS').show();
        	$('#ELSS').html("<span>ELSS:- </span>"+thousands_separators(breakup_from_algo_option_1));
        } else if(risk_appetite == "High" && age >= 36 && age < 45) {
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*100000;
        	$('#ELSS').show();
        	$('#ELSS').html("<span>ELSS:- </span>"+thousands_separators(breakup_from_algo_option_1));
        	breakup_from_algo_option_2 =  percentage_of_allowable_amount_invested*50000;
        	$('#NPS').show();
        	$('#NPS').html("<span>NPS:- </span>"+thousands_separators(breakup_from_algo_option_2));
        } else if(risk_appetite == "High" && age >= 46 && age < 60) {
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*100000;
        	$('#ELSS').show();
        	$('#ELSS').html("<span>ELSS:- </span>"+thousands_separators(breakup_from_algo_option_1));
        	breakup_from_algo_option_2 =  percentage_of_allowable_amount_invested*50000;
        	$('#NSC').show();
        	$('#NSC').html("<span>NSC:- </span>"+thousands_separators(breakup_from_algo_option_2));
        } else if(risk_appetite == "High" && age >60) {
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*50000;
        	$('#ELSS').show();
        	$('#ELSS').html("<span>ELSS:- </span>"+thousands_separators(breakup_from_algo_option_1));
        	breakup_from_algo_option_2 =  percentage_of_allowable_amount_invested*50000;
        	$('#LIC').show();
        	$('#LIC').html("<span>LIC:- </span>"+thousands_separators(breakup_from_algo_option_2));
        	breakup_from_algo_option_3 =  percentage_of_allowable_amount_invested*50000;
        	$('#SCSS').show();
        	$('#SCSS').html("<span>SCSS:- </span>"+thousands_separators(breakup_from_algo_option_3));
        } else if(risk_appetite == "Medium" && age <= 35){
			breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*50000;
			$('#ELSS').show();
        	$('#ELSS').html("<span>ELSS:- </span>"+thousands_separators(breakup_from_algo_option_1));
        	breakup_from_algo_option_2 =  percentage_of_allowable_amount_invested*50000;
        	$('#NPS').show();
        	$('#NPS').html("<span>NPS:- </span>"+thousands_separators(breakup_from_algo_option_2));
        	breakup_from_algo_option_3 =  percentage_of_allowable_amount_invested*50000;
        	$('#PPF').show();
        	$('#PPF').html("<span>PPF:- </span>"+thousands_separators(breakup_from_algo_option_3));
        } else if(risk_appetite == "Medium" && age >= 36 && age < 45) {
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*50000;
        	$('#ELSS').show();
        	$('#ELSS').html("<span>ELSS:- </span>"+thousands_separators(breakup_from_algo_option_1));
        	breakup_from_algo_option_2 =  percentage_of_allowable_amount_invested*100000;
        	$('#PPF').show();
        	$('#PPF').html("<span>PPF:- </span>"+thousands_separators(breakup_from_algo_option_2));
        } else if(risk_appetite == "Medium" && age >= 46 && age < 60) {
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*50000;
        	$('#ELSS').show();
        	$('#ELSS').html("<span>ELSS:- </span>"+thousands_separators(breakup_from_algo_option_1));
        	breakup_from_algo_option_2 =  percentage_of_allowable_amount_invested*100000;
        	$('#NSC').show();
        	$('#NSC').html("<span>NSC:- </span>"+thousands_separators(breakup_from_algo_option_2));
        } else if(risk_appetite == "Medium" && age >60) {
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*50000;
        	$('#LIC').show();
        	$('#LIC').html("<span>LIC:- </span>"+thousands_separators(breakup_from_algo_option_1));
        	breakup_from_algo_option_2 =  percentage_of_allowable_amount_invested*100000;
        	$('#SCSS').show();
        	$('#SCSS').html("<span>SCSS:- </span>"+thousands_separators(breakup_from_algo_option_2));
        } else if(risk_appetite == "Low" && age <= 35){
			breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*150000;
			$('#PPF').show();
        	$('#PPF').html("<span>PPF:- </span>"+thousands_separators(breakup_from_algo_option_1));
        } else if(risk_appetite == "Low" && age >= 36 && age < 45) {
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*150000;
        	$('#PPF').show();
        	$('#PPF').html("<span>PPF:- </span>"+thousands_separators(breakup_from_algo_option_1));
        } else if(risk_appetite == "Low" && age >= 46 && age < 60) {
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*50000;
        	$('#LIC').show();
        	$('#LIC').html("<span>LIC:- </span>"+thousands_separators(breakup_from_algo_option_1));
        	breakup_from_algo_option_2 =  percentage_of_allowable_amount_invested*100000;
        	$('#NSC').show();
        	$('#NSC').html("<span>NSC:- </span>"+thousands_separators(breakup_from_algo_option_2));
        } else if(risk_appetite == "Low" && age >60) {
        	breakup_from_algo_option_1 =  percentage_of_allowable_amount_invested*50000;
        	$('#LIC').show();
        	$('#LIC').html("<span>LIC:- </span>"+thousands_separators(breakup_from_algo_option_1));
        	breakup_from_algo_option_2 =  percentage_of_allowable_amount_invested*100000;
        	$('#SCSS').show();
        	$('#SCSS').html("<span>SCSS:- </span>"+thousands_separators(breakup_from_algo_option_2));
        }
	}

	$('#nextsubmit1').on('click', function(){
		$("#formstep1").hide();
		$("#formstep2").show();
		
		$("#formstep1").removeClass("fadeInRight");
		$("#formstep2").addClass("fadeInRight");
		
		$("#second").addClass("active");
	});
	

	$('#backsubmit1').on('click', function(){
		$("#formstep1").show();
		$("#formstep2").hide();
		
		$("#formstep2").removeClass("fadeInRight");
		$("#formstep1").addClass("fadeInRight");
		
		$("#second").removeClass("active");
	});
	

	$('#nextsubmit2').on('click', function(){
		$("#formstep2").hide();
		$("#formstep3").show();
		
		$("#formstep2").removeClass("fadeInRight");
		$("#formstep3").addClass("fadeInRight");
		
		$("#third").addClass("active");
	});
	
	$('#backsubmit2').on('click', function(){
		$("#formstep2").show();
		$("#formstep3").hide();
		
		$("#formstep3").removeClass("fadeInRight");
		$("#formstep2").addClass("fadeInRight");
		
		$("#third").removeClass("active");
	});
	
	$('#analyze').on('click', function(){
		$("#formstep3").hide();
		$("#results").show();
		
		$("#formstep3").removeClass("fadeInRight");
		$("#results").addClass("fadeInRight");
		
		$("#fifth").addClass("active");
		
		submitdata();
	});
	

	$('#first').on('click', function(){
		$("#formstep1").show();
		$("#formstep1").addClass("fadeInRight");
		$("#formstep2").hide();
		$("#formstep2").removeClass("fadeInRight");
		$("#formstep3").hide();
		$("#formstep3").removeClass("fadeInRight");
		$("#results").hide();
		$("#results").removeClass("fadeInRight");
		
		$("#second").removeClass("active");
		$("#third").removeClass("active");
		$("#fifth").removeClass("active");
	});
	
	$('#second').on('click', function(){
		$("#formstep1").hide();
		$("#formstep1").removeClass("fadeInRight");
		$("#formstep2").show();
		$("#formstep2").addClass("fadeInRight");
		$("#formstep3").hide();
		$("#formstep3").removeClass("fadeInRight");
		$("#results").hide();
		$("#results").removeClass("fadeInRight");
		
		$("#second").addClass("active");
		$("#third").removeClass("active");
		$("#fifth").removeClass("active");
	});
	
	$('#third').on('click', function(){
		$("#formstep1").hide();
		$("#formstep1").removeClass("fadeInRight");
		$("#formstep2").hide();
		$("#formstep2").removeClass("fadeInRight");
		$("#formstep3").show();
		$("#formstep3").addClass("fadeInRight");
		$("#results").hide();
		$("#results").removeClass("fadeInRight");
		
		$("#second").addClass("active");
		$("#third").addClass("active");
		$("#fifth").removeClass("active");
	});
    
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endsection