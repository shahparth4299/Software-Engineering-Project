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
<?php }
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Address</th>  
                         <th>City</th>  
       <th>Postal Code</th>
       <th>Country</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["CustomerName"].'</td>  
                         <td>'.$row["Address"].'</td>  
                         <td>'.$row["City"].'</td>  
       <td>'.$row["PostalCode"].'</td>  
       <td>'.$row["Country"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>