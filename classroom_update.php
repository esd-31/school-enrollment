<?php
	include('classroom_conn.php');
	$id=$_GET['id'];
 
	$room=$_POST['room'];

 
	mysqli_query($year_conn,"update `classroom` set room='$room', where userid='$id'");
	header('location:classroom.php');
?>