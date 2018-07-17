<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register SiPP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/register/images/icons/favicon.ico');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/register/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/register/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/register/vendor/animate/animate.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/register/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/register/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/register/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/register/css/main.css');?>">
	<script src='https://www.google.com/recaptcha/api.js'></script>
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url().'assets/img/logoudinus.png';?>" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?php echo base_url('register/daftar');?>" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title">
						Registrasi
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="nama" class="input100" type="text" name="nim" placeholder="NIM">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-badge" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="nama" class="input100" type="text" name="nama" placeholder="Nama">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="nama" class="input100" type="text" name="notlp" placeholder="No Telepon">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="nama" class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<p style="color: #ffffff;">Upload Foto Profile</p>
						<input style="color: #ffffff" type="file" name="foto">
						<span class="focus-input100"></span>
						<!-- <span class="symbol-input100">
							<i class="fa fa-camera" aria-hidden="true"></i>
						</span> -->
					</div>

					<div class="wrap-input100 validate-input">
		      <div class="g-recaptcha" data-sitekey="6LeAuEkUAAAAAGURqY2lnQI0RAfg8IgDeQDngpeR"></div>
		      </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Daftar
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Sudah punya akun?
						</span>
						<a class="txt2" href="<?php echo base_url('login');?>">
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
	<script src="<?php echo base_url().'js/main.js';?>"></script>

</body>
</html>
