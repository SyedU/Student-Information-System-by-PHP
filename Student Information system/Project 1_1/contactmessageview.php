<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login'])){
header('location: adminlogin.php');
}
$query_string ="SELECT * FROM contact_message";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>View all Message
    <a href="deleteall.php" class="btn btn-danger">Delete All</a>
    <a href="markasreadall.php" class="btn btn-info">Mark All as Read</a>
    <hr>
  </h3>
  <table class="table table-bordered">
    <thead>
      <td>Sl. No.</td>
      <td>Guest_Name</td>
      <td>Guest_Email</td>
      <td>Guest_Message</td>
      <td>Action</td>
    </thead>
    <?php
    $counter = 1;
    foreach ($db_return as $contact_message){

    ?>
    <tr>
    <?php
    if($contact_message['status'] == 1){
    ?>
    <style="background-color:#b2beb5";>
    <?php
    }
    ?>

      <td><?=$counter?></td>
      <td><?=$contact_message['guest_name']?></td>
      <td><?=$contact_message['guest_email']?></td>
      <td><?=$contact_message['guest_message']?></td>
      <td>
        <?php
        if($contact_message['status'] == 1){
        ?>
        <a href="markasread.php?id=<?=$contact_message['id']?>" class="btn btn-info">Mark as Read</a>
        <?php
        }
        ?>
        <a href="deletemessage.php?id=<?=$contact_message['id']?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php
    $counter++;
    }
    ?>
  </table>
</div>

<?php
 require_once('includes/footer.php');
?>
