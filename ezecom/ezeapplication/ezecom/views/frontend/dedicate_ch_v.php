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
	
					</div>
				</div>
		</div> <!-- end container -->
		
		
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="about-ezebiz">
					<h3 class="text-center">关于专用互联网</h3>
					<p>
						专用互联网是性能最高的互联网配套，旨在满足大型企业，企业和组织的需求。专用互联网的目的是满足对极限速度，可靠性和安全性的高端需求。专用互联网中的关键术语“专用”指的是一对一的互联网共享，可确保24/7始终保持高速和稳定。专用互联网客户通过服务级别协议（SLA）享受全面的客户服务和技术支持。专用互联网还拥有其他优势，例如200％的上传速度，200％的非峰值下载速度，对本地速度的大幅提升，尤其是中国大多数目的地的最佳性能。</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<!--<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pd-left clear-pd-right ">
				<div class="ezebiz-work">
					<h3 class="text-center">How Dedicated Internet Works</h3>
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/Ezebiz-work.png"/>
				</div>
			</div>
		</div>-->
		<!--<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="pricing">
					<!--<h3 class="text-center">Pricing</h3>
					<p>
						EzeBiz is a product revamp by EZECOM for all our customers. EzeBiz is a direct upgrade for our old packages that pro
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>-->
		
		<!--<div class="row">
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
							<!--<li>More</li>
							
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
		</div>-->
		<div class="row">
			<div class="feature">
				<h3 class="text-center">特点与优势</h3>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-left clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-download" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-dedicated.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>专用1：1互联网共享</h4>
						<p>
							体验互联网连接质量的终极体验！在速度，可用性，可靠性和安全性方面完全放心。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-double-speed" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-twice-uploa-power.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>上传电量两倍</h4>
						<p>
							获得两倍于您涉及上传的每项任务的议价速度。发送大量数据的组织具有巨大的优势。 
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-popular-content" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-x500.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>非高峰双倍速度</h4>
						<p>
							在非常规的运营时间内获得特殊支持。在晚上和周末享受两倍的购买速度。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
				<div class="wrapper-feature">
					<img class="img-responsive img-availability" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-speed-50Mbps.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>本地内容的额外速度</h4>
						<p>
							在一些最常用的社交服务（包括Google，YouTube，Facebook，Skype等）上享受快速性能的巨大奖励速度。 
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
						<h4>终极可用性</h4>
						<p>
							专用互联网具有99.99％的正常运行时间，可选的1 + 1保护，这是互联网的终极标准。这意味着您几乎总是拥有快速可靠的互联网连接。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-no-deposit" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-service-level-agreement.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>服务水平协议</h4>
						<p>
							通过与EZECOM签订的官方服务级别协议，您可以从服务提供商处获得额外的定制和承诺。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-support" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-best-performance.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>最佳目的地的最佳表现</h4>
						<p>
							利用我们到中国，欧盟等多个顶级目的地的快速路线。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="wrapper-feature">
					<img class="img-responsive img-flexibility" src="<?php echo base_url()?>images/our-services/Dedicated/dedicated-feature-benefits/icon-call-24hours.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>24/7支持</h4>
						<p>
							实时，全天候热线和现场支持为您提供完全的信心，让您在任何问题可能发生的可能性很小的情况下安心。
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