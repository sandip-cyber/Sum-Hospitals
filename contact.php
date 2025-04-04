<!DOCTYPE html>
<html> 
<head>
		<title> Sum Hospital | CONTACT </title>
		<link rel="icon" type="image/png" sizes="16x16" href="/logo.ico">
	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/footer.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
	 
	 <!-- CSS Page Style -->
  	<link rel="stylesheet" href="/css/blog_timeline.css">


	<!-- CSS Customization -->
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
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


		<!-- Image title -->

		<div style="text-align: center; margin-top: 50px; margin-bottom: 40px;">
			<h2>CONTACT</h2>
		</div>
	<!-- End title  -->


					<!--=== Content Part ===-->
					<div class="container-content">
						<form action="https://api.web3forms.com/submit" method="POST" class="content-left">
							<div class="contact-left-title">
								<h2>Get in Touch</h2>
								<p>Feel free to contact us for any queries.</p>
								<hr>
							</div>
							<input type="hidden" name="access_key" value="50876dfa-ff47-45ca-907f-d80fae72e6f4">
							<input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
							<input type="email" name="email" placeholder="Your Email" class="contact-inputs" required>
							<textarea name="message" placeholder="Your Message" class="contact-inputs" required></textarea>
							<button type="submit" class="bottom">Submit<img src="\arrow_icon.png" alt=""></button>
						</form>
						<div class="contact-right">
							<img src="/right_img.png" alt="">
						</div>
						<style>
							.container-content{
								height: 100vh;
								display: flex;
								position: relative;
								align-items: center;
								justify-content: space-evenly;
								left: 40px;
								}
								.content-left{
									display: flex;
									flex-direction: column;
									align-items: start;
									gap: 20px;
								}
								.contact-left-title{
									text-align: start;
								}
								.contact-left-title h2{
									font-size: 40px;
									font-weight: 600;
									color: #a363aa;
									margin-bottom: 5px;

								}
								.contact-left-title p{
									font-size: 20px;
									color: #a363aa;
								}
								.contact-left-title hr{
									width: 120px;
									height: 5px;
									background-color: #a363aa;
									border: none;
									border-radius: 10px;
									margin-bottom: 20px;
								}
								.contact-inputs{
									width: 400px;
									height: 50px;
									border: none;
									outline: none;
									padding-left: 25px;
									font-weight: 500;
									border-radius: 50px;
									color: gray;
									background-color:lightgreen;
								}
								.content-left textarea{
									height: 140px;
									padding-top: 15px;
									border-radius: 20px;
								}
								.contact-inputs:focus{
									border: 2px solid #ff994f;
								}
								.contact-inputs::placeholder{
									color:rgb(143, 93, 93);
									font-weight: 500;
								}
								.bottom{
									display: flex;
									align-items: center;
									padding: 15px 30px;
									font-size: 16px;
									color: white;
									gap: 10px;
									border: none;
									border-radius: 50px;
									background: linear-gradient(270deg, #ff994f, #fa6d86);
									cursor: pointer;
								}
								.bottom img{
									height: 15px;
								}
								.contact-right img{
									width: 500px;
									
								}
								@media screen and (max-width: 800px){
									.container-content{
										flex-direction: column;
										height: 100%;
										left: 0;
									}
									.content-left{
										align-items: center;
									}
									.contact-right img{
										display: none;
									}
									.contact-left-title h2{
										font-size: 30px;
									}
									.contact-left-title p{
										font-size: 16px;
									}
									.contact-inputs{
										width: 300px;
									}
									.content-left textarea{
										width: 300px;
									}
									.bottom{
										padding: 10px 20px;
										font-size: 14px;
									}
									
								}


						</style>


						<!-- end feedback -->
					<div class="col-md-3" style="margin-top: 56px;">
					<!-- Address -->
					<div class="headline"><h2>Address</h2></div>
					<ul class="list-unstyled who" style="margin-bottom: 30px;">
					<li><a href="#"><i class="fa fa-home"></i>Bhubaneswar, IN.</a></li>
					<li><a href="#"><i class="fa fa-envelope"></i>Sumhospital@gmail.com</a></li>
					<li><a href="#"><i class="fa fa-phone"></i>886 666 00555</a></li>
					<li><a href="#"><i class="fa fa-globe"></i>http://www.SumHospital.com</a></li>
					</ul>

					<!-- Business Hours -->
					<div class="headline"><h2>Business Hours</h2></div>
					<ul class="list-unstyled " style="margin-bottom: 30px;">
					<li><strong>Monday-Saturday:</strong> 24/7 Available.</li>
					<li><strong>Sunday:</strong> 4 AM to 11 PM.</li>
					</ul>

					<!-- Why choose us? -->
					<div class="headline"><h2>Why Choose Us?</h2></div>
					<p>All healthcare facilities can be accessed here under one roof, making Sum Hospital a one point contact for all your healthcare needs.</p>
					<ul class="list-unstyled">
					<li><i class="fa fa-check color-green"></i> 24/7 Ambulance Support.</li>
					<li><i class="fa fa-check color-green"></i> Eminent and Experienced Doctors.</li>
					<li><i class="fa fa-check color-green"></i> Multiple Options For Treatment.</li>
					</ul>
					</div><!--/col-md-3-->
					</div><!--/row-->
					</div><!--/container-->



<!--=== Footer ===-->
			<div class="footer-v1">
			<div class="footer">
			<div class="container">
			<div class="row">
			<!-- About -->
			<div class="col-md-3 " style="margin-bottom: 40px;">
			<a href="index.php"><img id="logo-footer" class="footer-logo" src="/img/logo/Sum_white.jpg" alt=""></a>
			<p>At Sum Hospital, we are convinced that 'quality' and 'lowest cost' are not mutually exclusive when it comes to healthcare delivery.</p>
			<p>Our mission is to deliver high quality, affordable healthcare services to the broader population in India.</p>
			</div><!--/col-md-3-->
			<!-- End About -->

			<!-- Latest -->
			<div class="col-md-3 " style="margin-bottom: 40px;">
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
			<div class="col-md-3 " style="margin-bottom: 40px;">
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

	<!-- Java scripts -->
	<script type="text/javascript" src="/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript">
	function showMsg(flag){
	if(flag==0){
	$('.successBox').css('display', 'block');
	}else{
	$('.successBox').css('display', 'none');
	}
	}
	</script>

</body>
</html>
