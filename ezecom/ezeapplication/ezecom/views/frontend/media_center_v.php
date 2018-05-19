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
		<div class="row row-mg-bt">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="full-title">News and Events</h2>
				<div class="top-news">
					<a href="<?php echo base_url(); ?>media-center/news-detail/<?php echo strtolower(str_replace(' ', '-', $firsttitle_events['content_title']));?>">
						<img  class="img-responsive"  src="<?php echo base_url('elFindermaster/files/post/image_feature/').$firsttitle_events['content_image_feature']?>" alt="<?php echo $firsttitle_events['content_title']?>"/>
					</a>
					<a href="<?php echo base_url(); ?>media-center/news-detail/<?php echo strtolower(str_replace(' ', '-', $firsttitle_events['content_title']));?>">
						<h5><?php echo $firsttitle_events['content_title']?></h5>
					</a>
					<p>
						<?php
							$string = strip_tags($firsttitle_events['content_description']);
							if (strlen($string) > 350) {

							    $stringCut = substr($string, 0, 600);
								$url = base_url().'media-center/news-detail/'.ucwords(strtolower(str_replace(' ', '-', $firsttitle_events['content_title'])));
							    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="'.$url.'">Read More</a>'; 
							}
							echo $string;
						?>
					</p>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<?php foreach ($title_events as $title) { ?>
		<div class="row row-mg-bt">
			<div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-xs-12">
				<div class="sub-news">
						<a href="<?php echo base_url(); ?>media-center/news-detail/<?php echo strtolower(str_replace(' ', '-' ,$title->content_title));?>"> 
							<img class="img-responsive"  src="<?php echo base_url()?>elFindermaster/files/post/image_feature/<?php echo $title->content_image_feature ?>" alt="<?php echo $title->content_title ?>" />
						</a>
						<a href="<?php echo base_url(); ?>media-center/news-detail/<?php echo strtolower(str_replace(' ', '-' ,$title->content_title));?>">
							<h5><?php echo $title->content_title ?></h5>
						</a>
						<p>
							<?php
								$string = strip_tags($title->content_description);
								if (strlen($string) > 200) {
									$stringCut = substr($string, 0, 200);
									$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <br/><a href="'.base_url().'media-center/news-detail/'.ucwords(strtolower(str_replace(' ', '-' ,$title->content_title))).'">Read More</a>'; 
								}
								echo $string;
							?>
						</p>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<?php } ?>
		
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="pagination">
					<?php echo $pagination ?>				
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
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
