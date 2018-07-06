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
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-1"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-11">
				<div class="wrapper-childsafe">
					<img class="img-responsive childsafe-logo" src="<?php echo base_url()?>images/childsafe/childsafe.png" alt="Childsafe" title="Childsafe"/>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-1"></div>
		</div>
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12 remove-pd">
				<div class="wrapper-childsafe">
					<p>
						On November 18th, 2014, EZECOM became the first company to 
						receive ChildSafe Business 7 certification in the world. 
						ChildSafe Business 7 certification was developed by the ChildSafe Network, 
						an international child protection programme founded and powered by Friends-International.

					</p>
					<p>
						The certification requires the integration of the 7 ChildSafe 
						principles into our company’s operations through staff training, 
						internal policy review, assessment of CSR portfolios. We also receive 
						consultative advice to ensure our company communication plans are considerate 
						to children. “EZECOM is proud to partner with Friends-International and 
						become the first ChildSafe Business to meet the 7 principles and be 
						certified in Cambodia,” said EZECOM CEO Oknha Paul Blanche-Horgan. 
						“After weeks of ChildSafe training, our staffs are happy to receive the certificates.”
					</p>
					<p>
						If you would like more information on the ChildSafe programme, 
						please visit <a href="http://thinkchildsafe.org/" target="_blank">www.childsafe-international.org</a> or if you 
						would like more information about the work of Friends-International, 
						visit <a href="https://friends-international.org/" target="_blank">www.friends-international.org</a>!
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-childsafe">
					<img class="img-responsive webchlaat" src="<?php echo base_url()?>images/childsafe/child-photo.jpg" alt="Childsafe" title="Childsafe"/>
				</div>
			</div>
		</div>
	</div>
</div>
	

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