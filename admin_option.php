<?php
	$option = $_GET['option'];
	include('admin_class.php');
	include('connection.php');
	//session_start();
	include 'navbar.php';
	if($option == "Display Data")
	{
?>
<h3><center>Choose Table</center></h3>
<div class="container">
<ul class="collection">
<?php
		$admin = new Admin_Management;
		$dbname = "student_management_system";
		include('connection.php');
		$sql = "SHOW TABLES FROM $dbname";
		$result = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_row($result)) {
?>
<li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="admin_display.php?table=<?php echo $row[0]; ?>">
      		<h6><?php echo $row[0]; ?></h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
<?php
		}
		echo '</ul></div>';
		
	}
	else if($option == "Edit Data")
	{

	}
	else if($option == "Send Mail")
	{
?>
<div class="container">
<ul class="collection">

<li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="send_mail.php?sem=1">
      		<h6>Semester 1</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

	<li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="send_mail.php?sem=2">
      		<h6>Semester 2</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="send_mail.php?sem=3">
      		<h6>Semester 3</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="send_mail.php?sem=4">
      		<h6>Semester 4</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="send_mail.php?sem=5">
      		<h6>Semester 5</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="send_mail.php?sem=6">
      		<h6>Semester 6</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="send_mail.php?sem=7">
      		<h6>Semester 7</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="send_mail.php?sem=8">
      		<h6>Semester 8</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
</ul></div>
<?php
	}
?>