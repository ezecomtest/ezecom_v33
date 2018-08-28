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
				<div class="MPLS-img">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/MPLS/MPLS.jpg"/>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="MPLS_wrapper">
					<h2>MPLS</h2>
					<p class="full-title"><span>(多协议标签交换)</span></p>
					<p>
						EZECOM的MPLS（多协议标签交换）服务具有高度可扩展，与协议无关的数据传输机制，可确保您的大型企业充分利用其IT网络。 EZECOM是第一家将此国际标准服务带到柬埔寨的ISP。我们经验丰富的技术团队确保您享受到EZECOM所期望的优质服务。
					</p>
					<p class="MPLS-service">
						使用EZECOM MPLS服务的主要好处是：
					</p>
					<ul>
						<li>增强弹性</li>
						<li>改进数据管理</li>
						<li>多服务和流量管理功能</li>
						<li>最大化网络利用率</li>
						<li>通过数据网络融合降低成本</li>
						<li>在公共主干上启用“三重播放”</li>
						<li>支持多个城市</li>
					</ul>
					<p>
						请联系我们的销售团队，以免费评估您的需求。经过我们的评估，我们可以根据您的独特需求为您量身定制。
					</p>
					<img id="pop-up-form" class="img-responsive signmeup" src="<?php echo base_url()?>images/our-services/MPLS/button-sign-me-up.svg"/>
				</div>	
				<!-- Contact Form Dedicate -->
					<div class="container">
							<div class="row">
								<div class="form-wrapper">
									<form class="form-horizontal" action="<?php echo base_url()?>MPLS/sending.php" method="post">
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
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pd-left clear-pd-right">
				<div class="MPLS-structure">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/MPLS/MPLS-process.png"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="block-feature">
			<h2 class="text-center features">特征</h2>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="first">
					<ul>
						<li>MPLS骨干网的高可用性</li>
						<li>管理CPE服务</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="second">
					<ul>
						<li>支持4类服务</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="third">
					<ul>  
						<li>高可用性解决方案</li>
					</ul>
				</div>
			</div>
			</div>
		</div>
		<div class="row mg-bt-benefit">
			<div class="benefits-bg">
				<h2 class="text-center benefit">MPLS的好处</h2>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-first">
						<ul>
							<li>网络弹性，实现故障安全连接</li>
							<li>24/7主动CPE监控服务支持</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-second">
						<ul>
							<li>能够为网络中的不同应用程序分配优先级，从而实现系统的分配</li>
							<li>跨多个办公地点实现经济高效的连接</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="b-third">
						<ul>
							<li>提供不同类型的本地环路和冗余</li>
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