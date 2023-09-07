<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Maintenance</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        function btn1(){
            alert("Successfully Added!")
        }
    </script>
    <style>
        table, th, td {
  border: 1px solid black;
}
th {
    background-color:#FF5959;
    text-align:center;
}
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 17px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: yellow;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
img {
  border-radius:50%;
}
    </style>
</head>
<body>
<center><div style="background-color:black; width:60%; align-content:center;"><center><h3 style="color:yellow; text-align:center;">College Maintenance</h3></center></div></center>
<br>
<center><img width=140 src="data:image/jpeg;base64,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"></center>
<br><form action="college_add.php" align=center method="post">
<label style="color:black; font-size:large;">College Code:</label><input type="text" name="collegecode" placeholder="College Code" required>
            <br>
            <br>
			<label style="color:black; font-size:large;">College Description:</label><input style="width:30%; align:right;" type="text" name="collegedescription" placeholder="College Description" required>
            <br>
<br>
<input type="submit" value="add" onclick="btn1()"> <input type="reset" value="cancel">
</form>
<br>
<br>
<div>
		<table style="color:BLACK; background-color:WHITE;" border="5" align=center width="50%">
			<thead>
				<th align=center>College Code</th>
				<th align=center>College Description</th>
				<th align=center>Actions</th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `collegemanaging`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td align=center><?php echo $row['collegecode']; ?></td>
							<td align=center><?php echo $row['collegedescription']; ?></td>
							<td align=center>
								<a href="edit.php?id=<?php echo $row['userid']; ?>"><button style="background-color:lightgreen;" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span>
        </button></a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>"> <button style="background-color:red;" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span> 
        </button></a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
    <div class="sidenav">
  <a href="http://localhost:3606/School_Enrollment/dashboard.php">Dashboard</a>
  <a href="http://localhost:3606/School_Enrollment/viewlist_enrolled.php">Enrollment List</a>
  <a href="http://localhost:3606/School_Enrollment/year.php">Academic Year</a>
  <a style="color:#49FF00;" href="http://localhost:3606/School_Enrollment/college.php">College Maintenance</a>
 <a href="http://localhost:3606/School_Enrollment/classroom.php">Classroom</a>

</body>
</html>