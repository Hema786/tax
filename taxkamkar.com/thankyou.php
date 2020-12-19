
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="DOnSnw7VnJE3jtyz9q5cwn0Iuu1Wp90ufivBqPzu">

    <title>Taxkamkar</title>
	
	<!-- Favicons -->
   <link href="https://taxkamkar.com/taxkamkar/assets/img/favicon.png" rel="icon">
   <link href="https://taxkamkar.com/taxkamkar/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Scripts -->
    <!--<script src="https://taxkamkar.com/js/app.js" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://taxkamkar.com/css/app.css" rel="stylesheet">
	
	
	<!-- Vendor CSS Files -->
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/venobox/venobox.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/aos/aos.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	  <!-- Template Main CSS File -->
	  <link href="https://taxkamkar.com/taxkamkar/assets/css/style.css" rel="stylesheet">
      <link href="https://taxkamkar.com/taxkamkar/assets/css/simple-slider.css" rel="stylesheet" type="text/css" />
      <link href="https://taxkamkar.com/taxkamkar/assets/css/receipt_rent.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="app">
        <!-- ======= Header ======= -->
  <header id="header" class="fixed-topp d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!---<h1 class="text-light"><a href="index.html"><span>Taxkamkar</span></a></h1>--->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="../public/taxkamkar/assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      
      <style>
          .nav-menu .drop-down > a:after
          {
              display:none;
          }
      </style>
      <nav class="nav-menu d-none d-lg-block">
        <ul> 
          <!--<li><a href="">About</a></li>-->
          <li class="drop-down"><a href="">Service Tools &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul>
              <li><a href="https://taxkamkar.com/pricing">CA Assisted Filing</a></li>
              <li><a href="https://taxkamkar.com/taxplanner">Tax planner</a></li>
              <li><a href="https://taxkamkar.com/hra">HRA Calculator</a></li>
              <li><a href="https://taxkamkar.com/emi">EMI Calculator</a></li>
                <li><a href="https://taxkamkar.com/rent">Rent Reciept</a></li>
                <li><a href="https://taxkamkar.com/incometax">Income Tax (Old vs New) Calculator</a></li>
            </ul>
          </li>
          <!--<li><a href="">Products</a></li>--->
          <li><a href="https://taxkamkar.com/blog">Blog</a></li>
          <li><a href="https://taxkamkar.com/pricing">Services</a></li>
          <li><a href="https://taxkamkar.com/contact">Contact Us</a></li>
		  <li class="get-started">
	                <li class="nav-item">
                <a class="nav-link" href="https://taxkamkar.com/login">Login/Register</a>
            </li>
        		  </li>	
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
 </div>
        
		<main class="py-4">
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
 
 
 <?php
  if(isset($_REQUEST['submit'])){
$to = "dsgahlot92@gmail.com";
$subject = "Contact Lead";
$name = $_REQUEST['firstname'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$message = "
<html>
<head>
<title>Contact Lead</title>
</head>
<body>
<table>
<tr>
<td>Name</td>
<td>.'$name'.</td>
</tr>
<tr>
<td>Phone</td>
<td>.'$phone'.</td>
</tr>
<tr>
<td>Email</td>
<td>.'$email'.</td>
</tr>
<tr>
<td>Message</td>
<td>.'$message'.</td>
</tr>
</table>
</body> 
</html>
";

// More headers
$headers .= 'From: <support@taxkamkar.com>' . "\r\n";
$headers .= 'Cc: taxkamkar@taxkamkar.com' . "\r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP/". phpversion() ."\r\n" ;

mail($to,$subject,$message,$headers);
}
?>
 
 
<div class="container">
    
    <br><br>
    
	
	
	<div class="containerdiv">			
				<div style="text-align:center">
    <h2>Thank You</h2>
    <p>We Will Contact You Soon As Possible!</p>
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
@media  screen and (max-width: 600px) {
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
  
        </main>


<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-sm-3" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <a href="/"><img src="../public/taxkamkar/assets/img/logo.png" alt="" class="img-fluid"></a>
              <p>We are a team of experienced CAs, LLBs and MBAs with a combined experience of over 13 years in personal financing and taxation.</p>
              <div class="social-links">
                <a href="https://www.facebook.com/Tax-Kam-Kar-108201000969343" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/taxkamkar/" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/taxkamkar" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-sm-2 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <ul style="list-style: none;
    font-weight: bold;">
				<li><a style="color: #fff;" href="/">Home</a></li>
				<li><a style="color: #fff;" href="https://taxkamkar.com/blog/">Blog</a></li>
				<li><a style="color: #fff;" href="https://taxkamkar.com/contact">Contact Us</a></li>
				<li><a style="color: #fff;" href="https://taxkamkar.com/taxplanner">Tax Planner</a></li>
				<li><a style="color: #fff;" href="/">Privacy Policy</a></li>
			</ul>
          </div>
		  
		  <div class="col-sm-4 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.99973450298!2d75.65047228361074!3d26.88514167956319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1600154768484!5m2!1sen!2sin" width="100%" height="220" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
            


<link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

         
  <script>
      $('.slider').slick({
  vertical: true,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 3000,
  speed: 300
});
  </script>
          </div>
		  
		  <div class="col-sm-3 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Plot No 141, Sidhant Complex,<br> Gali no 6, Barkat Nagar,<br> Tonk Phatak, Jaipur</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>taxkamkar@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+919636950969, +919660834123</p>
              </div>

            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  
  <style>
  .foote
  {
      display:none;
  }
      .foote a{
          color:rgb(0 208 156) !important;
      }
      section#contact {
    background: #323232;
    color: #fff;
}
section#contact h2 {
    color: #fff;
}
section#contact p {
    color: #fff;
}
section#contact h3 {
    color: #fff;
}
  </style>
  <section class="foote" style="background: #323232;
    color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col l12" style="margin-bottom: 20px;">
                <div style="font-weight: 500;">MOST POPULAR ON TAXKAMKAR</div>
                <div style="margin-top: 25px; font-size: 14px;">
                    STOCK MARKET INDICES: &nbsp;
                    <span><a class="fm77MfStyle" href="">S&amp;P BSE SENSEX</a></span>&nbsp;|&nbsp; <span><a class="fm77MfStyle" href="">S&amp;P BSE 100</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">NIFTY 100</a></span>&nbsp;|&nbsp; <span><a class="fm77MfStyle" href="">NIFTY 50</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">NIFTY MIDCAP 100</a></span>&nbsp;|&nbsp; <span><a class="fm77MfStyle" href="">NIFTY BANK</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">NIFTY NEXT 50</a></span>
                </div>
                <div style="margin-top: 15px; font-size: 14px;">
                    POPULAR MUTUAL FUNDS: &nbsp;
                    <span><a class="fm77MfStyle" href="">Axis Bluechip Fund</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">Motilal Oswal S&amp;P 500 Index Fund</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">Parag Parikh Long Term Equity Fund</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">SBI Small Cap Fund</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">HDFC Balanced Advantage Fund</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">Axis Long Term Equity Fund</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">UTI Nifty Index Fund</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">Axis Midcap Fund</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">SBI Bluechip Fund</a></span>&nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">Mirae Asset Emerging Bluechip Fund</a></span>
                </div>
                <div style="margin-top: 15px; font-size: 14px;">
                    MUTUAL FUNDS COMPANIES: 
                    <span><a class="fm77MfStyle" href="">ICICI PRUDENTIAL</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">HDFC </a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">NIPPON INDIA</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">ADITYA BIRLA SUN LIFE</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">SBI</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">UTI</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">FRANKLIN TEMPLETON</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">KOTAK MAHINDRA</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">IDFC</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">DSP</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">AXIS</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">TATA</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">L&amp;T</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">SUNDARAM</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">PGIM</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">INVESCO</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">LIC</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">JM FINANCIAL</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">BARODA PIONEER</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">CANARA ROBECO</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">HSBC</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">IDBI</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">INDIABULLS</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">MOTILAL OSWAL</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">BNP PARIBAS</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">MIRAE ASSET</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">PRINCIPAL</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">BOI AXA</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">UNION KBC</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">TAURUS</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">EDELWEISS</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">ESSEL</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">MAHINDRA</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">QUANTUM</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">PPFAS</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">IIFL</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">Quant</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">SHRIRAM</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="">SAHARA</a></span>
                </div>
                <div style="margin-top: 15px; font-size: 14px;">
                    TOOLS: <span><a class="fm77MfStyle" href="" target="_blank">BROKERAGE CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">SIP CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">SWP CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">SUKANYA SAMRIDDHI YOJANA CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">MUTUAL FUND RETURNS CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">FD CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">RD CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">EMI CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">PPF CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">EPF CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">NPS CALCULATOR</a></span> &nbsp;|&nbsp;
                    <span><a class="fm77MfStyle" href="" target="_blank">GRATUITY CALCULATOR</a></span>
                </div>
                <div class="" style="margin-bottom: 20px;">
                    <br>
                    <div style="font-weight: 500;">ABOUT TAXKAMKAR</div>
                    <br>
    <div class="mt20">
        Taxkamkar is an investing platform where users can find the best mutual funds to invest in and can invest their money without any hassles. Taxkamkar provides objective evaluation of mutual funds and does not advice or recommend any mutual
        fund or portfolios. Investor shall invest with their own descretion. Taxkamkar does not guarantee any returns and safety of capital.
    </div>
    <br>
    <div class="mt20">Taxkamkar helps investors in the following way</div>
    <div>&nbsp;· By providing objective evaluation of products available on Taxkamkar</div>
    <div>&nbsp;· By bringing up red flags, if any, involved in the products. However Taxkamkar does not guarantee to bring out all red flags</div>
    <div>&nbsp;· By being transparent about fees and charges involved in investing in a product</div>
    <div>&nbsp;· By clearly representing the risk associated with buying a product</div>
    <br>
    <div class="mt40 fw500">SECURE TRANSACTIONS ON TAXKAMKAR</div>
    <br>
    <div class="mt20">
        All transactions on Taxkamkar are safe and secure. Users can invest through SIP or Lumpsum using Netbanking through all supported banks. It uses BSE Star MF <span style="color: rgb(0, 208, 156);">(with Member code 11724)</span> as
        transaction platform.
    </div>
    <br>
    <div class="mt40 fw500">MUTUAL FUNDS SAHI HAI</div>
    <br>
    <div class="mt20">
        Mutual fund investments are very popular with individual investors because of the benefits they provide. Among the many advantages, the most important factors that drive investors to mutual funds are that Investors can
    </div>
    <br>
    <div class="mt20">- Start with any amount (as low as 500)</div>
    <div>- Diversify across multiple stocks and other instruments like debt, gold etc.</div>
    <div>- Start automated monthly investments (SIP)</div>
    <div>- Invest without requiring to open DMAT account</div>
    <br>
    <div class="mt20">All type of mutual funds are available on Taxkamkar.</div>
    <br>
    <div class="mt40 fw500">INVESTING IN MUTUAL FUND PORTFOLIOS</div>
    <br>
    <div class="mt20">
        Portfolio is collection of mutual funds designed to meet your investment goals. Investing in mutual fund portfolios helps you in diversifying your investments and reduces the risk. Portfolios also help you in assigning an investment
        goals and make it easy for you to save for and achieve your goals. You can create a portfolio yourself or ask an expert to build it for you.
    </div>
    <br>
    <div class="mt40 fw500">ATTENTION INVESTORS</div>
    <br>
    <div class="mt20">1. Stock Brokers can accept securities as margin from clients only by way of pledge in the depository system w.e.f. September 1, 2020.</div>
    <div>2. Update your mobile number &amp; email Id with your stock broker/depository participant and receive OTP directly from depository on your email id and/or mobile number to create pledge.</div>
    <div>3. Pay 20% upfront margin of the transaction value to trade in cash market segment.</div>
    <div>
        4. Investors may please refer to the Exchange's Frequently Asked Questions (FAQs) issued vide notice no. 20200731-7 dated July 31, 2020 and 20200831-45 dated August 31, 2020 and other guidelines issued from time to time in this
        regard.
    </div>
    <br>
    <div class="center-align">or</div>
    <br>
    <div>
        Investors may please refer to the Exchange's Frequently Asked Questions (FAQs)issued vide circular reference NSE/INSP/45191 dated July 31, 2020 and NSE/INSP/45534 dated August 31, 2020 and other guidelines issued from time to time
        in this regard.
    </div>
    <div>5. Check your Securities /MF/ Bonds in the consolidated account statement issued by NSDL/CDSL every month.</div>
    <br>
    <div class="mt40 fw500">DISCLAIMER</div>
    <br>
    <div class="mt20">
        NextBillion Technology Private Limited is a member of NSE &amp; BSE with SEBI Registration no: INZ000208032, Depository Participant of CDSL Depository with SEBI Registration no: IN-DP-417-2019 and Mutual Fund distributor with AMFI
        Registration No: ARN-111686. Registered office: 1A, 206, Caldra, Divyasree Elan, Sarjapur Road Bangalore – 560035. Correspondence office: No 11, 80 feet Road, ST Bed, Koramangala 4th Block, Bangalore - 560034. For compliance
        pertaining to securities broking please write to compliance@Taxkamkar.in for DP related to grievances@Taxkamkar.in. Please ensure you carefully read the Risk Disclosure Document as prescribed by SEBI.
    </div>
    <br>
    <div class="mt20">
        Procedure to file a complaint on SEBI SCORES: Register on the <a href="https://scores.gov.in/scores/Welcome.html" rel="nofollow" style="color: rgb(0, 208, 156);">SCORES</a> portal. Mandatory details for filing complaints on SCORES:
        Name, PAN, Address, Mobile Number, E-mail ID. Benefits: Effective Communication, Speedy redressal of the grievances.
    </div>
    <br>
    <div class="mt20">
        Prevent unauthorized transactions in your account. Update your mobile numbers/email IDs with your stock brokers. Receive information of your transactions directly from Exchange on your mobile/email at the end of the day. Issued in
        the interest of investors. KYC is a one-time exercise while dealing in securities markets-once KYC is done through a SEBI registered intermediary (broker, DP, Mutual Fund etc.), you need not undergo the same process again when you
        approach another intermediary." Dear Investor, if you are subscribing to an IPO, there is no need to issue a cheque. Please write the Bank account number and sign the IPO application form to authorize your bank to make payment in
        case of allotment. In the case of non-allotment, the funds will remain in your bank account. As a business we don't give stock tips and have not authorized anyone to trade on behalf of others. If you find anyone claiming to be part
        of NextBillion Technology Private Limited and offering such services please report at support@Taxkamkar.in
    </div>
    <br>
    <div class="mt20">
        NextBillion Technology Private Limited makes no warranties or representations, express or implied, on products offered through the platform. It accepts no liability for any damages or losses, however caused, in connection with the
        use of, or on the reliance of its product or related services. Unless otherwise specified, all returns, expense ratio, NAV, etc are historical and for illustrative purposes only. Future will vary greatly and depends on personal and
        market circumstances. The information provided by our blog is educational only and is not investment or tax advice.
    </div>
    <br>
    <div class="mt20">
        Mutual fund investments are subject to market risks. Please read all scheme related documents carefully before investing. Past performance of the schemes is neither an indicator nor a guarantee of future performance.
    </div>
    <br>
    <div class="mt20">Terms and conditions of the website/app are applicable. Privacy policy of the website is applicable.</div>
