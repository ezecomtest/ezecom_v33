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
						2018年8月1日，EZECOM成为柬埔寨第一家获得国际标准化组织认证（ISO）9001：2015认证的互联网服务提供商（ISP），通过开发内部文件化质量管理体系开展为期一年的流程。

					</p>
					<p>
						EZECOM首席执行官Oknha Paul Blanche-Horgan说：“自愿认证确保客户能够遵守EZECOM的文件化流程和程序，确保持续改进我们的服务。”
					</p>
					<p>
						“获得ISO 9001：2008认证是EZECOM的里程碑，”Oknha Paul Blanche-Horgan说。 “认证过程需要我们员工的大量奉献和卓越，并证明了EZECOM对客户的持续承诺和服务质量。”
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row row-margin-bt">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 remove-pd">
				<div class="core-value">
					<h3>O我们的核心价值观</h3>
					<p><span>卓越</span></p>
					<p><span class="tab-in">我们做什么 - 我们做得很好</span></p>
					<p><span>合作伙伴</span></p>
					<p><span class="tab-in">我们建立持久的关系</span></p>
					<p><span>革新</span></p>
					<p><span class="tab-in">我们将想法变为现实</span></p>
					<p><span>廉正</span><p>
					<p><span class="tab-in">我们做对了</span></p>
					<p><span>人</span></p>
					<p><span class="tab-in">我们业务的核心</span></p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 remove-pd">
				<div class="qms">
					<h3>质量管理体系</h3>
					<p>
						作为市场的领导者，我们始终拥有强大的改进动力。为了确保这种情况，我们在公司内部建立了质量管理体系 - 衡量和改善我们业务的所有领域。通过不断测量自己并不断瞄准更高，我们确保我们保持我们作为行业领导者的地位。
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 remove-pd">
				<div class="policy">
					<h3>我们的质量方针</h3>
					<p>
						EZECOM 承诺通过持续改进活动, 包括定义、衡量和行动目标和目标, 满足可适用的要求和满足或超过客户的要求。
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