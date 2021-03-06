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
		<div class="row top-mg">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pd">
				<img  class="img-responsive" src="<?php echo base_url()?>images/contact/contact.jpg"/>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 row-no-padding">
				<div class="wrapper-text">
					<p> EZECOM很荣幸成为柬埔寨顶级质量和可靠互联网连接的首选供应商。我们在柬埔寨各地设有分公司和办事处。要了解有关我们服务的更多信息，请随时与您联系或访问我们附近的位置！ <p>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mg-bt-location row-no-padding">
				<div class="wrapper-branch">
					<a href="<?=base_url();?>contact-us#Head" data-toggle="tab" data-id="Head">
						<div class="Head active-now">
							<p class="text-position">总公司（金边）</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mg-bt-location row-no-padding">
				<div class="wrapper-branch">
					<a href="<?=base_url();?>contact-us#BKK" data-toggle="tab" data-id="BKK">
						<div class="customer-service">
							<p class="text-position">金边客户服务和销售办事处</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mg-bt-location row-no-padding">
				<div class="wrapper-branch">
					<a href="<?=base_url();?>contact-us#Siem-Reap" data-toggle="tab" data-id="Siem-Reap">
						<div class="Siem-Reap">
							<p class="text-position">Siem Reap分行</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding">
				<div class="wrapper-branch">
					<a href="<?=base_url();?>contact-us#Sihanouk" data-toggle="tab" data-id="Sihanouk">
						<div class="Sihanouk">
							<p class="text-position">Sihanoukville分行</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mg-bt-location row-no-padding">
				<div class="wrapper-branch">
					<a href="<?=base_url();?>contact-us#Koh-Kong" data-toggle="tab" data-id="Koh-Kong">
						<div class="Koh-Kong">
							<p class="text-position">Koh Kong分行</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mg-bt-location row-no-padding">
				<div class="wrapper-branch">
					<a href="<?=base_url();?>contact-us#Battambang" data-toggle="tab" data-id="Battambang">
						<div class="Battambang">
							<p class="text-position">Battambang分行</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mg-bt-location row-no-padding">
				<div class="wrapper-branch">
					<a href="<?=base_url();?>contact-us#Bavet" data-toggle="tab" data-id="Bavet">
						<div class="Bavet">
							<p class="text-position">Bavet分行</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding">
				<div class="wrapper-branch">
					<a href="<?=base_url();?>contact-us#Poipet" data-toggle="tab" data-id="Poipet">
						<div class="Poipet">
							<p class="text-position">Poipet分行</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		
		<div class="tab-content">
			<div id="Head" class="tab-pane rl_tabs-pane nn_tabs-pane active payment-tap">
				<div class="row"><h1 class="text-center top-header">总公司（金边）</h1></div>
				<div class="row contact-bg">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right row-no-padding">
						<div class="address">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-home.png"/>
							<p>
								#7D Russian Boulevard Cambodia Chamber of Commerce Building, Phnom Penh, Cambodia
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="phone">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-phone.png"/>
							<p>
								电话： +855(0)23 23 81 81
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="clock">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-time.png"/>
							<p>
								客户服务时间： <br/>
								Monday - Friday @ 7:30AM - 5:30PM
							</p>
						</div>
					</div>
				</div>
				<div class="row map-mg-bt">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd">
						<div class="wrapper-content">
							<div id="map-canvas-head">
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End Head Office -->
			
			<div id="BKK" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
				<div class="row"><h1 class="text-center top-header">金边客户服务和销售办事处</h1></div>
				<div class="row contact-bg">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="address">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-home.png"/>
							<p>
								#17, Street 322, Sangkat Boeung Kengkang I
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="phone">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-phone.png"/>
							<p>
								电话： +855(0)23 500 04 66 
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="clock">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-time.png"/>
							<p>
								客户服务时间：<br/>
								周一至周五上午 7:30 AM 至下午 5:30 
								周六早上8:00 至中午12:00
								下午1:30至5:30
							</p>
						</div>
					</div>
				</div>
				<div class="row map-mg-bt">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd">
						<div class="wrapper-content">
							<div id="map-canvas-BKK">
							
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End Branch BKK -->
			
			<div id="Siem-Reap" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
				<div class="row"><h1 class="text-center top-header">Siem Reap分行</h1></div>
				<div class="row contact-bg">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="address">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-home.png"/>
							<p>
								#36, street Sivutha, Mondul II, Svay DangKum, Siem Reap
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="phone">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-phone.png"/>
							<p>
								电话： +855(0)63 76 81 81

							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="clock">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-time.png"/>
							<p>
								客户服务时间：<br/>
								周一至周五上午8:00至下午5:30
								
							</p>
						</div>
					</div>
				</div>
				<div class="row map-mg-bt">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd">
						<div class="wrapper-content">
							<div id="map-canvas-Siem-Reap">
							
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End Branch Siem Reap -->
			
			<div id="Sihanouk" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
				<div class="row"><h1 class="text-center top-header">Sihanoukville分行</h1></div>
				<div class="row contact-bg">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="address">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-home.png"/>
							<p>
								#145, St. Ekareach, Sangkat 2, Group 17, Mondul 1, Sihanouk City
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="phone">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-phone.png"/>
							<p>
								电话： +855(0)34 93 46 25 
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="clock">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-time.png"/>
							<p>
								客户服务时间：<br/>
								周一至周五上午8:00至下午5:30
								
							</p>
						</div>
					</div>
				</div>
				<div class="row map-mg-bt">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd">
						<div class="wrapper-content">
							<div id="map-canvas-Sihanouk">
							
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End Branch Sihanoukville  -->
			
			<div id="Koh-Kong" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
				<div class="row"><h1 class="text-center top-header">Koh Kong分行</h1></div>
				<div class="row contact-bg">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="address">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-home.png"/>
							<p>
								# 123 Main Street, Village 3, Smach Meanchey, Koh Kong
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="phone">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-phone.png"/>
							<p>
								电话： +855(0)35 93 63 81 / +855(0)35 93 62 81<br/>
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="clock">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-time.png"/>
							<p>
								客户服务时间：<br/>
								周一至周五上午8:00至下午5:30
								
							</p>
						</div>
					</div>
				</div>
				<div class="row map-mg-bt">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd">
						<div class="wrapper-content">
							<div id="map-canvas-Koh-Kong">
							
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End Branch Koh Kong  -->
			
			<div id="Battambang" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
				<div class="row"><h1 class="text-center top-header">Battambang分行</h1></div>
				<div class="row contact-bg">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="address">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-home.png"/>
							<p>
								#07, Street 1, Kamakor Village, Svay Por Commune, Battambang District, Battambang City
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="phone">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-phone.png"/>
							<p>
								电话： +855(0)53 95 24 81 / +855(0)53 95 23 81<br/>
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="clock">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-time.png"/>
							<p>
								客户服务时间：<br/>
								周一至周五上午8:00至下午5:30
								
							</p>
						</div>
					</div>
				</div>
				<div class="row map-mg-bt">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd">
						<div class="wrapper-content">
							<div id="map-canvas-Battambang">
							
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End Branch Battambang  -->
			
			<div id="Bavet" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
				<div class="row"><h1 class="text-center top-header">Bavet分行</h1></div>
				<div class="row contact-bg">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="address">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-home.png"/>
							<p>
								#7-8, Sangkat Bavet, Bavet City, Svay Rieng Province 
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="phone">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-phone.png"/>
							<p>
								电话： +855(0)44 71 57 83<br/>
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="clock">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-time.png"/>
							<p>
								客户服务时间：<br/>
								周一至周五上午8:00至下午5:30
								
							</p>
						</div>
					</div>
				</div>
				<div class="row map-mg-bt">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd">
						<div class="wrapper-content">
							<div id="map-canvas-Bavet">
							
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End Branch Bavet  -->
			
			<div id="Poipet" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
				<div class="row"><h1 class="text-center top-header">Poipet分行</h1></div>
				<div class="row contact-bg">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="address">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-home.png"/>
							<p>
								National Road 5, Phum Kilo 4, Poipet commune, Poipet City, Banteay Meanchey Province 
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="phone">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-phone.png"/>
							<p>
								电话： +855(0)54 96 77 69<br/>
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="clock">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-time.png"/>
							<p>
								客户服务时间：<br/>
								周一至周五上午8:00至下午5:30
								
							</p>
						</div>
					</div>
				</div>
				<div class="row map-mg-bt">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd">
						<div class="wrapper-content">
							<div id="map-canvas-Poipet">
							
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End Branch Poipet  -->
			
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
</script>
<!-- BACK TO TOP BUTTON -->

