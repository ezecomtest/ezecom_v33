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
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 remove-pd">
				<h3><?php echo $news_events['content_title']; ?></h3>
				<div class="wrapper-text">
					<?php echo $news_events['content_description'] ?>
				</div>
				<h3>Check out other articles below:</h3>
				<div class="infinity-carousel">
					  <button class="nav prev"></button>
					  <button class="nav next"></button>
					  <div class="center">
							<div class="slides">
							<?php foreach($slides_news_event as $row){ ?>
							  <div> 
								<!-- anything in here -->
								<div class="img-wrap">
									<a href="<?php echo base_url(); ?>media-center/news-detail/<?php echo strtolower(str_replace(' ', '-', $row->content_title)) ?>">
										<img class="" src="<?php echo base_url()?>elFindermaster/files/post/image_feature/<?php echo $row->content_image_feature ?>" />
									</a>
								</div>
								<p class="event_title">
									<?php 
										if(strlen($row->content_title) > 50){
											$url = base_url()."media-center/news-detail/".strtolower(str_replace(' ', '-', $row->content_title));
											echo "<a class='ev-title' href='".$url."'>".mb_substr($row->content_title, 0, 40,'UTF-8') . '...'."</a>";
										}else{
											$url = base_url()."media-center/news-detail/".strtolower(str_replace(' ', '-', $row->content_title));
											echo "<a class='ev-title' href='".$url."' >".$row->content_title."</a>";
										}
									?>
								</p>
								<!--<p class="text">Text 1</p>-->
							  </div>
							<?php } ?>
							</div>
					 </div>
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
</script>
