<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Thanks you!</title>
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
		<div class="thank-block">
			<h2>THANK YOU</h2>
			<p>Your email have successfully sent. Our staff will contact you soon.</p>
		</div>
	</div>
</div>

<!-- FOOTER -->
<?php $this->load->view("footer/footer_user_v")?> 
</body>

<script>
	var base_url = "<?php echo base_url(); ?>";
	setTimeout(function () {
	   window.location.href = base_url; 
	}, 5000);
</script>