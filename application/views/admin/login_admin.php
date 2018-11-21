
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SecureOne|Sign In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/animate/animate.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/util.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css'?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100" >
			
				<form method="POST" class="login100-form validate-form"  id="login-form" action="<?php echo base_url().'/login/auth'?>">
					<span class="login100-form-title p-b-34"  >
						Account Login
					</span>
						
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						
						<input type="text" name="username" id="your_name" class="input100" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						
						<input type="password"  name="password" id="your_pass" class="input100"  placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn" >
						
						<input type="submit" name="signin" id="signin" class="login100-form-btn" value="Sign in"/>

					</div>

<!-- forgot -->
				
					<div class="w-full text-center p-t-27 p-b-239">
						
					</div>

					<div class="w-full text-center">
						<a href="<?php echo base_url('login'); ?>" class="txt3">
							Sign Up
						</a>
					</div>
				
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url().'assets/images/bg-02.jpg'?>');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url().'vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'vendor/bootstrap/js/popper.js'?>"></script>
	<script src="<?php echo base_url().'vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'vendor/select2/select2.min.js'?>"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'vendor/daterangepicker/moment.min.js'?>"></script>
	<script src="<?php echo base_url().'vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
