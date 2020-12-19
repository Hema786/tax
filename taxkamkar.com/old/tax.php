<?php include('header.php'); ?>

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tax Filling</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Tax Filling</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
			
			
			
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">1. Personal Info</a></li>
                <li role="presentation"><a href="#income" aria-controls="income" role="tab" data-toggle="tab">2. Income Sources</a></li>
                <li role="presentation"><a href="#deduction" aria-controls="deduction" role="tab" data-toggle="tab">3. Deductions</a></li>
				<li role="presentation"><a href="#taxes" aria-controls="taxes" role="tab" data-toggle="tab">4. Taxes Paid</a></li>
				<li role="presentation"><a href="#filling" aria-controls="filing" role="tab" data-toggle="tab">5. Tax Filing</a></li>
            </ul>
 
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="info">
				
                    <ul class="nav nav-tabs inner_tabs" role="tablist">
						<li role="presentation" class="active"><a href="#personal_info" aria-controls="home" role="tab" data-toggle="tab">A. Personal Info</a></li>
						<li role="presentation"><a href="#address" aria-controls="profile" role="tab" data-toggle="tab">B. Address</a></li>
					</ul>
 
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="personal_info">
							<h3>Permanent Information</h3>
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<form class="form-horizontal">
												<div class="heading">Please enter your information here.</div>
												<span>Personal Information</span>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" type="text" placeholder="First Name">
												</div>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" type="text" placeholder="Middle Name">
												</div>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" type="text" placeholder="Last Name">
												</div>
												<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" class="form-control">
													  <option>Select Gender</option>
													  <option value="male">Male</option>
													  <option value="female">Female</option>
													</select>
												</div>
												<div class="form-group">
													<i class="fa fa-calendar icon"></i>
													<input class="form-control" type="date">
												</div>
												<div class="form-group">
													<i class="fa fa-id-card-o icon"></i>
													<input class="form-control" type="text" placeholder="PAN Number">
												</div>
												<div class="form-group">
													<i class="fa fa-male icon"></i>
													<input class="form-control" type="text" placeholder="Father's Name">
												</div>
												<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" class="form-control">
													  <option>Marital Status</option>
													  <option value="prefer">Prefer Not to Disclose</option>
													  <option value="married">Married</option>
													  <option value="unmarried">Unmarried</option>
													</select>
												</div>
												<button type="submit" class="btn btn-default"><i class="fa fa-arrow-right">&nbsp;SAVE</i></button>
											</form>
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>	
						<br><br>
						
						</div>
						<div role="tabpanel" class="tab-pane fade" id="address">
							<h3>Your Address</h3>
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<form class="form-horizontal parralel_fields">
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
												<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="text" placeholder="Mobile Phone number *">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<i class="fa fa-user icon"></i>
														<input class="form-control" type="email" placeholder="Email Address *">
													</div>
												</div>
												</div>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" type="text" placeholder="Email Address (secondary)">
												</div>
												
												<button type="submit" class="btn btn-default"><i class="fa fa-arrow-right">&nbsp;SAVE</i></button>
											</form>
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
					
					
                </div>
                <div role="tabpanel" class="tab-pane fade" id="income">
                    
					<ul class="nav nav-tabs inner_tabs" role="tablist">
						<li role="presentation" class="active"><a href="#salary" aria-controls="home" role="tab" data-toggle="tab">A. Salary</a></li>
						<li role="presentation"><a href="#other_income" aria-controls="profile" role="tab" data-toggle="tab">B. Other Income</a></li>
						<li role="presentation"><a href="#house_property" aria-controls="profile" role="tab" data-toggle="tab">C. House Property</a></li>
						<li role="presentation"><a href="#capital_gain" aria-controls="profile" role="tab" data-toggle="tab">D. Capital Gain</a></li>
						<li role="presentation"><a href="#business_profession" aria-controls="profile" role="tab" data-toggle="tab">E. Business & Profession</a></li>
					</ul>
 
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="salary">
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
											<form class="form-horizontal">
												<div class="heading">Employer Details</div>
												<span></span>
												<div class="form-group">
													<i class="fa fa-user icon"></i>
													<input class="form-control" type="text" placeholder="Name of the Employer *">
												</div>
												<div class="form-group">
													<i class="fa fa-arrow-down icon"></i>
													<select title="Pick a number" class="form-control">
													  <option>Employer Type/Category *</option>
													  <option value="Private">Private</option>
													  <option value="Central Government">Central Government</option>
													  <option value="State Government">State Government</option>
													  <option value="Public Sector Unit">Public Sector Unit</option>
													  <option value="Pensioner">Pensioner</option>
													</select>
												</div>
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Salary Information</div>
												<span>Please provide this information as per your Form-16 Part-B. 
