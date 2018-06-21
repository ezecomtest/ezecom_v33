<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title;?></title>
		<link href="<?php echo base_url();?>images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php
			/* Top Header */
			$this->load->view('header/frontend_header');
			$this->load->view('header/header_all');
			/* Navigation Menu */
			$this->load->view('header/main_nav_user_v');
		?>
	</head>
<body>  
<div class="container-fluid">
	<div class="container container-top-mar">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<img class="img-responsive" src="<?php echo base_url()?>images/company_profile/company-profile.jpg" alt="Company Profile"/>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-1"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-11">
				<div class="wrapper-profile">
					<p class="profile-detail">
						EZECOM was founded to serve the rapidly expanding enterprise and residence user 
						markets in Cambodia. Launched in 2007, EZECOM has since become a leading provider 
						of a wide variety of innovative communication services. EZECOM’s mission is 
						“To be Cambodia’s premium solutions provider of communications services through 
						constant innovation & improvement while contribute to society”.
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row row-margin-bt">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-left">
				<div class="wrapper-technology">
					<img class="img-responsive" src="<?php echo base_url()?>images/company_profile/technology.svg" alt="Technology" title="Technology"/>
					<h3>Technology</h3>
					<p>
						Our company has incorporated its own fibre optic, VPLS, MPLS and a custom-built, 
						world-class Data Centre. Recognizing the need for high quality, hassle-free, reliable 
						internet services, EZECOM invested in a multitude of high quality infrastructures. 
						These innovative solutions, along with the complete package of services EZECOM offers 
						corporations, offices and home users, has made us the leader in our field.
					</p>
					<p>
						EZECOM is the only ISP to own the first submarine cable system, Malaysia - Cambodia – Thailand (MCT), 
						which spans approximately 1,300 kilometers that position Cambodia as the gateway to Asia and enable 
						Cambodia to harvest the Asia Traffic as well as extend the connectivity to ASEAN and the rest of the 
						world via Malaysia.
					</p>
					<p>
						JUN 4th 18, EZECOM has partnered with NLX networks, a wholesale specialist providing intra-ASEAN terrestrial 
						connectivity, have announced a strategic partnership to offer a combined connectivity solution 
						which will bridge Cambodia, Laos, Myanmar, Vietnam and Thailand. More information, 
						click here <a href="https://www.ezecom.com.kh/newsdetail/ezecom-partners-with-lxt-networks-to-boost-international-capacity-and-cross-border-connectivity">https://www.ezecom.com.kh/newsdetail/ezecom-partners-with-lxt-networks-to-boost-international-capacity-and-cross-border-connectivity</a>
					</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-right">
				<div class="wrapper-technology">
					<img class="img-responsive" src="<?php echo base_url()?>images/company_profile/social-network.svg" alt="Corporate Social Responsibility" title="Corporate Social Responsibility"/>
					<h3>Corporate Social Responsibility</h3>
					<p>
						Besides our strong technical foundation, EZECOM is actively stimulating the growth of the 
						Cambodian community. EZECOM believes in growth, not only within our company and for our 
						staff but also for the entire community in which we do business. That is why EZECOM has 
						chosen to be an active partner in the Cambodian community, through a variety of sponsorships 
						every year. Please visit our webpage on News and Events for an up-to-date overview of EZECOM's 
						partnerships.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
	
	
	
	
<!-- FOOTER -->
<?php
	$this->load->view('footer/footer_user_v');
?>

<!-- BACK TOP TOP BUTTON -->
 
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
  <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
</div>
 </body>
</html>

<script type="text/javascript">
	(function($){
		// Back to top
		$('#back-to-top').on('click', function(){
	 
			$("html, body").animate({scrollTop: 0}, 500);
	 
			return false;
	 
		});
	 
	})(jQuery);
</script>