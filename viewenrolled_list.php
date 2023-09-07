<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Enrolled Students</title>

    <style>
        th {
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <center><h1>Enrolled Student Lists:</h1></center>
    <br><br><br><br><br>
<div style="background-color:#E9E5D6;"><br><br><br><br><br>
    <table style="color:black; background-color:white;" border="3" align=center width="80%">
			<thead>
        <center><h3 style="color:red;">EnrollStudent_Lists:</h3></center>
				<th style="text-align:center;">First Name</th>
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
					$query=mysqli_query($conn,"select * from `viewenrolled_stud`");
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
		</table>

        <br><br><br><br><br
</div><br><br><br><br><br><br>
</body>
</html>