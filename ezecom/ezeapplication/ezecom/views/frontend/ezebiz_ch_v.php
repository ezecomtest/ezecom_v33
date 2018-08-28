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
		$this->load->view("header/header_all");
		$this->load->view("header/main_nav_user_v");
	?>
	 <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<span>
						<img id="pop-up-form" class="img-responsive btn-signmeup" src="<?php echo base_url()?>images/our-services/Ezebiz/button-sign-me-up.svg"/>
					</span>
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/Ezebiz-photo.jpg"/>
				</div>
			</div>
		</div>
		
		<!-- Contact Form EzeBiz -->
		<div class="container">
				<div class="row">
					<div class="form-wrapper">
						<form class="form-horizontal" action="<?php echo base_url()?>Ezebiz/sending.php" method="post">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
								  <p>Which packages interest you:</p>
									   <h4>EzeBiz</h4>
									   <table border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td><input class="chkbox" type="radio" name="package" value="5mbps $60 per month"/></td>
												<td><label for="corp1mbps">&nbsp;&nbsp;<strong> 5mbps</strong> $60 per month</label></td>
											</tr>
											<tr>
												<td><input class="chkbox" type="radio" name="package" value="10mbps $118 per month"/></td>
												<td><label for="corp2mbps">&nbsp;&nbsp;<strong> 10mbps</strong> $118 per month</label></td>
											</tr>
											<tr>
												<td><input class="chkbox" type="radio" name="package" value="20mbps $230 per month"/></td>
												<td><label for="corp3mbps">&nbsp;&nbsp;<strong> 20mbps</strong> $230 per month</label></td>
											</tr>
											<tr>
												<td><input class="chkbox" type="radio" name="package" value="30mbps $338 per month"/></td>
												<td><label for="corp4mbps">&nbsp;&nbsp;<strong> 30mbps</strong> $338 per month</label></td>
											</tr>
										</table>
								
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div class="formEmail">
									  <h5>Contact Us</h5>
									  <p>Call us now on <strong>‎023 238 181/085 888 181</strong> or fill in your information here and a member of our sales team will get back to you.</p>
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
					<h3 class="text-center">关于EzeBiz</h3>
					<p>
						EzeBiz是EZECOM为所有客户进行的产品改造。 EzeBiz是我们旧包装的直接升级，为所有客户提供更好的体验和性能。通过EzeBiz，所有客户现在都享受新的特权，例如对称上传和下载速度，非高峰双倍速度，Youtube，Facebook等热门内容的额外奖励速度以及更多优惠。
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pd-left clear-pd-right ">
				<div class="ezebiz-work">
					<h3 class="text-center">我们的EzeBiz如何运作</h3>
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
					<p class="text-center">畅销配套</p>
					<ul>
						<li><img class="img-responsive resize-package" src="<?php echo base_url()?>images/our-services/Ezebiz/ezebiz-10mb.svg"/></li>
						<li><img class="img-responsive resize-package" src="<?php echo base_url()?>images/our-services/Ezebiz/ezebiz-20mb.svg"/></li>
						<li><img class="img-responsive resize-package" src="<?php echo base_url()?>images/our-services/Ezebiz/ezebiz-30mb.svg"/></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 no-padding-left clear-pd-right">
				<div class="special-offer">
					<p>特价</p>
					<ul>
						<li>- 免费调制解调器租赁 </li>
						<li>- 安装费：75美元</li>
						<li>- 上传/下载：对称速度</li>
						<li>- - 非高峰速度： <strong>x 200%</strong></li>
						<li>- 奖励本地速度：最低50 mbps</li>
						
					</ul>
					<div class="bonus-speed">
						<ul>
							<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/fb-icon.png"/></li>
							<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/youtube-icon.png"/></li>
							<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/skype-icon.png"/></li>
							<!--<li><img class="img-responsive" src="<?php echo base_url()?>images/our-services/Ezebiz/TV-icon.png"/></li>-->
							<li>更多</li>
							
						</ul>
					</div>
					<div class="term-condition">
						<p>条款和条件</p>
						<ul>
							<li>- 6个月的预付款</li>
							<li>- 至少一年的合同</li>
							<li>- 以上价格仅限增值税</li>
							<li>- 适用其他条件。</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="feature">
				<h3 class="text-center">特点与优势</h3>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-left clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-download" src="<?php echo base_url()?>images/our-services/Ezebiz/icon-up-download.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>平等上传/下载</h4>
						<p>
							柬埔寨唯一的ISP实际上为这个价位的用户提供了真正的上传和下载速度。使用EzeBiz连接处理大型文件时获得最佳性能。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-double-speed" src="<?php echo base_url()?>images/our-services/Ezebiz/icon-x500.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>非高峰双速</h4>
						<p>
							在非常规的操作时间内获得特殊支持。在晚上和周末享受两倍的购买速度。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-popular-content" src="<?php echo base_url()?>images/our-services/Ezebiz/icon-speed-50Mbps.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>流行内容的奖励速度</h4>
						<p>
							享受大量的奖励速度，以便在一些最常用的服务（包括YouTube，Facebook，App Store等）上实现闪电般快速的性能。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
				<div class="wrapper-feature">
					<img class="img-responsive img-availability" src="<?php echo base_url()?>images/our-services/Ezebiz/icon-maximum-availability.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>最高可用性</h4>
						<p>
							EzeBiz的正常运行时间为99.95％，这是迄今为止最高的行业标准。这意味着您几乎总是拥有快速可靠的互联网接入。 
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row last-row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-left clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-modem-rental" src="<?php echo base_url()?>images/our-services/Ezebiz/icon-modem.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>免费调制解调器租赁</h4>
						<p>
							因为我们有一个高质量的调制解调器供您免费使用，所以不收取额外费用！它没有比这更好！
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-no-deposit" src="<?php echo base_url()?>images/our-services/Ezebiz/icon-no-deposit.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>无需存款</h4>
						<p>
							利用有限时间“无存款”优惠，任何和所有EzeBiz配套订阅。促销活动持续到今天。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 clear-pd-right">
				<div class="wrapper-feature">
					<img class="img-responsive img-support" src="<?php echo base_url()?>images/our-services/Ezebiz/icon-call-24hours.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>24/7支持</h4>
						<p>
							实时，全天候热线支持为您提供完全的信心，让您在任何问题可能发生的小机会中安心。
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="wrapper-feature">
					<img class="img-responsive img-flexibility" src="<?php echo base_url()?>images/our-services/Ezebiz/icon-flexibility.svg"/>
					<div class="border-bottom"></div>
					<div class="text">
						<h4>灵活性</h4>
						<p>
							我们提供定制选项和极高的高速性能，以满足您的业务需求。
						</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>


<!-- FOOTER -->
<?php $this->load->view('footer/footer_user_v');?>

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
	
	
	jQuery(function($) {
		$('#pop-up-form').click(function() {
			$('.form-wrapper').toggle('500');
		});
	
		$('#btn-close').click(function(e) {
            $('.form-wrapper').toggle('500');
        });
	
	});
	
	
</script>