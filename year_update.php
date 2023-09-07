<?php
	include('year_conn.php');
	$id=$_GET['id'];
 
	$year=$_POST['year'];

 
	mysqli_query($year_conn,"update `academic_year` set year='$year', where userid='$id'");
	header('location:year.php');
?>