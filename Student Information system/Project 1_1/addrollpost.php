<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login'])){
header('location: adminlogin.php');
}

$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_roll = $_POST['roll'];
$user_code = $_POST['code'];

$query_string1 = "INSERT INTO student_profile(name, email, roll, code) VALUES ('$user_name','$user_email','$user_roll','$user_code')";
$query_string2 = "UPDATE student_registration SET roll='$user_roll', code='$user_code' WHERE name='$user_name' AND email='$user_email'";
$db_return1 = mysqli_query($db_connection, $query_string1);
$db_return2 = mysqli_query($db_connection, $query_string2);


echo "Successfully Roll and Code Created ";

?>

<?php
require_once('includes/footer.php');
?>
