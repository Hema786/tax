@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
		  <h2>HRA Calculator Result</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
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
            <div class="panel-heading">
                <div class="panel-title"><b>HRA RESULT</b></div>
            </div>  
            <div class="panel-body" >
                    <center><h4>HRA chargeable to tax </h4></center>   
					<center style="font-weight:14px;font-weight:bold;">Rs. {{$reg->hra_recieved}}</center>
					<br><br>
					
					<table class="table table-striped">
						<tbody>
						  <tr>
							<td>50% of Basic Salary</td>
							<td style="text-align:right;">Rs. 25,600</td>
						  </tr>
						  <tr>
							<td>HRA received</td>
							<td style="text-align:right;">Rs. {{$reg->hra_recieved}}</td>
						  </tr>
						  <tr>
							<td>Excess of Rent paid over 10% of salary	</td>
							<td style="text-align:right;">Rs. 0	</td>
						  </tr>
						</tbody>
					  </table>
					{{$reg->basic_salary}}	

					{{$reg->dearness_allowance}}	
					
					{{$reg->hra_recieved}}	
					
					{{$reg->total_rent_paid}}	
					
					{{$reg->basic_salary}}	
					
					{{$reg->basic_salary}}	
					
                            

               
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


</div>            



@endsection