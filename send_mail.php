<style>
.but{background-color: #f44336;
	border: none;
	color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    width: 200px;
    text-align: center;
    cursor: pointer;
}
</style>
<?php
	session_start();
	include 'navbar.php';
	$sem = $_GET['sem'];
	$table = "student";
	include("connection.php");
	$sql = "SELECT * FROM $table WHERE sem_id = $sem";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
?>
<form action="mail.php" method="POST">
<table class="striped">
	<tr>	
		<th>Rollno</th>
		<th>Name</th>
		<th>Attendance</th>
		<th>Status</th>
		<th>Mail Option</th>
	</tr>
<?php
	while($row = $result->fetch_assoc())
	{
		//echo $row['email'];
		echo "<tr>";
		$rollno = $row['rollno'];
		$name = $row['st_name'];
		echo "<td>".$rollno."</td>";
		echo "<td>".$name."</td>";
		$sql = "SELECT * FROM attendance WHERE rollno = $rollno";
		$results = mysqli_query($conn,$sql) or die(mysqli_error());
		$present=0;
		$absent=0;
		$total=0;
		while($row2 = $results->fetch_assoc())
		{
			//echo $row['status'];
			if($row2['status'] == 1)
			{
				$present++;
			}
			else
			{
				$absent++;
			}
			$total++;
		}
		//echo $absent;
		$percentage = ($present*100)/$total;
		echo "<td>".$percentage."</td>";
		if($percentage < 75)
		{
			echo "<td><font color='RED'>DEFAULTER</font></td>";
			echo "<td><input type='submit' class='but' name='email_id' value='".$row['email']."'></td>";
		}
		else
		{
			echo "<td><font color='GREEN'>NOT DEFAULTER</font></td>";
		}
		echo "</tr>";
	}		
?>
</table></form>