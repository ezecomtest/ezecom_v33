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
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
<body>
<div class="container-fluid">
	<div class="container container-top-mar">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<img class="img-responsive" src="<?php echo base_url()?>images/careers/photo-career.jpg" alt="Careers"/>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12 remove-pd">
				<div class="wrapper-career">
					<p>
						EZECOM, Cambodia's premium internet provider, 
						was found in 2007 to serve the rapidly expanding 
						business and residential markets in Cambodia. 
						Our company has incorporated its own fibre optic, 
						world-class Data Centre, MPLS, VPLS, Cloud services and 
						other VAS services for enterprise solutions 
						along with our world-class 24/7 technical support.
					</p>
					<p class="color-for-p">
						We are now looking for dynamic, energetic and committed candidates to fill the positions of:
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 remove-pd">
				<div class="wrapper-career">
					<table class="table" id="example" border="0px">
						<thead>
						<tr>
						  <th></th>
						  <th></th>
						  <th></th>
						</tr>
						</thead> 
					  <tbody>
					  <?php
						foreach ($career as $careers) {?>
							<tr>
							  <td>
								<span><strong class="job-title"><?php echo ucwords(strtolower($careers->career_title))?></strong></span>
								<br/>
								<label>Base in Phnom Penh, 1 position</label>
							  </td>
							  <td>
								<br/>
								<strong class="dateline">Dateline:&nbsp;&nbsp;<?php echo $careers->career_end_date;?></strong>
							 </td>
							  <td>
								<br/>
								<a class="btn-xs" href="<?php echo base_url()?>career-detail/<?php echo strtolower( str_replace(' ', '-', $careers->career_title));?>" target="_new">Detail</a>
								</td>
							</tr>                                                     
					  <?php }?>
						</tbody>
						<tfoot>
							<tr>
							  <td></td>
							  <td></td>
							  <td class="clear-pd"><button type="button"  class="btn btn-design" data-toggle="modal" data-target="#myForm">Apply Now</button></td>
							</tr>
						</tfoot>
					</table>
					
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		
			<!-- Modal -->
            <div id="myForm" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>-->
                        <div class="modal-body">
                            <form action="submit-eamil" role="form" method="post" id="reused_form" enctype="multipart/form-data" >
								<div class="row">
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="profile">
											<a href="#" onclick="document.getElementById('uploadImage1').click(); return false;" >
												<img src="<?php echo base_url()?>images/careers/profile.png" id="uploadPreview1" title="Profile" alt="Profile"/>
											</a>
											<input type="file" class="myprofile" id="uploadImage1" onchange="PreviewImage(1)" name="profile" required />
											<p class="limit-size">Must be smaller than 2mb</p>
										</div>
										
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
								</div>
                                <div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="form-group">
										 <label>First Name:<label class="red">*</label></label>
											<input type="text" class="form-control input-md" name="firstName" required />
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="form-group">
										 <label>Last Name:<label class="red">*</label></label>
										 <input type="text" class="form-control input-md" name="lastName" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="form-group">
										 <label>Apply for the position of:<label class="red">*</label></label>
											<input type="text" class="form-control input-md" name="positionName" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="form-group">
										 <label>Location:<label class="red">*</label></label>
											<select class="form-control" name="location">
											  <option>Phnom Penh</option>
											  <option>Siem Reap</option>
											  <option>Sihanoukville</option>
											  <option>Koh Kong</option>
											  <option>Battambang</option>
											  <option>Bavet</option>
											  <option>Poipet</option>
											</select>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="form-group">
											<label>Upload your CV (must be smaller than 2mb):<label class="red">*</label></label>
											<div class="input-group input-file">
											  <div class="form-control" id="show_file">
												<a href="/path/to/your/current_file_name.pdf" target="_blank"></a>
											  </div>
											  <span class="input-group-addon">
												<a class='btn btn-primary' href='javascript:;'>
												  Browse
												  <input type="file" name="field_name" id="cvUpload" onchange="$(this).parent().parent().parent().find('.form-control').html($(this).val()); check_fileupload() " required />
												</a>
											  </span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="form-group">
											<label>Comment:</label>
											<textarea name="comment" class="form-control rounded-0" rows="2"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="form-group">
											<div  class="g-recaptcha push-right" data-sitekey="6LegbCMTAAAAANeFxea47OaPqcjZocO2CwUhFPt9"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="form-group">
											<div class="btn-right">
												<input type="reset" class="btn btn-default btn-reset"  value="Reset">
												<input type="submit" class="btn btn-default btn-submit"  value="Submit">
											</div>
										</div>
									</div>
								</div>
								
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div> <!-- End pop up form -->
		
	</div>
