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
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row mg-bt">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="Colo-img">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/Colocation/server.jpg"/>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 remove-pd">
				<div class="Colo_wrapper">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/Colocation/icon-Data_colocation.svg"/>
					<h2>Co-location</h2>
					<p>
						EZECOM Co-location services offer reliable and resilient 
						world-class data centre facilities for you to host all your mission 
						critical data. Custom designed to meet global standards, 
						our data centre employs the latest technologies. 
						Our solution can be tailor made to your needs, so that you not only 
						have the most reliable solution but also the most cost effective. 
						EZECOM takes the financial burden of equipment, management, security 
						and utilities off your shoulders.
					</p>
				</div>
				<div class="signup">
					<span>
						<img  id="pop-up-form" class="img-responsive" src="<?php echo base_url()?>images/our-services/Colocation/button-sign-me-up.svg"/>
					</span>
				</div>
				
					<!-- Contact Form Dedicate -->
					<div class="container">
							<div class="row">
								<div class="form-wrapper">
									<form class="form-horizontal" action="<?php echo base_url()?>Colocation/sending.php" method="post">
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
									
								</div>
							</div>
					</div> <!-- end container -->
			</div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 remove-pd">
				<div class="colocation">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/Colocation/colo-server.jpg"/>
				</div>
			</div>
		</div>
		<div class="row mg-bt mg-top">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 remove-pd">
				<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/Colocation/package-1.svg"/>
				<div class="wrapper-package">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<div class="package">
								<p>RACK UNIT</p>
								<img class="img-responsive fee" src="<?php echo base_url()?>images/our-services/Colocation/fee-1.png"/>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<div class="package">
								<p>HALF RACK</p>
								<img class="img-responsive fee" src="<?php echo base_url()?>images/our-services/Colocation/fee-2.png"/>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<div class="package">
								<p>FULL UNIT</p>
								<img class="img-responsive fee" src="<?php echo base_url()?>images/our-services/Colocation/fee-3.png"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 remove-pd">
				<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/Colocation/package-2.svg"/>
				<div class="wrapper-setup">
					<h3>Set Up Fees Apply</h3>
					<p>
						As with all our corporate solutions, our co-locations services are flexible to suit your business requirements. 
						Please note that this service requires an EZECOM internet connection. All above cost are exclusive VAT.
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