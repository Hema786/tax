@extends('layouts.app')

@section('content')

  <style>
    section {
        padding: 75px 0 !important;
        min-height: 100vh !important;
    }
    section#contact {
        min-height: auto !important;
    }
    .slidingVertical {
        display: inline;
        text-indent: 15px;
    }
    .slidingVertical span {
        animation: topToBottom 12.5s linear 0s infinite;
        -ms-animation: topToBottom 12.5s linear infinite 0s;
        -webkit-animation: topToBottom 12.5s linear 0s infinite;
        color: var(--primaryClr);
        opacity: 0;
        overflow: hidden;
        position: absolute;
    }
    .slidingVertical span:nth-child(2) {
        animation-delay: 10s;
        -ms-animation-delay: 10s;
        -webkit-animation-delay: 10s;
    }
    .slider h3 {
    font-weight: bold;
    font-size: 40px;
    color: #00d09c;
        margin-left: 8px;
}
  </style>
  <main id="main">
	  
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-5 pt-5 pt-lg-0 d-flex flex-column justify-content-center">
					<h1 style="font-weight:bold;display:inline-flex;" data-aos="fade-up" data-aos-delay="100">
					    <span>Taxation made</span>
					        <div class="slider" style="width: 100px;">
                            <h3>Free</h3>
                            <h3>Easy</h3>
					        </div>
					    <!---<div class="slidingVertical">
					        <span id="free">Free</span>
					        <span id="easy">Easy</span>
					    </div>-->
					    
                          
					</h1>
					<p data-aos="fade-up" data-aos-delay="100">Did you know that you can easily fill your tax return without anybody's help just click on the below link.</p>
					<a data-aos="fade-up" data-aos-delay="100" href="https://taxkamkar.com/taxplanner" class="btn-dark-custum">Start Saving Tax</a>
				</div>
				<div class="col-sm-7">
					<img data-aos="fade-up" data-aos-delay="100" src="../public/taxkamkar/assets/img/about011.png" class="img-fluid animated" alt="">
				</div>		
			</div>
		<div>
	</section>
	
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<img data-aos="fade-up" data-aos-delay="100" src="../public/taxkamkar/assets/img/taxkamkar01.png" class="img-fluid animated" alt="">
				</div>
				<div class="col-sm-5 pt-5 pt-lg-0 d-flex flex-column justify-content-center">
					<h1 style="font-weight:bold;" data-aos="fade-up" data-aos-delay="100">Plan E-File Return</h1>
					<p data-aos="fade-up" data-aos-delay="100">Still Confused ? Sip a Drink Here</p>
					<a data-aos="fade-up" data-aos-delay="100" href="https://taxkamkar.com/contact" class="btn-dark-custum">Explore Now</a>
				</div>
			</div>
		<div>
	</section>
	
	 
	
	<section id="exploreid">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 pt-5 pt-lg-0 d-flex flex-column justify-content-center">
					<h1 style="font-weight:bold;" data-aos="fade-up" data-aos-delay="100">Explore Income Tax Planner</h1>
					<p data-aos="fade-up" data-aos-delay="100">Want to go on a world tour? Want to get second PHD? Does your heart beat for Lamborghini? Let’s start by saving that hard earned money of yours by minimizing on taxes and maximizing your interest returns. </p>
					<a data-aos="fade-up" data-aos-delay="100" href="https://taxkamkar.com/taxplanner" class="btn-dark-custum">Explore Now</a>
				</div>
				<div class="col-sm-7">
					<img data-aos="fade-up" data-aos-delay="100" src="../public/taxkamkar/assets/img/taxkamkar02.png" class="img-fluid animated" alt="">
				</div>		
			</div>
		<div>
	</section>
	
	
  

