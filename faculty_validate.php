<?php
	include 'add.html';
	include("faculty_class.php");
	$fname = $_POST['fname'];
	$psw = $_POST['password'];
	$table = "faculty";
	$faculty = new Faculty_Management;
	$sub = $faculty->login($table,$fname,$psw);
	$i=0;
	include('navbar.php');
?>
<h3><center>Choose Subject For Taking Attendance</center></h3>
<div class="container">
<ul class="collection">
<?php	
	foreach($sub as $row) 
	{
?>
	<li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="take_attendance.php?sub=<?php echo $sub[$i]; ?>">
      		<h6><?php echo $sub[$i]; ?></h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
</form>
<?php
		$i++;
}
?>
</ul></div></form>

    