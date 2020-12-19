@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>HRA Caluclator</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>HRA Caluclator</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">    
    <div class="row">
        <div class="col-sm-7">
            <div id="signupbox" style=" margin-top:50px" class="">
                <div class="panel panel-info">
                    <div class="panel-heading" style="color: #fff;background-color: #007CFF;border-color: #007CFF;">
                        <div class="panel-title"><b id="exemption_title"><i class="fa fa-calculator"></i>&nbsp;HRA Exemption Calculator</b></div>
                    </div>  
                    <form>
                    <div id="panel_body" class="panel-body" >
        				<div action="#" method="post" class="form-horizontal main_form">
        				@csrf
                            <div id="div_id_name" class="form-group required"> 
                                <label for="id_name" class="control-label col-md-4  requiredField">Basic salary received<span class="asteriskField">*</span> </label> 
                                <div class="controls col-md-8 "> 
                                    <input required class="input-md textinput textInput form-control" id="basic_salary" name="basic_salary" placeholder="Basic salary received" style="margin-bottom: 10px" type="number" />
                                </div>
                            </div>
        					<div id="div_id_name" class="form-group required"> 
                                <label for="id_name" class="control-label col-md-4  requiredField">Dearness Allowance (DA) received<span class="asteriskField">*</span> </label> 
                                <div class="controls col-md-8 "> 
                                    <input class="input-md textinput textInput form-control" id="dearness_allowance" name="dearness_allowance" placeholder="Dearness Allowance (DA)" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
        					<div id="div_id_name" class="form-group required"> 
                                <label for="id_name" class="control-label col-md-4  requiredField">HRA received<span class="asteriskField">*</span> </label> 
                                <div class="controls col-md-8 "> 
                                    <input class="input-md textinput textInput form-control" id="hra_recieved" name="hra_recieved" placeholder="HRA received" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
        					<div id="div_id_name" class="form-group required"> 
                                <label for="id_name" class="control-label col-md-4  requiredField">Total Rent Paid<span class="asteriskField">*</span> </label> 
                                <div class="controls col-md-8 "> 
                                    <input  class="input-md textinput textInput form-control" id="total_rent_paid" name="total_rent_paid" placeholder="Total Rent Paid" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_gender" class="form-group required">
                                <label for="id_gender"  class="control-label col-md-4  requiredField"> Do you live in Delhi, Mumbai, Kolkata or Chennai?<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                     <label class="radio-inline"> <input type="radio" name="live_location" id="id_gender_1" value="yes"  style="margin-bottom: 10px">Yes</label>
                                     <label class="radio-inline"> <input type="radio" name="live_location" id="id_gender_2" value="no"  style="margin-bottom: 10px">No </label>
                                </div>
                            </div>
                            <div id="div_id_company" class="form-group required"> 
                                <label for="id_company" class="control-label col-md-4  requiredField">Enter your email address<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 "> 
                                     <input required pattern=".+@gmail.com" class="input-md textinput textInput form-control" id="email_address" name="email_address" placeholder="your Email" style="margin-bottom: 10px" type="email" />
                                </div>
                            </div> 
                            
                            <div class="form-group"> 
                                <div class="aab controls col-md-4 "></div>
                                <div class="controls col-md-8 ">
                                    <button type="submit" id="caclulatehra" class="btn btn-default"><i class="fa fa-check">&nbsp;Caculate</i></button>
                                </div>
                            </div> 
        					<center>You can claim HRA while tax filing even if you have not submitted rent receipts to your HR. Taxkamkar will help you claim this while e-filing.<center>
                        </div>
                    </div>
                    </form>
                    
                    <div id="calc-result" style="min-height: 300px; display: none;" class="panel-body">
                        <div class="success text-center col-xs-12">
                            <h4 class="text-primary"><strong>Tax Exempted</strong></h4>
                            <p id="chargeable_to_tax" class="h1 m20">₹ 0</p>
                        </div>
                        <div class="row">
                            <table class="table table-condensed smaller table-striped" style="margin-bottom:0px;">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td id="metro_nonmetro">40% of Basic Salary</td>
                                        <td align="right" id="met_basic">Rs. 0</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>HRA received</td>
                                        <td align="right"><strong id="hra_received_text">Rs. 0</strong></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Excess of Rent paid over 10% of salary</td>
                                        <td align="right"><strong id="hr_10per">Rs. 0</strong></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <p class="quoted-span m10 plr20"><i class="fa fa-angle-double-right"></i> The least of the above three is exempt from HRA</p>
                        </div>
                        <div class="row">
                            <table class="table table-condensed smaller hra-table-2" style="border-bottom: 0px; margin-bottom:0px;">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td><strong><i class="fa fa-check-circle-o"></i> Amount of Exempted HRA</strong></td>
                                        <td align="right"><strong id="amount_exempted">Rs. 0</strong></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong><i class="fa fa-check-circle-o"></i> HRA chargeable to tax</strong></td>
                                        <td align="right"><strong id="hra_chargeable">Rs. 0 </strong></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 text-center">
                            <a id="calculateagain" class="btn btn-calc btn-default btn-plain ct-btn mt20"><i class="fa fa-calculator"></i> Calculate again</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div> 
        </div>
        <div class="col-sm-5">
            <div class="" style=" margin-top:50px">
	            <ul>
            		<li>If you don't receive HRA, you can now <b>claim upto Rs. 60,000 deduction under Section 80GG.</b></li>
            		<br>
            		<li>Click here to calculate your tax as per Budget 2020.</li>
            		<br>
            		<li>If you receive HRA, you can use this calculator.</li>
            		<br>
            	</ul>
            </div>
            
            
            <div class="alert alert-info text-center">
                <div class="text-info h4 ct-bold"><b>File your Income Tax Returns for FREE now!</b></div>
                <div class="text-info h5 ct-bold mb20"><b>Every filer wins assured rewards worth Rs.51,000.</b></div>
        <div>
                <a href="https://taxkamkar.com/pricing" class="btn btn-primary">Start your Tax Return</a>
        </div>
    
        </div>
            
        </div>    
    </div>
