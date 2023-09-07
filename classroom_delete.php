<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `classroom` where userid='$id'");
	header('location:classroom.php');
?>