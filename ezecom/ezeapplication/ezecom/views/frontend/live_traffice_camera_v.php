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

  
  <?php 
    $this->load->view('header/frontend_header');
  ?>
 

<body onload="play_camera()">
<div class="container module-content-container">
	<div id="camera-block">
		<div class="row mg-top mg-bt">
		<h2 class="text-center">Live Traffic Camera</h2>
		  <div class="col-sm-4">
			<p class="myLocation">Which location do you want to see? 
				<span><img src="<?php echo base_url()?>/images/livetraffic/camera_live.png"/></span>
			</p>
			
		  </div>
		  <div class="col-sm-5"> <!-- Location camera block -->
			<div class="location">
				<div class="input-group">
				  <input class="form-control" type="text" name="location" data-toggle="modal" value="<?php if(!$this->session->userdata("name_camera")){echo "KBAL THNOL";}else{echo $this->session->userdata("name_camera");} ?>" data-target="#myLocation" id="location"/>
				  <span class="input-group-addon"><i data-toggle="modal" data-target="#myLocation" class="fa fa-align-justify"></i></span>
				</div>
			</div>
		  </div>
		  <div class="col-sm-3">
			<img src="<?php echo base_url()?>/images/livetraffic/map.png" class="myMap" id="myMap" title="Map"/>
			<!-- The Modal -->
			<div id="myModal" class="modal-map">
			  <span class="close">&times;</span>
			  <div id="map-canvas"></div>
			</div>
			<!-- End Modal -->
			<span class="locationMap">View map</span>
		  </div>
		</div> <!-- end of location camera block -->
		  
		
		<div class="modal fade" id="myLocation" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
					<div class="table-responsive">          
						<table class="table">
						<tr>
						<?php 
							$i=0;
							foreach($get_cameras as $camera){
							$i++;
							if($i<=3){
						?>
								<td id="<?php echo $camera->traffic_cam_id?>" title="<?php echo $camera->name ?>" onclick='display_camera(this.id,this.title,"<?php echo $camera->secure_token; ?>")'><?php echo $camera->name; ?><span class="linetd">|</span></td>
							
						<?php }else{break;}
							}
						?>
						</tr>
						<tr>
						<?php 
							$i=0;
							foreach($get_cameras as $camera){
							$i++;
							if($i >= 4){
						?>
								<td id="<?php echo $camera->traffic_cam_id?>" title="<?php echo $camera->name ?>" onclick='display_camera(this.id,this.title,"<?php echo $camera->secure_token; ?>")'><?php echo $camera->name; ?><span class="linetd">|</span></td>
							
						<?php }if($i==6){break;}
							}
						?>
						</tr>
						<tr>
						<?php 
							$i=0;
							foreach($get_cameras as $camera){
							$i++;
							if($i >= 7){
						?>
								<td id="<?php echo $camera->traffic_cam_id?>" title="<?php echo $camera->name ?>" onclick='display_camera(this.id,this.title,"<?php echo $camera->secure_token; ?>")'><?php echo $camera->name; ?><span class="linetd">|</span></td>
							
						<?php }if($i==9){break;}
							}
						?>
						</tr>
						<tr>
						<?php 
							$i=0;
							foreach($get_cameras as $camera){
							$i++;
							if($i >= 10){
						?>
								<td id="<?php echo $camera->traffic_cam_id?>" title="<?php echo $camera->name ?>" onclick='display_camera(this.id,this.title,"<?php echo $camera->secure_token; ?>")'><?php echo $camera->name; ?><span class="linetd">|</span></td>
							
						<?php }if($i==12){break;}
							}
						?>
						</tr>
						<tr>
						<?php 
							$i=0;
							foreach($get_cameras as $camera){
							$i++;
							if($i >= 13){
						?>
								<td id="<?php echo $camera->traffic_cam_id?>" title="<?php echo $camera->name ?>" onclick='display_camera(this.id,this.title,"<?php echo $camera->secure_token; ?>")'><?php echo $camera->name; ?><span class="linetd">|</span></td>
							
						<?php }if($i==15){break;}
							}
						?>
						</tr>
						<tr>
						<?php 
							$i=0;
							foreach($get_cameras as $camera){
							$i++;
							if($i >= 16){
						?>
								<td id="<?php echo $camera->traffic_cam_id?>" title="<?php echo $camera->name ?>" onclick='display_camera(this.id,this.title,"<?php echo $camera->secure_token; ?>")'><?php echo $camera->name; ?><span class="linetd">|</span></td>
							
						<?php }if($i==18){break;}
							}
						?>
						</tr>
						<tr>
						<?php 
							$i=0;
							foreach($get_cameras as $camera){
							$i++;
							if($i >= 19){
						?>
								<td id="<?php echo $camera->traffic_cam_id?>" title="<?php echo $camera->name ?>" onclick='display_camera(this.id,this.title,"<?php echo $camera->secure_token; ?>")'><?php echo $camera->name; ?><span class="linetd">|</span></td>
							
						<?php }if($i==21){break;}
							}
						?>
						</tr>
					
						</table>
					</div>
				
					<div style="clear:both;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Player display -->
	<style type="text/css">
	  .home{
		background:#6D6E71;
	  }
		@-webkit-keyframes marqueeAnimation-442261  { 100%  {margin-left:-1580px}}
	</style>
	
	<!-- Player Preview -->
	
	<div id="playerPosition">
	  <center>
		 <div id="video_preview">                    
			<div id="player"></div>
		 </div>
	  </center>
	</div>
	
	<!-- End Player -->
	<div class="row mg-bt">
	</div>
