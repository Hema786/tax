@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tax Filling</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Tax Filling</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
	$(document).ready(() => {
  let url = location.href.replace(/\/$/, "");
 
  if (location.hash) {
    const hash = url.split("#");
    $('#myTab a[href="#'+hash[1]+'"]').tab("show");
    url = location.href.replace(/\/#/, "#");
    history.replaceState(null, null, url);
    setTimeout(() => {
      $(window).scrollTop(0);
    }, 400);
  } 
   
  $('a[data-toggle="tab"]').on("click", function() {
    let newUrl;
    const hash = $(this).attr("href");
    if(hash == "#home") {
      newUrl = url.split("#")[0];
    } else {
      newUrl = url.split("#")[0] + hash;
    }
    newUrl += "/";
    history.replaceState(null, null, newUrl);
  });
});
	</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
		
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- content here -->
	
	
     
	 <ul class="nav nav-mytabs" id="myTab" role="tablist">
	 
  <li class="nav-item">
    <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">1. Personal Info</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="income-tab" data-toggle="tab" href="#income" role="tab" aria-controls="income" aria-selected="false">2. Income Sources</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="deduction-tab" data-toggle="tab" href="#deduction" role="tab" aria-controls="deduction" aria-selected="false">3. Deductions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="taxespaid-tab" data-toggle="tab" href="#taxespaid" role="tab" aria-controls="taxespaid" aria-selected="false">4. Taxes Paid</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="taxfilling-tab" data-toggle="tab" href="#taxfilling" role="tab" aria-controls="taxfilling" aria-selected="false">5. Tax Filing</a>
  </li>
</ul>

	<form action="{{route('tax.store')}}" method="post" class="form-horizontal main_form">
     @csrf
	<div class="tab-content mytab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
			<ul class="nav nav-mytabs inner_tabs" id="myTab" role="tablist">
	 
			  <li class="nav-item">
				<a class="nav-link active" id="personalinfo-tab" data-toggle="tab" href="#personalinfo" role="tab" aria-controls="personalinfo" aria-selected="true" aria-expanded="true">A. Personal Info</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="paddress-tab" data-toggle="tab" href="#paddress" role="tab" aria-controls="paddress" aria-selected="false">B. Address</a>
			  </li>
			</ul>
			<div class="tab-content mytab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="personalinfo" role="tabpanel" aria-labelledby="personalinfo-tab" >
				<h3>Permanent Information</h3>
				<div class="form-container">
				<div class="form-horizontal">
				<div class="heading">Please enter your information here.</div>
												<span>Personal Information</span>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" name="first_name" type="text" placeholder="First Name">
												</div>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" name="middle_name" type="text" placeholder="Middle Name">
												</div>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" type="text" name="last_name" placeholder="Last Name">
												</div>
												<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" name="gender" class="form-control">
													  <option value="">Select Gender</option>
													  <option value="male">Male</option>
													  <option value="female">Female</option>
													</select>
												</div>
												<div class="form-group">
													<i class="fa fa-calendar icon"></i>
													<input class="form-control" name="dob" type="date">
												</div>
												<div class="form-group">
													<i class="fa fa-id-card-o icon"></i>
													<input class="form-control" name="pan_number" type="text" placeholder="PAN Number">
												</div>
												<div class="form-group">
													<i class="fa fa-male icon"></i>
													<input class="form-control" name="father_name" type="text" placeholder="Father's Name">
												</div>
												<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" name="marital_status" class="form-control">
													  <option>Marital Status</option>
													  <option value="Prefer Not to Disclose">Prefer Not to Disclose</option>
													  <option value="married">Married</option>
													  <option value="unmarried">Unmarried</option>
													</select>
												</div>
												
												<a class="btn btn-default" id="paddress-tab" data-toggle="tab" href="#paddress" role="tab" aria-controls="paddress" aria-selected="false">Save</a>
												
												</div>
												</div>
												
												
				
			  </div>
			  <div class="tab-pane fade" id="paddress" role="tabpanel" aria-labelledby="paddress-tab">
				
				
				<h3>Your Address</h3>
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<div class="form-horizontal parralel_fields">
												<div class="heading">Address</div>
												<span>You can enter either your current or permanent address here.</span>
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" name="flat_number" placeholder="Flat/Door/Block Number*">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" name="premise_name" placeholder="Premise Name This field is optional.">
													</div>
												</div>
												</div>
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" name="street" placeholder="Road / Street This field is optional.">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" name="pincode" placeholder="Pincode *">
													</div>
												</div>
												</div>
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" name="area" placeholder="Area / Locality *">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" name="city" placeholder="Town / City *">
													</div>
												</div>
												</div>
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" name="state" class="form-control">
													  <option>Select State</option>
													  <option value="rajasthan">Rajsthan</option>
													  <option value="delhi">Delhi</option>
													</select>
												</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" name="country" class="form-control">
													  <option>Select Country</option>
													  <option value="india">India</option>
													  <option value="usa">Usa</option>
													</select>
												</div>
												</div>
												</div>
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" name="mobile_phone" placeholder="Mobile Phone number *">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="email" name="email_primary" placeholder="Email Address *">
													</div>
												</div>
												</div>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" type="text" name="email_secondary" placeholder="Email Address (secondary)">
												</div>
												
												<a class="btn btn-default" id="income-tab" data-toggle="tab" href="#income" role="tab" aria-controls="#income" aria-selected="false">Save</a>
											</div>
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
				
				
				
			  </div>
			</div>
			
		  </div>
		  <div class="tab-pane fade" id="income" role="tabpanel" aria-labelledby="income-tab">
			<ul class="nav nav-mytabs inner_tabs" id="myTab" role="tablist">
	 
			  <li class="nav-item">
				<a class="nav-link active" id="salary-tab" data-toggle="tab" href="#salary" role="tab" aria-controls="salary" aria-selected="true" aria-expanded="true">A. Salary</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="otherincome-tab" data-toggle="tab" href="#otherincome" role="tab" aria-controls="otherincome" aria-selected="false">B. Other Income</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="houseproperty-tab" data-toggle="tab" href="#houseproperty" role="tab" aria-controls="houseproperty" aria-selected="false">C. House Property</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="capitalgain-tab" data-toggle="tab" href="#capitalgain" role="tab" aria-controls="capitalgain" aria-selected="false">D. Capital Gain</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="bussinessprofession-tab" data-toggle="tab" href="#bussinessprofession" role="tab" aria-controls="bussinessprofession" aria-selected="false">E. Business & Profession</a>
			  </li>
			</ul>
			<div class="tab-content mytab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="salary" role="tabpanel" aria-labelledby="salary-tab" >
				
				<h3>Salary</h3>
							<p>
							<b>Do you have a Form-16?</b> <a href="">Click here to upload your Form-16 PDF</a> and avoid manual entry.
							<br>
							Your tax return will be automatically prepared.
							<br><br>
							Don't have a soft-copy? Use our <a href="">step-by-step-guide</a> to understand your Form-16.
							</p>
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<div class="form-horizontal">
												<div class="heading">Employer Details</div>
												<span></span>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" type="text" name="employer_name" placeholder="Name of the Employer *">
												</div>
												<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" name="employer_type" class="form-control">
													  <option>Employer Type/Category *</option>
													  <option value="Private">Private</option>
													  <option value="Central Government">Central Government</option>
													  <option value="State Government">State Government</option>
													  <option value="Public Sector Unit">Public Sector Unit</option>
													  <option value="Pensioner">Pensioner</option>
													</select>
												</div>
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Salary Information</div>
												<span>Please provide this information as per your Form-16 Part-B. 
You can match each item with the field number in your Form-16.</span>

                                                <label>1.) Gross Salary</label>   
												<div class="form-group">
												<label>1(a) - Salary as per section 17(1)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control"  type="text" name="salary_as_section">
												</div>
												<div class="form-group">
												<label> 1(b) - Value of perquisites under section 17(2)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" name="salary_as_perquisites">
												</div>
												<div class="form-group">
												<label> 1(c) - Profits in lieu of salary under section 17(3)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" name="salary_as_profit" placeholder="Last Name">
												</div>
												<br>
												<label>2. Exempt allowances under section 10 </label>
												<p>Please enter break down for 2. Exempt allowances under section 10. You can refer to your Form-16 for the data. For more help, click the sample button.</p>
												<div class="form-group">
												<label>HRA Exemption</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" name="hra_exemption">
												</div>
												<div class="form-group">
												<label>LTA Exemption</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" name="lta_exemption">
												</div>
												<div class="form-group">
												<label>Other (If Any)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" placeholder="Last Name" name="other_exemption">
												</div>
												<br>
												<label>3. Balance (1 - 2)</label>
												
												<br>
												<label>4. Deductions under section 16</label>
												<div class="form-group">
												<label>Standard deduction under section 16(ia)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" name="standard_deduction">
												</div>
												<div class="form-group">
												<label>Professional tax under section 16(iii)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" name="professional_tax">
												</div>
												<br>
												<br>
												<label>5. Income Chargeable under the head 'Salaries'</label>
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">TDS Details</div>

                                                <label>Tax Deducted at source on Salary </label>   
												<div class="form-group">
												<label>In your Form-16, find this under Part-A: Total of Amount of tax deposited / Remitted </label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" name="tds_deduction">
												</div>
												<br>
												
												<label>TAN of the Employer </label>   
												<div class="form-group">
												<label>In your Form-16, find this under Part-A - TAN of Deductor  </label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" name="tan_deduction">
												</div>
												
												<a class="btn btn-default" id="otherincome-tab" data-toggle="tab" href="#otherincome" role="tab" aria-controls="otherincome" aria-selected="false">Save</a>
												
											
											</div>
											

											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
				
				
			</div>
			<div class="tab-pane fade" id="otherincome" role="tabpanel" aria-labelledby="otherincome-tab" >
			
			
				<h3>Income from other sources</h3>
							<p>
							This section consists of interest income, dividend income, agricultural income and all other incomes excluding salary, income from house property or capital gains or business/profession.
							</p>
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<div class="form-horizontal">
												<div class="heading">Interest Income</div>
												<span></span>
												<label>Interest Income from Saving Bank </label>
												<p>You can also enter income from post-office saving deposits here.</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="interest_income_saving">
												</div>
												
												<br>
												<label>Interest Income from Deposits </label>
												<p>Interest from sweep accounts converted to FDs, post-office fixed <br>	 deposits also specified here </p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="interest_income_deposite">
												</div>
												
												<br>
												<p>Click here to add any other interest income (eg: interest from bonds, interest from tax refund, etc).</p>
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Other Income</div>
												<span></span>
												<label>Any Other Income </label>
												<p>Report any other income which is not part of Income from Salary,<br> House Property, Capital Gain or Business and Profession.<br>
