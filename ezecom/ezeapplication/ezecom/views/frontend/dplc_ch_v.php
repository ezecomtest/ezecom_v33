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
				<div class="DPLC-img">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/DPLC/DPLC.jpg"/>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row-no-padding">
				<div class="DPLC_wrapper">
					<h2>DPLC</h2>
					<p class="full-title"><span>(国内私人租用线路)</span></p>
					<p>
						随着数据流量持续快速增长，移动运营商正在密集其网络以扩大容量。为了跟上对每秒nx10千兆位传输容量的需求，移动运营商，ISP越来越多地使用专用的直接光纤连接来构建其回程网络。 Telcotech完整的端到端DWDM MetroNetwork解决方案为移动网络运营商，ISP提供了构建强大，可持续的网络基础设施并更快实现收入目标的工具。我们的光纤连接解决方案旨在实现最大的灵活性，采用即插即用，按需增加的模块化技术，以简化订购和部署，并降低总体拥有成本。
					</p>
					<img id="pop-up-form" class="img-responsive btn-signmeup" src="<?php echo base_url()?>images/our-services/IPLC/button-sign-me-up.svg"/>
				</div>	
				<!-- Contact Form Dedicate -->
					<div class="container">
							<div class="row">
								<div class="form-wrapper">
									<form class="form-horizontal" action="<?php echo base_url()?>DPLC/sending.php" method="post">
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
				<div class="DPLC-structure">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/DPLC/DPLC-process.png"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="block-feature">
			<h2 class="text-center features">特征</h2>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="first">
					<ul>
						<li>可以支持第1层和第2层服务</li>
						<li>具有多样化路线的服务环保护</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="second">
					<ul>
						<li>点对点服务</li>
						<li>切换E1到STM64或FE到10GE的接口</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="third">
					<ul>  
						<li>指向多点服务</li>
					</ul>
				</div>
			</div>
			</div>
		</div>
		<div class="row mg-bt-benefit">
			<div class="benefits-bg">
				<h2 class="text-center benefit">优点</h2>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-first">
						<ul>
							<li>快速交付并更快地扩展网络</li>
							<li>无需投资暗光纤和设备</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-second">
						<ul>
							<li>按需升级带宽</li>
							<li>24/7支持</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-third">
						<ul>
							<li>具有成本效益</li>
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