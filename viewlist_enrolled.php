<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Enrolled Lists</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
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
th {
  background-color:#F76E11;
}
    </style>
</head>
<body>
  <br><br><br><br><br>
<center><table style="color:black; background-color:white;" border="1" align=center width="70%">
			<thead>
        <center><div style="background-color:green; width:70%;"><h3 align=center; style="color:yellow;">Enrollment_List:</h3></div></center>
        <center><img width=100 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6QTESaLQXNJDpokdt6XZd3CmvIevt1VKmGQ&usqp=CAU"></center>
        <br><th style="text-align:center;">First Name</th>
                <th style="text-align:center;">Last Name</th>
                <th style="text-align:center;">Email</th>
                <th style="text-align:center;">Gender</th>
                <th style="text-align:center;">Religion</th>
                <th style="text-align:center;">Age</th>
                <th style="text-align:center;">Year</th>
                <th style="text-align:center;">Course</th>
                <th style="text-align:center;">Down Payment</th>
                <th style="text-align:center;">Action</th>
				
                
				
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `enrollmentlists`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td align=center><?php echo $row['firstname']; ?></td>
                            <td align=center><?php echo $row['lastname']; ?></td>
                            <td align=center><?php echo $row['email']; ?></td>
                            <td align=center><?php echo $row['gender']; ?></td>
                            <td align=center><?php echo $row['religion']; ?></td>
                            <td align=center><?php echo $row['age']; ?></td>
                            <td align=center><?php echo $row['year']; ?></td>
                            <td align=center><?php echo $row['course']; ?></td>
                            <td align=center><?php echo $row['downpayment']; ?></td>
                          
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
		</table></center>

<br><br><br><br><br><br>
</div>
<div class="sidenav">
  <a href="http://localhost:3606/School_Enrollment/dashboard.php">Dashboard</a>
  <a style="color:#49FF00;" href="http://localhost:3606/School_Enrollment/viewlist_enrolled.php">Enrollment List</a>
  <a href="http://localhost:3606/School_Enrollment/year.php">Academic Year</a>
  <a href="http://localhost:3606/School_Enrollment/college.php">College Maintenance</a>
 <a href="http://localhost:3606/School_Enrollment/classroom.php">Classroom Maintenance</a>

</div>
</body>
</html>