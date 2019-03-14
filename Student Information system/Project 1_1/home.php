<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student information System</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <li><a href="student_personal.php">Student Profile</a></li>
                    <li><a href="register.php">Registration</a></li>
                    <li><a href="login.php">Admission</a></li>
                    <li><a href="student_personal.php">Result</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    </ul><hr>

                </div>
            </div>
        </div>
    </section>

    <!--end home part-->

    <!-- start big footer part-->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                  <br>
                  <br>
                    <h3><strong>Contact Us</strong></h3>
                    <p><i>Don't Shy To drpo Us A Mail!!</i></p>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-">
                    <p><i>Quick Contact</i></p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> PHONE : +880111111111</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> ADDRESS : Institute of XYZ <br /> House XXX, Rd No. YY, Dhaka XYZ
                    </p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL : email@admin.com</p>
                </div>
                <div class="history-item col-lg-8 col-sm-6 col-md-">
                  <form action="contactmessagepost.php" method="post">
                    <div class="row">
                        <div class="form-group col-sm-6 col-md-">
                            <input class="form-control" type="text" placeholder="Name" name="guest_name">
                        </div>
                        <div class="form-group col-sm-6 col-md-">
                            <input class="form-control" type="email" placeholder="Email" name="guest_email">
                        </div>
                    </div>
                    <?php
                    if(isset($_SESSION['messagesent'])){
                    ?>
                    <div class="alert alert-success" role="alert">
                    <strong>Well done!</strong> You have successfully sent this message.
                    </div>
                    <?php
                    }
                    unset($_SESSION['messagesent']);
                    ?>

                    <textarea class="form-group form-control" name="guest_message" id="" cols="30" rows="5" placeholder="Text"></textarea>
                    <form class="form-inline2 my-2 my-lg-0">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
                    </form>
                  </form>
                  <br>
                  <br>
                </div>
            </div>
        </div>
    </section>
    <!-- end big footer part-->
    <!-- start footer part-->
    <section id="small-footer">
        <div class="container">
            <div class="row">
                <div class="footer-inner text-center col-lg-12 m-auto col-sm-6">
                    <p><a href=""><i class="fab fa-facebook-f"></i></a></p>
                    <p><a href=""><i class="fab fa-twitter"></i></a></p>
                    <p><a href=""><i class="fab fa-google"></i></a></p>
                    <p><a href=""><i class="fab fa-linkedin-in"></i></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer part-->




    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
