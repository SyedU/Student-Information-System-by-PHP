<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student information System</title>
    <link rel="icon" href="images/logo1.png">
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="student_personal.php">Student Profile</a></li>
                        <li><a href="register.php">Registration</a></li>
                        <li><a href="login.php">Admission</a></li>
                        <li><a href="result.php">Results</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    <hr>
                    <h4>Student Personal Information Displayed Here</h4>
                </div>
                <form class="form-inline m-auto" action="studentpersonalpost.php" method="post">
                        <div class="form-group mb-2">
                            <label for="name">Enter Roll No:</label>
                            <input type="number" class="form-control" name="roll" placeholder="Enter Your Roll">
                            <label for="name">Enter Your Code</label>
                            <input type="number" class="form-control" name="code" placeholder="Enter Your Code">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
            </div>
        </div>
    </section>

    <!--end home part-->










    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