Gifts can be declared as Income here. </p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="other_income">
												</div>
											
												
											</div>
											
											<br>
													
											<div class="form-horizontal">
												<div class="heading">Exempt Income</div>
												<span></span>
												<label>Dividend Income from Domestic Company </label>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="divident_income_domestic">
												</div>
												<br>
												<label>Dividend Income from Mutual Funds </label>
												<p>Dividend from investments in Mutual Funds, ULIPs, UTI</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="divident_income_mutual">
												</div>
												<br>
												<label>Interest Income from PPF </label>
												<p>Example: Interest earned on PPF</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="interest_income_ppf">
												</div>
												<br>
												<label>Any Other Exempt Income </label>
												<p>Specify any other exempt income</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="other_excempt_income">
												</div>
												<br>

											</div>
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Agriculture Income</div>
												<span></span>
												<label>Gross Agriculture Receipt</label>
												<p>Specify gross agricultural income</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="gross_agriculture">
												</div>
												<br>
												<label>Expenditure On Agriculture</label>
												<p>Specify expenditure on agriculture sources</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="expenditure_agriculture">
												</div>
												<br>
												<label>Unabsorbed Agriculture Loss</label>
												<p>Specify unabsorbed agriculture loss</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="unabsorbed_agriculture">
												</div>
												<br>
												<label>Net Agriculture Receipt Auto-calculated </label>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text" name="net_agriculture">
												</div>
												<br>

											<a class="btn btn-default" id="houseproperty-tab" data-toggle="tab" href="#houseproperty" role="tab" aria-controls="houseproperty" aria-selected="false">Save</a>
												
											
											</div>
											

											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
			
			
			</div>
			<div class="tab-pane fade" id="houseproperty" role="tabpanel" aria-labelledby="houseproperty-tab" >
			
			<h3>Income From House Property</h3>
							<p>
							In case you paid <b>Interest on Housing Loan for house property you live in</b> (self-occupied property) or If you <b>own a house</b> and are <b>earning rent on it</b> then specify the details here.
