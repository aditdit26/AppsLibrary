<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Apss</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url().'assets/register/images/icons/favicon.ico';?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/register/vendor/bootstrap/css/bootstrap.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/register/fonts/font-awesome-4.7.0/css/font-awesome.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/register/vendor/animate/animate.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/register/vendor/css-hamburgers/hamburgers.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/register/vendor/select2/select2.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/register/css/util.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/register/css/main.css';?>">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url().'assets/img/logoudinus.png';?>" alt="IMG">
				</div>

				<form action="<?php echo base_url(); ?>Login/login" method="post">
					<span class="login100-form-title">
						Login Apps Library
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="nip" class="input100" type="text" name="nim" placeholder="NIM" maxlength=""="18">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-badge" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" value="Masuk" class="login100-form-btn">
						</input>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Belum punya akun?
						</span>
						<a class="txt2" href="<?php echo base_url().'register';?>">
							Masuk disini!
						</a>
					</div>


				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/register/vendor/jquery/jquery-3.2.1.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/register/vendor/bootstrap/js/popper.js';?>"></script>
	<script src="<?php echo base_url().'assets/register/vendor/bootstrap/js/bootstrap.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/register/vendor/select2/select2.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/register/vendor/tilt/tilt.jquery.min.js';?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/register/js/main.js';?>"></script>

</body>
</html>
