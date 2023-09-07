<?php
	include('conn.php');
 
	header('location:viewlist_enrolled.php');
 	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $religion=$_POST['religion'];
    $age=$_POST['age'];
    $year=$_POST['year'];
    $course=$_POST['course'];
    $downpayment=$_POST['downpayment'];


 
	mysqli_query($conn,"insert into `enrollmentlists` (firstname,lastname,email,gender,religion,age,year,course,downpayment) values ('$firstname','$lastname','$email','$gender','$religion','$age','$year','$course','$downpayment')");

?>