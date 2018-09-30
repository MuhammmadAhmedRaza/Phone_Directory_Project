
<?php session_start();?>
<!DOCTYPE html>
<html>
		<head>
			<title>Bootstrap Login and Signup Form</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600">
			<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
			<link rel="stylesheet" type="text/css" href="Style.css">
		</head>
	<body>
		<div class="container">
			<div class="row">
				<?php
if(isset($_SESSION['success']))
{
	echo '<div class="alert alert-success"><strong>Success!</strong>'.$_SESSION['success'].'</div>';
	$_SESSION['success'] = null;
	session_unset();
session_destroy();
}
else if(isset($_SESSION['fail']))
{
	echo '<div class="alert alert-danger"><strong>Danger!</strong>'.$_SESSION['fail'].'</div>';
	$_SESSION['fail'] = null;
	session_unset();
session_destroy();
}
?>
				<div class="col-md-5">
					<form method="post" action="Registration.php">
					<h1 class="text-center">LOGIN</h1>
					<label class="label control-label">User name or E-mail </label>
					
					<div class="input-group">

						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" name="mail" placeholder="E-mail">
					</div>
					<label class="label control-label">Password</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="Password" class="form-control" name="password" placeholder="Password">
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<input type="checkbox"><small>Remember me</small>
						</div>
						<div class="col-md-6">
							<a href="#"><p class="text-right">Forget Password</p></a>
						</div>
					</div>
					<a href="#"><div class="btn btn-default"><input type="submit" name="signin" value="Sign In"></div></a>
					<p class="text-center">Not a member yet? <a href="#">SIGN UP</p></a>
				</div>	
			</form>
				<div class="col-md-2">
				</div>	

				<div class="col-md-5">
					<h2 class="text-center">SIGN UP</h2>
					<form method="post" action="Registration.php">
					<label class="label control-label">Name</label>
					<div class="input-group">
						
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" name="name" placeholder="Name">
					</div>
					<label class="label control-label">E-mail</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-envelop"></span></span>
						<input type="email" class="form-control" name="mail" placeholder="E-mail">
					</div>
					<label class="label control-label">Contact</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input type="number" class="form-control" name="contact" placeholder="Contact">
					</div>
					<label class="label control-label">Password</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="Password" class="form-control" name="password" placeholder="Password">
					</div>
					<label class="label control-label">Confirm Password</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="Password" class="form-control" name="confirm_password" placeholder="Re-type Password">
					</div>
					<div class="btn btn-default"><input type="submit" name="signup" value="Sign Up"></div>
				</div>
			</div>
			</form>>
		</div>
	</body>
</html>