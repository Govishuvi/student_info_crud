<?php

include "connect.php";

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $percent = $_POST['percentage'];

  $qry = "insert into `student` (name,age,gender,percentage) values('$name','$age','$gender','$percent')";
  $result = mysqli_query($con,$qry);
  if($result){
      // echo "Data inserted Successfully";
      header("location:index.php");
  }else{
      die(mysqli_error($con));
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2|Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
  <form id="contact" method="post">
  <div class="title">
    <h3>Enter Your details</h3>
    </div>
      <input placeholder="Enter your name" name="name" type="text" required>
      <input placeholder="Enter your Age" name="age" type="number" required>
      <input placeholder="Enter your Gender" name="gender" type="text" required>
      <input placeholder="Enter your Percentage" name="percentage" type="number" required>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>

  </form>
 
</body>
</html>