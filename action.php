<?php
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
  $sql = " INSERT INTO student (firstname, lastname, course, marks, email, numbers, gender, hobbies, comments )
          VALUES ('$firstname', '$lastname','$course','$marks', '$email', '$numbers', '$gender', '$hobbies', '$comments')";
  $result = mysqli_query($conn, $sql);
      if ($result==1) {
          echo"<script>alert('Your record has been saved Sucessfully');</script>";
      } else {
          echo"<script>alert('Record Not Saved');</script>";
      }
      header("location: http://localhost/php/record.php");
      mysqli_close($conn);
?>