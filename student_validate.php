<?php
	include 'add.html';
	include("student_class.php");
	$rollno = $_POST['rollno'];
	//$_SESSION['rollno'] = $rollno;
	$psw = $_POST['password'];
	$table = "student";
	$student = new Student_Management;
	$data = $student->login($table,$rollno,$psw);
	include('navbar.php');
?>
<h3><center>Choose Subject For Tracking Attendance</center></h3>
<div class="container">
<ul class="collection">
<?php
	foreach ($data as $row) {
		//echo $row['sub_name'];
?>
<li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="display_attendance.php?sub=<?php echo $row['sub_name']; ?>">
      		<h6><?php echo $row['sub_name']; ?></h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>


<?php
	}
?>