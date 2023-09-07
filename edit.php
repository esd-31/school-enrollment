<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `enrollmentlists` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<script>
    function btn1() {
        alert("Edit Successfully!")
    }
</script>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<style>
    .form1 {
        background-color:thistle;
        box-shadow 8px 8px 8px red;
            width: 25%;
            margin: auto;
  
  border: 3px solid gray;
  padding: 100px;
  background:url("http://3.bp.blogspot.com/-kAHMhdiWqlc/UAJogpfsctI/AAAAAAAAGR8/hswlVoKn0t0/s1600/6132_1_other_wallpapers_hd_wallpapers_funky_colorful.jpg");
} 
    }
</style>
</head>
<body bgcolor=black>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div style="background-color:maroon; padding:6px;">
	<center><h1 style="color:yellow; text-shadow:8px 8px 8px white;">Edit Records:</h1></center></div>
    <br>
    <br>
    <div>
	<form class="form1" align=center method="POST" action="update.php?id=<?php echo $id; ?>">
		<label style="color:black; font-size:large;">First Name:</label><input type="text" value="<?php echo $row['firsname']; ?>" name="firstname">
        <br>
        <br>
		<label style="color:black; font-size:large;">Last Name:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname">
        <br><br>
        <label style="color:black; font-size:large;">Email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
        <br>
        <br>
        <label style="color:black; font-size:large;">Gender:</label><input type="text" value="<?php echo $row['gender']; ?>" name="gender">
        <br><br>
        <label style="color:black; font-size:large;">Religion:</label><input type="text" value="<?php echo $row['religion']; ?>" name="religion">
        <br><br>
        <label style="color:black; font-size:large;">Age:</label><input type="text" value="<?php echo $row['age']; ?>" name="age">
        <br><br>
        <label style="color:black; font-size:large;">Year:</label><input type="text" value="<?php echo $row['year']; ?>" name="year">
        <br><br>
        <label style="color:black; font-size:large;">Course:</label><input type="text" value="<?php echo $row['course']; ?>" name="course">
                <label style="color:black; font-size:large;">Down Payment:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
                <br><br>
                <label style="color:black; font-size:large;">Selling Price Products:</label><input type="text" value="<?php echo $row['downpayment']; ?>" name="downpayment"><br>
		<input style="background-color:yellow; font-family:impact; font-size:large;" type="submit" name="submit" value="Edit" onclick="btn1()"> <a href="viewlist_enrolled.php"><button style="background-color:dodgerblue; font-family:impact; font-size:large;">Back</button></a>
	</form></div>
</body>
</html>