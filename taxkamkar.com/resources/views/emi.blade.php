@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>EMI Caluclator</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>EMI Caluclator</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>


<style>
    .dragger {
    background: #00D19D !important;
}
.text_input_slider {
    width: 100%;
    margin-top: 10px;
    margin-bottom: 15px;
}
</style>
<div class="wrapper row3">
  <div class="wrapper">
    <div class="hoc container emi-calc">	
    <div class="row">
        <div class="col-md-7">
            <h4>
                <span class="label label-primary" style="">Loan Amount :  <strong>  <span id="la_value" class=""> 1000</span></strong></span>
            </h4>								
            <input class="" type="text" id="la" data-slider-snap="true" data-slider-step="1000" data-slider-range="1000,5000000" value="" data-slider="true" style="display:none">
            <input name="" id="la_iden" class="text_input_slider" type="number" min="1000" max="5000000" value="1000" />
            <h4>
                <span class="label label-danger" style="">No. of Month : <strong>  <span id="nm_value" class=""> 1</span></strong></span>
            </h4>
            <input type="text" id="nm" data-slider-snap="true" data-slider-step="1" data-slider-range="1,240" value="" data-slider="true" style="display:none">
            <input id="nm_iden" class="text_input_slider" type="number" min="1" max="240" value="1" />
            <h4>
                <span class="label label-warning" style="">Rate of Interest [ROI] : <strong>  <span id="roi_value" class=""> 0.5</span></strong></span>
            </h4>
            <input type="text" id="roi" data-slider-snap="true" data-slider-step=".05" data-slider-range="0.5,16" value="0.5" data-slider="true" style="display:none">
            <input id="roi_iden" class="text_input_slider" type="number" min="0.5" max="16" value="0.5" />
            <br>
          
            <div class="row">
                <div class="col-md-5 ">									  
                    <center class="alert alert-info"><strong>Monthly EMI</strong> <br>
                    <button id="emi" class="btn btn-success btn-lg" type="button">21,055.20</button></center>
                </div>
          
                <div class="col-md-5">									  
                    <center class="alert alert-info"><strong>Total Interest</strong> <br>
                    <button id="tbl_int" class="btn btn-warning btn-lg" type="button">946,623.43</button></center>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-5 ">									  
                    <center class="alert alert-info"><strong>Payable Amount</strong> <br>
                        <button id="tbl_full" class="btn btn-info btn-lg" type="button">2,526,623.43</button>
                    </center>
                </div>
                
                <div class="col-md-5 ">									  
                    <center class="alert alert-info">
                        <strong>Interest Percentage</strong><br>
                        <button id="tbl_int_pge" class="btn btn-info btn-lg" type="button">37.47 %</button>
                    </center>
                </div>
            </div>
        </div>
	  <!-- Graph -->							
	  <div id="container" class="col-md-5" data-highcharts-chart="19"></div>
	  
	  </div>
	  
      <!-- Table -->
      <div id="datatable" class="box-body table-responsive ">		
        <table width="100%" class="table table-striped table-bordered" id="illustrate">
          <thead>
            <tr class="success">
              <th>Payment No.</th>
              <th>Begining Balance</th>
              <th>EMI</th>
              <th>Principal</th>
              <th>Interest</th>
              <th>Ending Balance</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div>
  </div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
  
@endsection