
<!DOCTYPE html>
<html> 
<head>
<title> Sum Hospital | Home </title>
<link rel="icon" type="image/png" sizes="16x16" href="/logo.ico">

		<!-- Web Fonts -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- CSS Header and Footer -->
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">

		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href=/plugins/line-icons-pro/styles.css">
		<link rel="stylesheet" href="/plugins/line-icons/line-icons.css">
		<link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">

		<!-- CSS Customization -->
		<link rel="stylesheet" href="/css/custom.css">

</head>

<body>
	<div class="wrapper">
	<!--=== Header v1 ===-->
	<div class="header-v1">
	<!-- Topbar -->
	<div class="topbar-v1" style="background:lightgreen;">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
			<ul class="list-inline top-v1-contacts">
			<li>
			<i class="fa fa-envelope"></i> Email: Sumhospitals@outlook.in
			</li>
			<li>
			<i class="fa fa-phone"></i> Contact no : +91 637 111 8959
			</li>
			</ul>
</div>
</div>
</div>
</div>
            
<!-- End Topbar -->

				<!-- Navbar -->
				<div class="navbar mega-menu" role="navigation">
				<div class="container" style="margin-left:120px">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="res-container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

				<div class="navbar-brand" style="margin-right:200px" >
				<a href="index.php">
				<img src="/logo.png" alt="Logo" >
				</a>
				</div>
				</div><!--/end responsive container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-responsive-collapse">
		<div class="res-container">
			<ul class="nav navbar-nav" style="border: 1px Solid Chartreuse; border-radius: 20px 20px 20px 20px; background: Chartreuse">

			<!-- Collect the nav links, forms, and other content for toggling -->


				<!-- Home  -->
				<li class="mega-menu-fullwidth" style="border: 0px Solid Gold; border-radius: 20px 0px 0px 20px; background: Gold">
				<a href="index.php" style="border: 0px Solid Gold; border-radius: 20px 0px 0px 20px; background: Gold" >
				HOME
				</a>

				</li>
				<!-- End Home-->

				<!-- About Us -->
				<li class="mega-menu-fullwidth">
				<a href="about.php" >
				ABOUT US
				</a>	
				</li>
				<!-- End About us -->

				<!-- Doctors -->
				<li class="mega-menu-fullwidth">
				<a href="doctors.php" >
				DOCTORS
				</a>

				</li>
				<!-- End Doctors -->


				


				<!-- Blog -->
				<li class="mega-menu-fullwidth">
				<a href="blog.php" >
				BLOGS
				</a>	
				</li>
				<!-- End Blog -->

				<!-- Contact Us -->
				<li class="mega-menu-fullwidth">
				<a href="contact.php" >
				CONTACT US
				</a>	
				</li>
				<!-- End Contact us -->

				<!-- Appointment -->
				<li class="mega-menu-fullwidth" style="border: 0px Solid Gold; border-radius: 0px 20px 20px 0px; background: Gold">
				<a href="backend/index.php" style="border: 0px Solid Gold; border-radius: 0px 20px 20px 0px; background: Gold">
					BOOK APPOINTMENT
				</a>

				</li>
				<!-- End Appointment -->

			</ul>

		</div>
		</div>
		</div>
		</div>
		</div>
		<!-- End Navbar -->




			<!-- Slider -->
			<div id="slide">
			<div class="slideshow-container">
			<div class="mySlides fade"> <img src="/img/slider/1.png" alt="Slider1" style="width:100%"> </div>
			<div class="mySlides fade"> <img src="/img/slider/2.png" alt="Slider2" style="width:100%"> </div>
			<div class="mySlides fade"> <img src="/img/slider/3.png" alt="Slider3" style="width:100%"> </div>
			<div class="mySlides fade"> <img src="/img/slider/4.png" alt="Slider3" style="width:100%"> </div>
			<div class="mySlides fade"> <img src="/img/slider/5.png" alt="Slider3" style="width:100%"> </div>
			<div class="mySlides fade"> <img src="/img/slider/6.png" alt="Slider3" style="width:100%"> </div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next" onclick="plusSlides(1)">&#10095;</a> 
			</div>
			<br>
			<div style="text-align:center"> 
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
			<span class="dot" onclick="currentSlide(6)"></span>
			</div>
			</div>
            <style>
            .slideshow-container {
	width: 100vw;
	height: 100%;
	position: relative;
	margin-top: 60px;
            }

            
            </style>

			<script>
			var slideIndex = 0;
			showSlides();
			var slides,dots;

			function showSlides() {
			var i;
			slides = document.getElementsByClassName("mySlides");
			dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex> slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 8000); // Change image every 8 seconds
			}

			function plusSlides(position) {
			slideIndex +=position;
			if (slideIndex> slides.length) {slideIndex = 1}
			else if(slideIndex<1){slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
			}
			for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			}

			function currentSlide(index) {
			if (index> slides.length) {index = 1}
			else if(index<1){index = slides.length}
			for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
			}
			for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[index-1].style.display = "block";  
			dots[index-1].className += " active";
			}
			</script>


			<!-- End of Slider -->


			<!-- End of Slider -->

		<!--=== Welcome to Sum===-->
		<div class="container content-md welcomeSection">
		<div class="row section1">
		<div class="col-md-6">
			<h2 class="title-v2">WELCOME TO <span style="color: #72c02c;"> Sum </span></h2>
			<p style="text-align: justify; font-size: 14px;">A state-of-the art modern facility in the heart of the Gujarat state, it is spread over 10 acres and has a built-up area of over 440000 square feet. Currently the hospital has 300+ beds with a capacity to expand to 400 beds.</p>
			<p style="text-align: justify; font-size: 14px;">Sum Hospital, Bhubaneswar is a tertiary care flagship unit of the Sum Hospitals Group.The Hospital focuses on centres of excellence like Cardiac Sciences, Neuro Sciences, Orthopaedics including Knee Replacement, Hip Replacement and Spine Surgery, Cancer, Emergency Medicine and Solid Organ Transplants besides the complete range of more than 35 allied medical disciplines under the same roof.</p> 
			<p style="text-align: justify; font-size: 14px;"> Sum Hospital, Bhubaneswar provides holistic healthcare that includes prevention, treatment, rehabilitation and health education for patients, their families and clients by touching their lives.</p> <br>
			<a href="about.php" class="btn-u btn-brd btn-brd-hover">Read More</a>
		</div>
		<div class="col-md-6 overflow-h">
			<img style="border-radius: 50px; margin-left: 30px;" src="/img/bg/1.jpg" alt="">
		</div>
		</div>
		</div>
		<!--=== End About Us ===-->



		<!-- Specialities -->
		<div class="container" style="margin-top: 50px;">
		<div class="headline-center" style="margin-bottom: 60px;">
			<h2>Our Specialities</h2>
			<div class="line"></div>
			<p>Sum is a multi/super speciality hospital with state-of-the-art facilities & treatments at an affordable cost, encompassing wide spectrum of accurate diagnostics and elegant therapeutics created on the philosophical edifice of patient and ethical centricity ensuring humanistic dispensation. </p>
		</div><!--end Spciallities-->

		<div class="row" style="margin-bottom: 40px;">
			<div class="col-md-4">
				<div class="content-boxes-v5" style="margin-bottom: 30px;">
					<i class="icon-medical-005" style="border-radius: 50%;"></i>
					<div class="overflow-h">
						<h3 class="no-top-space">24/7 Ambulance support</h3>
						<p>24 Hours Ambulance Service, Emergency Ambulance Service Providers in India.</p>
					</div>
				</div>
				<div class="content-boxes-v5" style="margin-bottom: 30px;">
					<i style="border-radius: 50%;" class="icon-medical-054"></i>
					<div class="overflow-h">
						<h3 class="no-top-space">LASIK Vision Correction Treatment </h3>
						<p>We have LASIK Vision treatment which is the latest in the world.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="content-boxes-v5" style="margin-bottom: 30px;">
					<i style="border-radius: 50%;" class="icon-medical-042"></i>
					<div class="overflow-h">
						<h3 class="no-top-space">Dedicated Stroke Centre</h3>
						<p>We specially have dedicated stroke centre which is very handy in critical situations.</p>
					</div>
				</div>
				<div class="content-boxes-v5" style="margin-bottom: 30px;">
					<i style="border-radius: 50%;" class="icon-medical-019"></i>
					<div class="overflow-h">
						<h3 class="no-top-space">17 State-of-the-art Operation Theatres</h3>
						<p>These Operation Theatres are full of latest technologies and equipments.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="content-boxes-v5" style="margin-bottom: 30px;">
					<i style="border-radius: 50%;" class="icon-medical-069"></i>
					<div class="overflow-h">
						<h3 class="no-top-space">Joint Replacement Centre</h3>
						<p>We have have dedicated Joint Replacement Centre.</p>
					</div>
				</div>
				<div class="content-boxes-v5" style="margin-bottom: 30px;">
					<i style="border-radius: 50%;" class="icon-medical-061"></i>
					<div class="overflow-h">
						<h3 class="no-top-space">2 Endoscopy Suites</h3>
						<p>2 Endoscopy Suites are with latest equipments and very faster as compared to others.</p>
					</div>
				</div>
			</div>
		</div><!--/end row-->
		</div><!--/end container-->
		<!-- End Content Part -->

				<!-- Plans Start -->
				<section class="pricingSection">
				<div class="container" style="margin-top: 20px;">
				<div class="headline-center">
					<h2>Health Packages</h2>
					<div class="line"></div>
				<div class="row">
				<!-- Pricing Item 1-->
				<div class="col-md-3 col-xs-6 col-2xs-12">
				<div class="flip-card">
					<div class="flip-card-inner">
							<div class="flip-card-front">
									<p class="title"><div class="pricing-v9-head">
										<h3 class="h3"><span class="g-color-default">UNIT</span> Basic wellness</h3>
									</div></p>
									<div class="pricing-v9-price">
										For <span class="g-color-default">₹1500/-</span> 
									</div>
							</div>
							<div class="flip-card-back">
								<h3 class="h3"><span class="g-color-default">UNIT</span> Basic wellness</h3>
									<p class="title">
										<ul style="list-style-type: upper-alpha;">
										CBC <br>
										Blood Group & RH <br>
										Urine (Routine & Micro) <br>
										
									</ul>
			</p>
									<p style="color: greenyellow;">More</p>
							</div>
					</div>
			</div>
			</div>
				
				<!-- Pricing Item 2-->
				<div class="col-md-3 col-xs-6 col-2xs-12">
				<div class="flip-card">
					<div class="flip-card-inner">
							<div class="flip-card-front">
									<p class="title"><div class="pricing-v9-head">
										<h3 class="h3"><span class="g-color-default">UNIT</span> Silver Wellness</h3>
									</div></p>
									<div class="pricing-v9-price">
										For <span class="g-color-default">₹3000/-</span> 
									</div>
							</div>
							<div class="flip-card-back">
								<h3 class="h3"><span class="g-color-default">UNIT</span> Silver wellness</h3>
									<p class="title">
										<ul style="list-style-type: upper-alpha;">
										CBC  <br>
										Blood Group & RH  <br>
					Urine (Routine & Micro) <br>
										SGPT <br>
										
									</ul>
			</p>
								<p style="color: greenyellow;">More</p>
							</div>
					</div>
			</div>
			</div>
				
				<!-- Pricing Item -->
				<div class="col-md-3 col-xs-6 col-2xs-12">
				<div class="flip-card">
					<div class="flip-card-inner">
							<div class="flip-card-front">
									<p class="title"><div class="pricing-v9-head">
										<h3 class="h3"><span class="g-color-default">UNIT</span> Gold Wellness</h3>
									</div></p>
									<div class="pricing-v9-price">
										For <span class="g-color-default">₹4500/-</span> 
									</div>
							</div>
							<div class="flip-card-back">
								<h3 class="h3"><span class="g-color-default">UNIT</span>Gold Wellness</h3>
									<p class="title">
										<ul style="list-style-type: upper-alpha;">
										Lipid Profile  <br>
										ECG <br>
										Chest X-RAY <br>
										FBS <br>
									</ul>
			</p>
								<p style="color: greenyellow;">More</p>
							</div>
					</div>
			</div>
			</div>
				
				<!-- Pricing Item -->
				<div class="col-md-3 col-xs-6 col-2xs-12">
				<div class="flip-card">
					<div class="flip-card-inner">
							<div class="flip-card-front">
									<p class="title"><div class="pricing-v9-head">
										<h3 class="h3"><span class="g-color-default">UNIT</span> Platinum Wellness</h3>
									</div></p>
									<div class="pricing-v9-price">
										For <span class="g-color-default">₹8000/-</span> 
									</div>
							</div>
							<div class="flip-card-back">
								<h3 class="h3"><span class="g-color-default">UNIT</span> Platinum Wellness</h3>
									<p class="title">
										<ul style="list-style-type: upper-alpha;">
										Basic Wellness Plan <br>
										Lung Function Tests <br>
										USG Abdomen <br>
										Thyroid All Tests <br>
									</ul>
			</p>
									<p style="color: greenyellow;">More</p>
							</div>
					</div>
			</div>
			</div>
				
				
				
				
				
				<!-- /Pricing Item -->
				</div>
				</div>
				</div>
				</section>
				<!-- End PLANS -->


		<!-- Blog part -->
		<div class="container">
		<div class="headline-center" style="margin-bottom: 40px;">
			<h2>Recent Blogs</h2>
			<div class="line"></div>
		</div><!--/end Headline Center-->

		<div class="container" style="margin-bottom: 50px;">
		<div class="row news-v1">
		<div class="col-md-4" style="margin-bottom: 40px;">
			<div class="news-v1-in">
				<img class="img-responsive" src="/img/blogs/1.jpg" alt="">
				<h3><a href="blog.php">How to maintain bone and joint health during winters?</a></h3>
				<p>Motion is life and you need stronger bones and flexible joints to do that. With the onset of winter, the problems of bones and joints ought to increase. It is usually due to... </p>
				<ul class="list-inline news-v1-info">
					<li><span>By</span> <a href="#">Dr. Ramneek Mahajan</a></li>
					<li style="margin-left: 17px;">|</li>
					<li style="margin-left: 12px;"><i class="fa fa-clock-o"></i> January 31, 2025</li>
					<li><a href="blog.php" class="btn-u btn-brd btn-brd-hover blogButton">Read More</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-4" style="margin-bottom: 40px;">
			<div class="news-v1-in">
				<img class="img-responsive" src="/img/blogs/2.jpg" alt="">
				<h3><a href="blog.php">Robot Assisted Kidney Transplant in France</a></h3>
				<p>Open kidney transplant is an established procedure, considered the best treatment for end stage renal failure. However, it carries all the disadvantages of open surgeries. Wound...</p>
				<ul class="list-inline news-v1-info">
					<li><span>By</span> <a href="#">Dr. Anant Kumar</a></li>
					<li style="margin-left: 17px;">|</li>
					<li style="margin-left: 12px;"><i class="fa fa-clock-o"></i> December 31, 2024</li>
					<li><a href="blog.php" class="btn-u btn-brd btn-brd-hover blogButton">Read More</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="news-v1-in">
				<img class="img-responsive" src="/img/blogs/3.jpg" alt="">
				<h3><a href="blog.php">Body Weight - What you must know about it!</a></h3>
				<p>Our weight is one of the physical characteristics which describes us. However apart from being a physical attribute, it holds the secret to our very existence..</p>
				<ul class="list-inline news-v1-info">
					<li><span>By</span> <a href="#">Dr. Vandana Soni</a></li>
					<li style="margin-left: 17px;">|</li>
					<li style="margin-left: 12px;"><i class="fa fa-clock-o"></i> December 31, 2024</li>
					<li><a href="blog.php" class="btn-u btn-brd btn-brd-hover blogButton">Read More</a></li>
				</ul>
			</div>
		</div>
		</div>
		</div>
		<!-- End News v1 Gray -->
		</div>



		<!--=== Footer ===-->
		<div class="footer-v1">
		<div class="footer">
		<div class="container">
		<div class="row">
		<!-- About -->
		<div class="col-md-3 md-margin-bottom-40">
		<a href="index.php"><img id="logo-footer" class="footer-logo" src="img/logo/Sum_white.jpg" alt=""></a>
		<p>At Sum Hospital, we are convinced that 'quality' and 'lowest cost' are not mutually exclusive when it comes to healthcare delivery.</p>
		<p>Our mission is to deliver high quality, affordable healthcare services to the broader population in India.</p>
		</div><!--/col-md-3-->
		<!-- End About -->

		<!-- Latest -->
		<div class="col-md-3" style="margin-bottom: 40px;">
		<div class="posts">
		<div class="headline"><h2>Latest Posts</h2></div>
		<ul class="list-unstyled latest-list">
		<li>
		<a href="blog.php">Incredible content</a>
		<small>December 16, 2025</small>
		</li>
		<li>
		<a href="gallery.php">Latest Images</a>
		<small>December 16, 2025</small>
		</li>
		<li>
		<a href="terms.php">Terms and Conditions</a>
		<small>December 16, 2025</small>
		</li>
		</ul>
		</div>
		</div><!--/col-md-3-->
		<!-- End Latest -->

		<!-- Link List -->
		<div class="col-md-3" style="margin-bottom: 40px;">
		<div class="headline"><h2>Useful Links</h2></div>
		<ul class="list-unstyled link-list">
		<li><a href="about.php">About us</a><i class="fa fa-angle-right"></i></li>
		<li><a href="Contact.php">Contact us</a><i class="fa fa-angle-right"></i></li>
		<li><a href="appointment.php">Book Appointment</a><i class="fa fa-angle-right"></i></li>
		</ul>
		</div><!--/col-md-3-->
		<!-- End Link List -->

		<!-- Address -->
			<div class="col-md-3 map-img " style="margin-bottom: 40px;">
			<div class="headline"><h2>Address</h2></div>
			<address class="md-margin-bottom-40">
		<div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.393648598479!2d85.7676302739107!3d20.283967012944977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a7a77f4d2d37%3A0xb4e2d6e2f8f0e83c!2sSUM%20Hospital!5e0!3m2!1sen!2sin!4v1743762406272!5m2!1sen!2sin" width="300" height="200" style="border-radius:10px 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
		</address>
		</div><!--/col-md-3-->
        <style>
        .footer-v1 .footer {
        padding: 0px 0px;	
        background-image: url(../img/footer-bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-blend-mode: darken;
    }
        </style>
			<!-- End Address -->
		</div>
		</div>
		</div><!--/footer-->

		<div class="copyright">
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		<p>
		2025 &copy; All Rights Reserved.
		<a href="privacy.php">Privacy Policy</a> | <a href="terms.php">Terms of Service</a>
		</p>
		</div>

		<!-- Social Links -->
		<div class="col-md-6">
		<ul class="footer-socials list-inline">
		<li>
		<a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
		<i class="fa fa-facebook"></i>
		</a>
		</li>
		<li>
		<a href="http://www.skype.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
		<i class="fa fa-skype"></i>
		</a>
		</li>
		<li>
		<a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
		<i class="fa fa-google-plus"></i>
		</a>
		</li>
		<li>
		<a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
		<i class="fa fa-linkedin"></i>
		</a>
		</li>
		<li>
		<a href="http://www.Pinterest.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
		<i class="fa fa-pinterest"></i>
		</a>
		</li>
		<li>
		<a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
		<i class="fa fa-twitter"></i>
		</a>
		</li>
		</ul>
		</div>
		<!-- End Social Links -->
		</div>
		</div>
		</div><!--/copyright-->
		</div>
		<!--=== End Footer ===-->
</div><!--/wrapper-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67ef7f52c19f27190ed5d19c/1invoinho';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<style>
.footer-v1 .footer {
	padding: 0px 0;	
	background-image: url(../img/footer-bg.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
   background-blend-mode: darken;
}

</style>
</body>
</html>

