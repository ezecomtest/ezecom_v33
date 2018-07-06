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
						EZECOM’s CSR policy functions as a built-in, self-regulating mechanism 
						where the company monitors and ensures its active compliance with the 
						spirit of the law and ethical standards, and engages in actions that 
						further the social good, beyond the interests of the firm and 
						that are required by law.
					</p>
					<p>
						In line with proper CSR practice, company willingly embraces responsibilities 
						for its actions and encourage positive impacts through its activities on the 
						environment, consumers, employees, communities, stakeholders and other members of the public.
					</p>
					<p>
						For instance, we have been providing free internet to support educational projects 
						through our own initiatives and with our partners such as Development Innovation 
						and Friends International. We also supported the Secured Heritage project by 
						providing a secure system to document, reconcile and archive Khmer Rouge era 
						materials for public access. Apart from that, EZECOM is an active member of the 
						CSR Platform in Cambodia, and involves constantly with various activities and events, 
						including sponsoring artistic, sporting and educational events as well as technology summits.
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