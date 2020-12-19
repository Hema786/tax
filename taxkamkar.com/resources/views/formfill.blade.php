@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Form Filling</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Form Filling</li>
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
.card_select {
    box-shadow: 0px 0px 8px 4px;
    padding: 20px;
    margin: 40px 0px;
    text-align:center;
    background-image: url(https://cdn.hipwallpaper.com/i/28/16/Xv7rYO.png);
    background-size: 100% 100%;
    border-radius: 8px;
}
.buttonyes {
    background: #335eea;
    color: #fff;
    width: 100px;
    font-weight: bold;
}
.buttonno {
    background: #00D09C;
    color: #fff;
    width: 100px;
    font-weight: bold;
}
.card_select h4 {
    color: #000;
}
.card_select span {
    color: #888;
    font-size: 17px;
}
</style>
<div class="wrapper row3">
  <div class="wrapper">
    <div class="hoc container emi-calc">	
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            
            <div class="card_select">
                <h4>Do You Have Form 16 ?<br><span>E-File Tax Return</span></h4>
                <br>
                <div class="button_block">
                    <a class="btn btn-default buttonyes" href="http://taxkamkar.com/taxupload">Yes</a>
                <a class="btn btn-default buttonno" href="http://taxkamkar.com/tax">No</a>
                </div>
                
            </div>
            
        </div>
        <div class="col-md-2">
        </div>
	  <!-- Graph -->							
	  </div>
	  
    </div>
  </div>

<!-- ################################################################################################ -->
  
@endsection