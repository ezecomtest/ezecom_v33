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
	</head>
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-right clear-pd-left">
				<div class="customer-service-img">
					<img  class="img-responsive max-size" src="<?php echo base_url()?>images/support/customer-service/customer-service.jpg"/>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-left clear-pd-right">
				<div class="customer-service">
					<p class="first">
						It is our pleasure to provide you with the best and most reliable internet connection in Cambodia, supported by our world-class customer service team. With EZECOM as a partner, you and your organization can benefit from our robust communication infrastructures.
If you have any questions regarding our connection or if you are in need of technical support, please feel free to call our help desk at the numbers below. 

					</p>
					
					
				</div>
			</div>
		</div>
		<div class="row mg-top mg-bt">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-left">
				<div class="khmer">
					<h2 class="text-center">Khmer / English speaking</h2>
					<p class="text-center desk-num">help desk number (24/7)</p>
					<p class="text-center phone-num">
						+855(0)23 23 81 81
						<br/>+855(0)85 88 81 81
					</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 clear-pd-right">
				<div class="english">
					<h2 class="text-center">Chinese speaking </h2>
					<p class="text-center desk-num">help desk number</p>
					<p class="text-center working-hour">(Mon - Fri: 8:00am 5:30pm)</p>
					<p class="text-center working-hour">(Sat: 8:00am - 12.00am)</p>
					<p class="text-center phone-num">+855(0)89 77 76 96</p>
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