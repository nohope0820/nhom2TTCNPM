<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/backend/layout1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/backend/layout1/css/login.css">
	<link rel="stylesheet" type="text/css" href="../assets/backend/layout1/css/font-awesome.min.css">
</head>
<body>
	<div class="div1">
	<div class="content">
	<div class="logo text-center"><img src="../assets/backend/layout1/img/logo.jpg" alt="Klorofil Logo"></div>
	<hr>
<div class="container" style="margin-top:20px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div>
				<div class="name-content">Login to your account</div>
				<div class="panel-body">
					<form method="post" action="index.php?controller=login&action=login">
					<div class="row">
						<div class="col-md-9"><input type="email" name="email" placeholder="Email" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:0px;">
						<div class="col-md-9"><input type="password" name="password" placeholder="password" required class="form-control"></div>
					</div>

					<div class="checkbox"><input type="checkbox"><span>Remember me</span></div>

					<div class="row" style="margin-top:5px; margin-left: -130px;">
						<div class="col-md-2"></div>
						<div class="col-md-9"><input type="submit" value="Login" class="btn btn-primary"> &nbsp <input type="reset" value="Reset" class="btn btn-danger"></div>
					</div>
					<div class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="div2">
	<img src="../assets/backend/layout1/img/login-bg.jpg">
	<div class="right">
					
					<div class="content-text">
						<h1 class="heading">FLASH_STORE</h1>
						<p>by NO_HOPE_13/8</p>
						</div>
					</div>
</div>
</body>
</html>