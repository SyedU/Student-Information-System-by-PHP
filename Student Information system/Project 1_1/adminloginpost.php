<?php
session_start();
require_once('includes/header.php');

require_once('db.php');


$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_password = md5($_POST['password']);

$query_string ="SELECT COUNT(*) as validity, email, name, profile_photo FROM users_login WHERE email='$user_email' AND password='$user_password'";

$db_return = mysqli_query($db_connection, $query_string);

$after_assoc = mysqli_fetch_assoc($db_return);


if($after_assoc['validity'] == 1){
$_SESSION['login'] = 'Yes';
$_SESSION['useremail'] = $after_assoc['email'];
$_SESSION['username'] = $after_assoc['name'];
$_SESSION['profile_photo'] = $after_assoc['profile_photo'];


  header('location: adminstudentprofile.php');

}

else{
echo "Sorry ! Check Your login ";
}

?>

<?php
require_once('includes/footer.php');
?>
