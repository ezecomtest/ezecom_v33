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
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/EzeTV/ezetv_main.jpg"/>
					<span>
						<img  id="pop-up-form" class="img-responsive" src="<?php echo base_url()?>images/our-services/EzeTV/button-sign-me-up.svg"/>
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<!-- Contact Form  -->
					<div class="container">
							<div class="row">
								<div class="form-wrapper">
									<form class="form-horizontal" action="<?php echo base_url()?>EzeTV/sending.php" method="post">
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
		<div class="row">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="EzeTV-Intro">
					<h3>EzeTV</h3>
					<p>
						EzeTV is designed to meet your home entertainment needs for both local 
						and international TV channels as well as other contents such as online videos, 
						live traffic cameras and more. Watch your favourite TV channels and videos 
						conveniently from the comforts of your home.
					</p>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/EzeTV/ezetv_features.jpg"/>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="EzeTV-Plan">
					<!--<h3>EzeTV Plan</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
						Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
						lobortis nisl ut Lorem ipsum dolor sit amet,
					</p>-->
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<div class="package-plan">
					<ul>
						<li><img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/EzeTV/monthly-fee.png"/></li>
						<li><img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/EzeTV/installation.png"/></li>
						<li><img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/EzeTV/available-chanel.png"/></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-xs-11">
				<div class="conditions">
					<h3>TERMS & CONDITIONS</h3>
					<ul>
						<li>No deposit required</li>
						<li>Free modem / TV box rental</li>
						<li>6 months upfront (payment is required)</li>
						<li>Other conditions apply</li>
					</ul>
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