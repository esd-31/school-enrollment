<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
  function mybtn() {
    alert("Successfully new student data's saved!")
  }
</script>
<style>
        /* Fixed sidenav, full height */
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

button {
    float:right;
}
.wrapper {
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  gap: 10px;
  grid-auto-rows: 100px;
  grid-template-areas:
    "a a a a b b b b"
    "a a a a b b b b";
  
  align-items: start;
}
.item1 {
  grid-area: a;
}
.item2 {
  grid-area: b;
}
.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}
img { 
    border-radius:50%;
}
label{
    cursor: pointer;
    display: inline-block;
    padding: 3px 6px;
    text-align: right;
    width: 150px;
    vertical-align: top;
    color:white;
}
    </style>
</head>
<body bgcolor=#E5E3C9>
    <div style="background-color:black; padding:1%;"><h1 align=center style="color:#F5EEDC;">Dashboard Overview:</h1> <center><i style="font-size:24px; color:white;" class="fa">&#xf073;</i> <font face=impact size=5 color=white>March 20, 2022</font></center> <a href="http://localhost:3606/School_Enrollment/login.php"><button style="color:white; background-color:maroon; font-size:large;" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-off"></span> Out 
        </button></a><br><br></div>
        <div class="row">
  <div style="margin:50px;" class="column">
    <img src="img1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div><br>
  <div style="margin:40px; background-color:#7897AB; width:35%; text-align:center;" class="column"><br><br>
  <center><h3 style="color:blue; text-shadow:3px 3px 3px white;">Managing Dashboard:</h3></center><br>
  <center><i style="font-size:24px; color:black;" class="fa">&#xf073;</i> <a style="color:black;" href="">View Academic year</a></center>
  <br><center><i style='font-size:24px; color:black;' class='fas'>&#xf2c2;</i> <a style="color:black;" href="">View College Maintenance</a></center><br><span style="color:black; font-size:23px;" class="glyphicon">&#xe003;</span> <a style="color:black;" href="">View Enrolled Students</a>
<br> <br><button style="background-color:green;" type="button" class="btn btn-info btn-lg"  class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-check"></span>Inserting New Student</button>
<br><br><br><br></div>
<!-- Modal --> 
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div style="background-color:#CAF0F8;" class="modal-header">
        <button style="color:#DA1212;" type="button" class="close" data-dismiss="modal">&times;</button>
        <center><b><h4 style="color:#357C3C;" class="modal-title">Insert Register New Student Enrollees</h4></b></center>
      </div>
      <div class="modal-body">
      <form action="add.php" method="POST">
      <label style="color:black; font-family:impact; font-size:medium;">First Name:</label> <input style="font-face:impact; font-size:medium; padding:1px;" type="text" name="firstname" placeholder="First Name" required>
      <br><br>
<label style="color:black; font-family:impact; font-size:medium;">Last Name:</label> <input style="font-face:impact; font-size:medium; padding:1px;" type="text" name="lastname" placeholder="Last Name" required>
<br><br>
<label style="color:black; font-family:impact; font-size:medium;">Email:</label> <input style="font-face:impact; font-size:medium; padding:1px;" type="text" name="email" placeholder="Email" required><br><br>
<label style="color:black; font-family:impact; font-size:medium;">Gender:</label> <input style="font-face:impact; font-size:medium; padding:1px;" type="text" name="gender" placeholder="Gender" required><br><br>
<label style="color:black; font-family:impact; font-size:medium;">Religion:</label> <input style="font-face:impact; font-size:medium; padding:1px;" type="text" name="religion" placeholder="Religion" required><br><br>
<label style="color:black; font-family:impact; font-size:medium;">Age:</label> <input style="font-face:impact; font-size:medium; padding:1px;" type="text" name="age" placeholder="Age" required><br><br>
<label style="color:black; font-family:impact; font-size:medium;">Year:</label> <input style="font-face:impact; font-size:medium; padding:1px;" type="text" name="year" placeholder="year" required><br><br>
<label style="color:black; font-family:impact; font-size:medium;">Course:</label> <input style="font-face:impact; font-size:medium; padding:1px;" type="text" name="course" placeholder="Course" required><br><br>
<label style="color:black; font-family:impact; font-size:medium;">Downpayment:</label> <input style="font-face:impact; font-size:medium; padding:1px;" type="text" name="downpayment" placeholder="Down Payment" required><br><br>
<center><input type="reset" value="Cancel"> <input type="submit" onclick="mybtn()" value="Save"></center></form>
      </div>
      <div class="modal-footer">
   
      </div>

    </div>

  </div>
  
</div>

</div>
<br><br><br>
</div>
<div class="sidenav">
  <img style="margin:20px;" width=120 src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.6435-9/118379782_3180296438674617_4408934382548208802_n.jpg?stp=dst-jpg_p206x206&_nc_cat=104&ccb=1-5&_nc_sid=da31f3&_nc_eui2=AeFYedc_gplYPGbLH7eW0RMqWMKEabFMoK5YwoRpsUygrt5wWTG4ZywLlVGjWdkpByb5xGJtmlP4a8jaXWI1i7pJ&_nc_ohc=jaguxX5J0iIAX8klQsf&_nc_ht=scontent.fcrk1-4.fna&oh=00_AT_8TDnhX5DCBPETW-OmG58AfGJ92w2p3E2owsQ8-1R90A&oe=62514D6B">
  <h4 style="color:white;">Administrator: Eduard</h4>
  <iframe style="margin:20px;" src="https://free.timeanddate.com/clock/i87fcc5b/n145/tcf90/pc9f0/ftbi/th2" frameborder="0" width="140" height="25"></iframe>
  <a style="color:#49FF00;" href="http://localhost:3606/School_Enrollment/dashboard.php">Dashboard</a>
  <a href="http://localhost:3606/School_Enrollment/viewlist_enrolled.php">Enrollment List</a>
  <a href="http://localhost:3606/School_Enrollment/year.php">Academic Year</a>
  <a href="http://localhost:3606/School_Enrollment/college.php">College Maintenance</a>
 <a href="http://localhost:3606/School_Enrollment/classroom.php">Classroom</a>
</div>
    
</body>
</html>