</div>

                
                
</div>

            </div>
        </div>
  </section>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Taxkamkar</strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="https://www.digitalwebspot.com/">DigitalWebspot</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
			<a href="#">Disclaimer</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
			<a href="#">Sitemap</a>
          </nav>
        </div>
      </div>
    </div>
    
    
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/jquery/jquery.min.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/js/receipt_rent.js"></script>
  
  <script src="https://code.highcharts.com/4.2.6/highcharts.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/js/simple-slider.min.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/counterup/counterup.min.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/venobox/venobox.min.js"></script>
  <script src="https://taxkamkar.com/taxkamkar/assets/vendor/aos/aos.js"></script>
 
  <script src="https://taxkamkar.com/taxkamkar/assets/js/main.js"></script>
  
  
  <script type="text/javascript">
/**
$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    $('#aboute').toggleClass('colorchange',
     //add 'ok' class when div position match or exceeds else remove the 'ok' class.
      scroll >= $('#aboute').offset().top
    );
});
//trigger the scroll
$(window).scroll();//ensure if you're in current position when page is refreshed
**/
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};
$(window).on('resize scroll', function() {
    if ($('#aboute').isInViewport()) {
        $('#aboute').addClass('colorchange');
    } 
    if($('#about').isInViewport()) {
        $('#aboute').removeClass('colorchange');
    }
    if($('#exploreid').isInViewport()) {
        $('#aboute').removeClass('colorchange');
    }
});
</script>
</body>

</html>