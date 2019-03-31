<?php
	session_start();
	class Admin_Management
	{
		function login($table,$aname,$psw)
		{
			include("connection.php");
			$sql = "SELECT * from $table WHERE A_name = '".$aname."' AND A_password='".$psw."'";
			$results = mysqli_query($conn,$sql) or die(mysqli_error());
			if($results->num_rows > 0)
			{
				while($row = $results->fetch_assoc())
				{
					$_SESSION['username'] = $aname;
					//echo "Login Successfull";
				}
			}
			else
			{
				header('location:admin_login.php');	
			}
		}
	}
?>