<?php
	include('classroom_conn.php');
 
	header('location:classroom.php');
 	$room=$_POST['room'];
	


 
	mysqli_query($conn,"insert into `classroom` (room) values ('$room')");

?>