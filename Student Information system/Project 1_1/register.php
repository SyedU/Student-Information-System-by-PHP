<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Institute of XYZ</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

	<div class="row">
		<div class="offset-4 col-lg-6">
			<br>
			<br>

				<div class="abcd"><h2>Registration Form</h2></div>
				<br>
				<br>

					<form role="form" action="registerpost.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<label>Students name	:</label>
								<input class="form-control" placeholder="Students Name" name="username" type="text" autofocus="">
							</div>
							<br>
							<br>
							<div class="form-group">
								<label>Fathers name</label>
								<input class="form-control" placeholder="Fathers Name" name="father" type="text" autofocus="">
							</div>
							<br>
							<br>
							<div class="form-group">
								<label>Mothers name</label>
								<input class="form-control" placeholder="Mothers Name" name="mother" type="text" autofocus="">
							</div>
							<br>
							<br>
							<div class="form-group">
							<label>Date of Birth</label>
							<input type="birthdate" name="dob" class="form-control" placeholder="DD/MM/YYYY">
							</div>
							<br>
							<br>
							<div class="form-group">
							<label>Choose Gender</label>
							<select class="form-control" name="gender">
								 <option>Choose Gender</option>
								 <option>Male</option>
								 <option>Female</option>
								 <option>Others</option>
						 </select>
						 </div>
						 <br>
						 <br>
						 <div class="form-group">
						 <label>Permanent Address</label>
						 <input type="text" name="peraddress" class="form-control" placeholder="Permanent Address">
						 </div>
						 <br>
						 <br>
						 <div class="form-group">
						 <label>Present Address</label>
						 <input type="text" name="preaddress" class="form-control" placeholder="Present Address">
					 		</div>
							<br>
							<br>
							<div class="form-group">
							<label>Contact No</label>
							<input type="number" name="contactno" class="form-control" placeholder="8801xxxxxxxxx">
							</div>
							<br>
							<br>
							<div class="form-group">
							<label>Subjects to Study</label>
							<select class="form-control" name="subject">
									<option>Subjects</option>
									<option>Computer</option>
									<option>Civil</option>
									<option>Electrical</option>
									<option>Telecommunication</option>
							</select>
							</div>
							<br>
							<br>
							<div class="form-group">
								<label>Enter Your Email</label>
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<br>
							<br>
							<div class="form-group">
								<label>Enter Your Password</label>
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<br>
							<br>
							<div class="form-group">
								<label>Attach Profile Photo</label>
								<input class="form-control" name="profile_photo" type="file">
							</div>
							<br>
							<br>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<br>
							<br>
							<input type="submit" name="submit" value="Register" class="btn btn-primary">
					</form>


		</div>
	</div>
</div>


	    <script src="js/jquery-1.12.4.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/custom.js"></script>
	</body>

	</html>
