<?php
	session_start();
	include 'navbar.php';
	include 'add.html';
?>
<html>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<body>
<div class="card-panel cyan"><center>
         <h6 class="center-align">
         	<span class="white-text">
         		Attendance Record
         	</span>
         </h6>
         </center>
</div>

<table id="table_id" class="display">
    <thead>
        <tr>
        	<th>No.</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
<?php
	$subject = $_GET['sub'];
	$table = "attendance";
	$rollno = $_SESSION['username'];
	include("connection.php");
			$sql = "SELECT * from $table WHERE rollno = $rollno AND subject = '".$subject."'";
			$results = mysqli_query($conn,$sql) or die(mysqli_error());
			if($results->num_rows > 0)
			{
				$total = 0;
				$present = 0;
				$absent = 0;
				while($row = $results->fetch_assoc())
				{
					echo "<tr><td>".++$total."</td>";
					echo "<td>".$row['date']."</td>";
					if($row['status'] == 1)
					{
						$status = "PRESENT";
						$present++;
					}
					else
					{
						$status = "ABSENT";
						$absent++;
					}
					echo "<td>".$status."</td></tr>";
				}
			}

?>
</tbody>
</table>
</body>
<div class="card-panel cyan"><center>
         <h6 class="center-align">
         	<span class="white-text">
         		Your Attendance In Pie Chart
         	</span>
         </h6>
         </center>
</div>

<center><div id="piechart"></div></center>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Attendance Record'],
  ['PRESENT', <?php echo $present ?>],
  ['ABSENT', <?php echo $absent ?> ]
]);
  var options = {'title':'Attendance Record', 'width':550, 'height':400};
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</body>
</html>