<?php
	session_start();
	include 'navbar.php';
	include 'add.html';
?>
<style>
	.button {
	    background-color: #4CAF50; 
	    border: none;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    margin: 4px 2px;
	    cursor: pointer;
		}
</style>
<script>
	 $( document ).ready(function() {
       $('.datepicker').pickadate({
          format: 'yyyy/mm/dd',
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
</script>
<body>
<?php
	$subject = $_GET['sub'];
	$table = "subjects";
	include 'connection.php';
	echo "<center><h3>".$subject."</h3></center>";
?>
<form method='POST' action='insert_attendance.php'>
		<input type="text" class="datepicker" name="d1" value="Select Date">
<?php
	$sql = "SELECT * FROM $table WHERE sub_name = '$subject'";
	$results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			if($results->num_rows > 0)
			{
				while($row = $results->fetch_assoc())
				{
					$sem = $row['sem_id'];
					//echo "<h1>sdvsd".$sem."</h1>";
					$sql = "SELECT * FROM student WHERE sem_id = $sem";	
					$results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
					echo "<table class='striped'><tr><th>RollNo</th><th>Name</th><th>PRESENT</th><th>ABSENT</th></tr>";
					if($results->num_rows > 0)
					{
						while($row = $results->fetch_assoc())
						{
							echo "<tr><td>".$row['rollno']."</td>";
							echo "<td>".$row['st_name']."</td>";
echo '<td><p>
      <label>
        <input type="checkbox" name="present[]" value="'.$row['rollno'].'"/>
        <span></span>
      </label>
    </p></td>';

echo '<td><p>
      <label>
        <input type="checkbox" name="absent[]" value="'.$row['rollno'].'"/>
        <span></span>
      </label>
    </p></td>';
						}
						echo "</table><input type='hidden' name='sem' value='".$sem."'><br>";
						echo "<input type='hidden' name='subject' value='".$subject."'><br>";
					}
				}
			}
?>
<center>
<button class="button">Take Attendace</button>
</center>
</form>


