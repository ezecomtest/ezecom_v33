<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title;?></title>
		<link href="<?php echo base_url();?>images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	
<body>
<?php
	/* Top Header */
	$this->load->view('header/frontend_header');
    $this->load->view('header/header_all');
	$this->load->view('header/main_nav_user_v');
?>
<div class="container-fluid">
	<div class="container">
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="block-promotion">
				<img class="img-responsive resize-promotion" src="<?php echo base_url()?>images/media/icon-promotion.svg"/>
				<h2>Promotion</h2>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
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
	(function($){
		// Back to top
		$('#back-to-top').on('click', function(){
			$("html, body").animate({scrollTop: 0}, 500);
			return false;
		});
	 
	})(jQuery);
</script>