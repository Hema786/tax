@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->


<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>
 
<div class="container">
    
    <br><br>
    <div class="row">
					<!--single contact-->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="single-contact-info">
							<div class="info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info-content">
								<h6>Mail address</h6>
								<span>taxkamkar@gmail.com</span>
							</div>
						</div>
					</div>
					<!--single contact-->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-top-sb-30">
						<div class="single-contact-info">
							<div class="info-icon">
								<i class="fa fa-mobile"></i>
							</div>
							<div class="info-content">
								<h6>Our Phone</h6>
								<span>+91-9999-8888-88</span>
							</div>
						</div>
					</div>
					<!--single contact-->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-top-sb-30">
						<div class="single-contact-info large-mb-d">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="info-content">
								<h6>Our Location</h6>
								<span>Plot No 141, Sidhant Complex,
Gali no 6, Barkat Nagar,
Tonk Phatak, Jaipur</span>
							</div>
						</div>
					</div>
				</div>
				
				<br><br>
	
	<div class="containerdiv">			
				<div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  
  <div class="row">
    <div class="column">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.38256195097!2d75.6504695008812!3d26.885447918213917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1602741077281!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="column">
      <form action="thankyou.php" method="Post">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your Name.." required>
        <label for="lname">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Your Phone.." required>
       <label for="lname">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Email.." required>
        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
	</div>			
				
    
    <style>
    body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.containerdiv {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
        .single-contact-info {
    background-color: #fff;
    -webkit-box-shadow: 0 2px 25px rgba(194,194,194,.25);
    box-shadow: 0 2px 25px rgba(194,194,194,.25);
    padding: 80px 0;
    text-align: center;
    margin: 0 20px;
}
.info-icon {
    margin-top: -125px;
    margin-bottom: 50px;
}
.info-icon i {
    background: linear-gradient(180deg,#007CFF 0,#00D09D 100%);
    color: #fff;
    height: 90px;
    width: 90px;
    line-height: 90px;
    text-align: center;
    border-radius: 50%;
    font-size: 35px;
}
.info-content h6 {
    background: linear-gradient(238.45deg,#007CFF 10.32%,#00D09D 88.6%);
    background-clip: border-box;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    font-weight: 700;
    text-transform: capitalize;
    font-size: 22px;
}

    </style>
        
	
</div>


<br><br>
  
@endsection