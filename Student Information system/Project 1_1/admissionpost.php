<?php
session_start();
require_once('db.php');

$email = $_POST['email'];
$username = $_POST['username'];
$education = $_POST['education'];
$yop = $_POST['yop'];
$result = $_POST['result'];
$bank = $_POST['bank'];
$session = $_POST['session'];


$query_string1 ="SELECT COUNT(*) as validity FROM student_registration WHERE name='$username' AND email='$email'";
$db_return = mysqli_query($db_connection, $query_string1);
$after_assoc = mysqli_fetch_assoc($db_return);
if($after_assoc['validity'] == 1){

  $query_string2 = "UPDATE student_registration SET education='$education' WHERE name='$username'";
  $query_string3 = "UPDATE student_registration SET yop='$yop' WHERE name='$username'";
  $query_string4 = "UPDATE student_registration SET result='$result' WHERE name='$username'";
  $query_string5 = "UPDATE student_registration SET bank='$bank' WHERE name='$username'";
  $query_string6 = "UPDATE student_registration SET session='$session' WHERE name='$username'";

  mysqli_query($db_connection, $query_string2);
  mysqli_query($db_connection, $query_string3);
  mysqli_query($db_connection, $query_string4);
  mysqli_query($db_connection, $query_string5);
  mysqli_query($db_connection, $query_string6);
  echo "Welcome ! Updated Your Data or Completed your admission ! Collect Your Roll No and Code from your Email where Applicable";

}
else{
echo "Your input not in Student Registration";
}
?>
  <form method="post" action="logout.php">
  <input type="submit" name="submit" value="Logout" class="btn btn-primary btn-block btn-lg">
  </form>