<script type="text/javascript">
$(document).ready(function () {
	$('a .Head').click(function(e) {
		
		$('a .customer-service').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Sihanouk').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .customer-service').click(function(e) {
		
		$('a .Head').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Sihanouk').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Siem-Reap').click(function(e) {
		
		$('a .Head').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Sihanouk').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Sihanouk').click(function(e) {
		
		$('a .Siem-Reap').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Head').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Koh-Kong').click(function(e) {
		$('a .Head').removeClass('active-now');
		$('a .Sihanouk').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Battambang').click(function(e) {
		
		$('a .Sihanouk').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Head').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Bavet').click(function(e) {
		
		$('a .Sihanouk').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Head').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Poipet').click(function(e) {
		
		$('a .Sihanouk').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Head').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
}); 
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDN_KbE6yYEz98eIIRzWacJEm-kkm6K__8" type="text/javascript"></script>
<script>
      var zoomLevel = 7;
	  var image = "<?php echo base_url()?>images/contact/pin.png";
	  
	  // EZECOM Head Office
      function initialize_Head() {
		
		var centerPos = new google.maps.LatLng(11.9879665,104.9806145);
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        var map = new google.maps.Map( document.getElementById("map-canvas-head"), mapOptions );
        var locations = [
          ['EZECOM Head Office', 11.568866, 104.895207]
        ];
		
		var all_branch = [
			['Customer Services and Sales Office, Phnom Penh', 11.551298, 104.927411],
			['Siem Reap Branch', 13.358326, 103.854435],
			['Sihanouk Branch', 10.6215995, 103.5262875],
			['Koh Kong Branch', 11.610422, 102.9838],
			['Battambang Branch', 13.094526, 103.198304],
			['Bavet Branch', 11.0674579, 106.1492428],
			['Poipet Branch', 13.645153, 102.573624],
			
		];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map ,
			icon:image,
			
          });
        }
		
		var image_branch = "<?php echo base_url()?>images/contact/icon-branch-office-location.png";
		for (i = 0; i < all_branch.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(all_branch[i][1], all_branch[i][2]),
            title: all_branch[i][0],
            map: map ,
			icon:image_branch,
			
          });
        }
		
		
		
      }
      
	google.maps.event.addDomListener(window, 'load', initialize_Head);
	
	// EZECOM BKK
	function initialize_BKK() {
		var centerPos = new google.maps.LatLng(11.9879665,104.9806145);
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        var map = new google.maps.Map( document.getElementById("map-canvas-BKK"), mapOptions );
        var locations = [
          ['Customer Services and Sales Office, Phnom Penh', 11.551298, 104.927411]
          
        ];
		
		var all_branch = [
			['EZECOM Head Office', 11.568866, 104.895207],
			['Siem Reap Branch', 13.358326, 103.854435],
			['Sihanouk Branch', 10.6215995, 103.5262875],
			['Koh Kong Branch', 11.610422, 102.9838],
			['Battambang Branch', 13.094526, 103.198304],
			['Bavet Branch', 11.0674579, 106.1492428],
			['Poipet Branch', 13.645153, 102.573624],
			
		];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map ,
			icon:image
          });

        }
		
		var image_branch = "<?php echo base_url()?>images/contact/icon-branch-office-location.png";
		for (i = 0; i < all_branch.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(all_branch[i][1], all_branch[i][2]),
            title: all_branch[i][0],
            map: map ,
			icon:image_branch,
			
          });
        }

      }
	  
	 google.maps.event.addDomListener(window, 'load', initialize_BKK);
	 
	 // EZECOM Siem Reap
	 function initialize_Siem_Reap() {
		var centerPos = new google.maps.LatLng(11.9879665,104.9806145);
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        var map = new google.maps.Map( document.getElementById("map-canvas-Siem-Reap"), mapOptions );
        var locations = [
          ['Siem Reap Branch', 13.358326, 103.854435]
          
        ];
		
		var all_branch = [
			['EZECOM Head Office', 11.568866, 104.895207],
			['Customer Services and Sales Office, Phnom Penh', 11.551298, 104.927411],
			['Sihanouk Branch', 10.6215995, 103.5262875],
			['Koh Kong Branch', 11.610422, 102.9838],
			['Battambang Branch', 13.094526, 103.198304],
			['Bavet Branch', 11.0674579, 106.1492428],
			['Poipet Branch', 13.645153, 102.573624],
			
		];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map ,
			icon:image
          });
        }
		
		var image_branch = "<?php echo base_url()?>images/contact/icon-branch-office-location.png";
		for (i = 0; i < all_branch.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(all_branch[i][1], all_branch[i][2]),
            title: all_branch[i][0],
            map: map ,
			icon:image_branch,
			
          });
        }

      }
	  
	  google.maps.event.addDomListener(window, 'load', initialize_Siem_Reap);
	  
	  //Sihanouk
	  function initialize_Sihanouk() {
		var centerPos = new google.maps.LatLng(11.9879665,104.9806145);
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        var map = new google.maps.Map( document.getElementById("map-canvas-Sihanouk"), mapOptions );
        var locations = [
          ['Sihanouk Branch', 10.6215995, 103.5262875]
          
        ];
		
		var all_branch = [
			['EZECOM Head Office', 11.568866, 104.895207],
			['Customer Services and Sales Office, Phnom Penh', 11.551298, 104.927411],
			['Siem Reap Branch', 13.358326, 103.854435],
			['Koh Kong Branch', 11.610422, 102.9838],
			['Battambang Branch', 13.094526, 103.198304],
			['Bavet Branch', 11.0674579, 106.1492428],
			['Poipet Branch', 13.645153, 102.573624],
			
		];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map ,
			icon:image
          });
        }
		
		var image_branch = "<?php echo base_url()?>images/contact/icon-branch-office-location.png";
		for (i = 0; i < all_branch.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(all_branch[i][1], all_branch[i][2]),
            title: all_branch[i][0],
            map: map ,
			icon:image_branch,
			
          });
        }

      }
	  
	  google.maps.event.addDomListener(window, 'load', initialize_Sihanouk);
	  
	  // Koh Kong
	  function initialize_Koh_Kong() {
		var centerPos = new google.maps.LatLng(11.9879665,104.9806145);
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        var map = new google.maps.Map( document.getElementById("map-canvas-Koh-Kong"), mapOptions );
        var locations = [
          ['Koh Kong Branch', 11.610422, 102.9838]
          
        ];
		
		var all_branch = [
			['EZECOM Head Office', 11.568866, 104.895207],
			['Customer Services and Sales Office, Phnom Penh', 11.551298, 104.927411],
			['Siem Reap Branch', 13.358326, 103.854435],
			['Sihanouk Branch', 10.6215995, 103.5262875],
			['Battambang Branch', 13.094526, 103.198304],
			['Bavet Branch', 11.0674579, 106.1492428],
			['Poipet Branch', 13.645153, 102.573624],
			
		];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map ,
			icon:image
          });
        }
		
		var image_branch = "<?php echo base_url()?>images/contact/icon-branch-office-location.png";
		for (i = 0; i < all_branch.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(all_branch[i][1], all_branch[i][2]),
            title: all_branch[i][0],
            map: map ,
			icon:image_branch,
			
          });
        }

      }
	  
	  google.maps.event.addDomListener(window, 'load', initialize_Koh_Kong);
	  
	  // Battambang
	  function initialize_Battambang() {
		var centerPos = new google.maps.LatLng(11.9879665,104.9806145);
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        var map = new google.maps.Map( document.getElementById("map-canvas-Battambang"), mapOptions );
        var locations = [
          ['Battambang Branch', 13.094526, 103.198304]
          
        ];
		
		var all_branch = [
			['EZECOM Head Office', 11.568866, 104.895207],
			['Customer Services and Sales Office, Phnom Penh', 11.551298, 104.927411],
			['Siem Reap Branch', 13.358326, 103.854435],
			['Sihanouk Branch', 10.6215995, 103.5262875],
			['Koh Kong Branch', 11.610422, 102.9838],
			['Bavet Branch', 11.0674579, 106.1492428],
			['Poipet Branch', 13.645153, 102.573624],
			
		];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map ,
			icon:image
          });
        }
		
		var image_branch = "<?php echo base_url()?>images/contact/icon-branch-office-location.png";
		for (i = 0; i < all_branch.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(all_branch[i][1], all_branch[i][2]),
            title: all_branch[i][0],
            map: map ,
			icon:image_branch,
			
          });
        }

      }
	  
	  google.maps.event.addDomListener(window, 'load', initialize_Battambang);
	  
	  // Bavet
	  function initialize_Bavet() {
		var centerPos = new google.maps.LatLng(11.9879665,104.9806145);
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        var map = new google.maps.Map( document.getElementById("map-canvas-Bavet"), mapOptions );
        var locations = [
          ['Bavet Branch', 11.0674579, 106.1492428]
          
        ];
		
		var all_branch = [
			['EZECOM Head Office', 11.568866, 104.895207],
			['Customer Services and Sales Office, Phnom Penh', 11.551298, 104.927411],
			['Siem Reap Branch', 13.358326, 103.854435],
			['Sihanouk Branch', 10.6215995, 103.5262875],
			['Koh Kong Branch', 11.610422, 102.9838],
			['Battambang Branch', 13.094526, 103.198304],
			['Poipet Branch', 13.645153, 102.573624],
			
		];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map ,
			icon:image
          });
        }
		
		var image_branch = "<?php echo base_url()?>images/contact/icon-branch-office-location.png";
		for (i = 0; i < all_branch.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(all_branch[i][1], all_branch[i][2]),
            title: all_branch[i][0],
            map: map ,
			icon:image_branch,
			
          });
        }

      }
	  
	  google.maps.event.addDomListener(window, 'load', initialize_Bavet);
	  
	  //map-canvas-Poipet
	  function initialize_Poipet() {
		var centerPos = new google.maps.LatLng(11.9879665,104.9806145);
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        var map = new google.maps.Map( document.getElementById("map-canvas-Poipet"), mapOptions );
        var locations = [
          ['Poipet Branch', 13.645153, 102.573624]
          
        ];
		
		var all_branch = [
			['EZECOM Head Office', 11.568866, 104.895207],
			['Customer Services and Sales Office, Phnom Penh', 11.551298, 104.927411],
			['Siem Reap Branch', 13.358326, 103.854435],
			['Sihanouk Branch', 10.6215995, 103.5262875],
			['Koh Kong Branch', 11.610422, 102.9838],
			['Battambang Branch', 13.094526, 103.198304],
			['Bavet Branch', 11.0674579, 106.1492428],
			
		];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map ,
			icon:image
          });
        }
		
		var image_branch = "<?php echo base_url()?>images/contact/icon-branch-office-location.png";
		for (i = 0; i < all_branch.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(all_branch[i][1], all_branch[i][2]),
            title: all_branch[i][0],
            map: map ,
			icon:image_branch,
			
          });
        }

      }
	  
	   google.maps.event.addDomListener(window, 'load', initialize_Poipet);
</script>