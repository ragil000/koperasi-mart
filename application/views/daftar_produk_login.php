<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url('login/')?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('login/')?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
        <div class="container-login100" style="background-image: url('<?=base_url('login/')?>images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <?php
                    if(isset($result['status'])){
                ?>
                <div class="alert alert-danger">
                    <strong>Gagal !</strong> <?=$result['message']?>
                </div>
                <?php
                    }
                ?>
				<form class="login100-form validate-form" method="POST" action="<?=base_url('daftar-produk/login')?>">
					<span class="login100-form-title p-b-49">
						Masuk
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username tidak boleh kosong">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="tb_anggota_username" placeholder="username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password tidak boleh kosong">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="tb_anggota_password" placeholder="password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="container-login100-form-btn m-t-lg">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Masuk
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=base_url('login/')?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('login/')?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('login/')?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url('login/')?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('login/')?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('login/')?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url('login/')?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('login/')?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('login/')?>js/main.js"></script>

</body>
</html>