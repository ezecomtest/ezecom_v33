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
	<div class="container container-top-mar">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<img class="img-responsive" src="<?php echo base_url()?>images/careers/photo-career.jpg" alt="Careers"/>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-1"></div>
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-11">
				<div class="wrapper-career">
					<p>
						EZECOM, Cambodia’sde premium internet provider, 
						was found in 2007 to serve the rapidly expanding 
						business and residential markets in Cambodia. 
						Our company has incorporated its own fibre optic, 
						world-class Data Centre, MPLS, VPLS, Cloud services and 
						other VAS services for enterprise solutions 
						along with our world-class 24/7 technical support.
					</p>
					<p class="color-for-p">
						We are now looking for dynamic, energetic and committed candidates to fill the position as:
					</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
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
								<strong>Dateline:&nbsp;&nbsp;<?php echo $careers->career_end_date;?></strong>
							 </td>
							  <td>
								<br/>
								<a class="btn-xs" href="<?php echo base_url()?>career-detail/<?php echo strtolower( str_replace(' ', '-', $careers->career_title));?>" target="_new">Detail</a>
								</td>
							</tr>                                                     
					  <?php }?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
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