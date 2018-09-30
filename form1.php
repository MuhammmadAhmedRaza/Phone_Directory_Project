<?php session_start();?>
<html>
		<head>
			<title>Bootstrap Contact Form</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600">
			<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
			<link rel="stylesheet" type="text/css" href="Style2.css">
		</head>
	<body>
		<div class="container">
			<div class="row">
<?php
if(isset($_SESSION['success']))
{
	echo '<div class="alert alert-success"><strong>Success!</strong>'.$_SESSION['success'].'</div>';
	$_SESSION['success'] = null;
}
else if(isset($_SESSION['fail']))
{
	echo '<div class="alert alert-danger"><strong>Danger!</strong>'.$_SESSION['fail'].'</div>';
	$_SESSION['fail'] = null;

}
?>
				<div class="col-md-3">	
				</div>
				<div class="col-md-6">
					<h2 class="text-center">Phone Repositry</h2>
					<?php echo $_SESSION['user_name']; ?>
					<form method="post" action="Registration.php">	

							
					<input type="hidden" class="form-control" name="userid" value="<?php echo $_SESSION['user_id']; ?>">
						<label class="label control-label">Company Name</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelop"></span></span>
							<input type="text" class="form-control" name="company" placeholder="Mobile Company name">
						</div>
						<label class="label control-label">Contact</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="number" class="form-control" name="contactnumber" placeholder="Contact Number">
						</div>
						<div class="btn btn-default"><input type="submit" name="addcontact" value="Save"></div>
			
						</div>
						<div class="col-md-3">
						</div>	
					</form>
				</div>	
			</div>		

		</div>
	</body>		
</html>		