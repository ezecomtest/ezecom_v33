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
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="IPLC-img">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/IPLC/IPLC.jpg"/>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row-no-padding">
				<div class="IPLC_wrapper">
					<h2>IPLC</h2>
					<p class="full-title"><span>(国际私人租用线路)</span></p>
					<p>
						EZECOM的IPLC是一种点对点专用链路，可以在不同国家/地区的办公室之间传输语音，数据或视频流量。 Telcotech提供运营商级IPLC服务，旨在提高安全性和网络恢复能力。客户从Telcotech与全球一级运营商的合作伙伴关系中获益于全球覆盖。
					</p>
					<img id="pop-up-form" class="img-responsive btn-signmeup" src="<?php echo base_url()?>images/our-services/IPLC/button-sign-me-up.svg"/>
				</div>	
				<!-- Contact Form Dedicate -->
					<div class="container">
							<div class="row">
								<div class="form-wrapper">
									<form class="form-horizontal" action="<?php echo base_url()?>IPLC/sending.php" method="post">
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
		
		<div class="row mg-top-bt">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 row-no-padding">
				<div class="IPLC-structure">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/IPLC/IPLC-process.png"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="block-feature">
			<h2 class="text-center features">特征</h2>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 clear-pd-left clear-pd-right ">
				<div class="first">
					<ul>
						<li>多电缆系统多样性</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="second">
					<ul>
						<li>第1层服务</li>
						<li>保证安全性和速度</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="third">
					<ul>
						<li>接口：V35，T1，E1，DS3，STM1，STM4，STM16，STM64</li>
						<li>速度范围从n x 64 Kbps到n x 10 Gbps</li>
					</ul>
				</div>
			</div>
			</div>
		</div>
		<div class="row mg-bt-benefit">
			<div class="benefits-bg">
				<h2 class="text-center features">优点</h2>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-first">
						<ul>
							<li>光纤布置在自愈环中，具有自动冗余和来自不同电缆系统的备用路径</li>
							<li>保证单一固定路径（点对点）</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-second">
						<ul>
							<li>协议透明度，支持最苛刻的应用程序</li>
							<li>一站式购物和计费</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-third">
						<ul>
							<li>由柬埔寨和外国专家团队提供的24/7内部本地支持</li>
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