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
		<div class="row mg-top">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="Hosting-img">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/Web-Hosting/hosting.jpg"/>
				</div>
			</div>
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
									
								</div>
							</div>
					</div> <!-- end container -->
				<div class="Hosting_wrapper">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/Web-Hosting/icon-web_hosting.svg"/>
					<h2>Web Hosting</h2>
					<p>
						EZECOM's Web Hosting in housed in our world-class data centre in Phnom Penh. 
						Our Web Hosting services are tailored to the unique demands of the Cambodian market. 
						It is the effective combination of international best practice and local experience.
					</p>
				</div>
				<div class="signup">
					<span>
						<img  id="pop-up-form" class="img-responsive" src="<?php echo base_url()?>images/our-services/Web-Hosting/button-sign-me-up.svg"/>
					</span>
				</div>
				
			</div>
		</div>
		<div class="row mg-top-price mg-bt">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-left pd-right">
				<div class="Hosting-bg">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<img class="img-responsive img-position-basic" src="<?php echo base_url()?>images/our-services/Web-Hosting/basic-price.svg"/>
								<div class="basic-package">
									<p class="text-center title">BASIC</p>
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td>Data / Bandwidth <br/>Transfer Allowance:</td>
												<td>10 GB</td>
											</tr>
											<tr>
												<td>Disk / Storage:</td>
												<td>2 GB</td>
											</tr>
											<tr>
												<td>Mailbox Max:</td>
												<td>Unlimited</td>
											</tr>
											<tr>
												<td>Domains:</td>
												<td>1</td>
											</tr>
											<tr>
												<td>Sub-Domains:</td>
												<td>Unlimited</td>
											</tr>
											<tr>
												<td>MySQL DBs:</td>
												<td>1</td>
											</tr>
											<tr>
												<td>FTP Account</td>
												<td>Unlimited</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
								<img class="img-responsive img-position-standard" src="<?php echo base_url()?>images/our-services/Web-Hosting/standard-price.svg"/>
								<div class="standard-package">
									<p class="text-center title">STANDARD</p>
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td>Data / Bandwidth <br/>Transfer Allowance:</td>
												<td>20 GB</td>
											</tr>
											<tr>
												<td>Disk / Storage:</td>
												<td>10 GB</td>
											</tr>
											<tr>
												<td>Mailbox Max:</td>
												<td>Unlimited</td>
											</tr>
											<tr>
												<td>Domains:</td>
												<td>2</td>
											</tr>
											<tr>
												<td>Sub-Domains:</td>
												<td>Unlimited</td>
											</tr>
											<tr>
												<td>MySQL DBs:</td>
												<td>6</td>
											</tr>
											<tr>
												<td>FTP Account</td>
												<td>Unlimited</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
								<img class="img-responsive img-position-professional" src="<?php echo base_url()?>images/our-services/Web-Hosting/professional-price.svg"/>
								<div class="pro-package">
									<p class="text-center title">PROFESSIONAL</p>
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td>Data / Bandwidth <br/>Transfer Allowance:</td>
												<td>50 GB</td>
											</tr>
											<tr>
												<td>Disk / Storage:</td>
												<td>20 GB</td>
											</tr>
											<tr>
												<td>Mailbox Max:</td>
												<td>Unlimited</td>
											</tr>
											<tr>
												<td>Domains:</td>
												<td>5</td>
											</tr>
											<tr>
												<td>Sub-Domains:</td>
												<td>Unlimited</td>
											</tr>
											<tr>
												<td>MySQL DBs:</td>
												<td>10</td>
											</tr>
											<tr>
												<td>FTP Account</td>
												<td>Unlimited</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt clear-pd-left">
				<div class="exclusive-vat">
					<p><strong>TERMS & CONDITIONS</strong></p>
					<ul>
						<li>Prices are exclusive of VAT.</li>
						<li>Minimum one-year contract required.</li>
						<li>$25 set up fee applies.</li>
						<li>EZECOM is not responsible for registering the domain name.</li>
						<li>Packages can be customized based on your unique needs.</li>
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