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
<div class="custom" style="    background: #eeefef !important;">
<div id="365" class="container-fluidy">
<div class="container module-content-container">
 
<div class="col-xm-12 col-sm-12 col-md-12">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-6">
<h3 class="product-price"><img src="<?php echo base_url()?>images/our-services/365/artwork-microsoft-365.png" alt="" class="img-responsive"></h3>
</div>
<div class="col-xs-12 col-sm-4 col-md-6" style="padding-top: 8%;">
	<h3 class="title-365">Move Your Business Forward, Anywhere, Anytime, Any Device</h3>
	<br>
	<p class="text-365">
		Office 365 is a cloud-based subscription service that brings together the best 
		tools for the way people work today. By combining best-in-class apps like Excel 
		and Outlook with powerful cloud services like OneDrive and Microsoft Teams, Office 
		365 move your business forward anywhere, anytime, on any device.  
	</p>
</div>

</div>
</div>
<div class="col-xm-12 col-sm-12 col-md-2">&nbsp;</div>

<div class="col-xm-12 col-sm-12 col-md-2">&nbsp;</div>
</div>
</div>
</div>


<!-- //banner -->
<!-- Ezecom ibizCloud -->
<div id="about1" class="video_block">

<div class="container">
    <div class="container tvc-wrap " >
		<div class="col-md-7 wow fadeInUp" data-wow-delay="0.5s" >
			<div class="video-container">
				<iframe src="https://www.youtube.com/embed/YdhZPhCw91s"frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="signup-block">
			<span>
				<img id="pop-up-form" class="img-responsive img_sign_up" src="<?php echo base_url()?>images/our-services/365/Lady.png"/>
			</span>
		</div>
    </div>
</div>

<!-- Contact Form Dedicate -->
<div class="container">
		<div class="row">
			<div class="form-wrapper">
				<form class="form-horizontal" action="<?php echo base_url()?>365/sending.php" method="post">
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
								<label class="control-label col-sm-4">Domain Name:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control resize-textbox" name="domain_name" required />
								</div>
							  </div>
							   <div class="form-group">
								<label class="control-label col-sm-4">Number of User:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control resize-textbox" name="number_user" required />
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
<!-- //Ezecom ibizCloud -->

<div class="custom" style="    background: #eeefef !important;">
<div id="365" class="container-fluidy">
<div class="container module-content-container">
 
<div class="col-xm-12 col-sm-12 col-md-12">
<div class="row">

<h1 class="text-center package-plan">Package Plans</h1>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="tab-inner-indent">
	<img class="img-responsive set-position" src="<?php echo base_url()?>images/our-services/365/package-plan-test.png" alt="Package Plan"/>
	<img class="img-responsive"  id="sign_up_discount" src="<?php echo base_url()?>images/our-services/365/sign-up-discount.png"/>

 
</div>
</div>

</div>
</div>
<div class="col-xm-12 col-sm-12 col-md-2">&nbsp;</div>

<div class="col-xm-12 col-sm-12 col-md-2">&nbsp;</div>
</div>
</div>
</div>




<div class="custom">
<div id="365" class="container-fluidy">
<div class="container module-content-container">
 
<div class="col-xm-12 col-sm-12 col-md-12">


<h1 class="text-center feature">Features & Benefits</h1>
<div class="col-xs-12 col-md-4" style="padding:5% 5% 0 5%;">
<img src="<?php echo base_url()?>images/our-services/365/work-offline.svg" class="img-responsive resize-anywhere" alt="Features & Benefits"/>

<h3 class="all-features">Anywhere It Matters</h3>
<p class="all-desc-features">
	Access your work securely from anywhere! No WiFi? No problem. Work offline and sync your data later. Available on Windows, iOS, Android, Mac and through web browsers.
</p>
</div>
<div class="col-xs-12 col-md-4" style="padding: 5% 5% 0 5%;">
<img src="<?php echo base_url()?>images/our-services/365/security.svg" class="img-responsive resize-always-security" alt="Always-on Security"/>
<h3 class="all-features">Always-on Security</h3>
<p class="all-desc-features">
	Safeguard company data across PCs, phones & tablets securely with the latest version of Microsoft  <span style="white-space:nowrap">office 365.</span>
</p>
</div>
<div class="col-xs-12 col-md-4" style="padding: 5% 5% 0 5%;">
<img src="<?php echo base_url()?>images/our-services/365/team-collaboration.svg" class="img-responsive resize-team-collaboration" alt="Team Collaboration"/>
<h3 class="all-features">Team Collaboration</h3>
<p class="all-desc-features">
	Connect with customers, 
	co-workers and suppliers with online Microsoft 
	tools and bring together teams & resources, all in one place.
</p>
</div>


</div>


