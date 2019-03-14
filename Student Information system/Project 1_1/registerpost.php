<?php
require_once('db.php');

$username = $_POST['username'];
$user_email = $_POST['email'];
$user_password = md5($_POST['password']);
$father = $_POST['father'];
$mother = $_POST['mother'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$peraddress = $_POST['peraddress'];
$preaddress = $_POST['preaddress'];
$contactno = $_POST['contactno'];
$subject = $_POST['subject'];


$query_string1 ="SELECT COUNT(*) as validity FROM student_registration WHERE name='$username' AND email='$user_email' AND password='$user_password'";
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
      $query_string2 = "INSERT INTO student_registration(name, email, password, father, mother, dob, gender, peraddress, preaddress, contactno, subject) VALUES ('$username','$user_email','$user_password','$father','$mother','$dob','$gender','$peraddress','$preaddress','$contactno','$subject')";
      mysqli_query($db_connection, $query_string2);
      $id = mysqli_insert_id($db_connection);
      $newfilename = $id.'.'.$extension;
      $newpicturelocation = 'picture/'.$newfilename;
      move_uploaded_file($uploaded_image['tmp_name'], $newpicturelocation);
      $query_forpicture = "UPDATE student_registration SET profile_photo = '$newfilename' WHERE id = $id";
      mysqli_query($db_connection, $query_forpicture);
      echo "Start your admission ";


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
  $query_string2 = "INSERT INTO student_registration(name, email, password, father, mother, dob, gender, peraddress, preaddress, contactno, subject) VALUES ('$username','$user_email','$user_password','$father','$mother','$dob','$gender','$peraddress','$preaddress','$contactno','$subject')";

  mysqli_query($db_connection, $query_string2);
  echo "Start your admission ";

}
}


?>
