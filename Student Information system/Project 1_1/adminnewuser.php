<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login'])){
header('location: adminlogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="dashboard_assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="dashboard_assets/css/datepicker3.css" rel="stylesheet">
	<link href="dashboard_assets/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Add New User</div>
				<div class="panel-body">
					<form role="form" action="adminnewuserpost.php" method="post" enctype="multipart/form-data">
						<fieldset>
              <div class="form-group">
								<input class="form-control" placeholder="Put New User Name" name="name" type="text" autofocus="">
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>

							<div class="form-group">
								<input class="form-control" name="profile_photo" type="file">
							</div>

							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg">
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="dashboard_assets/js/jquery-1.11.1.min.js"></script>
<script src="dashboard_assets/js/bootstrap.min.js"></script>
</body>
</html>



<?php
require_once('includes/footer.php');
?>
