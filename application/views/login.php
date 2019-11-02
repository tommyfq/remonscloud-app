<style>
	.panel-login {
		border-color: #ccc;
		-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
		-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
		box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	}
	.panel-login>.panel-heading {
		background-color: rgba(255, 255, 255, 0.2);
		border-color: #fff;
		text-align:center;
	}
	.panel-login>.panel-heading a{
		text-decoration: none;
		color: #666;
		font-weight: bold;
		font-size: 15px;
		-webkit-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		transition: all 0.1s linear;
	}
	.panel-login>.panel-heading a.active{
		color: #029f5b;
		font-size: 18px;
	}
	.panel-login>.panel-heading hr{
		margin-top: 10px;
		margin-bottom: 0px;
		clear: both;
		border: 0;
		height: 1px;
		background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
		background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
		background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
		background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	}
	.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
		height: 45px;
		border: 1px solid #ddd;
		font-size: 16px;
		-webkit-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		transition: all 0.1s linear;
	}
	.panel-login input:hover,
	.panel-login input:focus {
		outline:none;
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		box-shadow: none;
		border-color: #ccc;
	}
	.forgot-password {
		text-decoration: underline;
		color: #888;
	}
	.forgot-password:hover,
	.forgot-password:focus {
		text-decoration: underline;
		color: #666;
	}
</style>

<!-- CSS for form Login / Register -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/css/bootstrap.min.css" id="bootstrap-css" />
<script src="<?php echo base_url(); ?>assets/Login/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- CSS for background slide show -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/css/demo.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/Login/js/modernizr.custom.86080.js"></script>

<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/remons-icon.png">


<body id="page">
	<ul class="cb-slideshow">
	  <li><span>Image 01</span></li>
	  <li><span>Image 02</span></li>
	  <li><span>Image 03</span></li>
	  <li><span>Image 04</span></li>
	  <li><span>Image 05</span></li>
	  <li><span>Image 06</span></li>
	</ul>

	<div class="container" style="margin-top: 10%;">
    <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="<?php echo base_url(); ?>Login/doLogin" method="post" role="form" style="display: block;" autocomplete="off">
									<div class="form-group">
										<label>Username :</label>
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required autocomplete="off">
									</div>
									<div class="form-group">
										<label>Password :</label>
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required autocomplete="off">
									</div>
									<div align="left">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-primary" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div align="center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>									
								</form>
								
								<form id="register-form" action="Register" method="post" role="form" style="display: none;">

									<?php
	                  $error_msg=$this->session->flashdata('error_msg');
	                  
	                  if($error_msg){
	                    echo $error_msg;
	                  }
                  ?>

									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<label>Nama Depan :</label>
												<input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan" value="" required>
											</div>
											<div class="col-md-6">
												<label>Nama Belakang :</label>
												<input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang" value="" required>
											</div>
										</div>
									</div>
						
									<div class="form-group">
										<label>Jenis Kelamin :</label>
										<div class="row">
											<div class="radio">
												<label><input type="radio" name="jenis_kelamin" checked value="L">Laki-Laki</label>
												<label><input type="radio" name="jenis_kelamin" value="P">Perempuan</label> 
									    </div>
										</div>
									</div>

									<div class="form-group">
										<label>Tanggal Lahir :</label>
										<input type="date" name="tgl_lahir" class="form-control" placeholder="" required>
									</div>

									<div class="form-group">
										<label>Email :</label>
										<input type="email" name="email" class="form-control" placeholder="Email Address" value="" required>
									</div>

									<div class="form-group">
										<label>Nomor Telepon :</label>
										<input type="number" name="phone" class="form-control" placeholder="Nomor Telepon" required>
									</div>

									<div class="form-group">
										<label>Alamat :</label>
										<textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
									</div>

									<div class="form-group">
										<label>Username :</label>
										<input type="text" name="usernameReg" class="form-control" placeholder="Username" value="" required>
									</div>
									
									<div class="form-group">
										<label>Password :</label>
										<input type="password" name="passwordReg" id="passwordReg" class="form-control" placeholder="Password" required>
									</div>

									<div class="form-group">
										<label>Confirm Password :</label>
										<input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
									</div>

									<div class="form-group">
										<span class="error" style="color:red"></span><br />
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-success" value="Register Now">
											</div>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-2">
								<button class="btn btn-danger"><i class="fa fa-chevron-left" aria-hidden="true"></i> <a href="Home" style="color: white;">Back</a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
	$(function() {
    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
});
</script>

<script>
		var allowsubmit = false;
		$(function(){
			//on keypress 
			$('#confirm_password').keyup(function(e){
				//get values 
				var passwordReg = $('#passwordReg').val();
				var confirm_password = $(this).val();
				
				//check the strings
				if(passwordReg == confirm_password){
					//if both are same remove the error and allow to submit
					$('.error').text('');
					allowsubmit = true;
				}else{
					//if not matching show error and not allow to submit
					$('.error').text('Password not matching');
					allowsubmit = false;
				}
			});
			
			//jquery form submit
			$('#register-form').submit(function(){
			
				var passwordReg = $('#passwordReg').val();
				var confirm_password = $('#confirm_password').val();
 
				//just to make sure once again during submit
				//if both are true then only allow submit
				if(passwordReg == confirm_password){
					allowsubmit = true;
				}
				if(allowsubmit){
					return true;
				}else{
					return false;
				}
			});
		});
	</script>