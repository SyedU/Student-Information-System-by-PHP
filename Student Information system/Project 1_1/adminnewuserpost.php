<?php
session_start();
require_once('includes/header.php');
require_once('db.php');

$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_password = md5($_POST['password']);

$query_string1 ="SELECT COUNT(*) as validity, name, email FROM users_login WHERE name='$user_name' AND email='$user_email' AND password='$user_password'";

$db_return = mysqli_query($db_connection, $query_string1);
$after_assoc = mysqli_fetch_assoc($db_return);

if($after_assoc['validity'] > 0){

echo "Your input alraedy there or Use another data";
}
else{

if (!empty($_FILES['profile_photo']['name'])){
  $uploaded_image = $_FILES['profile_photo'];
  $afterexplode = explode('.', $uploaded_image['name']);
  $extension = $afterexplode[1];
  $allowed_format = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
  if(in_array($extension, $allowed_format)){
    if($uploaded_image['size'] <= 5000000){
      $query_string2 = "INSERT INTO users_login(name, email, password) VALUES ('$user_name','$user_email','$user_password')";
      mysqli_query($db_connection, $query_string2);
      $id = mysqli_insert_id($db_connection);
      $newfilename = $id.'.'.$extension;
      $newpicturelocation = 'picture/'.$newfilename;
      move_uploaded_file($uploaded_image['tmp_name'], $newpicturelocation);
      $query_forpicture = "UPDATE users_login SET profile_photo = '$newfilename' WHERE id = $id";
      mysqli_query($db_connection, $query_forpicture);



    }
    else{
      echo "You cant upload a file more than 5 MB";
    }
  }
  else{
    echo "This format is not allowed";
  }

}

else{
  $query_string2 = "INSERT INTO users_login(name, email, password) VALUES ('$user_name','$user_email','$user_password')";

  mysqli_query($db_connection, $query_string2);
  echo "Successfully User Created ";

}
}



?>

<?php
require_once('includes/footer.php');
?>
