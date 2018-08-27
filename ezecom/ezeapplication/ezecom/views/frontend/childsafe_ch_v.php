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
						2014年11月18日，EZECOM成为全球第一家获得ChildSafe Business 7认证的公司。 ChildSafe Business 7认证由ChildSafe Network开发，这是一个由Friends-International创建并提供支持的国际儿童保护计划。

					</p>
					<p>
						该认证要求通过员工培训，内部政策审查，CSR组合评估，将7个ChildSafe原则整合到我们公司的运营中。我们还收到咨询建议，以确保我们的公司沟通计划是为儿童考虑。 EZECOM首席执行官Oknha Paul Blanche-Horgan说：“EZECOM很自豪能够与Friends-International合作，成为第一个满足7项原则并在柬埔寨获得认证的ChildSafe企业。” “经过数周的ChildSafe培训，我们的员工很乐意收到证书。”
					</p>
					<p>
						如果您想了解有关ChildSafe计划的更多信息, 
						请访问 <a href="http://thinkchildsafe.org/" target="_blank">www.childsafe-international.org</a> 或者如果您想了解有关Friends-International工作的更多信息, 
						请访问 <a href="https://friends-international.org/" target="_blank">www.friends-international.org</a>!
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