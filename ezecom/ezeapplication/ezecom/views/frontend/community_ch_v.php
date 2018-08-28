<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title;?></title>
		<link href="<?php echo base_url();?>images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
		<?php
			/* Top Header */
			$this->load->view('header/frontend_header');
			$this->load->view('header/header_all');
			$this->load->view('header/main_nav_user_v');
		?>
	</head>
<body>
<div class="container-fluid">
	<div class="container container-top-mar">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding clear-pd">
				<img class="img-responsive" src="<?php echo base_url()?>images/community/community-photo.jpg" alt="Our Community" title="Our Community"/>
			</div>
		</div>
	</div>
	
	<div class="container container-top-mar">
		<div class="row row-margin-top row-margin-bt">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-left remove-pd">
				<div class="wrapper-text">
					<img class="img-responsive" src="<?php echo base_url()?>images/community/community-ico-1.png" alt="Power of Investment" title="Power of Investment"/>
					<p class="p-left">
						EZECOM是一家了解我们的客户，他们的孩子和我们的未来的投资力量的公司。我们的核心价值观是可持续发展，基层发展和诚信，我们的伙伴关系反映了这些价值观。 EZECOM投资于技术，人力资源，教育和振兴柬埔寨体育。
					</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-right remove-pd">
				<div class="wrapper-text">
					<img class="img-responsive" src="<?php echo base_url()?>images/community/community-ico-2.png" alt="Innovation and Progress" title="Innovation and Progress"/>
					<p class="p-right">
						创新和进步是EZECOM成功的核心。我们认识到，通过投资和支持我们的社区，我们可以帮助建立一个更具经济可持续性，受过教育和社会包容的社会。这就是为什么EZECOM积极投资于有助于社区和环境的计划。
					</p>
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