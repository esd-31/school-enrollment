<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `collegemanaging` where userid='$id'");
	header('location:college.php');
?>