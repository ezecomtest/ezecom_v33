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
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="text-center">Radio Live Stream</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div id="radio_player">
					<h3 id="channel_label" class="text-capitalize">
						<?=$default_radio['radio_info_station']?>
					</h3>
					<br>
					<div id="mediaspace">
						<embed type="application/x-shockwave-flash" src="<?=base_url()?>player/player.swf" width="370"
							   height="24" style="undefined" id="ply" name="ply" bgcolor="#fff" quality="high" allowfullscreen="true"
							   allowscriptaccess="always" wmode="opaque">
					</div>
					<div name="mediaspacesilverlight" id="mediaspacesilverlight" style="display:none;"></div>
				</div>

				<h3>Radio Schedule</h3>
				<br>
				<ul class="radio-schedule-list">
					<?php
					foreach ($schedules as $schedule) { ?>
						<li>
							<a href="<?php echo base_url() ?>elFindermaster/files/radio_schedule/<?php echo $schedule->radio_schedule_pdf ?>"
							    target="_blank">
								<?php echo $schedule->radio_schedule_title; ?>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				 <h3>Radio Station</h3>
				 <p> Click on a station to start listening</p>
				 
				 		<?php foreach ($radio_group as $group) { ?>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<h4 class="padding-top-10 color-gray"><?php echo $group->radio_group_name; ?></h4>
							</div>
							<?php
								foreach ($radio as $row) {
									if ($row->radio_info_group_id == $group->radio_group_id) {
										//separate link into rtmp & file

										$string = $row->radio_info_rtmp;
										if($string == NULL){

										}else{
											$temp_str = explode('/', $string);
											$rtmp = $temp_str[0] . '//' . $temp_str[2] . '/' . $temp_str[3] . '/';
											$file = $temp_str[4];
										}
										

										?>
										<!--load radio thumbnail-->
										<div class="logo-station">
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 mg-right">
												<img src="<?php echo base_url() ?>elFindermaster/files/radio_icon/<?php echo $row->radio_info_thumbnail; ?>"
													 onclick="changeChannelRtmp(&#39;<?= $row->radio_info_station ?>&#39;,&#39;<?= $rtmp ?>&#39;,&#39;<?= $file ?>&#39;,&#39;NOW PLAYING...&#39;)">
											</div>
										</div>
										<?php
									}
								}
						}//end foreach for $radio_group
					?>
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
	<?php
	$string = $default_radio['radio_info_rtmp'];
	$temp_str = explode('/', $string);
	$rtmp = $temp_str[0] . '//' . $temp_str[2] . '/' . $temp_str[3] . '/';
	$file = $temp_str[4];
	?>
	loadDefult("<?=$rtmp?>", "<?=$file?>");

	function loadDefult(streamer, file) {
		/****START DEFAUL EMBAD****/
		var so = new SWFObject('<?=base_url()?>player/player.swf', 'ply', '370', '24', '9', '#fff');
		so.addParam('allowfullscreen', 'true');
		so.addParam('allowscriptaccess', 'always');
		so.addVariable('autostart', 'true');
		so.addParam('wmode', 'opaque');
		so.addVariable('volume', '100');
		so.addVariable('streamer', streamer);
		so.addVariable('file', file);
		so.write('mediaspace');
		// document.getElementById("sms").innerHTML = 'NOW PLAYING...';
		/****END DEFAUL EMBAD****/
	}


	function changeChannelRtmp(channel, streamer, file, sms) {

		var so = new SWFObject('<?=base_url()?>player/player.swf', 'ply', '370', '24', '9', '#F9F9F9');
		so.addParam('allowfullscreen', 'true');
		so.addParam('allowscriptaccess', 'always');
		so.addVariable('autostart', 'true');
		so.addParam('wmode', 'opaque');
		so.addVariable('volume', '100');
		so.addVariable('streamer', streamer);
		so.addVariable('file', file);
		so.write('mediaspace');
		document.getElementById("channel_label").innerHTML = channel;
		// document.getElementById("sms").innerHTML = sms;
		//document.getElementById("sms").innerHTML = "Our live radio is under maintenance, will be back 30mn after.";
		document.getElementById("mediaspacesilverlight").style.display = "none";
		document.getElementById("mediaspace").style.display = "block";
		//window.location+"&"+channel;
	}

	function changeChannelHttp(channel, file) {
		var so = new SWFObject('<?=base_url()?>player/player.swf', 'ply', '370', '24', '9', '#F9F9F9');
		so.addParam('allowfullscreen', 'true');
		so.addParam('allowscriptaccess', 'always');
		so.addVariable('autostart', 'true');
		so.addParam('wmode', 'opaque');
		so.addVariable('volume', '100');
		so.addVariable('stretching', 'fill');
		so.addVariable('type', 'sound');
		so.addVariable('file', file); //Channel : FM 105.5MHz
		so.write('mediaspace');
		document.getElementById("channel_label").innerHTML = channel;
		document.getElementById("mediaspacesilverlight").style.display = "none";
		document.getElementById("mediaspace").style.display = "block";
		// document.getElementById("sms").innerHTML = "NOW PLAYING...";
	}

	function changeChannelSilverlight(channel, file) {
		var cnt = document.getElementById("mediaspace");
		var src = 'http://ezecom.com.kh/modules/mod_liveradio/resource/silverlight/wmvplayer.xaml';
		var cfg = {
			file: file,
			overstretch: 'true',
			autostart: 'true',
			height: '21',
			width: '370'
		};
		var ply = new jeroenwijering.Player(cnt, src, cfg);
		jeroenwijering.Model.prototype.timeChanged = function () {
			try {
				var pos = Math.round(this.video.Position.Seconds * 10) / 10;
				this.view.onTime(pos, this.configuration['duration']);
			} catch (ex) {
				clearInterval(this.timeint);
			}
		};

		document.getElementById("sms").innerHTML = "NOW PLAYING...";
		document.getElementById("mediaspace").style.display = "block";
		document.getElementById("channel_label").innerHTML = channel;
	}


</script>
							
<script type="text/javascript">
	(function($) {
		// Back to top
		$('#back-to-top').on('click', function(){
			$("html, body").animate({scrollTop: 0}, 500);
			return false;
		});
	})(jQuery);
</script>