You can match each item with the field number in your Form-16.</span>

                                                <label>1.) Gross Salary</label>   
												<div class="form-group">
												<label>1(a) - Salary as per section 17(1)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text">
												</div>
												<div class="form-group">
												<label> 1(b) - Value of perquisites under section 17(2)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text">
												</div>
												<div class="form-group">
												<label> 1(c) - Profits in lieu of salary under section 17(3)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" placeholder="Last Name">
												</div>
												<br>
												<label>2. Exempt allowances under section 10 </label>
												<p>Please enter break down for 2. Exempt allowances under section 10. You can refer to your Form-16 for the data. For more help, click the sample button.</p>
												<div class="form-group">
												<label>HRA Exemption</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text">
												</div>
												<div class="form-group">
												<label>LTA Exemption</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text">
												</div>
												<div class="form-group">
												<label>Other (If Any)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text" placeholder="Last Name">
												</div>
												<br>
												<label>3. Balance (1 - 2)</label>
												
												<br>
												<label>4. Deductions under section 16</label>
												<div class="form-group">
												<label>Standard deduction under section 16(ia)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text">
												</div>
												<div class="form-group">
												<label>Professional tax under section 16(iii)</label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text">
												</div>
												<br>
												<br>
												<label>5. Income Chargeable under the head 'Salaries'</label>
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">TDS Details</div>

                                                <label>Tax Deducted at source on Salary </label>   
												<div class="form-group">
												<label>In your Form-16, find this under Part-A: Total of Amount of tax deposited / Remitted </label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text">
												</div>
												<br>
												
												<label>TAN of the Employer </label>   
												<div class="form-group">
												<label>In your Form-16, find this under Part-A - TAN of Deductor  </label>
													<i class="fa fa-plus icon" style="top:68%;"></i>
													<input class="form-control" type="text">
												</div>
											<button type="submit" class="btn btn-default"><i class="fa fa-arrow-right">&nbsp;SAVE</i></button>	
											</form>
											

											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="other_income">
							
							<h3>Income from other sources</h3>
							<p>
							This section consists of interest income, dividend income, agricultural income and all other incomes excluding salary, income from house property or capital gains or business/profession.
							</p>
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<form class="form-horizontal">
												<div class="heading">Interest Income</div>
												<span></span>
												<label>Interest Income from Saving Bank </label>
												<p>You can also enter income from post-office saving deposits here.</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												
												<br>
												<label>Interest Income from Deposits </label>
												<p>Interest from sweep accounts converted to FDs, post-office fixed <br>	 deposits also specified here </p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												
												<br>
												<p>Click here to add any other interest income (eg: interest from bonds, interest from tax refund, etc).</p>
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Other Income</div>
												<span></span>
												<label>Any Other Income </label>
												<p>Report any other income which is not part of Income from Salary,<br> House Property, Capital Gain or Business and Profession.<br>
Gifts can be declared as Income here. </p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
											
												
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Exempt Income</div>
												<span></span>
												<label>Dividend Income from Domestic Company </label>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												<br>
												<label>Dividend Income from Mutual Funds </label>
												<p>Dividend from investments in Mutual Funds, ULIPs, UTI</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												<br>
												<label>Interest Income from PPF </label>
												<p>Example: Interest earned on PPF</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												<br>
												<label>Any Other Exempt Income </label>
												<p>Specify any other exempt income</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												<br>

											</form>
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Agriculture Income</div>
												<span></span>
												<label>Gross Agriculture Receipt</label>
												<p>Specify gross agricultural income</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												<br>
												<label>Expenditure On Agriculture</label>
												<p>Specify expenditure on agriculture sources</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												<br>
												<label>Unabsorbed Agriculture Loss</label>
												<p>Specify unabsorbed agriculture loss</p>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												<br>
												<label>Net Agriculture Receipt Auto-calculated </label>
												<div class="form-group">					
													<i class="fa fa-plus icon"></i>
													<input class="form-control" type="text">
												</div>
												<br>

											
											<button type="submit" class="btn btn-default"><i class="fa fa-arrow-right">&nbsp;SAVE</i></button>	
											</form>
											

											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="house_property">
							
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
											<form class="form-horizontal">
												<div class="heading">House Property Details</div>
												<span></span>
												<label>Type of House Property</label>
												<div class="form-group">
												<select title="Pick a number" class="form-control">
													  <option value="">Self-Occupied House Property</option>
													  <option value="">Rental Property</option>
													  <option value="">Deemed Let Out Property</option>
												</select>
												</div>
												
												<br>
												
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Interest paid on housing loan for this house property</div>
												<span></span>
												
												<p>If you have a housing loan against a house you live in then you can claim a tax deduction of upto Rs. 2,00,000
