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
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="MPLS-img">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/MPLS/MPLS.jpg"/>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="MPLS_wrapper">
					<h2>MPLS</h2>
					<p class="full-title"><span>(Multiprotocol-Label Switching)</span></p>
					<p>
						EZECOM’s MPLS (Multi-Protocol Label Switching) services are highly scalable, 
						protocol agnostic, data-carrying mechanisms that will ensure that your large 
						corporation makes the most of their IT network. EZECOM is the first ISP to bring 
						this international standard service to Cambodia. Our experienced technical team 
						ensures that you enjoy the quality service you have come to expect of EZECOM.
					</p>
					<p class="MPLS-service">
						The main benefits of using EZECOM MPLS services are:
					</p>
					<ul>
						<li>Increased resilience</li>
						<li>Improved data management</li>
						<li>Multi-service and traffic management capabilities</li>
						<li>Maximize network utilization</li>
						<li>Cost reduction through data network convergence</li>
						<li>Enables “triple play” on common backbone</li>
						<li>Supports multi cities</li>
					</ul>
					<p>
						Please contact our sales team for a free assessment of your needs. After our assessment, 
						we can develop a tailor made offer for you according to your unique needs.
					</p>
					<img id="pop-up-form" class="img-responsive signmeup" src="<?php echo base_url()?>images/our-services/MPLS/button-sign-me-up.svg"/>
				</div>	
				<!-- Contact Form Dedicate -->
					<div class="container">
							<div class="row">
								<div class="form-wrapper">
									<form class="form-horizontal" action="<?php echo base_url()?>MPLS/sending.php" method="post">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="formEmail">
												  <h5>Contact Us</h5>
												  <p>Call us now on <strong>‎023 888 181 / 085 888 181</strong> or fill in your information here and a member of our sales team will get back to you.</p>
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
			</div>
		
		</div>
		
		<div class="row mg-top-bt">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="MPLS-structure">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/MPLS/MPLS-process.png"/>
				</div>
			</div>
		</div>
		<div class="row mg-bt">
			<h2 class="text-center features">Features</h2>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="first">
					<ul>
						<li>High-availability on MPLS backbone</li>
						<li>Manage CPE Service</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="second">
					<ul>
						<li>Support 4 classes of service</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="third">
					<ul>  
						<li>High-availbility solutions</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mg-bt-benefit">
			<div class="benefits-bg">
				<h2 class="text-center features">Benefits of MPLS</h2>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-first">
						<ul>
							<li>Network resiliency for fail-safe connectivity</li>
							<li>Proactive CPE monitoring service support 24/7</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-second">
						<ul>
							<li>Ability to assign priorities for different applications in the network, thereby enabling allocation of the</li>
							<li>Cost effective connectivity across multiple office locations</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-third">
						<ul>
							<li>Provide different types of local loop and redundancy</li>
						</ul>
					</div>
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