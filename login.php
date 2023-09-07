<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  gap: 10px;
  grid-auto-rows: 100px;
  grid-template-areas:
    "a a a a b b b b"
    "a a a a b b b b"
    "c c c c d d d d"
    "c c c c d d d d";
  align-items: start;
}
.item1 {
  grid-area: a;
}
.item2 {
  grid-area: b;
}
h3 {
    color:#5800FF;
    font-family:arial;
}
p {
  font-family:arial;
}
    </style>
</head>
<body>
<div class="wrapper">
    <div style="background-color:#74959A; height:300%;" class="item1"><img style="margin:20%;" width=330 src="data:image/jpeg;base64,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"><b><font style="margin: -60%; text-shadow:3px 3px 3px gray;" face=arial size=4 color=black>Welcome, Administrator</font></b></div>
    <div style="margin:15%; background-color:#E5E3C9;" class="item2"> <form class="form1" method="post" align=center action="<?php echo $_SERVER['PHP_SELF'];?>"><br><br>
<h2 style="color:#03045E;">School Enrollment Management System</h2><br>
<center><input style="font-size:large; padding:3px; width:50%;" type="text" name="uname" placeholder="Username" required></center><br>
<center><input style="font-size:large; padding:3px; width:50%;"  type="password" name="pass" placeholder="Password" required></center><br>
<center><input style="font-size:large; padding:2px; background-color:green; color:white; width:30%;" type="submit" value="LOGIN"></center>

</form><br><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['uname'];
    if (empty($name)) {
        echo '<p style="color:red;">Your Full Name is empty</p>';
    } else {
        
        echo "<center><b><h3>Welcome, Eduard Dueñas</h3></b></center>";  
        echo "<center><b><p>Successfully Login your account!</p></center>";  
        echo '<center><a href="http://localhost:3606/School_Enrollment/dashboard.php"><button style="background-color:dodgerblue; color:white;" type="button" class="btn btn-default btn-sm">
        <span class="glyphicon glyphicon-share-alt"></span> Go To Dashboard
      </button></a></center>';
       
    }
}
 ?><br><br><br></div>
</div> 
</body>
</html>