<div class="col-xm-12 col-sm-12 col-md-12">
	<div style="width:100%;overflow:hidden">
		
		
		<div class="col-xs-12 col-md-4" style="padding: 4% 5% 5% 5%;margin-top: -2%">
		<img src="<?php echo base_url()?>images/our-services/365/massive-free-storage.svg"  class="img-responsive resize-massive-freestorage" alt="Massive Free Storage"/>

		<h3 class="all-features">Massive Free Storage </h3>
		<p class="all-desc-features">
		Sync and back up your files with up to 1 TB storage and sharing - with data security and recovery options.
		</p>
		</div>

		<div class="col-xs-12 col-md-4" style="padding: 4% 5% 5% 5%;margin-top: -2%">
		<img src="<?php echo base_url()?>images/our-services/365/hassle-free.svg"  class="img-responsive resize-cost-efficency" alt="Latest Version & Cost Efficiency" />
		<h3 class="all-features">Latest Version & Cost Efficiency </h3>
		<p class="all-desc-features">
			Hassle-free experience with automatic Microsoft 
			tools software in the Cloud with very affordable price per user.
		</p>
		</div>
		
		
	</div>
</div>

</div>
</div>
</div>


<div class="custom">
<div id="365" class="container-fluidy">
<div class="container module-content-container">
 
<div class="col-xm-12 col-sm-12 col-md-12">

	<h1 class="text-center package-plan">What’s Included</h1>
	<div class="col-xs-12 col-md-4" style="padding:5% 5% 0 5%">
		<img src="<?php echo base_url()?>images/our-services/365/come-with-office.svg"  class="img-responsive resize-office" alt="Comes with Office" />
		<h3 class="all-features">Comes with Office</h3>
		<p class="all-desc-features">
			Stay up-to-date with the latest versions of Word, Excel, PowerPoint, and more.
		</p>
	</div>
					
	<div class="col-xs-12 col-md-4" style="padding:5% 5% 0 5%">
		<img src="<?php echo base_url()?>images/our-services/365/email-calendering.svg"  class="img-responsive resize-email" alt="Email and Calendaring" />
		<h3 class="all-features">Email and Calendaring</h3>
		<p class="all-desc-features">
			Connect with customers and co-workers using Outlook and Exchange.
		</p>
	</div>

	<div class="col-xs-12 col-md-4" style="padding:5% 5% 0 5%">
		<img src="<?php echo base_url()?>images/our-services/365/file-storage.svg" class="img-responsive resize-storage" alt="File Storage" />
		<h3 class="all-features">File Storage</h3>
		<p class="all-desc-features">
			Manage your files from anywhere with 1 TB of storage.
		</p>
	</div>

</div>

<div class="col-xm-12 col-sm-12 col-md-12">
	<div class="col-xs-12 col-md-4" style="padding:3% 5% 0 5%">
		<img src="<?php echo base_url()?>images/our-services/365/data-protection-control.svg"  class="img-responsive data-protection" alt="Data Protection" />
		<h3 class="all-features">Data Protection</h3>
		<p class="all-desc-features">
			Controls Help secure business data on 
			personal and company-owned devices.
		</p>
	</div>
	
	<div class="col-xs-12 col-md-4" style="padding:3% 5% 0 5%">
		<img src="<?php echo base_url()?>images/our-services/365/icon-safest-windows.svg"  class="img-responsive windows" alt="Safest Windows Ever" />
		<h3 class="all-features">Safest Windows Ever</h3>
		<p class="all-desc-features">
			Get upgraded to Windows 10 Pro from Windows 7 and 8.1 Pro.
		</p>
	</div>
	
	<div class="col-xs-12 col-md-4" style="padding:3% 5% 0 5%">
		<img src="<?php echo base_url()?>images/our-services/365/cyberthreat-protection.svg"  class="img-responsive protection" alt="Cyberthreat Protection" />
		<h3 class="all-features">Cyberthreat Protection</h3>
		<p class="all-desc-features">
			Help protect PCs from malware, viruses, and spyware.
		</p>
	</div>
	
</div>

<div class="col-xm-12 col-sm-12 col-md-12">
	<div style="width:100%;overflow:hidden">
		<div class="col-xs-12 col-md-4" style="padding:3% 5% 7% 5%">
			<img src="<?php echo base_url()?>images/our-services/365/icon-admin-deployment.svg" class="img-responsive deployment" alt="Administration and Deployment" />
			<h3 class="all-features">Administration and Deployment</h3>
			<p class="all-desc-features">
				Manage new PCs and devices faster and more easily than ever.
			</p>
		</div>
	
		<div class="col-xs-12 col-md-4" style="padding:3% 5% 7% 5%">
			<img src="<?php echo base_url()?>images/our-services/365/dependability.svg"  class="img-responsive support" alt="Dependability and Support" />
			<h3 class="all-features">Dependability and Support</h3>
			<p class="all-desc-features">
				Get 99.9% uptime guaranteed and 24/7 online and phone
	support.
			</p>
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