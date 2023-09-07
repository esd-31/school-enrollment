<?php
	include('conn.php');
 
	header('location:college.php');
 	$collegecode=$_POST['collegecode'];
	$collegedescription=$_POST['collegedescription'];


 
	mysqli_query($conn,"insert into `collegemanaging` (collegecode,collegedescription) values ('$collegecode','$collegedescription')");

?>