<br><br>
<b>Please Note:</b> If you are paying rent to someone else, you should not enter the amount in this section.
							</p>
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<div class="form-horizontal">
												<div class="heading">House Property Details</div>
												<span></span>
												<label>Type of House Property</label>
												<div class="form-group">
												<select title="Pick a number" name="house_property_type" class="form-control">
													  <option value="Self-Occupied House Property">Self-Occupied House Property</option>
													  <option value="Rental Property">Rental Property</option>
													  <option value="Deemed Let Out Property">Deemed Let Out Property</option>
												</select>
												</div>
												
												<br>
												
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Interest paid on housing loan for this house property</div>
												<span></span>
												
												<p>If you have a housing loan against a house you live in then you can claim a tax deduction of upto Rs. 2,00,000
</p>
												<label>Interest paid on loan for this house property </label>
												<div class="form-group">					
					
													<input class="form-control" type="text" name="interest_paid_loan">
												</div>
											
												
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Interest paid during the pre-construction period of house property</div>
												<span></span>
												<br>
												<label>The financial year previous to completion of construction</label>
												<p>For example: If construction completed on 17th July 2010, you need to specify 2009-10 </p>
												<div class="form-group">					
													<input class="form-control" type="date" name="financial_year_date">
												</div>
												<br>
												<label>Total interest amount paid during the pre-construction period </label>
												<p>Interest paid from date of borrowing till 31st March of previous financial year. </p>
												<div class="form-group">					
													<input class="form-control" type="text" name="total_interest_paid">
												</div>
												<br>
												
												<a class="btn btn-default" id="capitalgain-tab" data-toggle="tab" href="#capitalgain" role="tab" aria-controls="capitalgain" aria-selected="false">Save</a>
											</div>
											<br>
											
											
											<!------<div class="form-horizontal parralel_fields">
												<div class="heading">Address</div>
												<span>You can enter either your current or permanent address here.</span>
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" placeholder="Flat/Door/Block Number*">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" placeholder="Premise Name This field is optional.">
													</div>
												</div>
												</div>
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" placeholder="Road / Street This field is optional.">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" placeholder="Pincode *">
													</div>
												</div>
												</div>
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" placeholder="Area / Locality *">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" placeholder="Town / City *">
													</div>
												</div>
												</div>
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" class="form-control">
													  <option>Select State</option>
													  <option value="male">Rajsthan</option>
													  <option value="female">Delhi</option>
													</select>
												</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" class="form-control">
													  <option>Select Country</option>
													  <option value="male">India</option>
													  <option value="female">Usa</option>
													</select>
												</div>
												</div>
												</div>

										
											</div>----->
											
											<br>
											
												
										
											

											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
			
			</div>
			<div class="tab-pane fade" id="capitalgain" role="tabpanel" aria-labelledby="capitalgain-tab" >
			
			<h3>Income From Capital Gains</h3>
							<p>
							Did you sell any asset (shares, property, house, land, building, etc) between the period of April 1, 2019 to March 31, 2020?
							<br><br>
							Note: Intra-day trading and F&O trading is considered as business income. Go to Business & Profession page and enter the data in the relevant fields.
							</p>
							<div class="row">
								<div class="col-sm-4">
								<h3>Capital gains Summary</h3>
								<p>
								Capital gains Summary Upload a capital gains report (generated by ZERODHA/CAMS/KARVY) or Add sale entries manually to view capital gains summary.
								</p>
								</div>
								<div class="col-sm-8">
									<div class="uploads_background">
									<div class="design_new">
									<h3>Upload Capital Gains Report</h3>
									<a href="">Upload File</a>
									</div>
									<p>
									ClearTax supports import of capital gain transactions generated by ZERODHA/CAMS/KARVY.
									<br><br>
									If your brokerage or fund house is not supported, you can also import data in bulk using
									</p>
									</div>
								</div>
							</div>
							<br>
							<center><p>Add capital gains data from Mutual Funds / Equity Shares by uploading ZERODHA, CAMS and KARVY reports.</p></center>
							<br>
							<div class="design_image">
								<img src="../public/taxkamkar/assets/img/zerodha-logo.png">
								<img src="../public/taxkamkar/assets/img/cams_logo.png">
								<img src="../public/taxkamkar/assets/img/Karvy-Group-Logo.png">
							</div>
			
			</div>
			<div class="tab-pane fade" id="bussinessprofession" role="tabpanel" aria-labelledby="bussinessprofession-tab" >
				<h3>Dashboard for Income from Business and Profession</h3>
							<br>
							<br>
			</div>
			</div>
			
		  </div>
		  <div class="tab-pane fade" id="deduction" role="tabpanel" aria-labelledby="deduction-tab">
			
			

			<ul class="nav nav-mytabs inner_tabs" id="myTab" role="tablist">
	 
			  <li class="nav-item">
				<a class="nav-link active" id="section_deduction-tab" data-toggle="tab" href="#section_deduction" role="tab" aria-controls="section_deduction" aria-selected="true" aria-expanded="true">A. Section 80 Deductions</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="more_deduction-tab" data-toggle="tab" href="#more_deduction" role="tab" aria-controls="more_deduction" aria-selected="false">B. More Deductions</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="other_deduction-tab" data-toggle="tab" href="#other_deduction" role="tab" aria-controls="other_deduction" aria-selected="false">C. Other Deductions</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="investment_details-tab" data-toggle="tab" href="#investment_details" role="tab" aria-controls="investment_details" aria-selected="false">D. Investment Details</a>
			  </li>
			  
			</ul>
			<div class="tab-content mytab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="section_deduction" role="tabpanel" aria-labelledby="section_deduction-tab" >
				
				<h3>Deductions Under Section 80</h3>
							
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<div class="form-horizontal">
												<div class="heading">Investments under Section 80C</div>
												<span>You can claim a deduction of upto Rs. 1,50,000 under this section. <br>
