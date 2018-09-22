<?php
  include("bootstrap.html");
?>
<!DOCTYPE html>
<html>
<title>Attendance Manager</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #212121;
   color: white;
   text-align: center;
}
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b><center>Attendance Manager</center></b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="#" class="w3-bar-item w3-button">Student</a>
    <a href="#" class="w3-bar-item w3-button">Faculty</a>
    <a href="#" class="w3-bar-item w3-button">Admin</a>
    <a href="#" class="w3-bar-item w3-button">Subjects</a>
    <a href="#" class="w3-bar-item w3-button">Assign Faculty</a>
  </div>
</nav>

<!-- Top menu on small screens -->

<!-- Overlay effect when opening sidebar on small screens -->

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Username</p>
    <p class="w3-right">
      <i class="fa fa-user">Profile</i>
    </p>
  </header>

  <div class="footer">Attendance Management System</div>
</body>
</html>
