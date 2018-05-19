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
				<div class="DPLC-img">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/DPLC/DPLC.jpg"/>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="DPLC_wrapper">
					<h2>DPLC</h2>
					<p class="full-title"><span>(Domestic Private Leased Circuit)</span></p>
					<p>
						As data traffic continues to grow rapidly, mobile operators are densifying 
						their networks to expand capacity. To keep pace with the demand for nx10 gigabits-per-second 
						transmission capacity, mobile operators, ISPs are increasingly using dedicated, 
						direct fibre connectivity to build their backhaul networks. 
						Telcotech’s complete, end-to-end DWDM, MetroNetwork solutions give mobile network operators, 
						ISPs the tools to build robust, sustainable network infrastructure and reach revenue objectives faster. Our fibre connectivity solutions are designed for maximum flexibility, incorporating plug-and-play, add-as-you-grow modular technology to simplify ordering and deployment and reduce total cost of ownership.
					</p>
					<img id="pop-up-form" class="img-responsive" src="<?php echo base_url()?>images/our-services/IPLC/button-sign-me-up.svg"/>
				</div>	
				<!-- Contact Form Dedicate -->
					<div class="container">
							<div class="row">
								<div class="form-wrapper">
									<form class="form-horizontal" action="<?php echo base_url()?>DPLC/sending.php" method="post">
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
				<div class="DPLC-structure">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/DPLC/DPLC-process.png"/>
				</div>
			</div>
		</div>
		<div class="row mg-bt">
			<h2 class="text-center features">Features</h2>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="first">
					<ul>
						<li>Can support both Layer 1 and Layer 2 Service</li>
						<li>Service Ring Protection with diversity route</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="second">
					<ul>
						<li>Point to point services</li>
						<li>Hand off interface either E1 to STM64 or FE to 10GE</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="third">
					<ul>  
						<li>Point to multipoint services</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mg-bt-benefit">
			<div class="benefits-bg">
				<h2 class="text-center features">Benefits</h2>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-first">
						<ul>
							<li>Fast delivery and expand the network faster</li>
							<li>No investment on dark fibre and equipment</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-second">
						<ul>
							<li>Upgrade bandwidth on demand</li>
							<li>24/7 support</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-third">
						<ul>
							<li>Cost effective</li>
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