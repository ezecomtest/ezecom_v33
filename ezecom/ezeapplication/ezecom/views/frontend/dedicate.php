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
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<span>
						<img id="pop-up-form" class="img-responsive btn-signmeup" src="<?php echo base_url()?>images/our-services/Ezebiz/button-sign-me-up.svg"/>
					</span>
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/dedicate.jpg"/>
				</div>
			</div>
		</div>
		
		<!--<div class="container-fluid">
	<div class="container container-top-mar">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<span>
						<img id="pop-up-form" class="img-responsive" src="<?php echo base_url()?>images/our-services/button-sign-me-up.svg"/>
					</span>
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/dedicate.jpg"/>
				</div>
			</div>
		</div>
		
		<!-- Contact Form Dedicate -->
		<div class="container">
				<div class="row">
					<div class="form-wrapper">
						<form class="form-horizontal" action="<?php echo base_url()?>Dedicate/sending.php" method="post">
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
		
		
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="about-ezebiz">
					<h3 class="text-center">About Dedicated Internet</h3>
					<p>
						Dedicated Internet is the highest performance internet package designed to fit the 
						needs of large corporations, enterprises and organizations. 
						Dedicated Internet’s purpose is to fulfill the high-end demand for ultimate speed, 
						reliability and security. The key term “Dedicated” in Dedicated Internet refers to 
						one-on-one internet sharing, which ensures constantly high speed and 
						stability 24/7. Dedicated Internet customers enjoy full customer service and technical 
						support with Service-Level Agreement (SLA). Dedicated Internet also boasts other benefits 
						such as 200% upload speed, 200% download speed off-peak, massive boost for 
						local speed, and especially best performance for most destinations in China.				</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pd-left clear-pd-right ">
				<div class="ezebiz-work">
					<h3 class="text-center">How Dedicated Internet Works</h3>
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/Ezebiz-work.png"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="pricing">
					<!--<h3 class="text-center">Pricing</h3>
					<p>
						EzeBiz is a product revamp by EZECOM for all our customers. EzeBiz is a direct upgrade for our old packages that pro
					</p>-->
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 no-padding-right clear-pd-left">
				<div class="package-plan">
					<p class="text-center">Packages Plan</p>
					<ul>
						<li><img class="img-responsive resize-package" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-10mb.svg"/></li>
						<li><img class="img-responsive resize-package" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-20mb.svg"/></li>
						<li><img class="img-responsive resize-package" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-30mb.svg"/></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 no-padding-left clear-pd-right">
				<div class="special-offer">
					<p>Special Offer</p>
					<ul>
						<li>- Free fibre modem rental </li>
						<li>- Installation fee: $75</li>
						<li>- Upload speed: x 200%</li>
						<li>- Off-peak speed: x 200%</li>
						<li>- Bonus local speed: minimum 50 mbps</li>
						
					</ul>
					<div class="bonus-speed">
						<ul>
							<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/fb-icon.png"/></li>
							<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/youtube-icon.png"/></li>
							<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/skype-icon.png"/></li>
							<!--<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/TV-icon.png"/></li>-->
							<li>More</li>
							
						</ul>
					</div>
					<div class="term-condition">
						<p>Terms & Conditions</p>
						<ul>
							<li>- At least one-year contract</li>
							<li>- Refundable deposit may be required in specific situations</li>
							<li>- Price above is VAT exclusive</li>
							<li>- Other conditions apply</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="feature">
				<h3 class="text-center">Features & Benefits</h3>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-left clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-download" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-dedicated.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>Dedicated 1:1 Internet Sharing</h4>
						<p>
							Experience the ultimate of internet connection quality! 
							Complete peace of mind with regard to speed, availability, 
							reliability and security.
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-double-speed" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-twice-uploa-power.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>Twice the upload power</h4>
						<p>
							Get two times the speed you bargained for every task where an upload is involved. 
							Massive upside for organizations that sends a lot of data. 
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-popular-content" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-x500.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>Off-peak double speed </h4>
						<p>
							Get a special leg up during the unconventional operating time. 
							Enjoy twice the purchased speed at night and weekend.
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
				<div class="wrapper-feature">
					<img class="img-responsive img-availability" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-speed-50Mbps.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>Bonus speed for local content</h4>
						<p>
							Enjoy a massive bonus speed for lightning fast performance on some of 
							the most used social services including Google, 
							YouTube, Facebook, Skype and more. 
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row last-row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-left clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-modem-rental" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-maximum-availability.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>Ultimate availability</h4>
						<p>
							Dedicated Internet has 99.99% uptime with optional 1+1 protection, 
							which is the ultimate standard for internet. This means you practically 
							always have a fast and reliable internet connection.
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-no-deposit" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-service-level-agreement.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>Service-level agreement</h4>
						<p>
							Benefit from extra level of customization and commitment 
							from your service provider with an 
							official service-level agreement with EZECOM.
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-support" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-best-performance.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>Best performance to top destinations</h4>
						<p>
							Take advantage of our express routes to 
							various top destinations such as China, EU and more.
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="wrapper-feature">
					<img class="img-responsive img-flexibility" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-call-24hours.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>24/7 support</h4>
						<p>
							Real-time, around the clock hotline and on-site support 
							gives you complete confidence and peace of 
							mind in the small off-chance that any issue might occur.
						</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<!--<div class="container-fluid">
	<div class="container container-top-mar">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<span>
						<img id="pop-up-form" class="img-responsive" src="<?php echo base_url()?>images/our-services/button-sign-me-up.svg"/>
					</span>
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/dedicate.jpg"/>
				</div>
			</div>
		</div>
		
		<!-- Contact Form Dedicate -->
		<!--<div class="container">
				<div class="row">
					<div class="form-wrapper">
						<form class="form-horizontal" action="<?php echo base_url()?>Dedicate/sending.php" method="post">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="formEmail">
									  <h5>Contact Us</h5>
									  <p>Call us now on <strong>‎023 238 181 / 085 888 181</strong> or fill in your information here and a member of our sales team will get back to you.</p>
									  <div class="form-group">
										<label class="control-label col-sm-4">Full Name:</label>
										<div class="col-sm-8">
											<input type="text" class="form-control resize-textbox" name="name"/>
										</div>
									  </div>
									  <div class="form-group">
										<label class="control-label col-sm-4">Email Address:</label>
										<div class="col-sm-8">
											<input type="text" class="form-control resize-textbox" name="email"/>
										</div>
									  </div>
									  <div class="form-group">
										<label class="control-label col-sm-4">Phone Number:</label>
										<div class="col-sm-8">
											<input type="text" class="form-control resize-textbox" name="mobile"/>
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
		
		
		
		<!--<div class="row row-margin-top">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="business">
						<img class="img-responsive" src="<?php echo base_url()?>images/our-services/business.png"/>
					<div class="border-bottom"></div>
					<p>
						EZECOM Dedicated Packages are designed to support 
						business critical functions and 
						offer high speed connectivity and reliable access.
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="storage">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/storage.png"/>
					<div class="border-bottom"></div>
					<p>
						EZECOM Dedicated Packages allow you to send and receive 
						large amount of data, conduct video conferences, run web based applications, 
						stream video and any mission critical applications.
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="support-customer">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/support-customer.png"/>
					<div class="border-bottom"></div>
					<p>
						EZECOM dedicated packages give you the highest level 
						of performance delivered over our highly dependable and 
						redundant infrastructure with 24-hour network monitoring 
						and customer support included.
					</p>
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
	(function($){
		// Back to top
		$('#back-to-top').on('click', function(){
			$("html, body").animate({scrollTop: 0}, 500);
			return false;
		});
	})(jQuery);
	
	jQuery(function($) {
		$('#pop-up-form').click(function() {
			$('.form-wrapper').toggle('500');
		});
	
		$('#btn-close').click(function(e) {
            $('.form-wrapper').toggle('500');
        });
	
	});
</script>