<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<html>
<table id="table_id" class="display">
	<thead>
		<tr>
<?php
	$table = $_GET['table'];
	include("connection.php");
			$sql = "SELECT * from $table";
			$results = mysqli_query($conn,$sql) or die(mysqli_error());
			$columns = mysqli_num_fields($results);
			for($i = 0; $i < mysqli_num_fields($results); $i++) {
			    $field_info = mysqli_fetch_field($results);
			    //echo "<th>{$field_info->name}</th>";
			    $fields[$i] = $field_info->name;
?>
     	<th><?php echo $fields[$i]; ?></th>  
<?php } ?>
</tr>
</thead>
<tbody>	
<?php
			while($row = mysqli_fetch_assoc($results)) {
?>
			<tr>
<?php
			    for($i=0;$i<$columns;$i++) 
			    {
?>
				<td><?php echo $row[$fields[$i]]; ?></td>
<?php	
			    }
?>
			</tr>
<?php
	}				
?>
</tbody></table>
<script type="text/javascript" charset="utf-8">

    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</html>