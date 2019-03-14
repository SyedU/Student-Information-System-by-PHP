<?php
session_start();

require_once('db.php');

$user_roll = $_POST['roll'];
$user_code = $_POST['code'];

$query_string2 ="SELECT COUNT(*) as validity FROM student_profile WHERE roll='$user_roll' AND code='$user_code'";

$db_return3 = mysqli_query($db_connection, $query_string2);

$after_assoc1 = mysqli_fetch_assoc($db_return3);


if($after_assoc1['validity'] == 1){
$_SESSION['login_ok'] = 'Yes';


$query_string ="SELECT * FROM student_registration WHERE roll='$user_roll' AND code='$user_code'";
$db_return2 = mysqli_query($db_connection, $query_string);

foreach ($db_return2 as $db_return_single){

?>

<div class="col-md-4">
<div class="service-media"><img src="picture/<?=$db_return_single['profile_photo']?>" alt=" "></div>
</div>
<?php
}
?>

<?php
}
else{
echo "Sorry ! Check Your login input";
}
?>




<?php
require_once('db.php');

$user_roll = $_POST['roll'];
$user_code = $_POST['code'];


$query_string ="SELECT COUNT(*) as validity FROM student_profile WHERE roll='$user_roll' AND code='$user_code'";

$db_return = mysqli_query($db_connection, $query_string);

$after_assoc = mysqli_fetch_assoc($db_return);


if($after_assoc['validity'] == 1){
$_SESSION['login_ok'] = 'Yes';

$query_string1 ="SELECT * FROM student_registration WHERE roll='$user_roll' AND code='$user_code'";
$db_return1 = mysqli_query($db_connection, $query_string1);

?>

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
        <div class="offset-4 col-md-6">
          <h3>Student Profile Database</h3>
          <table class="table table-bordered">
            <thead>
              <tr>Sl. No.<span>:</span></tr>
            </thead>
            <?php
            $counter = 1;
            foreach ($db_return1 as $student){
            ?>

            <?php
            if($student['name'] == 1){
            ?>
            <style="background-color:#b2beb5">
            <?php
            }
            ?>
              <tr><span></span><?=$counter?></tr>
              <?php
            $counter++;
            }
            ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Full Name<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['name']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>


          <table class="table table-bordered">
          <thead>
            <tr>E-mail<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['email']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Father's Name<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['father']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Mothers Name<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['mother']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Date Of Birth<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['dob']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Gender<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['gender']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Permanent Address<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['peraddress']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Present Address<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['preaddress']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Contact No.<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['contactno']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Subject<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['subject']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Education<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['education']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table

          <table class="table table-bordered">
          <thead>
            <tr>Session<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>


          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['session']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>


          <table class="table table-bordered">
          <thead>
            <tr>Year of Passed<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['yop']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Result<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['result']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Bank info<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['bank']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Roll No.<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['roll']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Code<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['code']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Regularity<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['regularity']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>

          <table class="table table-bordered">
          <thead>
            <tr>Exam Result<span>:</span></tr>
          </thead>
          <?php
          $counter = 1;
          foreach ($db_return1 as $student){
          ?>

          <?php
          if($student['name'] == 1){
          ?>
          <style="background-color:#b2beb5">
          <?php
          }
          ?>
            <tr><span></span><?=$student['examresult']?></tr>
            <?php
          $counter++;
          }
          ?>
          </table>
        </div>
<?php
}
else{
echo "Sorry ! Check Your login input";
}
?>




<br>
<br>
<br>
<br>
<form method="post" action="logout.php">
<input type="submit" name="submit" value="Logout" class="btn btn-primary btn-block btn-lg">
</form>

</div>
</div>



  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
