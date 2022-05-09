
<?php
  $id = $_POST['id'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $course = $_POST['course'];
  $marks = $_POST['marks'];
  $email = $_POST['email'];
  $numbers = $_POST['numbers'];
  $gender = $_POST['gender'];
  $hobbies = $_POST['hobbies'];
  $comments = $_POST['comments'];
  
  $conn = mysqli_connect("localhost","root","seasia@123","records") or die ("connection failed");
  $sql = "UPDATE student SET firstname = '{$firstname}',lastname = '{$lastname}', course = '$course', marks = '$marks', 
  email = '{$email}',numbers ='{$numbers}',gender ='{$gender}',hobbies ='{$hobbies}',comments ='{$comments}' 
  WHERE id = {$id}";

  $result = mysqli_query($conn, $sql);
      if ($result==1) {
          echo"<script>alert('Your record has been saved Sucessfully');</script>";
      } else {
          echo"<script>alert('Record Not Saved');</script>";
      }
      header("location: http://localhost/php/record.php");
      mysqli_close($conn);
?>