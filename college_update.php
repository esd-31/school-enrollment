<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$collegecode=$_POST['collegecode'];
	$collegedescription=$_POST['collegedescription'];
 
	mysqli_query($conn,"update `collegemanaging` set collegecode='$collegecode', collegedescription='$collegedescription' where userid='$id'");
	header('location:college.php');
?>