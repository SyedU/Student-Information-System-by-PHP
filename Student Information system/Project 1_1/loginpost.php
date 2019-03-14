<?php
session_start();

require_once('db.php');

$user_email = $_POST['email'];
$user_password = md5($_POST['password']);

$query_string ="SELECT COUNT(*) as validity FROM student_registration WHERE email='$user_email' AND password='$user_password'";


$db_return = mysqli_query($db_connection, $query_string);


$after_assoc = mysqli_fetch_assoc($db_return);


if($after_assoc['validity'] == 1){
$_SESSION['login_ok'] = 'Yes';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Institute of XYZ</title>
    <link rel="icon" href="images/Logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/venobox.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

</head>

<body>
  <!--start heading part-->
  <section id="head">
      <div class="container">
          <div class="row">
              <div class="head-text  col-lg-12  text-center m-auto">

              </div>
          </div>
      </div>
  </section>
  <!--end heading part-->
  <!--start home part-->
  <section id="home">
      <div class="container">
          <div class="row student">
              <div class="nave-form col-lg-12">

                  <ul>
                      <li><a href="index.php">Home</a></li>
                      
                      <li><a href="logout.php">Logout</a></li>
                  </ul>
                  <hr>

                  <h4>Welcome To Admission</h4>
              </div>
          </div>
      </div>
  </section>

  <!--end home part-->
  <!--start admission part-->
<section id="form-text">
  <div class="container">
      <div class="row">
          <div class="form-heder col-lg-12 text-center m-auto">

          </div>
      </div>
  </div>
</section>
<section id="form">
  <div class="container">
      <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
              <div id="ui">
                  <h2>Admission Form</h2>
                  <form class="form-group" action="admissionpost.php" method="post">
                      <div class="row">
                          <div class="col-lg-6">
                              <label>Your Name:</label>
                              <input type="text" name="username" class="form-control" placeholder="Caps Lock English">
                          </div>

                          <div class="col-lg-6">
                              <label>Your Email:</label>
                              <input type="hidden" name="email" value="<?php echo $_POST['email'];?>" class="form-control" placeholder="Caps Lock English">
                          </div>


                      </div>
                      <div class="row">

                          <div class="col-lg-6">
                              <label>Educational Qualification</label>
                              <select class="form-control" name="education">
                                 <option>Choose Your Educational Qualification</option>
                                 <option>S.S.C</option>
                                 <option>H.S.C</option>
                                 <option>B.Sc</option>
                             </select>
                          </div>
                      </div>
                      <label>Year of Passing</label>
                      <input type="number" name="yop" class="form-control" placeholder="Year Of Passing">
                      <label>Result</label>
                      <input type="text" name="result" class="form-control" placeholder="Your Result">
                      <label>Bank information</label>
                      <input type="number" name="bank" class="form-control" placeholder="Enter your Scroll Number">

                        <div class="row">
                          <div class="col-lg-6">
                              <label>Session</label>
                              <select class="form-control" name="session">
                                  <option>2018-2019</option>
                                  <option>2019-2020</option>

                              </select>
                          </div>
                      </div>
                      <br>
                      <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg">
                  </form>
              </div>
          </div>
          <div class="col-lg-3"></div>
      </div>
  </div>
</section>

<!--end admission part-->

    <div class="back-to-top">
        <a href=""><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    </div>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
<?php
}
else{
echo "Sorry ! Check Your login input";
}
?>
