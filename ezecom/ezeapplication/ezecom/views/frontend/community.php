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
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-left">
				<div class="wrapper-text">
					<img class="img-responsive" src="<?php echo base_url()?>images/community/community-ico-1.png" alt="Power of Investment" title="Power of Investment"/>
					<p class="p-left">
						EZECOM is a company that knows the power of investment for our customers, 
						their children & our future. Our core values are sustainability, grassroots 
						development and integrity, and our partnerships reflect these values. 
						EZECOM invests in technology, human resources, education and the 
						revitalizing of Cambodian sports.
					</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-right">
				<div class="wrapper-text">
					<img class="img-responsive" src="<?php echo base_url()?>images/community/community-ico-2.png" alt="Innovation and Progress" title="Innovation and Progress"/>
					<p class="p-right">
						Innovation and progress lie at the heart of EZECOM’s success. 
						We recognise that by investing in and supporting our communities, 
						we can help to build a more economically sustainable, educated and 
						socially-inclusive society. That is why EZECOM actively invests in 
						programmes which contribute to communities and the environment.
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