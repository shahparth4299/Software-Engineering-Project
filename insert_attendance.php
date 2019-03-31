<?php
	session_start();
	include 'navbar.php';
	include('connection.php');
	$d = $_POST['d1'];
	$sem = $_POST['sem'];
	$subject = $_POST['subject'];
	echo "<h1><center>".$subject."</center></h1>";
?>
<div class="container">
	<div class="row">
	<div class="col s6 m6 l6">
<table style="float: left;" class="striped">
<?php
	echo "<th>PRESENT LIST</th>";
	if(!empty($_POST['present'])) { 
		$checked_count = count($_POST['present']); 
		foreach($_POST['present'] as $selected) { 
			echo "<tr><td>".$selected ."</td></tr>";
			$sql = "SELECT * FROM student WHERE rollno = $selected";
			$results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			if($results->num_rows > 0)
			{
				while($row = $results->fetch_assoc())
				{
					$student_name = $row['st_name'];
					$sql = "INSERT INTO attendance VALUES($selected,'$student_name','$subject','$d',1,$sem)";
					$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
				}
			}
		}
		echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
		echo '<script>
  swal("Good job!", "Attendance Taken Successfully!", "success");
  </script>';
	}
?>
</table>
</div>
<div class="col m6 s6 l6">
<table style="float:right;" class="striped">
<?php
	echo "<th>ABSENT LIST</th>";
	if(!empty($_POST['absent'])) { 
		$checked_count = count($_POST['absent']); 
		foreach($_POST['absent'] as $selected) { 
			echo "<tr><td>".$selected ."</td></tr>";
			$sql = "SELECT * FROM student WHERE rollno = $selected";
			$results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			if($results->num_rows > 0)
			{
				while($row = $results->fetch_assoc())
				{
					$student_name = $row['st_name'];
					$sql = "INSERT INTO attendance VALUES($selected,'$student_name','$subject','$d',0,$sem)";
					$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
				}
			} 
		}
	}
	//header('location:faculty_login.php');
?>
</table>
</div></div></div>