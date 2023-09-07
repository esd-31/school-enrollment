<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `enrollmentlists` where userid='$id'");
	header('location:viewlist_enrolled.php');
?>