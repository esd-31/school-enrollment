<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `academic_year` where userid='$id'");
	header('location:year.php');
?>