<?php
	session_start();
	class Student_Management
	{
		function login($table,$rollno,$psw)
		{
			include("connection.php");
			$sql = "SELECT * from $table WHERE rollno = $rollno AND password='".$psw."'";
			$results = mysqli_query($conn,$sql) or die(mysqli_error());
			if($results->num_rows > 0)
			{
				while($row = $results->fetch_assoc())
				{
					$_SESSION['username'] = $rollno;
					//echo "Login Successfull";
					$sem = $row['sem_id'];
					$sql = "SELECT * FROM subjects WHERE sem_id = $sem";
					$results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
					if($results->num_rows > 0)
					{
						while($row = $results->fetch_assoc())
						{
							$data[] = $row;
						}
						return $data;
					}
				}
			}
			else
			{
				header('location:student_login.php');	
			}
		}
	}
?>