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
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12 clear-pd-left clear-pd-right">
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
		
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 remove-space">
			<div class="timeline">
			  <div class="container-milestone left">
				<div class="content">
					  <img class="img-responsive resize-icon" src="<?php echo base_url()?>images/company_profile/milestone/milestone-fibre.svg"/>
					  <h2>2007, Q2</h2>
					  <p>Launched with Full service provider, <br/>Fibre Optic, VOIP Gateway, Enterprise <br/>Solutions & VAS services</p>
					  
				</div>
			  </div>
			  <div class="container-milestone right reduce-space-telcotech">
				<div class="content">
				<img  class="img-responsive resize-tct" src="<?php echo base_url()?>images/company_profile/milestone/milestone-TCT.svg"/>
				  <h2 class="head-align-left">2011,Q2</h2>
				  <p class="sub-title-align-left">Telcotech Cambodia</p>
				  <p class="detail-left">
					Acquired wholesale provider in 2011 Q2 <br/>(Telcotech) – established fibre coverage nationwide</p>
				</div>
			  </div>
			  <div class="container-milestone left reduce-space-agg">
				<div class="content">
				  <img class="img-responsive resize-agg" src="<?php echo base_url()?>images/company_profile/milestone/milestone-AAG.jpg"/>
				  <h2>2011</h2>
				  <p class="sub-title-agg">
					Asia-America Gateway(AAG)<br/>Cable System
				  </p>
				  <p>Partner in Asia America Gateway(AAG), <br/>trans Pacific submarine cable</p>
				</div>
			  </div>
			  <div class="container-milestone right reduce-space-iso">
				<div class="content">
				  <img  class="img-responsive resize-iso" src="<?php echo base_url()?>images/company_profile/milestone/milestone-ISO.jpg"/>
				  <h2 class="head-align-left">2011, JUNE</h2>
				  <p class="sub-title-align-left">ISO Certification</p>
				  <p class="detail-left">Only ISP in Cambodia to be ISO certified</p>
				</div>
			  </div>
			  <div class="container-milestone left reduce-space-best-isp">
				<div class="content">
				<img class="img-responsive resize-isp" src="<?php echo base_url()?>images/company_profile/milestone/milestone-bestISP.svg"/>
				  <h2>2011,2012</h2>
				  <p class="best-isp">Best ISP Award</p>
				  <p>Two consecutive wins of “best ISP” <br/>award – voted by public and panel <br/>of experts 2011 & 2012</p>
				</div>
			  </div>
			  <div class="container-milestone right reduce-space-MCT">
				<div class="content">
				  <img class="img-responsive resize-mct" src="<?php echo base_url()?>images/company_profile/milestone/milestone-MCT.svg"/>
				  <h2 class="head-align-left">2015, MARCH</h2>
				  <p class="sub-title-align-left">MCT: Submarine Cable System</p>
				  <p class="detail-left">EZECOM has launched the first submarine <br/>cable network in Cambodia history. MCT is a <br/>very powerful cable system spans <br/>aproximately 1,300km, and positions <br/>Cambodia a geteway to Asia.</p>
				</div>
			  </div>
			  
			  <div class="container-milestone left reduce-space-ICT">
				<div class="content add-top">
				<img class="img-responsive resize-icon" src="<?php echo base_url()?>images/company_profile/milestone/milestone-ICT-awar.jpg"/>
				  <h2>2016, JUNE</h2>
				  <p class="sub-title-ict">Cambodia ICT Awards (CICTA)</p>
				  <p>EZECOM received the Best ISP for<br/>Enterprise Award.</p>
				</div>
			  </div>
			  
			   <div class="container-milestone right reduce-space-brand-award">
				<div class="content">
				  <img class="img-responsive resize-best-employer" src="<?php echo base_url()?>images/company_profile/milestone/milestone-best-employer.jpg"/>
				  <h2 class="head-align-left">2017, AUGUST</h2>
				  <p class="sub-title-align-left">Best Employer Brand Award 2017</p>
				  <p class="detail-left">Singapore among 100 international brand <br/>companies in Asia.
<br/>At EZECOM, one of our five core values are <br/>People, we provide equal opportunity to <br/>employee and select its member base on <br/>
suitability and capability to the job regardless <br/>
of age, origin, civil status or race follow by <br/>
human right principles. We also strongly <br/>
encourage women and offer opportunity to <br/>
disable person to join our talented team. <br/>Move your career forward in ISP field.z</p>
				</div>
			  </div>
			  
			</div>
			
			</div>
		</div>
		
		
		<div class="row row-margin-bt">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-left clear-pd-right">
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
						JUN 4th 18, EZECOM has partnered with NXT Networks, a wholesale specialist providing intra-ASEAN terrestrial 
						connectivity, have announced a strategic partnership to offer a combined connectivity solution 
						which will bridge Cambodia, Laos, Myanmar, Vietnam and Thailand. More information, 
						<a href="https://www.ezecom.com.kh/newsdetail/ezecom-partners-with-lxt-networks-to-boost-international-capacity-and-cross-border-connectivity">click here</a> 
					</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-right clear-pd-left">
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