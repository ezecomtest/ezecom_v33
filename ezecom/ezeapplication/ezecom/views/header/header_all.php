<div class="container-fluid">
	<div class="container">
		<div class="row" style="padding:15px 0">
			<div class="col-xl-6 col-lg-6 col-md-6 col-xs-6" style="padding-left:0">
				<a href="<?php echo base_url(); ?>" title="EZECOM Cambodia Premuim Internet Service Provider">
					<div class="EZECOM-logo">
						<img class="img-responsive" src="<?php echo base_url()?>images/ezecom-logo.svg" alt="EZECOM Cambodia Premuim Internet Service Provider"/>
					</div>
				</a>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-xs-6" style="padding-right:0">
				<div class="text-right">
					<div class="language">
						<!--<span><img src="<?php echo base_url()?>images/flags/kh.svg" id="2" onclick="change_language(this.id)" alt="Khmer" title="Khmer"></span>-->
						<span><img src="<?php echo base_url()?>images/flags/en.svg" id="1" onclick="change_language(this.id)" alt="English" title="English"></span>
						<span><img src="<?php echo base_url()?>images/flags/ch.svg" id="3" onclick="change_language(this.id)" alt="Chinese" title="Chinese"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--<div id="top-header-fix">
	<div class="container middle-block">
		<div class="row" style="padding:15px 0">
			<div class="col-xl-6 col-lg-6 col-md-6 col-xs-6" style="padding-left:0">
				<a href="<?php //echo base_url(); ?>" title="EZECOM Cambodia Premuim Internet Service Provider">
					<div class="EZECOM-logo">
						<img class="img-responsive" src="<?php echo base_url()?>images/ezecom-logo.svg" alt="EZECOM Cambodia Premuim Internet Service Provider"/>
					</div>
				</a>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-xs-6" style="padding-right:0">
				<div class="text-right">
					<div class="language">
						<span><img src="<?php //echo base_url()?>images/flags/kh.svg" id="2" onclick="change_language(this.id)" alt="Khmer" title="Khmer"></span>
						<span><img src="<?php //echo base_url()?>images/flags/en.svg" id="1" onclick="change_language(this.id)" alt="English" title="English"></span>
						<span><img src="<?php //echo base_url()?>images/flags/ch.svg" id="3" onclick="change_language(this.id)" alt="Chinese" title="Chinese"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>-->

<script>

	// Top Fixed when scroll 
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
			//document.getElementById("top-header-fix").style.top = "0";
			document.getElementById("menu-fix").style.top = "0";
		} else {
			//document.getElementById("top-header-fix").style.top = "-80px";
			document.getElementById("menu-fix").style.top = "-100px";
		}
	}
	
</script>

<script type="text/javascript">
  function change_language(id){
    var base_url= "<?php echo base_url() ?>";
	$.ajax({
		type:"POST",
		url: base_url+ "set_session_lang",
		data:{id:id},
		success:function(dta)
		{
		  window.location.reload();
		}
	});
  }
</script>