</p>
												<label>Interest paid on loan for this house property </label>
												<div class="form-group">					
					
													<input class="form-control" type="text">
												</div>
											
												
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Interest paid during the pre-construction period of house property</div>
												<span></span>
												<br>
												<label>The financial year previous to completion of construction</label>
												<p>For example: If construction completed on 17th July 2010, you need to specify 2009-10 </p>
												<div class="form-group">					
													<input class="form-control" type="date">
												</div>
												<br>
												<label>Total interest amount paid during the pre-construction period </label>
												<p>Interest paid from date of borrowing till 31st March of previous financial year. </p>
												<div class="form-group">					
													<input class="form-control" type="text">
												</div>
												<br>
											</form>
											<br>
											
											
											<form class="form-horizontal parralel_fields">
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

										<button type="submit" class="btn btn-default"><i class="fa fa-arrow-right">&nbsp;SAVE</i></button>
											</form>
											
											<br>
											
												
										
											

											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="capital_gain">
							
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
								<img src="assets/img/zerodha-logo.png">
								<img src="assets/img/cams_logo.png">
								<img src="assets/img/Karvy-Group-Logo.png">
							</div>
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="business_profession">
							<h3>Dashboard for Income from Business and Profession</h3>
							<br>
							<br>
						</div>
					</div>
					
                </div>
                <div role="tabpanel" class="tab-pane fade" id="deduction">
                    
					<ul class="nav nav-tabs inner_tabs" role="tablist">
						<li role="presentation" class="active"><a href="#section_deduction" aria-controls="home" role="tab" data-toggle="tab">A. Section 80 Deductions</a></li>
						<li role="presentation"><a href="#more_deduction" aria-controls="profile" role="tab" data-toggle="tab">B. More Deductions</a></li>
						<li role="presentation"><a href="#other_deduction" aria-controls="profile" role="tab" data-toggle="tab">C. Other Deductions</a></li>
						<li role="presentation"><a href="#investment_details" aria-controls="profile" role="tab" data-toggle="tab">D. Investment Details</a></li>
					</ul>
 
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="section_deduction">
							
							
							<h3>Deductions Under Section 80</h3>
							
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<form class="form-horizontal">
												<div class="heading">Investments under Section 80C</div>
												<span>You can claim a deduction of upto Rs. 1,50,000 under this section. <br>
Add up all your 80C deduction and specify total amount here.</span>
												<label>Investment for Section 80C </label>
												<div class="form-group">					
					
													<input class="form-control" type="text">
												</div>
												<p>Section 80C includes contributions to LIC / Insurance premium, PPF, EPF, NSC, ELSS Mutual Funds, Children school fees, Payment of Principal in Housing Loan & other eligible items.</p>
												<br>
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Section 80TTA: Deduction for Interest earned on Savings Bank Account</div>
												<span></span>
												
												
												<label>Interest earned on Savings Bank Account</label>
												
												<div class="form-group">					
					
													<input class="form-control" type="text">
												</div>
												<br>
												<p>You do not need to enter a value for the 80TTA deduction here.
ClearTax automatically picks it up from your declared interest income from Saving Bank account and Post office deposits..</p>
<br>
												<button type="submit" class="btn btn-default"><i class="fa fa-arrow-right">&nbsp;SAVE</i></button>
											</form>
											
											<br>
											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
							
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="more_deduction">
						
							<h3>More deductions Under Section 80</h3>
							
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<form class="form-horizontal">
												<div class="heading">Section 80D: Deductions for Medical Insurance</div>
												<span>Deductions for Medical Insurance or Preventive Health Check-Up fees or Medical Expenditure incurred by you.</span>
												<label>Medical Insurance Premium</label>
												<div class="form-group">					
					
													<input class="form-control" type="text">
												</div>
												<p>Medical insurance premium paid by you for Self, Spouse, Dependent Children and Parents.</p>
												<br><br>
												<label>Preventive Health Check-Up Fees</label>
												<div class="form-group">					
					
													<input class="form-control" type="text">
												</div>
												<p>Health check-up expenses paid by you for Self, Spouse, Dependent Children and Parents.</p>
												<br>
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Section 80E - Education Loan on higher studies (Graduate or PostGraduate)</div>
												<span>You can claim tax deduction on the interest paid on an education loan for higher studies</span>
												
												
												<label>Interest on higher education loan paid this year</label>
												<p>Interest paid by you on loan taken out by you. Loan can be for yourself or your spouse or your children </p>
												<div class="form-group">					
					
													<input class="form-control" type="text">
												</div>
											
												
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Section 80CCC - Contribution to Pension Plan / Annuity Fund</div>
												<span></span>
												
												
												<label></label>
												<p>Contribution amount to Pension Plan / Annuity Fund for Section 80CCC</p>
												<div class="form-group">					
					
													<input class="form-control" type="text">
												</div>
											
												
											</form>
											
											<br>
											<form class="form-horizontal">
												<div class="heading">Section 80CCD (1) and (1B) - Employee Contribution to New Pension Scheme (NPS).</div>
												<span>Employee's contribution to the New Pension System (NPS).</span>
												
												<br>
												<p>Please enter your own contribution to NPS.<br>
