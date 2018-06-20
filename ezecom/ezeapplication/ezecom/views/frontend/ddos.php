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
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/DDos/ddos.jpg"/>
					<span>
						<img  id="pop-up-form" class="img-responsive sign-up" src="<?php echo base_url()?>images/our-services/DDos/button-sign-me-up.svg"/>
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<!-- Contact Form  -->
					<div class="container">
							<div class="row">
								<div class="form-wrapper">
									<form class="form-horizontal" action="<?php echo base_url()?>Hosting/sending.php" method="post">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="formEmail">
												  <h5>Contact Us</h5>
												  <p>Call us now on <strong>‎023 238 181 / 085 888 181</strong> or fill in your information here and a member of our sales team will get back to you.</p>
												  <div class="form-group">
													<label class="control-label col-sm-4">Full Name:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control resize-textbox" name="name" required />
													</div>
												  </div>
												  <div class="form-group">
													<label class="control-label col-sm-4">Email Address:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control resize-textbox" name="email" required />
													</div>
												  </div>
												  <div class="form-group">
													<label class="control-label col-sm-4">Phone Number:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control resize-textbox" name="mobile" required />
													</div>
												  </div>
												  <div class="form-group">
													<label class="control-label col-sm-4">Connection Details:</label>
													<div class="col-sm-8">
														<textarea rows="4" class="form-control resize-textbox" name="desciption"></textarea>
													</div>
												  </div>
												  <div class="form-group">
													  <label class="control-label col-sm-4" for="pwd"></label>
													  <div class="col-sm-8">          
														<div class="g-recaptcha" data-sitekey="6LegbCMTAAAAANeFxea47OaPqcjZocO2CwUhFPt9"></div>
													  </div>
												  </div>
												  <input type="hidden" value="<?php echo base_url() ?>" name="baseUrl" />
												  <div class="form-group">        
													  <div class="col-sm-offset-4 col-sm-8">
														<input type="button" id="btn-close" name="close" value="Close" class="btn btn-default submit"/>
														<input type="submit" value="Submit" class="btn btn-default submit"/>
													  </div>
												  </div>
								
											</div>
										</div>
									</form>
									<script src='https://www.google.com/recaptcha/api.js'></script>
								</div>
							</div>
					</div> <!-- end container -->
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ddos-services">
					<h3>DDoS Mitigation Service</h3>
					<p>
						DDoS Mitigation Service is designed for businesses and enterprises 
						to secure their online operation against cyber-attacks known as 
						Distributed Denial of Service (DDoS) attacks.
					</p>
					<p>
						EZECOM’s DDoS Mitigation Service is equipped with technology 
						powered by an internationally recognized research lab and 
						developed with over 10 years of experience protecting the 
						world’s largest banks, telecommunications, gaming and social 
						media companies. It uses an innovative, multi-stage approach 
						for monitoring, detecting and mitigating the most complex DDoS 
						attacks to ensure only legitimate traffic reaches your important 
						network and application resources. It has local scrubbing rcentre 
						with scrubbing capacity of 4 Gbps (upgradable on demand) and global 
						cloud scrubbing centre with scrubbing capacity of up to 2 Tbps and 
						utilizes world-class global threat intelligence, working in unison to 
						automatically defeat every size, duration, and frequency of DDoS attacks!
					</p>
				</div>
			</div>
		</div>
		<div class="row ddos-attacks">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<div class="how-ddos-attacks">
					<h3>How DDoS Attacks</h3>
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/DDoS-attack-chart.png"/>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row">
			<div class="impact">
				<h3>Business Impacts due to DDoS Attacks</h3>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="revenue">
					<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-Revenue-Loss.png"/>
					<h4 class="text-center">REVENUE LOSS</h4>
					<p class="text-center">
						Downtime affects your growing business as it now becomes IT and internet reliant. 
						Your technical infrastructure has become more complex and requires proper 
						system or back up process to minimise downtime threat.
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="revenue">
					<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-Productivity-Loss.png"/>
					<h4 class="text-center">PRODUCTIVITY LOSS</h4>
					<p class="text-center">
						When your network systems are shut down, your workforce 
						productivity will be immediately halted, affecting both internal & 
						external communications and will affect your customers’ satisfaction.
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="revenue">
					<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-Reputation-Damage.png"/>
					<h4 class="text-center">REPUTATION DAMAGE</h4>
					<p class="text-center">
						Your brand image suffers because you have lost the trust of valuable customers.
					</p>
				</div>
			</div>
		</div>
		<div class="row ddos-attacks">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<div class="ddos-mitigation">
					<h4>How our DDoS Mitigation Works</h4>
					<p>
						DDoS Mitigation Service Prevents the Loss of Your Business’s Revenue and Reputation
					</p>
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/DDoS-Mitigation-diagram.png"/>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt-benefit">
			<div class="features-benefits">
				<h4>Features and Benefits</h4>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="world-attack">
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-feature-01.png"/>
					<h4 class="text-center">WORLD-CLASS ATTACK MITIGATION</h4>
					<p class="text-center">Highly secured protection from DDoS attacks.</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="hybrid-protecting">
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-feature-02.png"/>
					<h4 class="text-center">HYBRID PROTECTION</h4>
					<p class="text-center">We make sure not just your internet, but also data, <br/>application etc. are protected and secured.</p>
				</div>
			</div>
		</div>
		<div class="row mg-bt-benefit">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="world-attack">
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-feature-03.png"/>
					<h4 class="text-center">LARGE SCALE PROTECTION NETWORK</h4>
					<p class="text-center">
					Global scrubbing centre with capacity 2 <br/>Tbps and local scrubbing centre with capacity 4 Gbps <br/>defeat every size, duration, and frequency of DDoS attacks.
					</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="hybrid-protecting">
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-feature04.png"/>
					<h4 class="text-center">PROVEN OPERATIONAL EXPERT & 24/7 SUPPORT</h4>
					<p class="text-center">Real-time 24/7 ability to detect and mitigate <br/>DDoS threats. Get comprehensive network security and <br/>keep track of your network’s performance.</p>
				</div>
			</div>
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
	
	jQuery(function($){
		$('#pop-up-form').click(function() {
			$('.form-wrapper').toggle('500');
		});
	
		$('#btn-close').click(function(e) {
            $('.form-wrapper').toggle('500');
        });
	
	});
</script>
<!-- BACK TO TOP BUTTON -->