<style>
    .colorchange
    {
        background:#00d09c;
        -webkit-transition: background-color 500ms linear;
    -ms-transition: background-color 500ms linear;
    transition: background-color 500ms linear;
    }
    section#aboute {
    padding: 26em 0px !important;
    -webkit-transition: background-color 500ms linear;
    -ms-transition: background-color 500ms linear;
    transition: background-color 500ms linear;
}
.icon_how_box ul li {
    color: #000;
    text-align: initial;
    list-style: disc;
    padding-left: 2px !important;
}
.icon_how_box {
    padding: 25px;
}
.icon_how_box i {
    color: #444;
}
</style> 
 
	<section id="aboute" class="about">
		<div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>How Tax Filing Works</h2>
        </div>
		<div class="row content">
			<div class="col-sm-4 d-flex align-items-center  mb-5 mb-lg-0">
				<div class="icon-box-how icon_how_box" data-aos="fade-up" data-aos-delay="100">
				  <i class="fa fa-users" aria-hidden="true"></i>
				  <h4 class="title">Information</h4>
				  <ul>
				      <li>Income generated from various sources</li>
				      <li>Investments</li>
				      <li>Tax exemptions and deductions</li>
				  </ul>
				  <i style="font-size: 50px;color: #444;padding: 10px 0px;margin: 0px auto;" class="fa fa-arrow-down" aria-hidden="true"></i>
				  <ul>
				      <li>This basic information is sufficient for an individual to file ITR given the presence of documents</li>
				  </ul>
				</div>
			</div>
			<div class="col-sm-4 d-flex align-items-center  mb-5 mb-lg-0">
				<div class="icon-box-how icon_how_box" data-aos="fade-up" data-aos-delay="100">
				  <i class="fa fa-file-text" aria-hidden="true"></i>
				  <h4 class="title">Documents</h4>
				  <ul>
				      <li>Form 16/Salary slips (Salaried)</li>
				      <li>Form 26AS</li>
				      <li>Bank Statement</li>
				      <li>Tax Saving Investments Proofs</li>
				      <li>Proof of various deductions u/s 80C to 80U, if any</li>
				      <li>Home Loan Statement</li>
				      <li>Pan & Aadhar</li>
				  </ul>
				</div>
			</div>
			<div class="col-sm-4 d-flex align-items-center  mb-5 mb-lg-0">
				<div class="icon-box-how icon_how_box" data-aos="fade-up" data-aos-delay="100">
				  <i class="fa fa-cogs" aria-hidden="true"></i>
				  <h4 class="title">Procedure</h4>
				  <ul>
				      <li>Through the GOI official website - <a href="https://www.incometaxindiaefiling.gov.in/home">https://www.incometaxindiaefiling.gov.in/home</a></li>
				      <li>Take outside help</li>
				  </ul>
				  <i style="font-size: 50px;color: #444;padding: 10px 0px;margin: 0px auto;" class="fa fa-arrow-down" aria-hidden="true"></i>
				  <ul>
				      <li>Don’t just pay to file ITR but connect with someone that works to help you save on taxes</li>
				  </ul>
				</div>
			</div>
		</div>
		 
		</div>
	</section>
	
	
	
	<section id="about" class="about">
		<div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Latest Blog</h2>
		  <p>Realtime Analysis of all individual taxation related issues with its implication on you and solution for all contentious matters.</p>
        </div>
        
        

		<div class="row content">
			<div class="col-sm-4 d-flex align-items-stretch mb-5 mb-lg-0">
				<div class="icon-box-blog" data-aos="fade-up" data-aos-delay="100">
				  <img data-aos="fade-up" data-aos-delay="100" src="../public/taxkamkar/assets/img/blog1.jpg" class="img-fluid animated" alt="">
				  <h4 class="title">Filing I-T Return? Claim These Deduction (Part-I)</h4>
				  <p class="date">28 July 2020</p>
				  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi. Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
				  <a data-aos="fade-up" data-aos-delay="100" href="" class="btn-dark-custum-blog">Read More</a>
				</div>
			</div>
			<div class="col-sm-4 d-flex align-items-stretch mb-5 mb-lg-0">
				<div class="icon-box-blog" data-aos="fade-up" data-aos-delay="100">
				  <img data-aos="fade-up" data-aos-delay="100" src="../public/taxkamkar/assets/img/blog2.jpg" class="img-fluid animated" alt="">
				  <h4 class="title">Have Interest Income? See How Much is Taxable</h4>
				  <p class="date">28 August 2020</p>
				  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi. Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
				  <a data-aos="fade-up" data-aos-delay="100" href="" class="btn-dark-custum-blog">Read More</a>
				</div>
			</div>
			<div class="col-sm-4 d-flex align-items-stretch mb-5 mb-lg-0">
				<div class="icon-box-blog" data-aos="fade-up" data-aos-delay="100">
				  <img data-aos="fade-up" data-aos-delay="100" src="../public/taxkamkar/assets/img/blog3.jpg" class="img-fluid animated" alt="">
				  <h4 class="title">Last Chance to Escape Income Tax Notice (Fin. Year 2018-19)</h4>
				  <p class="date">28 September 2020</p>
				  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi. Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
				  <a data-aos="fade-up" data-aos-delay="100" href="" class="btn-dark-custum-blog">Read More</a>
				</div>
			</div>
		</div>
		
		</div>
	</section>
		
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 pt-5 pt-lg-0 d-flex flex-column justify-content-center">
				    <div class="animated_block">
				    <img data-aos="fade-up" data-aos-delay="100" src="../public/taxkamkar/assets/img/Cameraroll.gif" class="img-fluid animated" alt="">
				    <h4>YOUTUBE VIDEOS</h4>
				    </div>
				</div>
				<div class="col-sm-4 pt-5 pt-lg-0 d-flex flex-column justify-content-center">
				    <div class="animated_block">
				    <a href="{{ url('faq') }}">
					    <img data-aos="fade-up" data-aos-delay="100" src="../public/taxkamkar/assets/img/einstein.gif" class="img-fluid animated" alt="">
					    <h4>CHECK YOUR FINACIAL IQ</h4>
					</a>
					</div>
				</div>
				<div class="col-sm-4 pt-5 pt-lg-0 d-flex flex-column justify-content-center">
				    <div class="animated_block">
					<a data-toggle="modal" data-target="#myModal"><img data-aos="fade-up" data-aos-delay="100" src="../public/taxkamkar/assets/img/Paperpen.gif" class="img-fluid animated" alt="">
					<h4>GOOGLE FORM</h4></a>
					</div>
				</div>
			</div>
		<div> 
	</section>
	
	
	
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
          <a type="button" class="close" data-dismiss="modal">&times;</a>
        <h4>Submit Form</h4>
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
</div>

<style>
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
</style>
	
	

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>From Our Users</h2>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <h3>Preeti Desai</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <h3>Sanjana Singh</h3>
              <h4>Designer</h4>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <h3>Rahul Verma</h3>
              <h4>Store Owner</h4>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <h3>Sanjay Mishra</h3>
              <h4>Freelancer</h4>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <h3>Dilip Sharma</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->
@endsection

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
