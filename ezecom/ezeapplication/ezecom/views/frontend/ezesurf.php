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
	<div class="container container-top-mar">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<span>
						<img id="pop-up-form" class="img-responsive btn-signmeup" src="<?php echo base_url()?>images/our-services/Ezesurf/button-sign-me-up.svg"/>
					</span>
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/ezesurf.jpg"/>
				</div>
			</div>
		</div>
		
		<!-- Contact Form Dedicate -->
		<div class="container">
				<div class="row">
					<div class="form-wrapper">
						<form class="form-horizontal" action="<?php echo base_url()?>Ezesurf/sending.php" method="post">
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
				<div class="about-ezesurf">
					<p>
						EzeSurf packages are all delivered on fibre optic. EzeSurf offers the best available internet 
						packages to suit residential and home needs with symmetrically upload/download speed, good for 
						real-time communication, video call and social media, live stream along with world-class 
						customer service and 24/7 helpdesk support to ensure the best experience for you.
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row mg-bt">
			<div class="package">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/3mb.png"/>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/6mb.png"/>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/10mb.png"/>
				</div>
			</div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 no-padding-right">
				<div class="bonus-speed">
					<p>Bonus Speed</p>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 no-padding-left">
				<div class="bonus-for">
					<ul>
						<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/five-hundred.png"/></li>
						<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/youtube.png"/></li>
						<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/fb.png"/></li>
						<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/playstore.png"/></li>
						<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/appstore.png"/></li>
						<!--<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/ezetv.png"/></li>-->
						<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezesurf/more.png"/></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 "></div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
				<div class="term-condition">
					<p>TERMS & CONDITIONS</p>
					<ul>
						<li>No deposit required</li>
						<li>Free modem rental</li>
						<li>$50 one-time installation fee</li>
						<li>6 months upfront payment is required</li>
						<li>Other conditions apply</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<div class="desciption-block">
						<p>
							We are offering the best available packages to the selected borey
							borey location. please contact our <b>websales@ezecom.com.kh</b> or 
							call <b>023 238 181</b> for more information.
						</p>
					</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 "></div>
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