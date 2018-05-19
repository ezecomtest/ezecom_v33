<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <?php
			/* Top Header */
			$this->load->view('header/frontend_header');
			$this->load->view('header/header_all');
			$this->load->view('header/main_nav_user_v');
	    ?>
	</head>
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="discount-wrapper">
					<h2>Student Discount</h2>
					<p>
						At nine of the top universities of Cambodia EZECOM provides free internet for all students to use and help with their study. 
						And if you want to continue to study at home – EZECOM can give you a special 10% discount on our Pulse Packages. 
						This promotion is only applicable if you study at one of our EzeCampus universities.
					</p>
					<p>
						Is your university not a part of the EzeCampus program? Contact your university or contact EZECOM to see if your university is applicable for your program.

					</p>
					<p class="Ezecampust-University">
						These are current our EzeCampus universities in Phnom Penh:
					</p>
					<ul>
						<li>Western University</li>
						<li>University of Health Science</li>
						<li>Build Bright University</li>
						<li>Royal University of Phnom Penh</li>
						<li>Cambodian Mekong University</li>
						<li>Financial Institute of Cambodia</li>
						<li>nstitute of foreign langague</li>
						<li>Pannasastra University of Cambodia</li>
						<li>Passerelles numériques</li>
					</ul>
					<p>
						Did you know that in October 2012 we expanded our EzeCampus project to the provinces? 
						We are now supplying free internet to 50 selected high school through the whole country. 
						Besides free internet for the students to use – EZECOM has set-up a VPN network which allows 
						the Ministry of Education to take the first steps towards E-learning. Besides teach the teacher courses, 
						easy dissemination of information – also simulcast lectures are now possible thanks to this donation from EZECOM.
					</p>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
	</div>
</div>
		
	
<!-- FOOTER -->
<?php $this->load->view("footer/footer_user_v")?> 

<!-- BACK TOP TOP BUTTON -->
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
  <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
</div>
 
</body>
</html>
<script type="text/javascript">
	(function($) {
		// Back to top
		$('#back-to-top').on('click', function(){
			$("html, body").animate({scrollTop: 0}, 500);
			return false;
		});
	})(jQuery);
</script>
<!-- BACK TO TOP BUTTON -->