<?php
	include('year_conn.php');
 
	header('location:year.php');
 	$year=$_POST['year'];
	


 
	mysqli_query($conn,"insert into `academic_year` (year) values ('$year')");

?>