</div>


<style type="text/css">
	/*.dataTables_length,.dataTables_filter{
		
	}
	*/
	.dataTables_length{
		display: none;
	}
	.dataTables_info,.col-sm-5{
		display: none;
	}
	/*table tr th {
		visibility: hidden;
	}*/
	.col-sm-7{
		margin-left:30%;
		padding:20px;
	}
	
	table.dataTable thead .sorting:after{
		display: none;
	}
	table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:after{
		display:none !important;
	}
	table tr th{
		padding:18px;
	}
	
	/* Modify 26-02.2018 */
	div.dataTables_wrapper div.dataTables_paginate{
		text-align:left;
	}
	
	.table>thead>tr>th{
		border-bottom:0px;
	}
	.table>tbody>tr>td{
		border-top:0px;
	}
	.table>tbody>tr>td span{
		font-weight:530;
		font-family:'Neutra Text',serif,sans-serif;
		color:#7961AA;
		font-size:19px;
	}
	.table>tbody>tr>td label{
		font-size:12px;
		color:black;
		font-weight:10;
	}
	.table>tbody>tr>td a{
		color:#7961AA;
		font-size:14px;
	}
	
	.table>tbody>tr:nth-child(even){
		background-color:#FFFFFF;
	}
	.table>tbody>tr:nth-child(Odd){
		background-color:#F5F5F5;
	}
	
	.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
		background-color:#7961AA;
		border-color:#7961AA;
	}
	.pagination>li>a{
		color:#7961AA;
	}
	.pagination>li>a:hover{
		color:#7961AA;
	}
	
	
	
	
</style>
		
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
function PreviewImage(no){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);
        
        var fileInput = document.getElementById("uploadImage1").files[0];
        var allowed = ["jpeg","png"];
        var found = false;
        var fsize=((fileInput.size) * 0.000001);
        var fsize_mb=(fsize.toFixed(5));
        
        allowed.forEach(function(extension) {
            if (fileInput.type.match('image/'+extension) && fsize_mb <=2) {
                found = true;
                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
                    document.getElementById("clear-message").value=""; //Clear message (please choose image.)
					
                };
				
				document.getElementById("uploadPreview1").style.width = "150px";
				document.getElementById("uploadPreview1").style.height = "150px";
				document.getElementById("uploadPreview1").style.left = "15px";
				document.getElementById("uploadPreview1").style.position = "relative";
				document.getElementById("uploadPreview1").style.borderRadius= "50%";
                            
            }
                
        })
        if(found==false){
          alert("Upload only file(jpeg , png) and less than 2MB");
		  
		  document.getElementById("uploadPreview1").style.width = "100%";
		  document.getElementById("uploadPreview1").style.height = "100%";
		  document.getElementById("uploadPreview1").style.position = "relative";
		  document.getElementById("uploadPreview1").style.left = "5px";
		  document.getElementById("uploadPreview1").style.borderRadius= "50%";
		  
		  //document.getElementById("filenotfound").innerHTML="Upload only file(jpeg , png) and less than 2MB";
          document.getElementById("uploadPreview1").src = "<?php echo base_url()?>images/careers/profile.png";
          document.getElementById("uploadImage1").value="";
          
        }else{
            document.getElementById("filenotfound").innerHTML="";
        }
        
 }
</script>

<script type="text/javascript">
	function check_fileupload(){
		
		var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("cvUpload").files[0]);
        var fileInput = document.getElementById("cvUpload").files[0];
   
        var found = false; 
        var fsize = ((fileInput.size) * 0.000001);
        var fsize_mb = (fsize.toFixed(5));
		
		if (fsize_mb > 2){
			alert("File upload less than 2MB");
			document.getElementById("cvUpload").value="";
			document.getElementById("show_file").innerHTML = "";
		}
		
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

<script type="text/javascript">
$(document).ready(function() {
    $('#example').dataTable( {
	"pageLength": 7,
	"order": [[ 1, "desc" ]]
	});
});
</script>

<!-- JS -->		
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>