<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $religion=$_POST['religion'];
    $age=$_POST['age'];
    $year=$_POST['year'];
    $course=$_POST['course'];
    $downpayment=$_POST['downpayment'];
 
	mysqli_query($conn,"update `enrollmentlists` set firstname='$firstname', lastname='$lastname', email='$email', gender='$gender', religion='$religion', age='$age', year='$year', course='$course', downpayment='$downpayment' where userid='$id'");
	header('location:viewlist_enrolled.php');
?>