<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login'])){
header('location: login.php');
}

$query_string ="SELECT * FROM student_registration";
$db_return = mysqli_query($db_connection, $query_string);

?>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Student Profile Database</h3>
          <table class="table table-bordered">
            <thead>
              <td>Sl. No.</td>
              <td>Full Name</td>
              <td>Email</td>
              <td>Father's Name</td>
              <td>Mother's Name</td>
              <td>Date Of Birth</td>
              <td>Gender</td>
              <td>Permanent Address</td>
              <td>Present Address</td>
              <td>Contact No.</td>
              <td>Department</td>
              <td>Educational Qualification</td>
              <td>Session</td>
              <td>Year Of Passed</td>
              <td>Result</td>
              <td>Bank info</td>
              <td>Roll No.</td>
              <td>Code</td>
              <td>Regularity</td>
              <td>Exam Result</td>

            </thead>
            <?php
            $counter = 1;
            foreach ($db_return as $student){

            ?>
            <tr>
            <?php
            if($student['roll'] == 1){
            ?>
            style="background-color:#b2beb5">
            <?php
            }
            ?>

              <td><?=$counter?></td>
              <td><?=$student['name']?></td>
              <td><?=$student['email']?></td>
              <td><?=$student['father']?></td>
              <td><?=$student['mother']?></td>
              <td><?=$student['dob']?></td>
              <td><?=$student['gender']?></td>
              <td><?=$student['peraddress']?></td>
              <td><?=$student['preaddress']?></td>
              <td><?=$student['contactno']?></td>
              <td><?=$student['subject']?></td>
              <td><?=$student['education']?></td>
              <td><?=$student['session']?></td>
              <td><?=$student['yop']?></td>
              <td><?=$student['result']?></td>
              <td><?=$student['bank']?></td>
              <td><?=$student['roll']?></td>
              <td><?=$student['code']?></td>
              <td><?=$student['regularity']?></td>
              <td><?=$student['examresult']?></td>



            </tr>
            <?php
            $counter++;
            }
            ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
require_once('includes/footer.php');
?>