</div>            

<script>
    function thousands_separators(num) {
        var num_parts = num.toString().split(".");
        num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return num_parts.join(".");
    }
     
    $("#caclulatehra").on("click", function(){
        var email_validate = document.getElementById("email_address").value;
        var basic_salary_validate = document.getElementById("basic_salary").value;
        if(email_validate == ''){
             
        }else if(basic_salary_validate == ''){
            
        }else{
        $("#panel_body").hide();
        var basic_salary = $("#basic_salary").val();
        var dearness_allowance = $("#dearness_allowance").val();
        var hra_recieved = $("#hra_recieved").val();
        var total_rent_paid = $("#total_rent_paid").val();
        var metro = $("input[name='live_location']:checked").val();
        var email_address = $("#email_address").val();
        if(dearness_allowance > 0 || dearness_allowance != "") {
            var salary = parseFloat(basic_salary)+parseFloat(dearness_allowance);
        } else {
            var salary = basic_salary;
        }
        var rent_10per = parseFloat(total_rent_paid) - (salary*0.1);
        if(rent_10per > 0) {
            var rent_10per_actual = rent_10per;
        } else {
            var rent_10per_actual = 0;
        }
        if(metro == 'yes') {
            var perpay = salary*0.5;
            $('#metro_nonmetro').text("50% of Basic Salary");
        } else {
            var perpay = salary*0.4;
            $('#metro_nonmetro').text("40% of Basic Salary");
        }
        var tax_excemption_allowed = Math.min(hra_recieved, rent_10per_actual, perpay);
        if(tax_excemption_allowed < hra_recieved){
            var gross_salary = parseFloat(hra_recieved) - parseFloat(tax_excemption_allowed);
        }
        $('#calc-result').show();
        
        $('#chargeable_to_tax').text("₹ "+thousands_separators(tax_excemption_allowed));
        $('#met_basic').text("Rs. "+perpay);
        if(hra_recieved == "") {
            $('#hra_received_text').text("");
        } else {
            $('#hra_received_text').text("Rs. "+thousands_separators(hra_recieved));
        }
        $('#hr_10per').text("Rs. "+thousands_separators(rent_10per_actual));
        $('#amount_exempted').text("Rs. "+thousands_separators(tax_excemption_allowed));
        $('#hra_chargeable').text("Rs. "+thousands_separators(gross_salary));
        $('#exemption_title').text("Results");
        $('html, body').animate({
            scrollTop: 50
        }, 1500);
        
        $.ajax({
			url: "/administrator/control/controller.php",
			type: "POST",
			data: {
			    action: "front_user_create",
			    form_type: "hra",
				email: email_address			
			},
			cache: false,
			success: function(dataResult){
				//alert(dataResult);
			}
		});
    }
    });
    $("#calculateagain").on("click", function(){
        $('#calc-result').hide();
        $('#exemption_title').text("HRA Exemption Calculator");
        $("#panel_body").show();
        $('html, body').animate({
            scrollTop: 50
        }, 1500);
    });
</script>

@endsection