ClearTax will automatically split it into Section 80 CCD(1) and CCD(1B) in your tax return.<br>
The split will be optimised to give you maximum tax savings.</p>
												<br>
												
												<label>Contribution towards Section 80CCD(1)</label>
												<div class="form-group">					
					
													<input class="form-control" type="text">
												</div>
											
												
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Section 80CCD(2) - Employer Contribution in NPS</div>
												<span></span>
												
												
												<label>Employers contribution towards NPS (upto 10% of Salary).</label>
												<div class="form-group">					
					
													<input class="form-control" type="text">
												</div>
											
												<button type="submit" class="btn btn-default"><i class="fa fa-arrow-right">&nbsp;SAVE</i></button>
											</form>

											<br>
											
											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
						
						</div>
						<div role="tabpanel" class="tab-pane fade" id="other_deduction">
							<h3>More deductions Under Section 80DD and Section 80U (For Disabilities)</h3>
							
							<div class="form-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-container">
											<form class="form-horizontal">
											<div class="heading">Section 80DD - Disabled dependent deduction. (Spouse/Children/Parents)</div>
											<div class="form_btn">
												<a class="button_long" href="">Click here if you have invested</a>
												<a class="button_long" href="">Click here if you have invested</a>
											</div>
											</form>
											<br>
											<form class="form-horizontal">
											<div class="heading">Section 80U - Disability</div>
											<div class="form_btn">
												<a class="button_long" href="">Click here if you have invested</a>
												<a class="button_long" href="">Click here if you have invested</a>
											</div>
											</form>
											<br>
											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
											<br><br>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="investment_details">
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
				<div role="tabpanel" class="tab-pane fade" id="taxes">
                    
					<ul class="nav nav-tabs inner_tabs" role="tablist">
						<li role="presentation" class="active"><a href="#tds" aria-controls="home" role="tab" data-toggle="tab">A. TDS</a></li>
						<li role="presentation"><a href="#self_tax_payment" aria-controls="profile" role="tab" data-toggle="tab">B. Self Tax Payments</a></li>
					</ul>
 
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="tds">
							
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
											<form class="form-horizontal">
												<div class="heading">TDS on Salary Income</div>
												<span>These are your Salary TDS entries. If you have more entries to add, please add them on Income from Salary Page.</span>
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Non Salary TDS</div>
												<span>In this section, add TDS entries on interest income, professional or consulting income, etc. (Other than TDS on Salary and Sale of Immovable Property).</span>
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">TDS on Sale/Rent of Immovable Property</div>
												<span>If you sell/rent land, house, property or building etc (immovable property) etc, the buyer/tenant may have deducted TDS at the rate of 1% on the sale price of the property/rental and issued you a TDS certificate.You need to specify those TDS deduction details here.</span>
											</form>
											
											<br>
											
											<form class="form-horizontal">
												<div class="heading">Taxes Collected at Source (TCS)</div>
												<span>In this section, you can add TCS entries (For example - on purchase of cars).
												</span>
											</form>
											
											<br>
											
											<span class="space_margin"></span>
										</div>
									</div>
								</div>
							</div>
							</div>
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="self_tax_payment">
							
							
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
				<div role="tabpanel" class="tab-pane fade" id="filling">
                    
					<center><h3>Great, You have no tax due!</h3><center>
					
					<center><a class="btn_middel" href="">Proceed To E-Filling</a></center>
					
                </div>
            </div>
        </div>
    </div>
</div>






<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<?php include('footer.php'); ?>