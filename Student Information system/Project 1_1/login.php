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

  <!--start home part-->
  <section id="home">
      <div class="container">
          <div class="row student">
              <div class="nave-form col-lg-12">

                  <ul>
                  <li><a href="home.php">Home</a></li>
                  </ul><hr>
              </div>
          </div>
      </div>
  </section>

  <!--end home part-->

    <!--start login part-->
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="main col-md-4 m-auto">

                      <form action="loginpost.php" method="post">

                        <h2>Login for Your Admission</h2>
                        <br>
                        <br>
                        <div class="form-group">
                        <h6>Email</h6>
                        <input class="form-control" type="email" name="email" placeholder=" Enter Your Email ">
                        </div>
                        <hr>
                        <div class="form-group">
                        <h6>Password</h6>
                        <input class="form-control" type="password" name="password" placeholder=" Enter Your Password ">
                        </div>
                        <hr>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                        <a href="" class="for-pass">Forgot Password?</a>
                      </form>

                </div>
            </div>
        </div>
    </section>

    <!--end login part-->


    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