</div>
	
<!-- FOOTER -->
  <?php $this->load->view('footer/footer_user_v');?>
<!-- //FOOTER -->


<!-- BACK TOP TOP BUTTON -->
 
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
 
  <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
 
</div>
 
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
<script type="text/javascript" src="<?php echo base_url(); ?>js/LiveCamera/cameraStream.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/LiveCamera/clappr-responsive-container-plugin.js"></script>
<input type="hidden" value="<?php echo base_url(); ?>" id="url">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDN_KbE6yYEz98eIIRzWacJEm-kkm6K__8" type="text/javascript"></script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myMap');
var modalImg = document.getElementById("map");
img.onclick = function(){
    modal.style.display = "block";
	modal.style.visibility = "visible";
    
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

	  var map;
      var centerPos = new google.maps.LatLng(11.562108,104.888535);
      var zoomLevel = 13;
      var image = "<?php echo base_url() ?>images/livetraffic/pin-map.png";
      function initialize() {
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        map = new google.maps.Map( document.getElementById("map-canvas"), mapOptions );
		var base_url = "<?php echo base_url() ?>media-center/live-traffic-camera";
        var locations = [
          ['RATANA PLAZA', 11.56248592, 104.87130404,base_url,11],
          ['TUOLKORK',11.5695493, 104.90087271,base_url,7],
          ['STEUNGMEANCHEY',11.54665574, 104.89712834,base_url,12],
		  ['KBAL THNOL',11.52963677, 104.93106902,base_url,2],
		  ['SPEAN DEAK CHOMKA DONG',11.52611512, 104.88751262,base_url,17],
		  ['RIVERSIDE',11.56928653, 104.93023217,base_url,3],
		  ['CHAOM CHAO',11.53538697, 104.83038962,base_url,8],
		  ['OLYMPIC',11.55767179, 104.90819648,base_url,15],
		  ['CAMKO CYCLE',11.59244625, 104.89617616,base_url,6],
		  ['POCHENTONG',11.55360389, 104.8441574,base_url,16],
		  ['CHBAR OMPOV',11.53202307, 104.93706107,base_url,18],
		  ['RUSSIA HOSPITAL',11.54364938, 104.90262151,base_url,19],
		  ['NOKIA INTERSECTION (271)',11.55294167, 104.88722563,base_url,20],
		  ['WAT SONSOMKOSAL (271)',11.53133977, 104.91374195,base_url,21],
		  ['MONDIAL CENTER',11.557861, 104.9013555,base_url,22]
		  
		  
        ];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map,
            icon:image,
            url:locations[i][3],
			cam_id:locations[i][4]
            
          });

          google.maps.event.addListener(marker, 'click', function() {
			  var id = this.cam_id;
			  var name = this.title;
			  // reload camera location by id and name.
			  display_camera(id,name);
          });

        }

      }
      
	google.maps.event.addDomListener(window, 'load', initialize);
</script>

<style type="text/css">
  @media screen and (max-width: 375px){
	  #player{
		  height:160px !important;
	  }
	  
	  #playerPosition .playerBorder{
		  max-width: 760px;
		  max-height: 165px;
		}
  }
  
   @media screen and (max-width: 414px){
	  #player{
		  height:160px !important;
	  }
	  
	  #playerPosition .playerBorder{
		  max-width: 760px;
		  max-height: 165px;
		}
  }
  
   @media screen and (max-width: 320px){
	  #player{
		  height:130px !important;
	  }
	  
	  #playerPosition .playerBorder{
		  max-width: 760px;
		  max-height: 140px;
		}


  }

   [data-watermark-top-right] {
		top: 13px;
		right: 0px !important;
		width: 25% !important;
    }
		
	#map-canvas{
		height: 90%;
		width: 60%;
		margin: 0 auto;
	}
</style>
</body>
</html>