@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
		  <h2>Rent Calculator Result</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Rent Caluclator</li>
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
                <div class="panel-title"><b>Rent RESULT</b></div>
            </div>  
            <div class="panel-body" >
                    <center><h4>Rent Recieved </h4></center>   
					<center style="font-weight:14px;font-weight:bold;">Rs. {{$reg->rent_recieved}}</center>
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
							<td>Total Income</td>
							<td style="text-align:right;">Rs. {{$reg->total_income}}</td>
						  </tr>
						</tbody>
					  </table>
					
					
                            

               
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