Add up all your 80C deduction and specify total amount here.</span>
												<label>Investment for Section 80C </label>
												<div class="form-group">					
					
													<input class="form-control" type="text" name="investment_under_section">
												</div>
												<p>Section 80C includes contributions to LIC / Insurance premium, PPF, EPF, NSC, ELSS Mutual Funds, Children school fees, Payment of Principal in Housing Loan & other eligible items.</p>
												<br>
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Section 80TTA: Deduction for Interest earned on Savings Bank Account</div>
												<span></span>
												
												
												<label>Interest earned on Savings Bank Account</label>
												
												<div class="form-group">					
					
													<input class="form-control" type="text" name="interest_earned_saving_account">
												</div>
												<br>
												<p>You do not need to enter a value for the 80TTA deduction here.
ClearTax automatically picks it up from your declared interest income from Saving Bank account and Post office deposits..</p>
<br>
												<a class="btn btn-default" id="more_deduction-tab" data-toggle="tab" href="#more_deduction" role="tab" aria-controls="more_deduction" aria-selected="false">Save</a>
											</div>
											
											<br>
											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
				
				
			</div>
			<div class="tab-pane fade" id="more_deduction" role="tabpanel" aria-labelledby="more_deduction-tab" >
			
			
				<h3>More deductions Under Section 80</h3>
							
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<div class="form-horizontal">
												<div class="heading">Section 80D: Deductions for Medical Insurance</div>
												<span>Deductions for Medical Insurance or Preventive Health Check-Up fees or Medical Expenditure incurred by you.</span>
												<label>Medical Insurance Premium</label>
												<div class="form-group">					
					
													<input class="form-control" type="text" name="medical_insurance_premium">
												</div>
												<p>Medical insurance premium paid by you for Self, Spouse, Dependent Children and Parents.</p>
												<br><br>
												<label>Preventive Health Check-Up Fees</label>
												<div class="form-group">					
					
													<input class="form-control" type="text" name="health_checkup_fee">
												</div>
												<p>Health check-up expenses paid by you for Self, Spouse, Dependent Children and Parents.</p>
												<br>
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Section 80E - Education Loan on higher studies (Graduate or PostGraduate)</div>
												<span>You can claim tax deduction on the interest paid on an education loan for higher studies</span>
												
												
												<label>Interest on higher education loan paid this year</label>
												<p>Interest paid by you on loan taken out by you. Loan can be for yourself or your spouse or your children </p>
												<div class="form-group">					
					
													<input class="form-control" type="text" name="interest_on_higher_education">
												</div>
											
												
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Section 80CCC - Contribution to Pension Plan / Annuity Fund</div>
												<span></span>
												
												
												<label></label>
												<p>Contribution amount to Pension Plan / Annuity Fund for Section 80CCC</p>
												<div class="form-group">					
					
													<input class="form-control" type="text" name="contribution_amount">
												</div>
											
												
											</div>
											
											<br>
											<div class="form-horizontal">
												<div class="heading">Section 80CCD (1) and (1B) - Employee Contribution to New Pension Scheme (NPS).</div>
												<span>Employee's contribution to the New Pension System (NPS).</span>
												
												<br>
												<p>Please enter your own contribution to NPS.<br>
