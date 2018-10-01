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
					<p class="kh-p">
						នៅថ្ងៃទី១៨ ខែវិច្ឆិកា ឆ្នាំ២០១៤ ក្រុមហ៊ុន EZECOM បានក្លាយជាក្រុមហ៊ុនទីមួយដែលទទួលបានវិញ្ញាបនបត្រ  ChildSafe Business 7 លើពិភពលោក។ វិញ្ញាបនបត្រ ChildSafe Business 7 ត្រូវបានបង្កើតឡើងដោយបណ្តាញសុវត្ថិភាពកុមារ (ChildSafe Network) ដែលជាកម្មវិធីគាំពារកុមារលំដាប់អន្តរជាតិ បង្កើតនិងអនុវត្តដោយអង្គការ Friends-International ។

					</p>
					<p class="kh-p">
						ដើម្បីទទួលបានវិញ្ញាបនបត្រនេះ EZECOM ត្រូវបញ្ជ្រាបគោលការណ៍សុវត្ថិភាពកុមារ ទៅក្នុងប្រតិបត្តិការរបស់ខ្លួន តាមរយៈការបណ្តុះបណ្តាលបុគ្គលិក ការកែលម្អគោលនយោបាយផ្ទៃក្នុង និងការវាយតម្លៃសកម្មភាពសង្គមរបស់យើង។ យើងក៏ទទួលបានការប្រឹក្សាយោបល់ពីអង្គការដៃគូ ដើម្បីធានាថាផែនការផ្សព្វផ្សាយរបស់ក្រុមហ៊ុនមិនប៉ះពាល់ដល់កុមារ។ លោក Paul Blanche-Horgan នាយកប្រតិបត្តិក្រុមហ៊ុន EZECOM បានមានប្រសាសន៍ថា “EZECOM មានមោទនភាពណាស់ដោយបានចាប់ដៃគូជាមួយអង្គការ Friends-International និងបានក្លាយជាក្រុមហ៊ុនមុនគេដែលបានទទួលវិញ្ញាបនបត្រ  ChildSafe Business 7 នៅកម្ពុជា។ បន្ទាប់ពីបានឆ្លងកាត់វគ្គបណ្តុះបណ្តាលស្តីពីសុវត្ថិភាពកុមារជាច្រើនសប្តាហ៍ បុគ្គលិករបស់យើងពិតជាសប្បាយរីករាយណាស់ ក្រោយទទួលដំណឹងអំពីការបានវិញ្ញាបនបត្រនេះ។” 
					</p>
					<p class="kh-p">
						ប្រសិនបើលោកអ្នកចង់ស្វែងរកព័ត៌មានបន្ថែមអំពីកម្មវិធីសុវត្ថិភាពកុមារ, 
						សូមចូលទស្សនាគេហទំព័រ  <a href="http://thinkchildsafe.org/" target="_blank">www.childsafe-international.org</a> , 
						ហើយប្រសិនបើលោកអ្នកចង់ស្វែងរកព័ត៌មានបន្ថែមអំពីការងាររបស់អង្គការ Friends-International  សូមចូលទស្សនាគេហទំព័រ  <a href="https://friends-international.org/" target="_blank">www.friends-international.org</a>!
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