<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title;?></title>
		<link href="<?php echo base_url();?>images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
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
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-1"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-11">
				<div class="wrapper-CSR">
					<img class="img-responsive" src="<?php echo base_url()?>images/CSR/CSR-logo.png" alt="Corporate social Responsibility" title="Corporate social Responsibility"/>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-1"></div>
		</div>
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12 remove-pd">
				<div class="wrapper-CSR-text">
					<p>
						EZECOM的企业社会责任政策是一个内置的自我调节机制，公司监督并确保其积极遵守法律和道德标准的精神，并采取行动促进社会利益，超越公司利益和这是法律要求的。
					</p>
					<p>
						根据适当的企业社会责任实践，公司愿意接受其行动的责任，并通过其对环境，消费者，员工，社区，利益相关者和其他公众的活动来鼓励积极影响。
					</p>
					<p>
						例如，我们一直通过自己的倡议以及发展创新和国际友人等合作伙伴提供免费互联网来支持教育项目。我们还通过提供安全系统来支持安全遗产项目，以便记录，协调和存档红色高棉时代的公共访问材料。除此之外，EZECOM还是柬埔寨企业社会责任平台的积极成员，并不断参与各种活动和活动，包括赞助艺术，体育和教育活动以及技术峰会。
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pd">
				<div class="wrapper-CSR">
					<img class="img-responsive" src="<?php echo base_url()?>images/CSR/CSR-main-photo.jpg" alt="Corporate social Responsibility" title="Corporate social Responsibility"/>
				</div>
			</div>
		</div>
	</div>
</div>
		



<!-- FOOTER -->
<?php
    $this->load->view('footer/footer_user_v');
 ?>

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
</script>