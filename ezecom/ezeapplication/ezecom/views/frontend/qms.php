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
				<div class="wrapper-qms">
					<img class="img-responsive" src="<?php echo base_url()?>images/qms/qms.png" alt="Quality Management System" title="Quality Management System"/>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-1"></div>
		</div>
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12 remove-pd">
				<div class="wrapper-certificate">
					<p>
						On June 21, 2011, EZECOM became the first Internet Service Provider (ISP) in 
						Cambodia to receive International Organization for Standardization’s 
						certification (ISO) 9001:2008 status, with a year-long process initiated 
						by the development of an internal documented Quality Management System.

					</p>
					<p>
						“The voluntary certification assures customers of EZECOM's adherence to 
						documented processes and procedures that ensure continued and ongoing 
						improvements in delivering our Services,” said EZECOM CEO Oknha Paul Blanche-Horgan.
					</p>
					<p>
						“Achieving ISO 9001:2008 certification is a milestone for EZECOM,” 
						Oknha Paul Blanche-Horgan said. “The certification process has required a 
						lot of dedication and excellence from our staff and demonstrates EZECOM’s 
						continual commitment to our customers and the quality of service.”
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row row-margin-bt">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 remove-pd">
				<div class="core-value">
					<h3>Our Core Values</h3>
					<p><span>Excellence</span></p>
					<p><span class="tab-in">What we do – we do well</span></p>
					<p><span>Partnerships</span></p>
					<p><span class="tab-in">We build durable relations</span></p>
					<p><span>Innovation</span></p>
					<p><span class="tab-in">We bring ideas into reality</span></p>
					<p><span>Integrity</span><p>
					<p><span class="tab-in">We do what is right</span></p>
					<p><span>People</span></p>
					<p><span class="tab-in">The core of our business</span></p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 remove-pd">
				<div class="qms">
					<h3>Quality Management System</h3>
					<p>
						As a leader in the market, we have always possessed a great drive 
						for improvement. To ensure that this is the case, we established a 
						Quality Management System within our company - which measures and 
						improves all areas of our business. By constantly measuring ourselves 
						and constantly aiming higher, we ensure that we keep our place as the industry leader.
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 remove-pd">
				<div class="policy">
					<h3>Our Quality Policy</h3>
					<p>
						EZECOM is committed to 
						satisfy applicable requirements and meeting
						or exceeding customers requirements through continual 
						improvement activities, including defining, measuring and 
						acting on objectives and targets.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

  

<!-- Footer -->
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