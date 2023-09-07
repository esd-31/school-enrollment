<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classroom Maintenance</title>
    <script>
        function mybtn(){
            alert("Classroom Added Successfully!")
        }
    </script>
    <style>
        th {
            background-color:#086E7D;

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
    </style>
</head>

<center><div style="background-color:green; width:60%; align-content:center;"><center><h3 style="color:yellow; text-align:center;">Classroom Maintenance</h3></center></div></center>
<br>
<center><img width=130 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRryw-ZRvE5b4H6Dvrwbj5uE7GL-VBULD1csg&usqp=CAU"></center>
<br>
<form action="classroom_add.php" method="post" align=center>
<b><font face=impact size=3>Classroom</font></b> <input type="text" placeholder="Classroom" name="room" required>
<br><br>
<input type="submit" value="add" onclick="mybtn()"> <input type="reset" value="cancel">

</form>
<br><br>
<div>
		<table style="color:BLACK; background-color:WHITE;" border="5" align=center width="30%">
			<thead>
				<th>Classroom</th>
				
                
				
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `classroom`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td align=center style="color:black;"><?php echo $row['room']; ?></td>
							
							
						
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
  <a href="http://localhost:3606/School_Enrollment/college.php">College Maintenance</a>
 <a style="color:#49FF00;" href="">Classroom</a>
</div>
</body>
</html>