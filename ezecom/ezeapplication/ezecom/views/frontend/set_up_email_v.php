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
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="form-wrapper">
					<p>Don't you have an EZECOM email account yet?<br/>
					Sign up is easy and free!</p>
					<form id="setupEmail" action="" method="post" >
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Your Name:<label class="red">*</label></label>
									 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control input-md" required name="yourName"/>
									 </div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>User Name:(show on your application form)<label class="red">*</label></label>
									<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control input-md" required name="userName"/>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Phone Number:<label class="red">*</label></label>
									<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
										<input type="text" class="form-control input-md" required name="phoneNumber"/>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Request Email Address<label class="red">*</label></label>
									<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input type="email" class="form-control input-md" required name="userName"/>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label class="control-label">Password:<label class="red">*</label></label>
									<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input type="password" class="form-control input-md" required name="password"/>
									 <span class="glyphicon form-control-feedback"></span>
									 <span class="help-block with-errors"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label class="control-label">Confirm Password<label class="red">*</label></label>
									<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input type="password" class="form-control input-md" required name="confirmPassword"/>
									<span class="glyphicon form-control-feedback"></span>
									<span class="help-block with-errors"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<input type="submit" class=" pull-right btn btn-default" value="Sign up" name="cmdsubmit"/>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<input type="reset" class="btn btn-default" value="RESET" name="cmdclear"/>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
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
	
	jQuery(function($){
		$('#pop-up-form').click(function() {
			$('.form-wrapper').toggle('500');
		});
	
		$('#btn-close').click(function(e) {
            $('.form-wrapper').toggle('500');
        });
	
	});
</script>
<!-- BACK TO TOP BUTTON -->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<script type="text/javascript">
 $(document).ready(function() {
    $('#setupEmail').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
           /*  first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
           
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
		comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description about yourself'
                    }
                    }
                 },	
	 email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            }, */
					
	password: {
            validators: {
                identical: {
                    field: 'confirmPassword',
                    message: 'Confirm your password type same password please'
                }
            }
        },
        confirmPassword: {
            validators: {
                identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
                }
            }
         },
			
            
            }
        })
		
 	
       
});

</script>