ClearTax will automatically split it into Section 80 CCD(1) and CCD(1B) in your tax return.<br>
The split will be optimised to give you maximum tax savings.</p>
												<br>
												
												<label>Contribution towards Section 80CCD(1)</label>
												<div class="form-group">					
					
													<input class="form-control" type="text" name="contribution_to_nps">
												</div>
											
												
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Section 80CCD(2) - Employer Contribution in NPS</div>
												<span></span>
												
												
												<label>Employers contribution towards NPS (upto 10% of Salary).</label>
												<div class="form-group">					
					
													<input class="form-control" type="text" name="employer_contribution">
												</div>
											
												<button type="submit" class="btn btn-default"><i class="fa fa-arrow-right">&nbsp;SAVE</i></button>
											</div>

											<br>
											
											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
			
			
			</div>
			<div class="tab-pane fade" id="other_deduction" role="tabpanel" aria-labelledby="other_deduction-tab" >
			
			<h3>More deductions Under Section 80DD and Section 80U (For Disabilities)</h3>
							
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<div class="form-horizontal">
											<div class="heading">Section 80DD - Disabled dependent deduction. (Spouse/Children/Parents)</div>
											<div class="form_btn">
												<a class="button_long" href="">Click here if you have invested</a>
												<a class="button_long" href="">Click here if you have invested</a>
											</div>
											</div>
											<br>
											<div class="form-horizontal">
											<div class="heading">Section 80U - Disability</div>
											<div class="form_btn">
												<a class="button_long" href="">Click here if you have invested</a>
												<a class="button_long" href="">Click here if you have invested</a>
											</div>
											</div>
											<br>
											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
											<br><br>
						
						
					
			
			</div>
			<div class="tab-pane fade" id="investment_details" role="tabpanel" aria-labelledby="investment_details-tab" >
			
			
			<h3>Investment made in Extended Period</h3>
							<p>
							Last date for Tax Saving Investments extended from 31 March 2020 to 31 Jul 2020 for AY2020-21.
							<br>
							If you have <b>made any investments in this extended period</b> towards claming <b>deductions for AY2020-21</b>, you <b>need to fill this section</b>
							<br><br>
							<b>Please Note:</b> If you have made any investments between 1 Apr 2020 - 31 Jul 2020 for AY2021-22 you should not enter the details here
							</p>
							<br><br>
								<a class="button_long" href="">Click here if you have invested</a>
							<br><br>
			
			
			</div>
			
			</div>
			
			
		  </div>
		  <div class="tab-pane fade" id="taxespaid" role="tabpanel" aria-labelledby="taxespaid-tab">
			
			
			
			<ul class="nav nav-mytabs inner_tabs" id="myTab" role="tablist">
	 
			  <li class="nav-item">
				<a class="nav-link active" id="tds-tab" data-toggle="tab" href="#tds" role="tab" aria-controls="tds" aria-selected="true" aria-expanded="true">A. TDS</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="self_tax_payment-tab" data-toggle="tab" href="#self_tax_payment" role="tab" aria-controls="self_tax_payment" aria-selected="false">B. Self Tax Payments</a>
			  </li>
			</ul>
			<div class="tab-content mytab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tds" role="tabpanel" aria-labelledby="tds-tab" >
			
			
			<h3>Taxes Deducted/Collected at Source</h3>
							
							<p>Specify TDS/TCS which was deducted between the period of April 1, 2019 to March 31, 2020.</p>
							<br>
							<p>Please Note : Tax deductions from your Salary by your employer should be entered here.</p>
							<br>
							<div class="Note">
								<h5>Do you have a Form 26AS? Click here to upload your Form 26AS and avoid manual entry.</h5>
							</div><br>
							
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<div class="form-horizontal">
												<div class="heading">TDS on Salary Income</div>
												<span>These are your Salary TDS entries. If you have more entries to add, please add them on Income from Salary Page.</span>
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Non Salary TDS</div>
												<span>In this section, add TDS entries on interest income, professional or consulting income, etc. (Other than TDS on Salary and Sale of Immovable Property).</span>
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">TDS on Sale/Rent of Immovable Property</div>
												<span>If you sell/rent land, house, property or building etc (immovable property) etc, the buyer/tenant may have deducted TDS at the rate of 1% on the sale price of the property/rental and issued you a TDS certificate.You need to specify those TDS deduction details here.</span>
											</div>
											
											<br>
											
											<div class="form-horizontal">
												<div class="heading">Taxes Collected at Source (TCS)</div>
												<span>In this section, you can add TCS entries (For example - on purchase of cars).
												</span>
											</div>
											
											<br>
											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
			
			
			</div>
			<div class="tab-pane fade" id="self_tax_payment" role="tabpanel" aria-labelledby="self_tax_payment-tab" >
			
			
			<h3>Summary of Taxes Paid: Advance Tax and Self Assessment Tax</h3>
							<br>
							<center><span>Would you like to add entry on Taxes Paid?</span></center>
							<br>
							<p>Add entries here if you voluntarily deposited taxes to the government. Note: This is separate from TDS. This is tax you deposited to the government via Challan 280.</p>
							<br>
							
							<br>
							
							<div class="container">
								<div class="row">
									<div class="col-sm-6">
										<center><a class="left_btn" href="">Add Entry</a></center>
									</div>
									<div class="col-sm-6">
										<center><a class="right_btn" href="">Go To Next >></a></center>
									</div>
								</div>
							</div>
			
			
			
			</div>
			</div>
			
			
			
		  </div>
		  <div class="tab-pane fade show" id="taxfilling" role="tabpanel" aria-labelledby="taxfilling-tab">
			
			
			<center><h3>Great, You have no tax due!</h3><center>
					
					<center><a class="btn_middel" href="">Proceed To E-Filling</a></center>
			
			
		  </div>
	</div>
	</form>
	
	 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	
	<script>
	$(document).ready(() => {
  let url = location.href.replace(/\/$/, "");
 
  if (location.hash) {
    const hash = url.split("#");
    $('#myTab a[href="#'+hash[1]+'"]').tab("show");
    url = location.href.replace(/\/#/, "#");
    history.replaceState(null, null, url);
    setTimeout(() => {
      $(window).scrollTop(0);
    }, 400);
  } 
   
  $('a[data-toggle="tab"]').on("click", function() {
    let newUrl;
    const hash = $(this).attr("href");
    if(hash == "#home") {
      newUrl = url.split("#")[0];
    } else {
      newUrl = url.split("#")[0] + hash;
    }
    newUrl += "/";
    history.replaceState(null, null, newUrl);
  });
});
	</script>

					
        </div>
    </div>
</div>






<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

       
    </div>

@endsection