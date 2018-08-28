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
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/DDos/ddos.jpg"/>
					<span>
						<img  id="pop-up-form" class="img-responsive sign-up" src="<?php echo base_url()?>images/our-services/DDos/button-sign-me-up.svg"/>
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<!-- Contact Form  -->
					<div class="container">
							<div class="row">
								<div class="form-wrapper">
									<form class="form-horizontal" action="<?php echo base_url()?>DDos/sending.php" method="post">
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
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ddos-services">
					<h3>DDoS缓解服务</h3>
					<p>
						DDoS缓解服务旨在帮助企业和企业保护其在线操作，抵御称为分布式拒绝服务（DDoS）攻击的网络攻击。
					</p>
					<p>
						EZECOM的DDoS缓解服务配备了由国际公认的研究实验室提供支持的技术，并在保护全球最大的银行，电信，游戏和社交媒体公司方面拥有超过10年的经验。它使用创新的多阶段方法来监控，检测和缓解最复杂的DDoS攻击，以确保只有合法流量才能到达您的重要网络和应用程序资源。它具有当地擦洗中心，洗涤容量为4 Gbps（可按需升级）和全球云洗刷中心，洗涤容量高达2 Tbps，并利用世界一流的全球威胁情报，协同工作自动击败各种尺寸，持续时间和DDoS攻击的频率！
					</p>
				</div>
			</div>
		</div>
		<div class="row ddos-attacks">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<div class="how-ddos-attacks">
					<h3>DDoS攻击如何</h3>
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/DDoS-attack-chart.png"/>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row">
			<div class="impact">
				<h3>DDoS攻击导致的业务影响</h3>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="revenue">
					<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-Revenue-Loss.png"/>
					<h4 class="text-center">收入损失</h4>
					<p class="text-center">
						停机会影响您不断增长的业务，因为它现在变得依赖IT和互联网。您的技术基础架构变得更加复杂，需要适当的系统或备份流程，以最大限度地减少停机威胁。
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="revenue">
					<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-Productivity-Loss.png"/>
					<h4 class="text-center">生产力损失</h4>
					<p class="text-center">
						当您的网络系统关闭时，您的员工生产力将立即停止，影响内部和外部通信，并将影响客户的满意度。
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="revenue">
					<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-Reputation-Damage.png"/>
					<h4 class="text-center">声誉受损</h4>
					<p class="text-center">
						您的品牌形象受到影响，因为您失去了有价值客户的信任。
					</p>
				</div>
			</div>
		</div>
		<div class="row ddos-attacks">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<div class="ddos-mitigation">
					<h4>我们的DDoS缓解如何运作</h4>
					<p>
						DDoS缓解服务可防止您的业务收入和声誉受损
					</p>
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/DDoS-Mitigation-diagram.png"/>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt-benefit">
			<div class="features-benefits">
				<h4>特色和优点</h4>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="world-attack">
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-feature-01.png"/>
					<h4 class="text-center">世界级的攻击缓解</h4>
					<p class="text-center">高度安全的DDoS攻击防护。</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="hybrid-protecting">
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-feature-02.png"/>
					<h4 class="text-center">混合保护</h4>
					<p class="text-center">我们不仅确保您的互联网, 还确保数据, <br/>应用程序等受到保护和保护。</p>
				</div>
			</div>
		</div>
		<div class="row mg-bt-benefit">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="world-attack">
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-feature-03.png"/>
					<h4 class="text-center">大规模保护网络</h4>
					<p class="text-center">
					容量为2 Tbps的全球洗刷中心和容量为4 Gbps的本地洗涤中心 <br/>可以抵御DDoS攻击的各种规 可以抵御DDoS攻击的各种规模，持续时间和频率。
					</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="hybrid-protecting">
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-feature04.png"/>
					<h4 class="text-center">经过验证的运营专家和24/7支持</h4>
					<p class="text-center">实时24/7检测和缓解DDoS威胁的能力。获得全面的网络安全性并跟踪您的网络性能。</p>
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