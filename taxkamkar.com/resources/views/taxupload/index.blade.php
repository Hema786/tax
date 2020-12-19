@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Upload Form</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Upload Form</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>

<!------ Include the above in your HEAD tag ---------->


<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	  <div class="col-md-2">
	  </div>
	   <div class="col-md-8">
	      <div class="block_text_upload">
	          <h3>Choose your Form-16 PDF to upload</h3>
              <span>You can upload a password protected PDF too.</span>
	      </div>    
	      <br>
	      <form method="POST" action="/taxuploads" id="f16upload" enctype="multipart/form-data">
                @csrf
              <div class="form-group files color">
                <input type="file" name="form16file" class="form-control" accept="application/pdf">
              </div>
              
              <center><input class="btn btn-success" type="submit" name="upload_form" value="Proceed"></center>
              </form>
	      
	      <hr>
	      <center><span><a href="http://taxkamkar.com/tax">Continue without Form-16</a></span></center>
	      
	  </div>
	  <div class="col-md-2">
	  </div>
	</div>
</div>           

<style>
    .files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 0px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 40px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #000;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
</style>

@endsection