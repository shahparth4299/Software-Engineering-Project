<?php
	session_start();
	class Faculty_Management
	{
		function login($table,$fname,$psw)
		{
			include("connection.php");
			$sub = array();
			$subjects = array("sub1_name","sub2_name","sub3_name","sub4_name","sub5_name","sub6_name");
			$sql = "SELECT * from $table WHERE f_username = '".$fname."' AND f_password='".$psw."'";
			$results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			if($results->num_rows > 0)
			{
				$_SESSION['username'] = $fname;
				
				while($row = $results->fetch_assoc())
				{
					for($i=0;$i<6;$i++)
					{			
							if(strlen($row[$subjects[$i]])!=0)
							{
								$sub[$i] = $row[$subjects[$i]];
							}
					}
					return $sub;
				}
			}
			else
			{
				header('location:faculty_login.php');	
			}
		}	
	}
?>